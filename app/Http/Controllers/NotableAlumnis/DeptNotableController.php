<?php

namespace App\Http\Controllers\NotableAlumnis;

use App\Http\Controllers\Controller;
use App\Models\NotableAlumni\DeptNotableAlumni;
use App\Models\Settings\Department;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class DeptNotableController extends Controller
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
    public function dept_notable()
    {
        $dept_notable =DB::table('dept_notable_alumnis')
            ->join('departments','dept_notable_alumnis.dept_id', '=','departments.id')
            ->select('departments.name','dept_notable_alumnis.title','dept_notable_alumnis.image',
                'dept_notable_alumnis.designation','dept_notable_alumnis.description',
                'dept_notable_alumnis.status','dept_notable_alumnis.id')->get();


        return view('admin.notable_alumni.dept_notable_alumni.index',compact('dept_notable'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $department = Department::all();

        return view('admin.notable_alumni.dept_notable_alumni.add',compact('department'));
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
            'designation' => 'required',
            'description' => 'required',
            'dept_id' => 'required',
            'status' => 'required',
        ],
            [
                'title.required' => 'Please Input title ',
                'title.max' => 'title Less Then 255Chars',
                'image.required' => 'Please input Image',
                'designation.required' => 'Please Input Designation',
                'description.required' => 'Please Input description',
                'dept_id.required' => 'Please Select Department',
                'status.required' => 'Please Select Status',

            ]);

        if($request->hasFile('image')) {

            $image       = $request->file('image');
            $name = time().'.'.$image->getClientOriginalExtension();

            $image_resize = Image::make($image->getRealPath());
            $image_resize->resize(2880, 1920);
            $image_resize->save(public_path('image/department/notable_alumni/' .$name));
            $last_img ='image/department/notable_alumni/'.$name;

        }



        DeptNotableAlumni::insert([
            'title' => $request->title,
            'image' => $last_img,
            'designation' => $request->designation,
            'description' => $request->description,
            'dept_id' => $request->dept_id,
            'status' => $request->status,
            'created_at' => Carbon::now()
        ]);


        return redirect('/admin/dept_notable/add')->with('status', 'Department Notable Alumni Creat successfully');
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

        $dept_notable = DeptNotableAlumni::find($id);
        $dept_notable['departments']=Department::where('id',$dept_notable->dept_id)->first();
        return view('admin.notable_alumni.dept_notable_alumni.edit',compact(['dept_notable','department']));
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
            'designation' => 'required',
            'description' => 'required',
            'dept_id' => 'required',
            'status' => 'required',
        ],
            [
                'title.required' => 'Please Input title ',
                'title.max' => 'title Less Then 255Chars',
                'designation.required' => 'Please Input Designation',
                'description.required' => 'Please Input description',
                'dept_id.required' => 'Please Select Department',
                'status.required' => 'Please Select Status',

            ]);

        $dept_notable = DeptNotableAlumni::find($id);

        $old_image = $dept_notable->image;

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
                $image_resize->save(public_path('image/department/notable_alumni/' .$name));
                $last_img ='image/department/notable_alumni/'.$name;

            }


            $dept_notable->update([
                'title' => $request->title,
                'image' => $last_img,
                'designation' => $request->designation,
                'description' => $request->description,
                'dept_id' => $request->dept_id,
                'status' => $request->status,
                'updated_at' => Carbon::now()
            ]);


            return redirect('/admin/dept_notable')->with('status', 'Department Notable Alumni Update successfully');


        }else{

            $dept_notable->update([
                'title' => $request->title,
                'designation' => $request->designation,
                'description' => $request->description,
                'dept_id' => $request->dept_id,
                'status' => $request->status,
                'updated_at' => Carbon::now()
            ]);
            return redirect('/admin/dept_notable')->with('status', 'Department Notable Alumni Update successfully');

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
        $image = DeptNotableAlumni::find($id);
        $old_image = $image->image;
        unlink($old_image);

        DeptNotableAlumni::find($id)->delete();

        return redirect('/admin/dept_notable')->with('status', 'Department Notable Alumni delete successfully');
    }
}
