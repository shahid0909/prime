<?php

namespace App\Http\Controllers\Result;

use App\Http\Controllers\Controller;
use App\Models\Result\Result;
use App\Models\Settings\StartSession;
use App\Models\Students\StudentInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class ResultController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function result()
    {

        $result = DB::table('results')
            ->join('student_infos', 'results.student_id', '=', 'student_infos.id')
            ->join('start_sessions','results.e_semester', '=','start_sessions.id')
            ->select('student_infos.s_name', 'student_infos.batch','start_sessions.startsession', 'results.cgpa', 'results.p_date',
                'results.status', 'results.id')->get();

        return view('admin.result.index',compact('result'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $student = StudentInfo::where([
            ['status','1'],
            ['f_semester','0'],
        ])->get();
        $session = StartSession::all();

        return view('admin.result.add',compact(['student','session']));

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
            'student_id' => 'required',
            'e_semester' => 'required',
            'f_semester' => 'required',
            'cgpa' => 'required',
            'p_date' => 'required',
            'status' => 'required',
        ]);

        $student_id = StudentInfo::where('s_id','=',$request->student_id)->first();

        if ( $request->f_semester == 1 )
        {

            $student_id->f_semester = $request->f_semester;
            $student_id->save();


            $result = new Result();
            $result->student_id = $student_id->id;
            $result->e_semester = $request->e_semester ;
            $result->f_semester = $request->f_semester;
            $result->cgpa = $request->cgpa ;
            $result->p_date = $request->p_date;
            $result->status = $request->status;
            if ($result->save()) {
                Session::flash('message', 'Save successfully!');
                return redirect()->back();
            } else {
                Session::flash('error', 'Something went wrong!');
                return redirect()->back();
            }
        }


        $result = new Result();
        $result->student_id = $student_id->id;
        $result->e_semester = $request->e_semester ;
        $result->f_semester = $request->f_semester;
        $result->cgpa = $request->cgpa ;
        $result->p_date = $request->p_date;
        $result->status = $request->status;
        if ($result->save()) {
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

        $student = StudentInfo::where([
            ['status','1'],
            ['f_semester','0'],
        ])->get();

        $session = StartSession::all();

        $result = Result::find($id);
        $result ['info'] = StudentInfo::where('id',$result->student_id)->first();
        $result ['session'] = StartSession::where('id',$result->e_semester)->first();

//        dd($result);

        return view('admin.result.edit',compact(['student','session','result']));
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
            'student_id' => 'required',
            'e_semester' => 'required',
            'f_semester' => 'required',
            'cgpa' => 'required',
            'p_date' => 'required',
            'status' => 'required',
        ]);

        $student_id = StudentInfo::where('s_id','=',$request->student_id)->first();

        if ( $request->f_semester == 1 )
        {

            $student_id->f_semester = $request->f_semester;
            $student_id->save();


            $result = Result::find($id);
            $result->student_id = $student_id->id;
            $result->e_semester = $request->e_semester ;
            $result->f_semester = $request->f_semester;
            $result->cgpa = $request->cgpa ;
            $result->p_date = $request->p_date;
            $result->status = $request->status;
            if ($result->save()) {
                Session::flash('message', 'Save successfully!');
                return redirect('/admin/result');
            } else {
                Session::flash('error', 'Something went wrong!');
                return redirect()->back();
            }
        }


        $result = Result::find($id);
        $result->student_id = $student_id->id;
        $result->e_semester = $request->e_semester ;
        $result->f_semester = $request->f_semester;
        $result->cgpa = $request->cgpa ;
        $result->p_date = $request->p_date;
        $result->status = $request->status;
        if ($result->save()) {
            Session::flash('message', 'Save successfully!');
            return redirect('/admin/result');
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
        $result = Result::find($id);

        if ($result->delete()) {
            Session::flash('message', 'Data has been delete successfully!');
            return redirect()->back();
        } else {
            Session::flash('error', 'Something went wrong!');
            return redirect()->back();
        }
    }
}
