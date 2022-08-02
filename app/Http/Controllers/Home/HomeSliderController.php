<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Home\HomeSlider;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Intervention\Image\ImageManagerStatic as Image;

class HomeSliderController extends Controller
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

    public function home_slider()
    {
        $home_slider = HomeSlider::all();

        return view('admin.home_slider.index',compact('home_slider'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.home_slider.add');
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
            's_title' => 'required',
            'image' => 'required',
            'status' => 'required',
        ],
            [
                's_title.required' => 'Please Input ',
                'image.required' => 'Please Input',
                'status.required' => 'Please input',
            ]);




        if($request->hasFile('image')) {

            $image       = $request->file('image');
            $name = time().'.'.$image->getClientOriginalExtension();

            $image_resize = Image::make($image->getRealPath());
            $image_resize->resize(2048, 1357);
            $image_resize->save(public_path('image/home_slider/' .$name));
            $last_img ='image/home_slider/'.$name;

        }



        HomeSlider::insert([
            's_title' => $request->s_title,
            'image' => $last_img,
            'status' => $request->status,
            'created_at' => Carbon::now()
        ]);


        return redirect('/admin/home_slider/add')->with('status', 'Home Slider Creat successfully');

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
        $home_slider = HomeSlider::find($id);

        return view('admin.home_slider.edit',compact('home_slider'));

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
            's_title' => 'required',
            'status' => 'required',
        ],
            [
                's_title.required' => 'Please Input ',
                'status.required' => 'Please input',
            ]);

        $class_exam = HomeSlider::find($id);

        $old_image = $class_exam->image;

        if($request->hasFile('image')) {

            if(!empty($old_image)) {
                unlink($old_image);
            }

            if($request->hasFile('image')) {

                $image = $request->file('image');
                $name = time().'.'.$image->getClientOriginalExtension();

                $image_resize = Image::make($image->getRealPath());
                $image_resize->resize(2048, 1357);
                $image_resize->save(public_path('image/home_slider/' .$name));
                $last_img ='image/home_slider/'.$name;

            }

        }


        if(empty($request->image)){
            $last_img = $class_exam->image;
        }


        $class_exam->update([
            's_title' => $request->s_title,
            'image' => $last_img,
            'status' => $request->status,
            'created_at' => Carbon::now()
        ]);


        return redirect('/admin/home_slider')->with('status', 'Home Slider Update successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $image = HomeSlider::find($id);
        $old_image = $image->image;
        unlink($old_image);

        HomeSlider::find($id)->delete();

        return redirect('/admin/home_slider')->with('status', 'Home Slider delete successfully');
    }
}
