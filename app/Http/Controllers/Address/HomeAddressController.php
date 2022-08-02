<?php

namespace App\Http\Controllers\Address;

use App\Http\Controllers\Controller;
use App\Models\Address\HomeAddress;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class HomeAddressController extends Controller
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

    public function home_address()
    {

        $home_address = HomeAddress::all();
        return view('admin.address.home_address.index',compact('home_address'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.address.home_address.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        HomeAddress::insert([
            'address' => $request->address,
            'phone_number' => $request->phone_number,
            'email' => $request->email,
            'status' => $request->status,
            'created_at' => Carbon::now()
        ]);

        return redirect('/admin/home_address/add')->with('status', 'Address Creat successfully');
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
        $home_address = HomeAddress::find($id);

        return view('admin.address.home_address.edit',compact('home_address'));
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
        $home_address = HomeAddress::find($id);


           $home_address ->update([
            'address' => $request->address,
            'phone_number' => $request->phone_number,
            'email' => $request->email,
            'status' => $request->status,
            'updated_at' => Carbon::now()
        ]);

        return redirect('/admin/home_address')->with('status','Address updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $home_address = HomeAddress::findOrFail($id);
        $home_address->delete();

        return redirect('/admin/home_address')->with('success', 'Home Address Delete Successfully');
    }
}
