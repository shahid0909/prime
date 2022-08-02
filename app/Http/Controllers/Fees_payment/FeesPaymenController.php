<?php

namespace App\Http\Controllers\Fees_payment;

use App\Http\Controllers\Controller;
use App\Models\AcaProgram\AcaProgram;
use App\Models\Fees_payment\Fees_paymen;
use App\Models\Settings\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class FeesPaymenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $fees= DB::table('fees_paymens')
            ->join('departments', 'fees_paymens.dept_id', '=', 'departments.id')
            ->join('aca_programs','fees_paymens.program_id', '=','aca_programs.id')
            ->select('departments.name', 'aca_programs.p_name', 'fees_paymens.course_fee', 'fees_paymens.p_result', 'fees_paymens.p_amount'
                , 'fees_paymens.m_fee', 'fees_paymens.scholarship', 'fees_paymens.financial_waver', 'fees_paymens.status', 'fees_paymens.id')->get();

       return view('admin.fees_payment.index',compact('fees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $department = Department::all();

        $aca_program = AcaProgram::where('status','1')->get();

//        dd($department);

        return view('admin.fees_payment.add',compact(['department','aca_program']));
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
            'dept_id' => 'required',
            'program_id' => 'required',
            'course_fee' => 'required',
            'p_result' => 'required',
            'p_amount' => 'required',
            'm_fee' => 'required',
            'r_q_admission' => 'required',
            'general_information' => 'required',
            'scholarship' => 'required',
            'financial_waver' => 'required',
            'status' => 'required',
        ]);

//        dd($request);
        $fees = new Fees_paymen();
        $fees->dept_id = $request->dept_id;
        $fees->program_id = $request->program_id;
        $fees->course_fee = $request->course_fee;
        $fees->p_result = json_encode($request->p_result);
        $fees->p_amount = json_encode($request->p_amount);
        $fees->m_fee = json_encode($request->m_fee);
        $fees->r_q_admission = $request->r_q_admission;
        $fees->general_information = $request->general_information;
        $fees->scholarship = $request->scholarship;
        $fees->financial_waver = $request->financial_waver;
        $fees->status = $request->status;
        if ($fees->save()) {
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

        $department = Department::all();
        $aca_program = AcaProgram::all();


        $fees = Fees_paymen::find($id);

        $fees['departments']=Department::where('id',$fees->dept_id)->first();

        $fees['aca_program']=AcaProgram::where('id',$fees->program_id)->first();


        return view('admin.fees_payment.edit',compact(['department','aca_program','fees']));

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
            'program_id' => 'required',
            'course_fee' => 'required',
            'scholarship' => 'required',
            'financial_waver' => 'required',
            'status' => 'required',
        ]);

        $fees = Fees_paymen::find($id);


        if ($fees->p_result)
        {
            $previousp_result = json_decode($fees->p_result, true);

        }
        $requestEmail = $request->p_result;

        foreach ($requestEmail as $itememail){

            array_push($previousp_result,$itememail);
        }


        if ($fees->p_amount)
        {
            $previousp_amount = json_decode($fees->p_amount, true);

        }
        $requestp_amount = $request->p_amount;

        foreach ($requestp_amount as $itememails){

            array_push($previousp_amount,$itememails);
        }


        if ($fees->m_fee)
        {
            $previousm_fee = json_decode($fees->m_fee, true);

        }
        $requestm_fee = $request->m_fee;

        foreach ($requestm_fee as $itememailss){

            array_push($previousm_fee,$itememailss);
        }


        $fees->dept_id = $request->dept_id;
        $fees->program_id = $request->program_id;
        $fees->course_fee = $request->course_fee;
        $fees->p_result = json_encode($previousp_result);
        $fees->p_amount = json_encode($previousp_amount);
        $fees->m_fee = json_encode($previousm_fee);
        $fees->r_q_admission = $request->r_q_admission;
        $fees->general_information = $request->general_information;
        $fees->scholarship = $request->scholarship;
        $fees->financial_waver = $request->financial_waver;
        $fees->status = $request->status;
        if ($fees->save()) {
            Session::flash('message', 'Save successfully!');
            return redirect('/admin/fees');
        } else {
            Session::flash('error', 'Something went wrong!');
            return redirect()->back();
        }
    }

    /**w2d
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Fees_paymen::find($id)->delete();

        return redirect('/admin/fees')->with('status', 'Fees & Payment delete successfully');
    }


    public function destroy_p_result($id,$did)
    {

        $faculty = Fees_paymen::where('id', $did)->first();

        $oldphone = json_decode($faculty->p_result, true);
        $previesid =  $oldphone[$id];
        unset($oldphone[$id]);

        $ooldphone = json_encode($oldphone);
        $faculty->update(['p_result' => $ooldphone]);
        return back()->with('success','Waiver Policy Result removed successfully.');

    }

    public function destroy_p_amount($id,$did)
    {

        $faculty = Fees_paymen::where('id', $did)->first();

        $oldphone = json_decode($faculty->p_amount, true);
        $previesid =  $oldphone[$id];
        unset($oldphone[$id]);

        $ooldphone = json_encode($oldphone);
        $faculty->update(['p_amount' => $ooldphone]);
        return back()->with('success','Waiver Policy Result removed successfully.');

    }

    public function destroy_m_fee($id,$did)
    {

        $faculty = Fees_paymen::where('id', $did)->first();

        $oldphone = json_decode($faculty->m_fee, true);
        $previesid =  $oldphone[$id];
        unset($oldphone[$id]);

        $ooldphone = json_encode($oldphone);
        $faculty->update(['m_fee' => $ooldphone]);
        return back()->with('success','Waiver Policy Result removed successfully.');
    }


}
