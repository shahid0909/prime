<?php

namespace App\Http\Controllers\Gallery;

use App\Http\Controllers\Controller;
use App\Models\Gallery\PhotoGallery;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\Session;

class PhotoGalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $image = PhotoGallery::all();
        return view('admin.photo_gallery.index',compact('image'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.photo_gallery.add');
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
            'category' => 'required',
            'status' => 'required',
        ]);



        $piidArr = $request->image;
        foreach ($piidArr as $key=>$val) {
            if($request->hasFile("image.$key")) {
                $images =$request->file("image.$key");
                $ext =$images->extension();
                $images_name =rand(1111111111,9999999999).'.'.$ext;
                $image_resize = Image::make($images);
                $image_resize->resize(500, 500);
                $image_resize->save(public_path('/image/photo_gallery/' . $images_name));
                $last_img[] ='image/photo_gallery/'.$images_name;
            }
        }


        $image_gallery = new PhotoGallery();
        $image_gallery->title = $request->title;
        $image_gallery->category = $request->category;
        $image_gallery->image = json_encode($last_img);
        $image_gallery->status = $request->status;
        if ($image_gallery->save()) {
            Session::flash('status', 'Save successfully!');
            return redirect()->back();
        } else {
            Session::flash('status', 'Something went wrong!');
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
        $gallery = PhotoGallery::find($id);
        return view('admin.photo_gallery.edit',compact('gallery'));
    }

    public function single_image($id,$did)
    {

        $faculty = PhotoGallery::where('id', $did)->first();
        $oldemail = json_decode($faculty->image, true);
        $previesid =  $oldemail[$id];
        unlink($oldemail[$id]);
        unset($oldemail[$id]);

        $ooldemail = json_encode($oldemail);
        $faculty->image = $ooldemail;
        if ($faculty->save()) {
            Session::flash('status', 'Save successfully!');
            return redirect()->back();
        } else {
            Session::flash('status', 'Something went wrong!');
            return redirect()->back();
        }
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
            'category' => 'required',
            'status' => 'required',
        ]);

        $class_exam = PhotoGallery::find($id);


        $piidArr = $request->image;

        if ($request->image){
            foreach ($piidArr as $key=>$val) {
                if($request->hasFile("image.$key")) {
                    $images =$request->file("image.$key");
                    $ext =$images->extension();
                    $images_name =rand(1111111111,9999999999).'.'.$ext;
                    $image_resize = Image::make($images);
                    $image_resize->resize(500, 500);
                    $image_resize->save(public_path('/image/photo_gallery/' . $images_name));
                    $last_img[] ='image/photo_gallery/'.$images_name;
                }
            }

            if ($class_exam->image)
            {
                $previousEmail = json_decode($class_exam->image, true);

            }
            $requestImage = $last_img;

            foreach ($requestImage as $itememail){

                array_push($previousEmail,$itememail);
            }


            $class_exam->title = $request->title;
            $class_exam->category = $request->category;
            $class_exam->image = json_encode($previousEmail);
            $class_exam->status = $request->status;
            if ($class_exam->save()) {
                Session::flash('status', 'Save successfully!');
                return redirect()->back();
            } else {
                Session::flash('status', 'Something went wrong!');
                return redirect()->back();
            }

        }
        else
            {
                $class_exam->title = $request->title;
                $class_exam->category = $request->category;
                $class_exam->status = $request->status;
                if ($class_exam->save()) {
                    Session::flash('status', 'Save successfully!');
                    return redirect()->back();
                } else {
                    Session::flash('status', 'Something went wrong!');
                    return redirect()->back();
                }

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
        $images = PhotoGallery::find($id);
        $previousImages = json_decode($images->image, true);
        foreach ($previousImages as $key=>$value)
        {
            unlink($value);
        }

        $images->delete();

        return redirect('/admin/image_gallery')->with('status', 'delete successfully');
    }

}
