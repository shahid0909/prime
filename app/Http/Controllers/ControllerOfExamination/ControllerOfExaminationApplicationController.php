<?php

namespace App\Http\Controllers\ControllerOfExamination;

use App\Http\Controllers\Controller;
use App\Models\ControllerOfExamination\ControllerOfExaminationApplication;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class ControllerOfExaminationApplicationController extends Controller
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

    public function c_o_e_a()
    {
        $application = ControllerOfExaminationApplication::all();
       return view('admin.controller_of_examination_application.index',compact('application'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.controller_of_examination_application.add');
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
            'a_title' => 'required',
            'uplode_file' => 'required',
            'status' => 'required',
        ],
            [
                'a_title.required' => 'Please Input field',
                'uplode_file.required' => 'Please Input field',
                'status.required' => 'Please Select Status',
            ]);


        if($request->uplode_file){
            if ($request->hasFile('uplode_file')) {
                $image = $request->file('uplode_file');
                $name = time().'.'.$image->getClientOriginalExtension();
                $destinationPath = public_path('/file/controller_of_application/');
                $imagepath =$image->move($destinationPath, $name);
                $path ='file/controller_of_application/'.$name;
            }
        }


        ControllerOfExaminationApplication::insert([
            'a_title' => $request->a_title,
            'uplode_file' => $path,
            'status' => $request->status,
            'created_at' => Carbon::now()
        ]);


        return redirect('/admin/c_o_e_a/add')->with('status', 'Controller Of Examination Creat successfully');
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
        $c_o_e_a = ControllerOfExaminationApplication::find($id);

        return view('admin.controller_of_examination_application.edit',compact('c_o_e_a'));
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
            'a_title' => 'required',
            'status' => 'required',
        ],
            [
                'a_title.required' => 'Please Input field',
                'status.required' => 'Please Select Status',
            ]);


        $class_exam = ControllerOfExaminationApplication::find($id);

        $old_image = $class_exam->uplode_file;

        if($request->hasFile('uplode_file')) {

            if(!empty($old_image)) {
                unlink($old_image);
            }

            if ($request->hasFile('uplode_file')) {
                $image = $request->file('uplode_file');
                $name = time().'.'.$image->getClientOriginalExtension();
                $destinationPath = public_path('/file/controller_of_application/');
                $imagepath =$image->move($destinationPath, $name);
                $path ='file/controller_of_application/'.$name;
            }

        }


        if(empty($request->uplode_file)){
            $path =$class_exam->uplode_file;
        }


        $class_exam->update([
            'a_title' => $request->a_title,
            'uplode_file' => $path,
            'status' => $request->status,
            'updated_at' => Carbon::now()
        ]);

        return redirect('/admin/c_o_e_a')->with('status', ' Update successfully');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $image = ControllerOfExaminationApplication::find($id);
        $old_image = $image->uplode_file;
        unlink($old_image);

        ControllerOfExaminationApplication::find($id)->delete();

        return redirect('/admin/c_o_e_a')->with('status', 'Controller Of Examination Application delete successfully');
    }
}
