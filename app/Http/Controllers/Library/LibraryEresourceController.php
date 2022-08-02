<?php

namespace App\Http\Controllers\Library;

use App\Http\Controllers\Controller;
use App\Models\Library\LibraryEresource;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Session;
use Intervention\Image\ImageManagerStatic as Image;

class LibraryEresourceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $library = LibraryEresource::all();

        return view('admin.library_e_resource.index',compact('library'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.library_e_resource.add');
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
            'category' => 'required',
            'title' => 'required',
            'link' => 'required',
            'status' => 'required',

        ]);
//        dd($request);

        if ($request->hasFile('image')) {

            $image = $request->file('image');
            $name = time() . '.' . $image->getClientOriginalExtension();
            $image_resize = Image::make($image->getRealPath());
            $image_resize->resize(232, 290);
            $image_resize->save(public_path('/image/library/' . $name));
            $last_img = 'image/library/' . $name;
        }


        $library_Eresource = new LibraryEresource();
        $library_Eresource->category = $request->category;
        $library_Eresource->title = $request->title;
        $library_Eresource->image = $last_img;
        $library_Eresource->link = $request->link;
        $library_Eresource->status = $request->status;
        if ($library_Eresource->save()) {
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
        $library = LibraryEresource::find($id);

        return view('admin.library_e_resource.edit',compact('library'));
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
            'category' => 'required',
            'title' => 'required',
            'link' => 'required',
            'status' => 'required',

        ]);

        $class_exam = LibraryEresource::find($id);

        $old_image = $class_exam->image;

        if($request->hasFile('image')) {

            if(!empty($old_image)) {
                unlink($old_image);
            }

            if ($request->hasFile('image')) {

                $image = $request->file('image');
                $name = time() . '.' . $image->getClientOriginalExtension();
                $image_resize = Image::make($image->getRealPath());
                $image_resize->resize(232, 290);
                $image_resize->save(public_path('/image/library/' . $name));
                $last_img = 'image/library/' . $name;
            }

        }


        if(empty($request->image)){
            $last_img =$class_exam->image;
        }


        $class_exam->category = $request->category;
        $class_exam->title = $request->title;
        $class_exam->image = $last_img;
        $class_exam->link = $request->link;
        $class_exam->status = $request->status;
        if ($class_exam->save()) {

            return redirect('/admin/library_Eresource')->with('message', ' Update successfully');
        } else {
            Session::flash('error', 'Something went wrong!');
            return redirect()->back();
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
        $library = LibraryEresource::find($id);
        $old_image = $library->image;
        unlink($old_image);

        LibraryEresource::find($id)->delete();

        return redirect('/admin/library_Eresource')->with('status', 'E-Research delete successfully');
    }
}
