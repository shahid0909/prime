<?php

namespace App\Http\Controllers\AcaCalender;

use App\Http\Controllers\Controller;
use App\Models\AcaCalender\AcaCalender;
use App\Models\Settings\StartSession;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class AcaCalenderController extends Controller
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
    public function aca_calender()
    {

        $aca_calender =DB::table('aca_calenders')
            ->join('start_sessions','aca_calenders.session_id', '=','start_sessions.id')
            ->select('start_sessions.startsession','aca_calenders.upload_file',
                'aca_calenders.status','aca_calenders.id')->get();

        return view('admin.acacalender.index',compact('aca_calender'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $session = StartSession::all();


        return view('admin.acacalender.add',compact('session'));

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
            'session_id' => 'required',
            'status' => 'required',

        ],
            [
                'session_id.required' => 'Please Input field ',
                'status.required' => 'Please Select Status',

            ]);


        if($request->upload_file){
            if ($request->hasFile('upload_file')) {
                $image = $request->file('upload_file');
                $name = time().'.'.$image->getClientOriginalExtension();
                $destinationPath = public_path('/file/aca_calender/');
                $imagepath =$image->move($destinationPath, $name);
                $path ='file/aca_calender/'.$name;
            }
        }


        AcaCalender::insert([
            'session_id' => $request->session_id,
            'upload_file' => $path,
            'status' => $request->status,
            'created_at' => Carbon::now()
        ]);


        return redirect('/admin/aca_calender/add')->with('status', 'Academic Calender Creat successfully');

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
        $session = StartSession::all();

        $class_exam = AcaCalender::find($id);
        $class_exam['start_session']=StartSession::where('id',$class_exam->session_id)->first();
        return view('admin.acacalender.edit',compact(['session','class_exam']));
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
            'session_id' => 'required',
            'status' => 'required',

        ],
            [
                'session_id.required' => 'Please Input field ',
                'status.required' => 'Please Select Status',

            ]);


        $class_exam = AcaCalender::find($id);

        $old_image = $class_exam->upload_file;

        if($request->hasFile('upload_file')) {

            if(!empty($old_image)) {
                unlink($old_image);
            }

            if ($request->hasFile('upload_file')) {
                $image = $request->file('upload_file');
                $name = time().'.'.$image->getClientOriginalExtension();
                $destinationPath = public_path('/file/aca_calender/');
                $imagepath =$image->move($destinationPath, $name);
                $path ='file/aca_calender/'.$name;
            }

        }


        if(empty($request->uplode_file)){
            $path =$class_exam->upload_file;
        }


        $class_exam->update([
            'session_id' => $request->session_id,
            'upload_file' => $path,
            'status' => $request->status,
            'updated_at' => Carbon::now()
        ]);

        return redirect('/admin/aca_calender')->with('status', 'Academic Calender Update successfully');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $image = AcaCalender::find($id);
        $old_image = $image->upload_file;
        unlink($old_image);

        AcaCalender::find($id)->delete();

        return redirect('/admin/aca_calender')->with('status', 'Academic Calender delete successfully');
    }
}
