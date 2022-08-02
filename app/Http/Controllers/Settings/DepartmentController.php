<?php

namespace App\Http\Controllers\Settings;

use App\Http\Controllers\Controller;
use App\Models\Settings\Department;
use App\Models\Settings\Faculty;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Intervention\Image\ImageManagerStatic as Image;

class DepartmentController extends Controller
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
        $department = Department::all();
        return view('admin.settings.department.department',compact('department'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $faculty = Faculty::all();
        return view('admin.settings.department.add_department',compact('faculty'));
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
            'name' => 'required|unique:departments',
        ]);


        // $name_gen = hexdec(uniqid());
        // $img_ext = strtolower($brand_image->getClientOriginalExtension());
        // $img_name = $name_gen.'.'.$img_ext;
        // $up_location = 'image/brand/';
        // $last_img = $up_location.$img_name;
        // $brand_image->move($up_location,$img_name);

//         if ($request->hasFile('image')) {
//             $image = $request->file('image');
//             $name = time().'.'.$image->getClientOriginalExtension();
//             $destinationPath = public_path('/image/department/');
//             $imagepath =$image->move($destinationPath, $name);
//             $last_img ='image/department/'.$name;

// //            Image::make($image)->resize(330,210)->save($last_img);
//         }


if($request->hasFile('image')) {

    $image       = $request->file('image');
    $name = time().'.'.$image->getClientOriginalExtension();

    $image_resize = Image::make($image->getRealPath());
    $image_resize->resize(300, 300);
    $image_resize->save(public_path('image/department/' .$name));
    $last_img ='image/department/'.$name;

}



        Department::insert([
            'name' => $request->name,
            'image' => $last_img,
            'faculty_id' => $request->faculty_id,
            'created_at' => Carbon::now()
        ]);


        return redirect('/admin/add_department')->with('status', 'Department Creat successfully');
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
        $faculty = Faculty::all();
        $department = Department::find($id);

        return view('admin.settings.department.edit_department',compact(['faculty','department']));
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
            'name' => 'required',

        ]);


       $depatment = Department::find($id);

        // dd($depatment);
       $old_image = $depatment->image;


        if($request->hasFile('image')) {

            if(!empty($old_image)) {
                unlink($old_image);
            }

            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $name = time().'.'.$image->getClientOriginalExtension();
                $image_resize = Image::make($image->getRealPath());
                $image_resize->resize(300, 300);
                $image_resize->save(public_path('image/department/' .$name));
                $path ='image/department/'.$name;
            }

        }


        if(empty($request->uplode_file)){
            $path =$depatment->image;
        }


        $depatment->update([
            'name' => $request->name,
            'image' => $path,
            'faculty_id' => $request->faculty_id,
            'updated_at' => Carbon::now()
        ]);
        return redirect('/admin/department')->with('status', 'Department update successfully');
       
       
       
//        if ($request->hasFile('image'))
//            if(!empty($old_image)) {
//                unlink($old_image);
//            }
//            $image = $request->file('image');
//            $name = time().'.'.$image->getClientOriginalExtension();
//            $image_resize = Image::make($image->getRealPath());
//            $image_resize->resize(300, 300);
//            $image_resize->save(public_path('image/department/' .$name));
//            $path ='image/department/'.$name;
//
//
//            $depatment->update([
//                'name' => $request->name,
//                'image' => $last_img,
//                'updated_at' => Carbon::now()
//            ]);
//            return redirect('/admin/department')->with('status', 'Department update successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $image = Department::find($id);
        $old_image = $image->image;
        unlink($old_image);

        Department::find($id)->delete();

        return redirect('/admin/department')->with('status', 'Department delete successfully');
    }
}
