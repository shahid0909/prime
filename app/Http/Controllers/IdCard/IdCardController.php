<?php

namespace App\Http\Controllers\IdCard;

use App\Http\Controllers\Controller;
use App\Models\Employ\Employ;
use App\Models\FacultyMember\FacultyMember;
use App\Models\Students\StudentInfo;
use Illuminate\Http\Request;
use PDF;

class IdCardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function student()
    {
        $student = StudentInfo::all();

        return view('admin.id_card.student_search',compact('student'));
    }

    public function faculty()
    {
        return view('admin.id_card.faculty_member_search');
    }

    public function employ()
    {
        return view('admin.id_card.employ_search');
    }

    public function result(Request $request)
    {

        $studentInfo = StudentInfo::where([
            ['s_id',$request->student_id]
        ])->with('batches')->first();

        return view('admin.id_card.student_search',compact('studentInfo'));
    }

    public function employ_result(Request $request)
    {
        $employInfo = Employ::where([
            ['e_name', 'LIKE', "%$request->e_name%"]
        ])->with('designation')->get();

        return view('admin.id_card.employ_search',compact('employInfo'));
    }
    public function faculty_result(Request $request)
    {
        $facultyInfo = FacultyMember::where([
            ['m_name', 'LIKE', "%$request->m_name%"]
        ])->with('designation')->get();

//        dd($facultyInfo);

        return view('admin.id_card.faculty_member_search',compact('facultyInfo'));
    }

    public function student_id($id)
    {
        $studentInfo = StudentInfo::where([
            ['id',$id]
        ])->with('batches','Student_program')->first();
        

        $data = [
            's_name' => $studentInfo->s_name,
            's_id' => $studentInfo->s_id,
            'batches' => $studentInfo->batches->batche,
            'Student_program' => $studentInfo->Student_program->program->p_name,
            'image' => $studentInfo->image,
            'd_iss' => $studentInfo->d_iss,
            'd_exp' => $studentInfo->d_exp,
        ];

//        $customPaper = array(0,0,189.92,280.62);

//        $pdf = PDF::loadView('admin.id_card.student_id', $data)->setPaper($customPaper,'landscape');

        $pdf = PDF::loadView('admin.id_card.student_id', $data);

        return $pdf->download($studentInfo->s_id.'_student_id.pdf');

    }
    public function faculty_id($id)
    {
        $faculty = FacultyMember::where([
            ['id',$id]
        ])->with('designation','department')->first();

//        dd($faculty);

        $data = [
            'm_name' => $faculty->m_name,
            'designation' => $faculty->designation->designation,
            'image' => $faculty->image,
            'department' => $faculty->department->name,
        ];

        $pdf = PDF::loadView('admin.id_card.faculty_id', $data);

        return $pdf->download($faculty->m_name.'_faculty_id.pdf');
    }

    public function employ_id($id)
    {
        $employInfo = Employ::where([
            ['id',$id]
        ])->with('designation','administrators')->first();

        $data = [
            'e_name' => $employInfo->e_name,
            'designation' => $employInfo->designation->designation,
            'image' => $employInfo->image,
            'administrators' => $employInfo->administrators->o_name,
        ];

        $pdf = PDF::loadView('admin.id_card.employ_id', $data);

        return $pdf->download($employInfo->e_name.'_employ_id.pdf');

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
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
