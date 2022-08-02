<?php

namespace App\Http\Controllers\AdmissionRequirement;

use App\Http\Controllers\Controller;
use App\Models\AdmissionRequirement\AdmissionRequirement;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class AdmissionRequirementController extends Controller
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

    public function admission_requirement()
    {
        $adminssion_requirement = AdmissionRequirement::all();

       return view('admin.admission_requirement.index',compact('adminssion_requirement'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.admission_requirement.add');
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
            'schedule' => 'required',
            'type' => 'required',
            'a_l_date' => 'required',
            'a_t_date' => 'required',
            'a_requirement' => 'required',
            'how_to_apply' => 'required',
            'status' => 'required',

        ],
            [
                'schedule.required' => 'Please Input field',
                'type.required' => 'Please Select field',
                'a_l_date.required' => 'Please Input field ',
                'a_t_date.required' => 'Please Input field',
                'a_requirement.required' => 'Please Input field ',
                'how_to_apply.required' => 'Please Input field',
                'status.required' => 'Please Select Status',

            ]);

//        dd($request);


        AdmissionRequirement::insert([
            'schedule' => $request->schedule,
            'type' => $request->type,
            'a_l_date' => $request->a_l_date,
            'a_t_date' => $request->a_t_date,
            'a_requirement' => $request->a_requirement,
            'how_to_apply' => $request->how_to_apply,
            'status' => $request->status,
            'created_at' => Carbon::now()
        ]);


        return redirect('/admin/admission_requirement/add')->with('status', 'Admission Requirement Creat successfully');


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
        $admission_requirement = AdmissionRequirement::find($id);

        return view('admin.admission_requirement.edit',compact('admission_requirement'));
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
            'schedule' => 'required',
            'type' => 'required',
            'a_l_date' => 'required',
            'a_t_date' => 'required',
            'a_requirement' => 'required',
            'how_to_apply' => 'required',
            'admission_fee' => 'required',
            'status' => 'required',

        ],
            [
                'schedule.required' => 'Please Input field',
                'type.required' => 'Please Select field',
                'a_l_date.required' => 'Please Input field',
                'a_t_date.required' => 'Please Input field',
                'a_requirement.required' => 'Please Input field',
                'how_to_apply.required' => 'Please Input field',
                'admission_fee.required' => 'Please Input field',
                'status.required' => 'Please Select Status',

            ]);
//        dd($request);

        $requirement =  AdmissionRequirement::find($id);

        $requirement->schedule = $request->schedule;
        $requirement->type = $request->type;
        $requirement->a_l_date = $request->a_l_date;
        $requirement->a_t_date = $request->a_t_date;
        $requirement->a_requirement = $request->a_requirement;
        $requirement->how_to_apply = $request->how_to_apply;
        $requirement->admission_fee = $request->admission_fee;
        $requirement->status = $request->status;
        $requirement->save();


        return redirect('/admin/admission_requirement')->with('status','Admission Requirement updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $admission_requirement = AdmissionRequirement::findOrFail($id);
        $admission_requirement->delete();

        return redirect('/admin/admission_requirement')->with('success', 'Delete Successfully');
    }
}
