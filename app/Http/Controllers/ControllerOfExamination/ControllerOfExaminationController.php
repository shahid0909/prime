<?php

namespace App\Http\Controllers\ControllerOfExamination;

use App\Http\Controllers\Controller;
use App\Models\ControllerOfExamination\ControllerOfExamination;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class ControllerOfExaminationController extends Controller
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

    public function c_o_e()
    {
        $c_o_e = ControllerOfExamination::all();

       return view('admin.controller_of_examination.index',compact('c_o_e'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.controller_of_examination.add');
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
            'papers' => 'required',
            'status' => 'required',
        ],
            [
                'papers.required' => 'Please Input ',
                'status.required' => 'Please input',
            ]);

        ControllerOfExamination::insert([
            'papers' => $request->papers,
            'status' => $request->status,
            'created_at' => Carbon::now()
        ]);


        return redirect('/admin/c_o_e/add')->with('status', 'Controller of Examination Creat successfully');

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
        $c_o_e = ControllerOfExamination::find($id);

        return view('admin.controller_of_examination.edit',compact('c_o_e'));
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
            'papers' => 'required',
            'status' => 'required',
        ],
            [
                'papers.required' => 'Please Input ',
                'status.required' => 'Please input',
            ]);

        ControllerOfExamination::find($id)->update([
            'papers' => $request->papers,
            'status' => $request->status,
            'updated_at' => Carbon::now()
        ]);

        return redirect('/admin/c_o_e')->with('status','Controller Of Examination updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $iqac = ControllerOfExamination::findOrFail($id);
        $iqac->delete();

        return redirect('/admin/c_o_e')->with('success', 'Delete Successfully');
    }
}
