<?php

namespace App\Http\Controllers\Address;

use App\Http\Controllers\Controller;
use App\Models\Address\DeptAddress;
use App\Models\Settings\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class DeptAddressController extends Controller
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

    public function dept_address()
    {

        $dept_address =DB::table('dept_addresses')
            ->join('departments','dept_addresses.dept_id', '=','departments.id')
            ->select('departments.name','dept_addresses.address','dept_addresses.phone_number',
                'dept_addresses.email','dept_addresses.status','dept_addresses.id')->get();

        return view('admin.address.dept_address.index',compact('dept_address'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $department = Department::all();

        return view('admin.address.dept_address.add',compact('department'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        DeptAddress::insert([
            'address' => $request->address,
            'phone_number' => $request->phone_number,
            'email' => $request->email,
            'dept_id' => $request->dept_id,
            'status' => $request->status,
            'created_at' => Carbon::now()
        ]);

        return redirect('/admin/dept_address/add')->with('status', 'Address Creat successfully');

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

        $dept_address = DeptAddress::find($id);
        $dept_address['departments']=Department::where('id',$dept_address->dept_id)->first();

        return view('admin.address.dept_address.edit',compact(['dept_address','department']));
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
        DeptAddress::find($id)->update([
            'address' => $request->address,
            'phone_number' => $request->phone_number,
            'email' => $request->email,
            'dept_id' => $request->dept_id,
            'status' => $request->status,
            'updated_at' => Carbon::now()
        ]);

        return redirect('/admin/dept_address')->with('status','Department Address updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dept_address = DeptAddress::findOrFail($id);
        $dept_address->delete();

        return redirect('/admin/dept_address')->with('success', 'Delete Successfully');
    }
}
