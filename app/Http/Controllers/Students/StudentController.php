<?php

namespace App\Http\Controllers\Students;

use App\Http\Controllers\Controller;
use App\Models\Students\StudentInfo;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Students\Studend;
use App\Models\Exam\ExamInfo;
use PDF;
use App\Models\Admin;
use App\Models\Settings\Batch;
use App\Models\Settings\Department;
use App\Models\Settings\GroupOrSection;
use App\Models\Settings\Program;
use App\Models\Settings\Shift;
use App\Models\Settings\StartSession;
use App\Models\Settings\ExamSession;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
class StudentController extends Controller
{
    public function strudententry(Request $request){

        $student = new Studend();
        $student->student_name = $request->std_name;
        $student->student_id = $request->std_id;
        $student->start_session_id = $request->start_session;
        $student->department_id = $request->department;
        $student->program_id = $request->program;
        $student->shift_id = $request->shift;
        $student->batche_id = $request->batch;
        $student->group_or_section_id = $request->group_section;
        if ($request->hasFile('std_image')) {
            $image = $request->file('std_image');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = ('primeunversity/student/');
            $imagepath =$image->move($destinationPath, $name);
            $student->std_image =$destinationPath.$name;

        }
        if($student->save()){
            Session::flash('message','New Student has been save successfully!');
            return redirect()->back();
        }else{
            Session::flash('error','Something went wrong!');
            return redirect()->back();
        }
    }

    public function examentry(Request $request){

//        dd($request);

        $exammangement = new ExamInfo();
        $exammangement->exam_name = $request->name_of_exam;
        $exammangement->exam_session_id = $request->examsession;
        $exammangement->date_of_exam = $request->date_of_exam;
        if($exammangement->save()){
            Session::flash('message','Save successfully!');
            return redirect()->back();
        }else{
            Session::flash('error','Something went wrong!');
            return redirect()->back();
        }
    }
  public function examdelete($id){
    $examdlete =  ExamInfo::find($id);
    if($examdlete->delete()){
        Session::flash('message','Data has been delete successfully!');
        return redirect()->back();
    }else{
        Session::flash('error','Something went wrong!');
        return redirect()->back();
    }
  }


    public function admitcardprint(Request $request){

        if (!empty($request->student_id))
        {
            $student = StudentInfo::where([
                ['status',1],
                ['s_id',$request->student_id]
            ])->with('batches','Student_program')->first();

            $studentold = DB::table('student_user')->where('student_user_sid', $request->student_id)->first();

            $exam = ExamInfo::where('id',$request->examname)->with('start_session')->first();

//            dd($studentold);
//            return view('admin.student.admit',compact(['student','exam']));

            if (!empty($student))
            {

                $data = [
                    'image' => $student->image,
                    'exam_name' => $exam->exam_name,
                    'session' => $exam->start_session->startsession,
                    'exam_d' => $exam->date_of_exam,
                    's_name' => $student->s_name,
                    's_id' => $student->s_id,
                    'batch' => $student->batches->batch,
                    'd_iss' => $student->d_iss,
                    'program' => $student->Student_program->program->p_name,
                ];

//            $customPaper = array(0,0,283.80,567.00);
                $pdf = PDF::loadView('admin.student.admit', $data)->setPaper('A4', 'landscape');;
//            $pdf = PDF::loadView('admin.certificate.pdf_en', compact($data))->setOptions(['defaultFont' => 'sans-serif']);

                return $pdf->download($student->s_id.'Admit_card.pdf');
            }
            elseif (!empty($studentold))
            {

                $data = [
                    'image' => $studentold->path,
                    'exam_name' => $exam->exam_name,
                    'session' => $exam->start_session->startsession,
                    'exam_d' => $exam->date_of_exam,
                    's_name' => $studentold->student_user_name,
                    's_id' => $studentold->student_user_sid,
                    'batch' => $studentold->student_user_batch,
                    'd_iss' => $studentold->student_user_enroll,
                    'program' => $studentold->student_user_program,
                ];
//                dd($data);

//            $customPaper = array(0,0,283.80,567.00);
                $pdf = PDF::loadView('admin.student.admit', $data)->setPaper('A4', 'landscape');;
//            $pdf = PDF::loadView('admin.certificate.pdf_en', compact($data))->setOptions(['defaultFont' => 'sans-serif']);

                return $pdf->download($studentold->student_user_sid.'Admit_card.pdf');
            }
            else
            {
                return redirect()->back();
            }




        }

        $student = StudentInfo::where([
            ['status',1],
            ['batch',$request->batch]
        ])->with('batches','Student_program')->get();

        $exam = ExamInfo::where('id',$request->examname)->with('start_session')->first();

//      dd($student);

      return redirect()->back();


//    $studentlist = DB::table('studends')
//    ->join('start_sessions','studends.start_session_id','start_sessions.id')
//    ->join('departments','studends.department_id','departments.id')
//    ->join('programs','studends.program_id','programs.id')
//    ->join('shifts','studends.shift_id','shifts.id')
//    ->join('batches','studends.batche_id','batches.id')
//    ->join('group_or_sections','studends.group_or_section_id','group_or_sections.id')
//    ->select('studends.student_name','studends.student_id','studends.id','studends.std_image',
//        'start_sessions.startsession','departments.department','programs.program','shifts.shift','batches.batche','group_or_sections.groupsection')
//    ->where('batches.id','=',$request->batch)
//    ->get();
//    $examlist = DB::table('exam_infos')
//    ->join('exam_sessions','exam_infos.exam_session_id','exam_sessions.id')
//    ->select('exam_infos.exam_name','exam_infos.date_of_exam','exam_infos.id','exam_sessions.exam_session')
//    ->where('exam_infos.id','=',$request->examname)->first();
//
//    $examlistsearc = DB::table('exam_infos')
//    ->join('exam_sessions','exam_infos.exam_session_id','exam_sessions.id')
//    ->select('exam_infos.exam_name','exam_infos.date_of_exam','exam_infos.id','exam_sessions.exam_session')->get();
//    $studentlistt =Batch::all();
//    return view('admin.student.printadmincardone',['studentlist'=>$studentlist,'examlist'=>$examlist,'examlistsearc'=>$examlistsearc,'studentlistt'=>$studentlistt]);
  }

    public function admitcardprintold(Request $request){

        if (!empty($request->student_id))
        {
            $users = DB::table('student_user')->where('student_user_sid', $request->student_id)->first();

            $exam = ExamInfo::where('id',$request->examname)->with('start_session')->first();
//
//            dd($users);
//            return view('admin.student.admit',compact(['student','exam']));


            $data = [
                'exam_name' => $exam->exam_name,
                's_name' => $users->student_user_name,
                's_id' => $users->student_user_sid,
                'batch' => $users->student_user_batch,
                'program' => $users->student_user_program,
            ];

//            $customPaper = array(0,0,283.80,567.00);
            $pdf = PDF::loadView('admin.student.admitold', $data)->setPaper('A4', 'landscape');;
//            $pdf = PDF::loadView('admin.certificate.pdf_en', compact($data))->setOptions(['defaultFont' => 'sans-serif']);

            return $pdf->download($users->student_user_sid.'Admit_card.pdf');


        }

        return redirect()->back();

    }
}
