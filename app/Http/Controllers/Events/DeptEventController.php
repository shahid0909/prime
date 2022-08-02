<?php

namespace App\Http\Controllers\Events;

use App\Http\Controllers\Controller;
use App\Models\Events\DeptEvents;
use App\Models\Settings\Department;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class DeptEventController extends Controller
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

    public function dept_event()
    {
        $dept_event =DB::table('dept_events')
            ->join('departments','dept_events.dept_id', '=','departments.id')
            ->select('departments.name','dept_events.title','dept_events.image',
                'dept_events.date','dept_events.place','dept_events.description','dept_events.status','dept_events.id')->get();


        return view('admin.events.Dept_event.index',compact('dept_event'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $department = Department::all();
        return view('admin.events.Dept_event.add',compact('department'));
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
            'dept_id' => 'required',
            'place' => 'required',
            'description' => 'required',
            'status' => 'required',
        ],
            [
                'title.required' => 'Please Input title ',
                'title.max' => 'title Less Then 255Chars',
                'image.required' => 'Please input Image',
                'date.required' => 'Please Select Date',
                'dept_id.required' => 'Please Select Department',
                'place.required' => 'Please Input Place',
                'description.required' => 'Please input Description',
                'status.required' => 'Please Select Status',

            ]);

        if($request->hasFile('image')) {

            $image       = $request->file('image');
            $name = time().'.'.$image->getClientOriginalExtension();

            $image_resize = Image::make($image->getRealPath());
            $image_resize->resize(390, 390);
            $image_resize->save(public_path('image/department/events/' .$name));
            $last_img ='image/department/events/'.$name;

        }



        DeptEvents::insert([
            'title' => $request->title,
            'image' => $last_img,
            'date' => $request->date,
            'dept_id' => $request->dept_id,
            'place' => $request->place,
            'description' => $request->description,
            'status' => $request->status,
            'created_at' => Carbon::now()
        ]);


        return redirect('/admin/add_dept_event')->with('status', 'Department Event Creat successfully');
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

        $dept_event = DeptEvents::find($id);
        $dept_event['departments']=Department::where('id',$dept_event->dept_id)->first();

        return view('admin.events.Dept_event.edit',compact(['dept_event','department']));
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
            'dept_id' => 'required',
            'place' => 'required',
            'description' => 'required',
            'status' => 'required',
        ],
            [
                'title.required' => 'Please Input title ',
                'title.max' => 'title Less Then 255Chars',
                'date.required' => 'Please Select Date',
                'dept_id.required' => 'Please Select Department',
                'place.required' => 'Please Input Place',
                'description.required' => 'Please input Description',
                'status.required' => 'Please Select Status',

            ]);

        $dept_event = DeptEvents::find($id);

        $old_image = $dept_event->image;

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
                $image_resize->save(public_path('image/department/events/' .$name));
                $last_img ='image/department/events/'.$name;

            }


            $dept_event->update([
                'title' => $request->title,
                'image' => $last_img,
                'date' => $request->date,
                'dept_id' => $request->dept_id,
                'place' => $request->place,
                'description' => $request->description,
                'status' => $request->status,
                'updated_at' => Carbon::now()
            ]);


            return redirect('/admin/dept_event')->with('status', 'Department Event Update successfully');


        }else{

            $dept_event->update([
                'title' => $request->title,
                'date' => $request->date,
                'dept_id' => $request->dept_id,
                'place' => $request->place,
                'description' => $request->description,
                'status' => $request->status,
                'updated_at' => Carbon::now()
            ]);
            return redirect('/admin/dept_event')->with('status', 'Department Event Update successfully');

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
        $image = DeptEvents::find($id);
        $old_image = $image->image;
        unlink($old_image);

        DeptEvents::find($id)->delete();

        return redirect('/admin/dept_event')->with('status', 'Department delete successfully');
    }
}
