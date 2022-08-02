<?php

namespace App\Http\Controllers\School;

use App\Http\Controllers\Controller;
use App\Models\School\School;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

use Intervention\Image\ImageManagerStatic as Image;

class SchoolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function language_school()
    {
        $school = School::all();

      return view('admin.School.index',compact('school'));
    }

    public function changeStatus(Request $request)
    {
//        $school_id=$request->post('school_id');
//        $status=$request->post('status');
//
//        $user = School::find($request->school_id);
//        $user->status = $request->status;
//        $user->save();
//
//        return response()->json(['success'=>'Status change successfully.']);

        if($request->ajax()){
            $data = School::find($request->idea_id);
            if (!is_null($data)) {
                if ($data->status==1){
                    $data->status = 0;
                    $data->save();
                    return "Not Active";
                }else{
                    $data->status = 1;
                    $data->save();
                    return "Active";
                }
            }
        }




    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.School.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        dd($request);
        $request->validate([
            'title' => 'required',
            'b_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'name' => 'required',
            'description' => 'required',
            'status' => 'required',
        ]);
//        dd($request);

        if ($request->hasFile('b_image')) {


            $image = $request->file('b_image');
            $name = time() . '.' . $image->getClientOriginalExtension();
            $image_resize = Image::make($image->getRealPath());
            $image_resize->resize(390, 390);
            $image_resize->save(public_path('/image/school/bannar_image/' . $name));
            $last_img = 'image/school/bannar_image/' . $name;
        }

        if ($request->hasFile('image')) {

            $image = $request->file('image');
            $name = time() . '.' . $image->getClientOriginalExtension();
            $image_resize = Image::make($image->getRealPath());
            $image_resize->resize(300, 250);
            $image_resize->save(public_path('/image/school/image/' . $name));
            $path = 'image/school/image/' . $name;
        }

        $school = new School();
        $school->title = $request->title;
        $school->name = $request->name;
        $school->b_image = $last_img;
        $school->image = $path;
        $school->description = $request->description;
        $school->status = $request->status;

        if ($school->save()) {
            Session::flash('message', 'Save successfully!');
            return redirect()->back();
        } else {
            Session::flash('error', 'Something went wrong!');
            return redirect()->back();
        }

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
       $school = School::find($id);
       return view('admin.School.edit',compact('school'));
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
            'b_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'name' => 'required',
            'description' => 'required',
            'status' => 'required',
        ]);


        $class_exam = School::find($id);

        $old_image = $class_exam->b_image;

        if ($request->hasFile('b_image')) {

            if (!empty($old_image)) {
                unlink($old_image);
            }

            if ($request->hasFile('b_image')) {


                $image = $request->file('b_image');
                $name = time() . '.' . $image->getClientOriginalExtension();
                $image_resize = Image::make($image->getRealPath());
                $image_resize->resize(390, 390);
                $image_resize->save(public_path('/image/school/bannar_image/' . $name));
                $b_path = 'image/school/bannar_image/' . $name;
            }

        }

        $old_path = $class_exam->image;


        if ($request->hasFile('image')) {

            if (!empty($old_path)) {
                unlink($old_path);
            }

            if ($request->hasFile('image')) {

                $image = $request->file('image');
                $name = time() . '.' . $image->getClientOriginalExtension();
                $image_resize = Image::make($image->getRealPath());
                $image_resize->resize(300, 250);
                $image_resize->save(public_path('/image/school/image/' . $name));
                $path_image = 'image/school/image/' . $name;
            }

        }


        if (empty($request->b_image)) {
            $b_path = $class_exam->b_image;
        }

        if (empty($request->image)) {
            $path_image = $class_exam->image;
        }


        $class_exam->title = $request->title;
        $class_exam->name = $request->name;
        $class_exam->b_image = $b_path;
        $class_exam->image = $path_image;
        $class_exam->description = $request->description;
        $class_exam->status = $request->status;

        if ($class_exam->save()) {
            Session::flash('message', 'Save successfully!');
            return redirect('/admin/language_school');
        } else {
            Session::flash('error', 'Something went wrong!');
            return redirect()->back('/admin/language_school');
        }


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $school = School::find($id);
        $old_image = $school->b_image;
        $path = $school->image;
        unlink($old_image);
        unlink($path);
        if ($school->delete()) {
            Session::flash('message', 'Data has been delete successfully!');
            return redirect()->back();
        } else {
            Session::flash('error', 'Something went wrong!');
            return redirect()->back();
        }
    }
}
