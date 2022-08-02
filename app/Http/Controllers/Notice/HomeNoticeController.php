<?php

namespace App\Http\Controllers\Notice;

use App\Http\Controllers\Controller;
use App\Models\Notice\HomeNotice;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class HomeNoticeController extends Controller
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

    public function notice()
    {
        $home_notice = HomeNotice::all();

        return view('admin.notice.index',compact('home_notice'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.notice.add');
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
            'status' => 'required',
        ],
            [
                'title.required' => 'Please Input title ',
                'title.max' => 'title Less Then 255Chars',
                'date.required' => 'Please Select Published Date',
                'status.required' => 'Please select Status',

            ]);

        if($request->file){
            if ($request->hasFile('file')) {
                $image = $request->file('file');
                $name = time().'.'.$image->getClientOriginalExtension();
                $destinationPath = public_path('/file/home_notice');
                $imagepath =$image->move($destinationPath, $name);
                $file ='file/home_notice/'.$name;
            }
        }



        HomeNotice::insert([
            'title' => $request->title,
            'date' => $request->date,
            'file' => $file,
            'description' => $request->description,
            'status' => $request->status,
            'created_at' => Carbon::now()
        ]);


        return redirect('/admin/add_Home_notice')->with('status', 'Home Notice  Creat successfully');


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
        $home_notice = HomeNotice::find($id);
        return view('admin.notice.edit',compact('home_notice'));
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
        'status' => 'required',
    ],
        [
            'title.required' => 'Please Input title ',
            'title.max' => 'title Less Then 255Chars',
            'date.required' => 'Please Select Published Date',
            'status.required' => 'Please select Status',

        ]);

        $home_notice = HomeNotice::find($id);



        $old_image = $home_notice->file;

        if($request->hasFile('file')) {

            if(!empty($old_image)) {
                unlink($old_image);
            }

            if ($request->hasFile('file')) {
                $image = $request->file('file');
                $name = time().'.'.$image->getClientOriginalExtension();
                $destinationPath = public_path('/file/home_notice/');
                $imagepath =$image->move($destinationPath, $name);
                $path ='file/home_notice/'.$name;
            }

        }


        if(empty($request->uplode_file)){
            $path =$home_notice->file;
        }


        $home_notice->update([
            'title' => $request->title,
            'date' => $request->date,
            'file' => $path,
            'description' => $request->description,
            'status' => $request->status,
            'updated_at' => Carbon::now()
        ]);


        return redirect('/admin/Home_notice')->with('status', 'Home Notice  Update successfully');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $home_notice = HomeNotice::findOrFail($id);
        $home_notice->delete();

        return redirect('/admin/Home_notice')->with('success', 'Delete Successfully');
    }
}
