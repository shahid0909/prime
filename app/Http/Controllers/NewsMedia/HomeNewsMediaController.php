<?php

namespace App\Http\Controllers\NewsMedia;

use App\Http\Controllers\Controller;
use App\Models\NewsMedia\HomeNewsMedia;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class HomeNewsMediaController extends Controller
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

    public function home_news()
    {
        $home_news = HomeNewsMedia::all();

        return view('admin.NewsMedia.home_news_media.index',compact('home_news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.NewsMedia.home_news_media.add');
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
            'title' => 'required|max:255',
            'image' => 'required',
            'date' => 'required',
            'description' => 'required',
            'status' => 'required',
        ],
            [
                'title.required' => 'Please Input title ',
                'title.max' => 'title Less Then 255Chars',
                'image.required' => 'Please input Image',
                'date.required' => 'Please Select Date',
                'description.required' => 'Please input Description',
                'status.required' => 'Please Select Status',

            ]);

        if($request->hasFile('image')) {

            $image       = $request->file('image');
            $name = time().'.'.$image->getClientOriginalExtension();

            $image_resize = Image::make($image->getRealPath());
            $image_resize->resize(2048, 1024);
            $image_resize->save(public_path('image/home_news/' .$name));
            $last_img ='image/home_news/'.$name;

        }



        HomeNewsMedia::insert([
            'title' => $request->title,
            'image' => $last_img,
            'date' => $request->date,
            'description' => $request->description,
            'status' => $request->status,
            'created_at' => Carbon::now()
        ]);


        return redirect('/admin/home_news/add')->with('status', 'Home News & Media Creat successfully');
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
        $home_news = HomeNewsMedia::find($id);

        return view('admin.NewsMedia.home_news_media.edit',compact('home_news'));
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
            'title' => 'required|max:255',
            'date' => 'required',
            'description' => 'required',
            'status' => 'required',
        ],
            [
                'title.required' => 'Please Input title ',
                'title.max' => 'title Less Then 255Chars',
                'date.required' => 'Please Select Date',
                'description.required' => 'Please input Description',
                'status.required' => 'Please Select Status',

            ]);

        $home_news = HomeNewsMedia::find($id);

        $old_image = $home_news->image;

        $vmimage =  $request->file('image');

        if ($vmimage){

            if($request->hasFile('image')) {

                if(!empty($old_image)) {
                    unlink($old_image);
                }

                $image = $request->file('image');
                $name = time().'.'.$image->getClientOriginalExtension();
                $image_resize = Image::make($image->getRealPath());
                $image_resize->resize(2048,1024);
                $image_resize->save(public_path('image/home_news/' .$name));
                $last_img ='image/home_news/'.$name;

            }


            $home_news->update([
                'title' => $request->title,
                'image' => $last_img,
                'date' => $request->date,
                'description' => $request->description,
                'status' => $request->status,
                'updated_at' => Carbon::now()
            ]);


            return redirect('/admin/home_news')->with('status', 'Home News & Media Update successfully');


        }else{

            $home_news->update([
                'title' => $request->title,
                'date' => $request->date,
                'description' => $request->description,
                'status' => $request->status,
                'updated_at' => Carbon::now()
            ]);
            return redirect('/admin/home_news')->with('status', 'Home News & Media Update successfully');

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
        $image = HomeNewsMedia::find($id);
        $old_image = $image->image;
        unlink($old_image);

        HomeNewsMedia::find($id)->delete();

        return redirect('/admin/home_news')->with('status', 'Home News & Media delete successfully');
    }
}
