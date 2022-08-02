<?php

namespace App\Http\Controllers\Notice;

use App\Http\Controllers\Controller;
use App\Models\Notice\DeptNotice;
use App\Models\Settings\Department;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class DeptNoticeController extends Controller
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

    public function dept_notice()
    {
        $dept_notice =DB::table('dept_notices')
            ->join('departments','dept_notices.dept_id', '=','departments.id')
            ->select('departments.name','dept_notices.title','dept_notices.file','dept_notices.description','dept_notices.date',
                'dept_notices.status','dept_notices.id')->get();

        return view('admin.dept_notice.index',compact('dept_notice'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $department = Department::all();
        return view('admin.dept_notice.add',compact('department'));
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
            'title' => 'required|max:255',
            'date' => 'required',
            'dept_id' => 'required',
            'status' => 'required',
        ],
            [
                'title.required' => 'Please Input title ',
                'title.max' => 'title Less Then 255Chars',
                'date.required' => 'Please Select Date',
                'dept_id.required' => 'Please Select Department Name',
                'status.required' => 'Please select Status',

            ]);

        if($request->file){
            if ($request->hasFile('file')) {
                $image = $request->file('file');
                $name = time().'.'.$image->getClientOriginalExtension();
                $destinationPath = public_path('/file/dept_notice');
                $imagepath =$image->move($destinationPath, $name);
                $file ='file/dept_notice/'.$name;
            }
        }

//dd($request);


        DeptNotice::insert([
            'title' => $request->title,
            'date' => $request->date,
            'file' => $file,
            'description' => $request->description,
            'dept_id' => $request->dept_id,
            'status' => $request->status,
            'created_at' => Carbon::now()
        ]);

        return redirect('/admin/add_dept_notice')->with('status', 'Department  Notice Creat successfully');

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

        $dept_notice = DeptNotice::find($id);
        $dept_notice['departments']=Department::where('id',$dept_notice->dept_id)->first();

        return view('admin.dept_notice.edit',compact(['dept_notice','department']));
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
            'title' => 'required|max:255',
            'date' => 'required',
            'dept_id' => 'required',
            'status' => 'required',
        ],
            [
                'title.required' => 'Please Input title ',
                'title.max' => 'title Less Then 255Chars',
                'date.required' => 'Please Select Date',
                'dept_id.required' => 'Please Select Department Name',
                'status.required' => 'Please select Status',

            ]);


        $Dept_notice = DeptNotice::find($id);



        $old_image = $Dept_notice->file;

        if($request->hasFile('file')) {

            if(!empty($old_image)) {
                unlink($old_image);
            }

            if ($request->hasFile('file')) {
                $image = $request->file('file');
                $name = time().'.'.$image->getClientOriginalExtension();
                $destinationPath = public_path('/file/dept_notice/');
                $imagepath =$image->move($destinationPath, $name);
                $path ='file/dept_notice/'.$name;
            }

        }


        if(empty($request->uplode_file)){
            $path =$Dept_notice->file;
        }


        $Dept_notice->update([
            'title' => $request->title,
            'date' => $request->date,
            'file' => $path,
            'description' => $request->description,
            'dept_id' => $request->dept_id,
            'status' => $request->status,
            'updated_at' => Carbon::now()
        ]);


        return redirect('/admin/dept_notice')->with('status', 'Department Notice  Update successfully');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dept_notice = DeptNotice::findOrFail($id);
        $dept_notice->delete();

        return redirect('/admin/dept_notice')->with('success', 'Delete Successfully');
    }
}
