<?php

namespace App\Http\Controllers\Department;

use App\Http\Controllers\Controller;
use App\Models\Department\Clubs;
use App\Models\Settings\Department;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;


class ClubsController extends Controller
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

    public function clubs()
    {
        $clubs =DB::table('clubs')
            ->join('departments','clubs.dept_id', '=','departments.id')
            ->select('departments.name','clubs.title','clubs.image',
                'clubs.description','clubs.status','clubs.id')->get();

        return view('admin.department.clubs.index',compact('clubs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $department = Department::all();

        return view('admin.department.clubs.add',compact('department'));
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
            $image_resize->save(public_path('image/department/clubs/' .$name));
            $last_img ='image/department/clubs/'.$name;

        }



        Clubs::insert([
            'title' => $request->title,
            'image' => $last_img,
            'description' => $request->description,
            'dept_id' => $request->dept_id,
            'status' => $request->status,
            'created_at' => Carbon::now()
        ]);


        return redirect('/admin/add_clubs')->with('status', 'Clubs Creat successfully');
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

        $clubs = Clubs::find($id);
        $clubs['departments']=Department::where('id',$clubs->dept_id)->first();

        return view('admin.department.clubs.edit',compact(['clubs','department']));
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

        $clubs = Clubs::find($id);

        $old_image = $clubs->image;

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
                $image_resize->save(public_path('image/department/clubs/' .$name));
                $last_img ='image/department/clubs/'.$name;

            }


            $clubs->update([
                'title' => $request->title,
                'image' => $last_img,
                'description' => $request->description,
                'dept_id' => $request->dept_id,
                'status' => $request->status,
//                'created_at' => Carbon::now()
            ]);


            return redirect('/admin/clubs')->with('status', 'Clubs Update successfully');


        }else{

            $clubs->update([
                'title' => $request->title,
                'description' => $request->description,
                'dept_id' => $request->dept_id,
                'status' => $request->status,
//                'created_at' => Carbon::now()
            ]);
            return redirect('/admin/clubs')->with('status', 'Clubs Update successfully');

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
        $image = Clubs::find($id);
        $old_image = $image->image;
        unlink($old_image);

        Clubs::find($id)->delete();

        return redirect('/admin/clubs')->with('status', 'Clubs delete successfully');
    }
}
