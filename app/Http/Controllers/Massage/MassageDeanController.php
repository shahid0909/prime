<?php

namespace App\Http\Controllers\Massage;

use App\Http\Controllers\Controller;
use App\Models\Employ\Employ;
use App\Models\FacultyMember\FacultyMember;
use App\Models\Massage\MassageDean;
use App\Models\Settings\Faculty;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class MassageDeanController extends Controller
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
    public function massage_dean()
    {


        $dean_massage =DB::table('massage_deans')
            ->join('faculties','massage_deans.faculty_id', '=','faculties.id')
            ->join('faculty_members','massage_deans.e_id', '=','faculty_members.id')
            ->select('faculties.name','faculty_members.m_name','massage_deans.short_massage','massage_deans.long_massage',
                'massage_deans.status', 'massage_deans.id')->get();

                // dd($dean_massage);


        return view('admin.massage.dean_massage.index',compact('dean_massage'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $faculty = Faculty::all();


         $employ = FacultyMember::where('designation_id',12)->orWhere('designation_id',1)->orWhere('designation_id',66)->orWhere('designation_id',19)->get();


            
            // dd($employ);


        return view('admin.massage.dean_massage.add',compact(['faculty','employ']));
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
            'faculty_id' => 'required',
            'e_id' => 'required',
            'short_massage' => 'required',
            'long_massage' => 'required',
            'status' => 'required',

        ],
            [
                'faculty_id.required' => 'Please Input field',
                'e_id.required' => 'Please Input field',
                'short_massage.required' => 'Please Select field',
                'long_massage.required' => 'Please Input field',
                'status.required' => 'Please Select Status',

            ]);


        MassageDean::insert([
            'faculty_id' => $request->faculty_id,
            'e_id' => $request->e_id,
            'short_massage' => $request->short_massage,
            'long_massage' => $request->long_massage,
            'status' => $request->status,
            'created_at' => Carbon::now()
        ]);


        return redirect('/admin/massage_dean/add')->with('status','Dean Massage Creat successfully');

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
        
         $employ = FacultyMember::where('designation_id',12)->orWhere('designation_id',1)->orWhere('designation_id',66)->orWhere('designation_id',19)->get();


            
        $faculty = Faculty::all();

        $massage_vc = MassageDean::find($id);
        $massage_vc['e_name'] = FacultyMember::where('id',$massage_vc->e_id)->first();
        $massage_vc['faculty'] = Faculty::where('id',$massage_vc->faculty_id)->first();

        return view('admin.massage.dean_massage.edit',compact(['massage_vc','employ','faculty']));
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
            'faculty_id' => 'required',
            'e_id' => 'required',
            'short_massage' => 'required',
            'long_massage' => 'required',
            'status' => 'required',

        ],
            [
                'faculty_id.required' => 'Please Input field',
                'e_id.required' => 'Please Input field',
                'short_massage.required' => 'Please Select field',
                'long_massage.required' => 'Please Input field',
                'status.required' => 'Please Select Status',

            ]);

        $requirement = MassageDean::find($id);

        $requirement->faculty_id = $request->faculty_id;
        $requirement->e_id = $request->e_id;
        $requirement->short_massage = $request->short_massage;
        $requirement->long_massage = $request->long_massage;
        $requirement->status = $request->status;
        $requirement->save();

        return redirect('/admin/massage_dean')->with('status','Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $admission_requirement = MassageDean::findOrFail($id);
        $admission_requirement->delete();

        return redirect('/admin/massage_dean')->with('success', 'Delete Successfully');
    }
}
