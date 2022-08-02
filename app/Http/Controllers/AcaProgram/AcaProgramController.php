<?php

namespace App\Http\Controllers\AcaProgram;

use App\Http\Controllers\Controller;
use App\Models\AcaProgram\AcaProgram;
use App\Models\Settings\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class AcaProgramController extends Controller
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

    public function aca_program()
    {
        $acaProgram =DB::table('aca_programs')
            ->join('departments','aca_programs.dept_id', '=','departments.id')
            ->select('departments.name','aca_programs.p_name','aca_programs.status','aca_programs.id')->get();


        return view('admin.acaprogram.index',compact('acaProgram'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $department = Department::all();
        return view('admin.acaprogram.add',compact('department'));
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
            'p_name' => 'required',
            'credits' => 'required',
            'm_year' => 'required',
            'm_course' => 'required',
            'cgpa' => 'required',
            'p_objective' => 'required',
            'p_outcome' => 'required',
            'c_structure' => 'required',
            'c_distribution' => 'required',
            'dept_id' => 'required',
            'status' => 'required',

        ],
            [
                'p_name.required' => 'Please Input Program Name ',
                'credits.required' => 'Please Input Credits',
                'm_year.required' => 'Please Input ',
                'm_course.required' => 'Please Input field',
                'cgpa.required' => 'Please Input field ',
                'p_objective.required' => 'Please Input field',
                'p_outcome.required' => 'Please Input field ',
                'c_structure.required' => 'Please Input field',
                'c_distribution.required' => 'Please  Input field',
                'dept_id.required' => 'Please select Department',
                'status.required' => 'Please Select Status',
            ]);

        AcaProgram::insert([
            'p_name' => $request->p_name,
            'credits' => $request->credits,
            'm_year' => $request->m_year,
            'm_course' => $request->m_course,
            'cgpa' => $request->cgpa,
            'p_objective' => $request->p_objective,
            'p_outcome' => $request->p_outcome,
            'c_structure' => $request->c_structure,
            'c_distribution' => $request->c_distribution,
            'dept_id' => $request->dept_id,
            'status' => $request->status,
            'created_at' => Carbon::now()
        ]);

        return redirect('/admin/aca_program/add')->with('status', 'Academic Program Creat successfully');



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

        $acaprogram = AcaProgram::find($id);
        $acaprogram['departments']=Department::where('id',$acaprogram->dept_id)->first();

        return view('admin.acaprogram.edit',compact(['department','acaprogram']));
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
            'p_name' => 'required',
            'credits' => 'required',
            'm_year' => 'required',
            'm_course' => 'required',
            'cgpa' => 'required',
            'p_objective' => 'required',
            'p_outcome' => 'required',
            'c_structure' => 'required',
            'c_distribution' => 'required',
            'dept_id' => 'required',
            'status' => 'required',

        ],
            [
                'p_name.required' => 'Please Input Program Name ',
                'credits.required' => 'Please Input Credits',
                'm_year.required' => 'Please Input ',
                'm_course.required' => 'Please Input field',
                'cgpa.required' => 'Please Input field ',
                'p_objective.required' => 'Please Input field',
                'p_outcome.required' => 'Please Input field ',
                'c_structure.required' => 'Please Input field',
                'c_distribution.required' => 'Please  Input field',
                'dept_id.required' => 'Please select Department',
                'status.required' => 'Please Select Status',
            ]);

        AcaProgram::find($id)->update([
            'p_name' => $request->p_name,
            'credits' => $request->credits,
            'm_year' => $request->m_year,
            'm_course' => $request->m_course,
            'cgpa' => $request->cgpa,
            'p_objective' => $request->p_objective,
            'p_outcome' => $request->p_outcome,
            'c_structure' => $request->c_structure,
            'c_distribution' => $request->c_distribution,
            'dept_id' => $request->dept_id,
            'status' => $request->status,
            'updated_at' => Carbon::now()
        ]);

        return redirect('/admin/aca_program')->with('status','Academic Program updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $acaprogram = AcaProgram::findOrFail($id);
        $acaprogram->delete();

        return redirect('/admin/aca_program')->with('success', 'Delete Successfully');
    }
}
