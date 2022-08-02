<?php

namespace App\Http\Controllers\Massage;

use App\Http\Controllers\Controller;
use App\Models\FacultyMember\FacultyMember;
use App\Models\Massage\MassageDeptHad;
use App\Models\Settings\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class MassageDeptHadController extends Controller
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
    public function massage_department_head()
    {


        $department_head =DB::table('massage_dept_hads')
            ->join('faculty_members','massage_dept_hads.faculty_member_id', '=','faculty_members.id')
            ->join('departments','massage_dept_hads.dept_id', '=','departments.id')
            ->select('faculty_members.m_name','departments.name','massage_dept_hads.short_massage','massage_dept_hads.long_massage',
                'massage_dept_hads.status', 'massage_dept_hads.id')->get();

        return view('admin.massage.department_massage.index',compact('department_head'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $department = Department::all();

         $faculty_member = FacultyMember::where('designation_id',5)->orWhere('designation_id',2)->orWhere('designation_id',66)
            ->orWhere('designation_id',18)->get();


        // dd($faculty_member);




        // $faculty_member = FacultyMember::where('designation_id','5')->get();

        return view('admin.massage.department_massage.add',compact(['department','faculty_member']));
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
            'dept_id' => 'required',
            'faculty_member_id' => 'required',
            'short_massage' => 'required',
            'long_massage' => 'required',
            'status' => 'required',

        ],
            [
                'dept_id.required' => 'Please Input field',
                'faculty_member_id.required' => 'Please Input field',
                'short_massage.required' => 'Please Select field',
                'long_massage.required' => 'Please Input field',
                'status.required' => 'Please Select Status',

            ]);


        MassageDeptHad::insert([
            'dept_id' => $request->dept_id,
            'faculty_member_id' => $request->faculty_member_id,
            'short_massage' => $request->short_massage,
            'long_massage' => $request->long_massage,
            'status' => $request->status,
            'created_at' => Carbon::now()
        ]);


        return redirect('/admin/massage_department_head/add')->with('status','Department Head Massage Creat successfully');
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


         $faculty_member = FacultyMember::where('designation_id',5)->orWhere('designation_id',2)->orWhere('designation_id',66)
            ->orWhere('designation_id',18)->get();

        $massage_vc = MassageDeptHad::find($id);
        $massage_vc['department'] = Department::where('id',$massage_vc->dept_id)->first();
        $massage_vc['faculty_member'] = FacultyMember::where('id',$massage_vc->faculty_member_id)->first();

        return view('admin.massage.department_massage.edit',compact(['department','faculty_member','massage_vc']));
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
            'dept_id' => 'required',
            'faculty_member_id' => 'required',
            'short_massage' => 'required',
            'long_massage' => 'required',
            'status' => 'required',

        ],
            [
                'dept_id.required' => 'Please Input field',
                'faculty_member_id.required' => 'Please Input field',
                'short_massage.required' => 'Please Select field',
                'long_massage.required' => 'Please Input field',
                'status.required' => 'Please Select Status',

            ]);

        $requirement = MassageDeptHad::find($id);

        $requirement->dept_id = $request->dept_id;
        $requirement->faculty_member_id = $request->faculty_member_id;
        $requirement->short_massage = $request->short_massage;
        $requirement->long_massage = $request->long_massage;
        $requirement->status = $request->status;
        $requirement->save();

        return redirect('/admin/massage_department_head')->with('status','Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $admission_requirement = MassageDeptHad::findOrFail($id);
        $admission_requirement->delete();

        return redirect('/admin/massage_department_head')->with('success', 'Delete Successfully');
    }
}
