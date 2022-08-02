<?php

namespace App\Http\Controllers;

use App\Models\Employ\Employ;
use App\Models\FacultyMember\FacultyMember;
use App\Models\Students\StudentInfo;
use App\Models\Admin;
use Illuminate\Support\Carbon;
use App\Models\Settings\Batch;
use App\Models\Settings\Department;
use App\Models\Settings\Dept_slider;
use App\Models\Settings\GroupOrSection;
use App\Models\Settings\Program;
use App\Models\Settings\Shift;
use App\Models\Settings\StartSession;
use App\Models\Settings\ExamSession;
use App\Models\Exam\ExamInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        return view('frontend.home');
    }
    public function index()
    {
        return view('admin.login');
    }

    public function dashboard(){

        $student = StudentInfo::where('status',1)->count();

        $facultyMember = FacultyMember::where('status',1)->count();

        $employ = Employ::where('status',1)->count();


        return view('admin.dashboard',compact(['student','facultyMember','employ']));
    }

    public function student(){
        return view('admin.student.studentlist');
    }


    public function department(){
        return view('admin.student.studentlist');
    }

    public function addstudent(){
        return view('admin.student.addstudent');
    }

    public function tempaddstudent(){
         $result['start_session'] =StartSession::all();
         $result['department'] =Department::all();
         $result['program'] =Program::all();
         $result['shift'] =Shift::all();
         $result['batch'] =Batch::all();
         $result['group_section'] =GroupOrSection::all();
         $result['studentlist'] = DB::table('studends')
            ->join('start_sessions','studends.start_session_id','start_sessions.id')
            ->join('departments','studends.department_id','departments.id')
            ->join('programs','studends.program_id','programs.id')
            ->join('shifts','studends.shift_id','shifts.id')
            ->join('batches','studends.batche_id','batches.id')
            ->join('group_or_sections','studends.group_or_section_id','group_or_sections.id')
            ->select('studends.student_name','studends.student_id','studends.std_image','start_sessions.startsession','departments.department','programs.program','shifts.shift','batches.batche','batches.id','group_or_sections.groupsection')->get();
        //  dd($result);
        return view('admin.student.addtemporarystu',$result);
    }

    public function exam(){

//        $result['examsession'] = ExamSession::all();
        $result['examsession'] = StartSession::all();
        $result['examlist'] = DB::table('exam_infos')
                            ->join('start_sessions','exam_infos.exam_session_id','start_sessions.id')
                            ->select('exam_infos.exam_name','exam_infos.date_of_exam','exam_infos.id','start_sessions.startsession')->get();
        // dd($result);
        return view('admin.student.exam',$result);
    }

    public function addexam(){
        return view('admin.student.createexam');
    }

    public function admit(){
        $examlist = DB::table('exam_infos')
        ->join('start_sessions','exam_infos.exam_session_id','start_sessions.id')
        ->select('exam_infos.exam_name','exam_infos.date_of_exam','exam_infos.id','start_sessions.startsession')->get();

//        
//
        $batch =Batch::where('status',1)->get();
        
        // dd($batch);

        return view('admin.student.printadmit',compact(['examlist','batch']));
    }

    public function admitold(){
        $result['examlist'] = DB::table('exam_infos')
            ->join('start_sessions','exam_infos.exam_session_id','start_sessions.id')
            ->select('exam_infos.exam_name','exam_infos.date_of_exam','exam_infos.id','start_sessions.startsession')->get();

//        dd($result);
//
        $result['batch'] =Batch::where('status',1)->get();
//        $result['studentlist'] = DB::table('student_infos')
////        ->join('start_sessions','studends.start_session_id','start_sessions.id')
//        ->join('departments','studends.department_id','departments.id')
//        ->join('programs','studends.program_id','programs.id')
//        ->join('shifts','studends.shift_id','shifts.id')
//        ->join('batches','studends.batche_id','batches.id')
//        ->join('group_or_sections','studends.group_or_section_id','group_or_sections.id')
//        ->select('studends.student_name','studends.student_id','departments.department','programs.program','shifts.shift',
//            'batches.batche','batches.id','group_or_sections.groupsection')->get();
//        // dd($result);
        return view('admin.student.printadmit',$result);
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(Admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin $admin)
    {
        //
    }
}
