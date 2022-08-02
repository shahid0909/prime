<?php

namespace App\Http\Controllers\AdmissionPromotion;

use App\Http\Controllers\Controller;
use App\Models\AdmissionPromotion\AdmissionPromotion;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Intervention\Image\ImageManagerStatic as Image;

class AdmissionPromotionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function admission_promotion()
    {

        $admission_promotion = AdmissionPromotion::all();

        return view('admin.admission_promotion.index',compact('admission_promotion'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.admission_promotion.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'a_title' => 'required',
            'image' => 'required',
            'status' => 'required',

        ],
            [
                'a_title.required' => 'Please Input Name ',
                'image.required' => 'Please input Start Date',
                'status.required' => 'Please Input Status',

            ]);

//        dd($request);


        if($request->hasFile('image')) {

            $image       = $request->file('image');
            $name = time().'.'.$image->getClientOriginalExtension();

            $image_resize = Image::make($image->getRealPath());
            $image_resize->resize(1200, 1200);
            $image_resize->save(public_path('image/admission_promotion/' .$name));
            $last_img ='image/admission_promotion/'.$name;

        }



        AdmissionPromotion::insert([
            'a_title' => $request->a_title,
            'image' => $last_img,
            'status' => $request->status,
            'created_at' => Carbon::now()
        ]);


        return redirect('/admin/admission_promotion/add')->with('status', 'Admission Promotion Creat successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $admission_promotion = AdmissionPromotion::find($id);

        return view('admin.admission_promotion.edit',compact('admission_promotion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'a_title' => 'required',
            'status' => 'required',

        ],
            [
                'a_title.required' => 'Please Input field ',
                'status.required' => 'Please Select Status',

            ]);

        $class_exam = AdmissionPromotion::find($id);

        $old_image = $class_exam->file;

        if($request->hasFile('image')) {

            if(!empty($old_image)) {
                unlink($old_image);
            }

            if($request->hasFile('image')) {

                $image       = $request->file('image');
                $name = time().'.'.$image->getClientOriginalExtension();

                $image_resize = Image::make($image->getRealPath());
                $image_resize->resize(1200, 1200);
                $image_resize->save(public_path('image/admission_promotion/' .$name));
                $last_img ='image/admission_promotion/'.$name;

            }

        }


        if(empty($request->image)){
            $last_img = $class_exam->image;
        }


        $class_exam->update([
            'a_title' => $request->a_title,
            'image' => $last_img,
            'status' => $request->status,
            'updated_at' => Carbon::now()
        ]);

        return redirect('/admin/admission_promotion')->with('status', 'Admission Promotion Update successfully');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $image = AdmissionPromotion::find($id);
        $old_image = $image->image;
        unlink($old_image);

        AdmissionPromotion::find($id)->delete();

        return redirect('/admin/admission_promotion')->with('status', 'Admission Promotion delete successfully');
    }
}
