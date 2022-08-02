<?php

namespace App\Http\Controllers\Department;

use App\Http\Controllers\Controller;
use App\Models\Settings\Department;
use App\Models\Settings\Detp_slider;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class DeptSliderController extends Controller
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

    public function slider(){
        $slider = Detp_slider::all();
        return view('admin.department.slider',compact('slider'));
    }

    public function add_slider(){
        $department = Department::all();
        return view('admin.department.add_slider',compact('department'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'title' => 'required',
        ]);


        // $name_gen = hexdec(uniqid());
        // $img_ext = strtolower($brand_image->getClientOriginalExtension());
        // $img_name = $name_gen.'.'.$img_ext;
        // $up_location = 'image/brand/';
        // $last_img = $up_location.$img_name;
        // $brand_image->move($up_location,$img_name);


if($request->hasFile('image')) {

    $image       = $request->file('image');
    $name = time().'.'.$image->getClientOriginalExtension();

    $image_resize = Image::make($image->getRealPath());
    $image_resize->resize(1920, 820);
    $image_resize->save(public_path('image/department/slider/' .$name));
    $last_img ='image/department/slider/'.$name;

}



        Detp_slider::insert([
            'title' => $request->title,
            'image' => $last_img,
            'dept_id' => $request->dept_id,
            'created_at' => Carbon::now()
        ]);


        return redirect('/admin/add_slider')->with('status', 'Department Creat successfully');
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
        $department = Department::all();

        $slider = Detp_slider::find($id);
        $slider['departments']=Department::where('id',$slider->dept_id)->first();


//        $detp_name = DB::table('detp_sliders')
//            ->join('departments','detp_sliders.dept_id','=','departments.id')
//            ->select('departments.name','detp_sliders.title')->where('detp_sliders.id',$id)->get();
////            ->get();/
//    dd($slider);

        return view('admin.department.edit_slider',compact(['slider','department']));

//        return view('admin.department.edit_slider');
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
            'title' => 'required',
        ]);

        $dept_slider = Detp_slider::find($id);

        $old_image = $dept_slider->image;

        if($request->hasFile('image')) {

            if(!empty($old_image)) {
                unlink($old_image);
            }

            $image = $request->file('image');
            $name = time().'.'.$image->getClientOriginalExtension();
            $image_resize = Image::make($image->getRealPath());
            $image_resize->resize(1920, 820);
            $image_resize->save(public_path('image/department/slider/' .$name));
            $last_img ='image/department/slider/'.$name;

        }


        $dept_slider->update([
            'title' => $request->title,
            'image' => $last_img,
            'dept_id' => $request->dept_id,
//            'created_at' => Carbon::now()
        ]);


        return redirect('/admin/dept_slider')->with('status', 'Department Slider Update successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $image = Detp_slider::find($id);
        $old_image = $image->image;
        unlink($old_image);

        Detp_slider::find($id)->delete();

        return redirect('/admin/dept_slider')->with('status', 'Slider delete successfully');
    }
}
