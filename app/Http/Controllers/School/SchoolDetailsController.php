<?php

namespace App\Http\Controllers\School;

use App\Http\Controllers\Controller;
use App\Models\School\School;
use App\Models\School\SchoolDetails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class SchoolDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function school_details()
    {

        $school_details = DB::table('school_details')
            ->join('schools', 'school_details.school_id', '=', 'schools.id')
            //            ->join('designations','faculty_members.adi_designation_id', '=','designations.id')
            ->select('schools.name', 'school_details.title', 'school_details.duration_course', 'school_details.duration_class', 'school_details.time'
                , 'school_details.weekly_class', 'school_details.course_status', 'school_details.course_fee', 'school_details.status', 'school_details.id')->get();

       return view('admin.school_details.index',compact('school_details'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $school = School::all();
        return view('admin.school_details.add',compact('school'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        dd($request);
//        $request->validate([
//            'school_id' => 'required',
//            'title' => 'required',
//            'duration_course' => 'required',
//            'duration_class' => 'required',
//            'time' => 'required',
//            'weekly_class' => 'required',
//            'course_status' => 'required',
//            'course_fee' => 'required',
//            'status' => 'required',
//
//        ]);


        $s_details = new SchoolDetails();
        $s_details->school_id = $request->school_id;
        $s_details->title = $request->title;
        $s_details->duration_course = $request->duration_course;
        $s_details->duration_class = $request->duration_class;
        $s_details->time = $request->time;
        $s_details->weekly_class = $request->weekly_class;
        $s_details->course_status = $request->course_status;
        $s_details->course_fee = $request->course_fee;
        $s_details->status = $request->status;
        if ($s_details->save()) {
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
        $school = School::all();
        $school_detail = SchoolDetails::find($id);
        $school_detail['school'] = School::where('id',$school_detail->school_id)->first();

        return view('admin.school_details.edit',compact(['school_detail','school']));
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
        $s_details = SchoolDetails::find($id);

        $s_details->school_id = $request->school_id;
        $s_details->title = $request->title;
        $s_details->duration_course = $request->duration_course;
        $s_details->duration_class = $request->duration_class;
        $s_details->time = $request->time;
        $s_details->weekly_class = $request->weekly_class;
        $s_details->course_status = $request->course_status;
        $s_details->course_fee = $request->course_fee;
        $s_details->status = $request->status;
        if ($s_details->save()) {
            Session::flash('message', 'Save successfully!');
            return redirect('/admin/school_details');
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
        $school_delete = SchoolDetails::find($id);

        if ($school_delete->delete()) {
            Session::flash('message', 'Data has been delete successfully!');
            return redirect()->back();
        } else {
            Session::flash('error', 'Something went wrong!');
            return redirect()->back();
        }
    }
}
