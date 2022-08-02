<?php

namespace App\Http\Controllers\FormerViceChancellor;

use App\Http\Controllers\Controller;
use App\Models\FormerViceChancellor\FormerViceChancellor;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Intervention\Image\ImageManagerStatic as Image;

class FormerViceChancellorController extends Controller
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
    public function f_v_Chancellor()
    {
        $f_v_chancellor = FormerViceChancellor::all();

        return view('admin.f_v_chancellor.index',compact('f_v_chancellor'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.f_v_chancellor.add');
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
            'f_name' => 'required',
            's_date' => 'required',
            'e_date' => 'required',
            'status' => 'required',

        ],
            [
                'f_name.required' => 'Please Input Name ',
                's_date.required' => 'Please input Start Date',
                'e_date.required' => 'Please input End Date',
                'status.required' => 'Please Input Status',

            ]);


        if($request->hasFile('image')) {

            $image       = $request->file('image');
            $name = time().'.'.$image->getClientOriginalExtension();

            $image_resize = Image::make($image->getRealPath());
            $image_resize->resize(232, 290);
            $image_resize->save(public_path('image/f_v_chancellor/' .$name));
            $last_img ='image/f_v_chancellor/'.$name;

        }



        FormerViceChancellor::insert([
            'f_name' => $request->f_name,
            'image' => $last_img,
            's_date' => $request->s_date,
            'e_date' => $request->e_date,
            'status' => $request->status,
            'created_at' => Carbon::now()
        ]);


        return redirect('/admin/f_v_Chancellor/add')->with('status', 'Former Vice Chancellor Creat successfully');

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
        $chancellor = FormerViceChancellor::find($id);

        return view('admin.f_v_chancellor.edit',compact('chancellor'));
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
            'f_name' => 'required',
            's_date' => 'required',
            'e_date' => 'required',
            'status' => 'required',

        ],
        [
            'f_name.required' => 'Please Input field ',
            's_date.required' => 'Please select ',
            'e_date.required' => 'Please Input description',
            'status.required' => 'Please Select Status',

         ]);

        $class_exam = FormerViceChancellor::find($id);

        $old_image = $class_exam->file;

        if($request->hasFile('image')) {

            if(!empty($old_image)) {
                unlink($old_image);
            }

            if($request->hasFile('image')) {

                $image = $request->file('image');
                $name = time().'.'.$image->getClientOriginalExtension();

                $image_resize = Image::make($image->getRealPath());
                $image_resize->resize(232, 290);
                $image_resize->save(public_path('image/f_v_chancellor/' .$name));
                $last_img ='image/f_v_chancellor/'.$name;

            }

        }


        if(empty($request->image)){
            $last_img = $class_exam->image;
        }


        $class_exam->update([
            'f_name' => $request->f_name,
            'image' => $last_img,
            's_date' => $request->s_date,
            'e_date' => $request->e_date,
            'status' => $request->status,
            'updated_at' => Carbon::now()
        ]);

        return redirect('/admin/f_v_Chancellor')->with('status', 'Former Vice Chancellor Update successfully');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $image = FormerViceChancellor::find($id);
        $old_image = $image->image;
        unlink($old_image);

        FormerViceChancellor::find($id)->delete();

        return redirect('/admin/f_v_Chancellor')->with('status', 'Former Vice Chancellor delete successfully');
    }
}
