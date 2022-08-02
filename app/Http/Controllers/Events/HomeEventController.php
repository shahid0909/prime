<?php

namespace App\Http\Controllers\Events;

use App\Http\Controllers\Controller;
use App\Models\Events\HomeEvents;
use App\Models\Settings\Department;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class HomeEventController extends Controller
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

    public function home_event()
    {
        $home_event = HomeEvents::all();
        return view('admin.events.home_event.index',compact('home_event'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.events.home_event.add');
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
            'place' => 'required',
            'description' => 'required',
            'status' => 'required',
        ],
            [
                'title.required' => 'Please Input title ',
                'title.max' => 'title Less Then 255Chars',
                'image.required' => 'Please input Image',
                'date.required' => 'Please Select Date',
                'place.required' => 'Please Input Place',
                'description.required' => 'Please input Description',
                'status.required' => 'Please Select Status',

            ]);

        if($request->hasFile('image')) {

            $image       = $request->file('image');
            $name = time().'.'.$image->getClientOriginalExtension();

            $image_resize = Image::make($image->getRealPath());
            $image_resize->resize(390, 390);
            $image_resize->save(public_path('image/home_event/' .$name));
            $last_img ='image/home_event/'.$name;

        }



        HomeEvents::insert([
            'title' => $request->title,
            'image' => $last_img,
            'date' => $request->date,
            'place' => $request->place,
            'description' => $request->description,
            'status' => $request->status,
            'created_at' => Carbon::now()
        ]);


        return redirect('/admin/add_home_event')->with('status', 'Home Event Creat successfully');
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
        $home_events = HomeEvents::find($id);

        return view('admin.events.home_event.edit',compact('home_events'));
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
            'place' => 'required',
            'description' => 'required',
            'status' => 'required',
        ],
            [
                'title.required' => 'Please Input title ',
                'title.max' => 'title Less Then 255Chars',
                'date.required' => 'Please Select Date',
                'place.required' => 'Please Input Place',
                'description.required' => 'Please input Description',
                'status.required' => 'Please Select Status',

            ]);

        $home_event = HomeEvents::find($id);

        $old_image = $home_event->image;

        $vmimage =  $request->file('image');

        if ($vmimage){

            if($request->hasFile('image')) {

                if(!empty($old_image)) {
                    unlink($old_image);
                }

                $image = $request->file('image');
                $name = time().'.'.$image->getClientOriginalExtension();
                $image_resize = Image::make($image->getRealPath());
                $image_resize->resize(390,390);
                $image_resize->save(public_path('image/home_event/' .$name));
                $last_img ='image/home_event/'.$name;

            }


            $home_event->update([
                'title' => $request->title,
                'image' => $last_img,
                'date' => $request->date,
                'place' => $request->place,
                'description' => $request->description,
                'status' => $request->status,
                'updated_at' => Carbon::now()
            ]);


            return redirect('/admin/home_event')->with('status', 'Home Event Update successfully');


        }else{

            $home_event->update([
                'title' => $request->title,
                'date' => $request->date,
                'place' => $request->place,
                'description' => $request->description,
                'status' => $request->status,
                'updated_at' => Carbon::now()
            ]);
            return redirect('/admin/home_event')->with('status', 'Home Event Update successfully');

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
        $image = HomeEvents::find($id);
        $old_image = $image->image;
        unlink($old_image);

        HomeEvents::find($id)->delete();

        return redirect('/admin/home_event')->with('status', 'Home Event delete successfully');
    }
}
