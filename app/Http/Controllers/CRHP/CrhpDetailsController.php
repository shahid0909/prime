<?php

namespace App\Http\Controllers\CRHP;

use App\Http\Controllers\Controller;
use App\Models\CRHP\CrhpDetails;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Session;

class CrhpDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $crhp_details = CrhpDetails::all();

       return view('admin.crhp_details.index',compact('crhp_details'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.crhp_details.add');
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
            'title' => 'required',
            'category' => 'required',
            'status' => 'required',
        ]);

//        dd($request->upload_file);
            if ($request->hasFile('upload_file')) {
                $image = $request->file('upload_file');
                $name = time().'.'.$image->getClientOriginalExtension();
                $destinationPath = public_path('/file/crhp_details/');
                $imagepath =$image->move($destinationPath, $name);
                $path ='file/crhp_details/'.$name;
            }


        $crhp_details = new CrhpDetails();
        $crhp_details->title = $request->title;
        $crhp_details->file = $path;
        $crhp_details->date = $request->date;
        $crhp_details->category = $request->category;
        $crhp_details->status = $request->status;
        if ($crhp_details->save()) {
            return redirect('/admin/crhp_details/add')->with('status', 'CRHP Details Creat successfully');
        } else {
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
        $crhp_details = CrhpDetails::find($id);

        return view('admin.crhp_details.edit',compact('crhp_details'));
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
            'title' => 'required',
            'category' => 'required',
            'status' => 'required',
        ]);

        $class_exam = CrhpDetails::find($id);

        $old_image = $class_exam->file;

        if($request->hasFile('uplode_file')) {

            if(!empty($old_image)) {
                unlink($old_image);
            }

            if ($request->hasFile('upload_file')) {
                $image = $request->file('upload_file');
                $name = time().'.'.$image->getClientOriginalExtension();
                $destinationPath = public_path('/file/crhp_details/');
                $imagepath =$image->move($destinationPath, $name);
                $path ='file/crhp_details/'.$name;
            }

        }

        if(empty($request->uplode_file)){
            $path =$class_exam->file;
        }

        $class_exam->title = $request->title;
        $class_exam->file = $path;
        $class_exam->date = $request->date;
        $class_exam->category = $request->category;
        $class_exam->status = $request->status;
        if ($class_exam->save()) {
            return redirect('/admin/crhp_details')->with('status', 'CRHP Details Creat successfully');
        } else {
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $image = CrhpDetails::find($id);
        $old_image = $image->file;
        unlink($old_image);

        CrhpDetails::find($id)->delete();

        return redirect('/admin/crhp_details')->with('status', 'CHRF Details delete successfully');
    }
}
