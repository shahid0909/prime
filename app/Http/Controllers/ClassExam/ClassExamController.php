<?php

namespace App\Http\Controllers\ClassExam;

use App\Http\Controllers\Controller;
use App\Models\ClassExam\ClassExam;
use App\Models\Settings\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class ClassExamController extends Controller
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
    public function class_exam()
    {
        $class_exam = DB::table('class_exams')
            ->join('departments', 'class_exams.dept_id', '=', 'departments.id')
            //            ->join('designations','faculty_members.adi_designation_id', '=','designations.id')
            ->select('departments.name', 'class_exams.title', 'class_exams.file',
                'class_exams.date', 'class_exams.type'
                , 'class_exams.status', 'class_exams.id')->get();
                
        return view('admin.classexam.index',compact('class_exam'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $department = Department::all();
        return view('admin.classexam.add',compact('department'));
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

        $request->validate([
            'title' => 'required',
//            'file' => 'required',
            'date' => 'required',
            'type' => 'required',
            'dept_id' => 'required',
            'status' => 'required',

        ],
            [
                'title.required' => 'Please Input field ',
//                'file.required' => 'Please Input field',
                'date.required' => 'Please select ',
                'type.required' => 'Please Input description',
                'dept_id.required' => 'Please select Club',
                'status.required' => 'Please Select Status',

            ]);


        if($request->uplode_file){
            if ($request->hasFile('uplode_file')) {
                $image = $request->file('uplode_file');
                $name = time().'.'.$image->getClientOriginalExtension();
                $destinationPath = public_path('/file/class_exam_routing/');
                $imagepath =$image->move($destinationPath, $name);
                $path ='file/class_exam_routing/'.$name;
            }
        }





        ClassExam::insert([
            'title' => $request->title,
            'file' => $path,
            'date' => $request->date,
            'type' => $request->type,
            'dept_id' => $request->dept_id,
            'status' => $request->status,
            'created_at' => Carbon::now()
        ]);


        return redirect('/admin/class_exam/add')->with('status', 'Class / Exam routing Creat successfully');

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

        $class_exam = ClassExam::find($id);
        $class_exam['departments']=Department::where('id',$class_exam->dept_id)->first();
        return view('admin.classexam.edit',compact(['department','class_exam']));

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
            'title' => 'required',
//            'file' => 'required',
            'date' => 'required',
            'type' => 'required',
            'dept_id' => 'required',
            'status' => 'required',

        ],
            [
                'title.required' => 'Please Input field ',
//                'file.required' => 'Please Input field',
                'date.required' => 'Please select ',
                'type.required' => 'Please Input description',
                'dept_id.required' => 'Please select Club',
                'status.required' => 'Please Select Status',

            ]);

        $class_exam = ClassExam::find($id);

        $old_image = $class_exam->file;

        if($request->hasFile('uplode_file')) {

            if(!empty($old_image)) {
                unlink($old_image);
            }

            if ($request->hasFile('uplode_file')) {
                $image = $request->file('uplode_file');
                $name = time().'.'.$image->getClientOriginalExtension();
                $destinationPath = public_path('/file/class_exam_routing/');
                $imagepath =$image->move($destinationPath, $name);
                $path ='file/class_exam_routing/'.$name;
            }

        }


        if(empty($request->uplode_file)){
            $path =$class_exam->file;
        }


        $class_exam->update([
            'title' => $request->title,
            'file' => $path,
            'date' => $request->date,
            'type' => $request->type,
            'dept_id' => $request->dept_id,
            'status' => $request->status,
            'updated_at' => Carbon::now()
        ]);

        return redirect('/admin/class_exam')->with('status', 'Class / Exam  Update successfully');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $image = ClassExam::find($id);
        $old_image = $image->file;
        unlink($old_image);

        ClassExam::find($id)->delete();

        return redirect('/admin/class_exam')->with('status', 'Class / Exam routing delete successfully');
    }
}
