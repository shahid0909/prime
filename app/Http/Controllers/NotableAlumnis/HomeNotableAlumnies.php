<?php

namespace App\Http\Controllers\NotableAlumnis;

use App\Http\Controllers\Controller;
use App\Models\NotableAlumni\HomeNotableAlumni;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class HomeNotableAlumnies extends Controller
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

    public function home_notable()
    {
        $home_notable = HomeNotableAlumni::all();
        return view('admin.notable_alumni.home_notable_alumni.index',compact('home_notable'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.notable_alumni.home_notable_alumni.add');
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
            'name' => 'required|max:255',
            'image' => 'required',
            'designation' => 'required',
            'description' => 'required',
            'status' => 'required',
        ],
            [
                'name.required' => 'Please Input title ',
                'name.max' => 'title Less Then 255Chars',
                'image.required' => 'Please input Image',
                'designation.required' => 'Please Input Designation',
                'description.required' => 'Please Input Description',
                'status.required' => 'Please Select Status',

            ]);

        if($request->hasFile('image')) {

            $image       = $request->file('image');
            $name = time().'.'.$image->getClientOriginalExtension();

            $image_resize = Image::make($image->getRealPath());
            $image_resize->resize(2880, 1920);
            $image_resize->save(public_path('image/home_notable_alumni/' .$name));
            $last_img ='image/home_notable_alumni/'.$name;

        }



        HomeNotableAlumni::insert([
            'name' => $request->name,
            'image' => $last_img,
            'designation' => $request->designation,
            'description' => $request->description,
            'status' => $request->status,
            'created_at' => Carbon::now()
        ]);


        return redirect('/admin/home_notable/add')->with('status', 'Home Notable Alumni Creat successfully');
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
        $home_notable = HomeNotableAlumni::find($id);

        return view('admin.notable_alumni.home_notable_alumni.edit',compact('home_notable'));
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
            'name' => 'required|max:255',
            'designation' => 'required',
            'description' => 'required',
            'status' => 'required',
        ],
            [
                'name.required' => 'Please Input title ',
                'name.max' => 'title Less Then 255Chars',
                'designation.required' => 'Please Input Designation',
                'description.required' => 'Please Input Description',
                'status.required' => 'Please Select Status',

            ]);

        $home_notable = HomeNotableAlumni::find($id);

        $old_image = $home_notable->image;

        $vmimage =  $request->file('image');

        if ($vmimage){

            if($request->hasFile('image')) {

                if(!empty($old_image)) {
                    unlink($old_image);
                }

                $image = $request->file('image');
                $name = time().'.'.$image->getClientOriginalExtension();
                $image_resize = Image::make($image->getRealPath());
                $image_resize->resize(2880,1920);
                $image_resize->save(public_path('image/home_notable_alumni/' .$name));
                $last_img ='image/home_notable_alumni/'.$name;

            }


            $home_notable->update([
                'name' => $request->name,
                'image' => $last_img,
                'designation' => $request->designation,
                'description' => $request->description,
                'status' => $request->status,
                'updated_at' => Carbon::now()
            ]);


            return redirect('/admin/home_notable')->with('status', 'Home Notable Alumni Update successfully');


        }else{

            $home_notable->update([
                'name' => $request->name,
                'designation' => $request->designation,
                'description' => $request->description,
                'status' => $request->status,
                'updated_at' => Carbon::now()
            ]);
            return redirect('/admin/home_notable')->with('status', 'Home Notable Alumni Update successfully');

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
        $image = HomeNotableAlumni::find($id);
        $old_image = $image->image;
        unlink($old_image);

        HomeNotableAlumni::find($id)->delete();

        return redirect('/admin/home_notable')->with('status', 'Home Notable Alumni delete successfully');
    }
}
