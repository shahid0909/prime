<?php

namespace App\Http\Controllers\ImportentDate;

use App\Http\Controllers\Controller;
use App\Models\ImportentDate\ImportentDate;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class ImportentDateController extends Controller
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
    public function important_date()
    {
        $i_date = ImportentDate::all();
       return view('admin.importent_date.index',compact('i_date'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.importent_date.add');
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
            'i_title' => 'required',
            's_date' => 'required',
            'e_date' => 'required',
            'status' => 'required',

        ],
            [
                'i_title.required' => 'Please Input field',
                's_date.required' => 'Please Select field',
                'e_date.required' => 'Please Input field ',
                'status.required' => 'Please Select Status',

            ]);

//        dd($request);


        ImportentDate::insert([
            'i_title' => $request->i_title,
            's_date' => $request->s_date,
            'e_date' => $request->e_date,
            'status' => $request->status,
            'created_at' => Carbon::now()
        ]);


        return redirect('/admin/important_date/add')->with('status', 'Important date Creat successfully');


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
        $i_date = ImportentDate::find($id);

        return view('admin\importent_date.edit',compact('i_date'));
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
            'i_title' => 'required',
            's_date' => 'required',
            'e_date' => 'required',
            'status' => 'required',

        ],
            [
                'i_title.required' => 'Please Input field',
                's_date.required' => 'Please Select field',
                'e_date.required' => 'Please Input field ',
                'status.required' => 'Please Select Status',

            ]);

        ImportentDate::find($id)->update([
            'i_title' => $request->i_title,
            's_date' => $request->s_date,
            'e_date' => $request->e_date,
            'status' => $request->status,
            'updated_at' => Carbon::now()
        ]);

        return redirect('/admin/important_date')->with('status','Admission Requirement updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $admission_requirement = ImportentDate::findOrFail($id);
        $admission_requirement->delete();

        return redirect('/admin/important_date')->with('success', 'Delete Successfully');
    }
}
