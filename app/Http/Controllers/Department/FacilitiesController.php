<?php

namespace App\Http\Controllers\Department;

use App\Http\Controllers\Controller;
use Intervention\Image\ImageManagerStatic as Image;
use App\Models\Department\Facilities;
use App\Models\Settings\Department;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class FacilitiesController extends Controller
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

    public function facilities()
    {
        $facilities =DB::table('facilities')
            ->join('departments','facilities.dept_id', '=','departments.id')
            ->select('departments.name','facilities.title','facilities.image',
                'facilities.description','facilities.status','facilities.id')->get();

        return view('admin.department.facilities.index',compact('facilities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $department = Department::all();

        return view('admin.department.facilities.add',compact('department'));
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
            'dept_id' => 'required',
            'image' => 'required',
            'status' => 'required',
        ],
            [
                'title.required' => 'Please Input title ',
                'title.max' => 'title Less Then 255Chars',
                'dept_id.required' => 'Please Select Department Name',
                'image.required' => 'Please Input image',
                'status.required' => 'Please select Status',

            ]);

        if($request->hasFile('image')) {

            $image       = $request->file('image');
            $name = time().'.'.$image->getClientOriginalExtension();

            $image_resize = Image::make($image->getRealPath());
            $image_resize->resize(390, 390);
            $image_resize->save(public_path('image/department/facilities/' .$name));
            $last_img ='image/department/facilities/'.$name;

        }



        Facilities::insert([
            'title' => $request->title,
            'image' => $last_img,
            'description' => $request->description,
            'dept_id' => $request->dept_id,
            'status' => $request->status,
            'created_at' => Carbon::now()
        ]);


        return redirect('/admin/add_facilities')->with('status', 'Facilities Creat successfully');
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

        $facilities = Facilities::find($id);
        $facilities['departments']=Department::where('id',$facilities->dept_id)->first();

        return view('admin.department.facilities.edit',compact(['facilities','department']));
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
            'dept_id' => 'required',
            'status' => 'required',
        ],
            [
                'title.required' => 'Please Input title ',
                'title.max' => 'title Less Then 255Chars',
                'dept_id.required' => 'Please Select Department Name',
                'status.required' => 'Please select Status',

            ]);

        $facilities = Facilities::find($id);

        $old_image = $facilities->image;

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
                $image_resize->save(public_path('image/department/facilities/' .$name));
                $last_img ='image/department/facilities/'.$name;

            }


            $facilities->update([
                'title' => $request->title,
                'image' => $last_img,
                'description' => $request->description,
                'dept_id' => $request->dept_id,
                'status' => $request->status,
//                'created_at' => Carbon::now()
            ]);


            return redirect('/admin/facilities')->with('status', 'Facilities Update successfully');


        }else{

            $facilities->update([
                'title' => $request->title,
                'description' => $request->description,
                'dept_id' => $request->dept_id,
                'status' => $request->status,
//                'created_at' => Carbon::now()
            ]);
            return redirect('/admin/facilities')->with('status', 'Facilities Update successfully');

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
        $image = Facilities::find($id);
        $old_image = $image->image;
        unlink($old_image);

        Facilities::find($id)->delete();

        return redirect('/admin/facilities')->with('status', 'Facilities delete successfully');
    }
}
