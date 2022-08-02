<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use App\Models\Administrator\Administrator;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class AdministratorController extends Controller
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
        dd('you');
    }

    public function administrator()
    {

        $admin = Administrator::all();
        return view('admin.administrators.index',compact('admin'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.administrators.add');
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
            'o_name' => 'required',

            'status' => 'required',
        ],
            [
                'o_name.required' => 'Please Input title ',

                'status.required' => 'Please select Status',

            ]);

        Administrator::insert([
            'o_name' => $request->o_name,
            'status' => $request->status,
            'created_at' => Carbon::now()
        ]);

        return redirect('/admin/administrators/add')->with('status', 'Administrator Creat successfully');

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
        $administrator = Administrator::find($id);

        return view('admin.administrators.edit',compact('administrator'));
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
            'o_name' => 'required',

            'status' => 'required',
        ],
            [
                'o_name.required' => 'Please Input title ',

                'status.required' => 'Please select Status',

            ]);

        $administrator = Administrator::find($id);

        $administrator->update([
            'o_name' => $request->o_name,
            'status' => $request->status,
            'updated_at' => Carbon::now()
        ]);


        return redirect('/admin/administrator')->with('status', 'Administrator  Update successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $administrator = Administrator::findOrFail($id);
        $administrator->delete();

        return redirect('/admin/administrator')->with('success', 'Delete Successfully');
    }
}
