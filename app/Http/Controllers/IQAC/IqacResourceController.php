<?php

namespace App\Http\Controllers\IQAC;

use App\Http\Controllers\Controller;
use App\Models\IQAC\IqacResource;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class IqacResourceController extends Controller
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

    public function iqac_resource()
    {
        $iqac_resource = IqacResource::all();

        return view('admin.iqac_resource.index',compact('iqac_resource'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.iqac_resource.add');
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
            'r_title' => 'required',
            'status' => 'required',

        ],
            [
                'r_title.required' => 'Please Input field ',
                'status.required' => 'Please Select Status',

            ]);


        if($request->uplode_file){
            if ($request->hasFile('uplode_file')) {
                $image = $request->file('uplode_file');
                $name = time().'.'.$image->getClientOriginalExtension();
                $destinationPath = public_path('/file/iqac_resource/');
                $imagepath =$image->move($destinationPath, $name);
                $path ='file/iqac_resource/'.$name;
            }
        }


        IqacResource::insert([
            'r_title' => $request->r_title,
            'upload_file' => $path,
            'status' => $request->status,
            'created_at' => Carbon::now()
        ]);


        return redirect('/admin/iqac_resource/add')->with('status', 'Iqac Resource Creat successfully');
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
        $iqac_resource = IqacResource::find($id);

        return view('admin.iqac_resource.edit',compact('iqac_resource'));
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
            'r_title' => 'required',
            'status' => 'required',

        ],
            [
                'r_title.required' => 'Please Input field ',
                'status.required' => 'Please Select Status',

            ]);

        $iqac_resource = IqacResource::find($id);

        $old_image = $iqac_resource->upload_file;

        if($request->hasFile('upload_file')) {

            if(!empty($old_image)) {
                unlink($old_image);
            }

            if ($request->hasFile('uplode_file')) {
                $image = $request->file('uplode_file');
                $name = time().'.'.$image->getClientOriginalExtension();
                $destinationPath = public_path('/file/iqac_resource/');
                $imagepath =$image->move($destinationPath, $name);
                $path ='file/iqac_resource/'.$name;
            }

        }


        if(empty($request->uplode_file)){
            $path =$iqac_resource->upload_file;
        }


        $iqac_resource->update([
            'r_title' => $request->r_title,
            'upload_file' => $path,
            'status' => $request->status,
            'updated_at' => Carbon::now()
        ]);

        return redirect('/admin/iqac_resource')->with('status', 'IQAC Resource Update successfully');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $image = IqacResource::find($id);
        $old_image = $image->upload_file;
        unlink($old_image);

        IqacResource::find($id)->delete();

        return redirect('/admin/iqac_resource')->with('status', 'IQAC Resource delete successfully');
    }
}
