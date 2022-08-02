<?php

namespace App\Http\Controllers\BreakingNews;

use App\Http\Controllers\Controller;
use App\Models\BreakingNews\BreakingNews;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Intervention\Image\ImageManagerStatic as Image;

class BreakingNewsController extends Controller
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

    public function breaking_news()
    {
        $breaking_news = BreakingNews::all();
        return view('admin.breaking_news.index',compact('breaking_news'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.breaking_news.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        dd($request->uplode_file);

        $request->validate([
            'b_title' => 'required',
//            'uplode_file' => 'required',
            'status' => 'required',
        ],
            [
                'b_title.required' => 'Please Input ',
//                'uplode_file.required' => 'Please Input',
                'status.required' => 'Please input',
            ]);




        if($request->uplode_file){
            if ($request->hasFile('uplode_file')) {
                $image = $request->file('uplode_file');
                $name = time().'.'.$image->getClientOriginalExtension();
                $destinationPath = public_path('/file/breaking_news/');
                $imagepath =$image->move($destinationPath, $name);
                $path ='file/breaking_news/'.$name;
            }
        }





        BreakingNews::insert([
            'b_title' => $request->b_title,
            'file' => $path,
            'status' => $request->status,
            'created_at' => Carbon::now()
        ]);


        return redirect('/admin/breaking_news/add')->with('status', 'Breaking News Creat successfully');
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
        $breaking_news = BreakingNews::find($id);

        return view('admin.breaking_news.edit',compact('breaking_news'));
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
            'b_title' => 'required',
//            'uplode_file' => 'required',
            'status' => 'required',
        ],
            [
                'b_title.required' => 'Please Input ',
//                'uplode_file.required' => 'Please Input',
                'status.required' => 'Please input',
            ]);

        $class_exam = BreakingNews::find($id);

        $old_image = $class_exam->file;

        if($request->hasFile('uplode_file')) {

            if(!empty($old_image)) {
                unlink($old_image);
            }

            if ($request->hasFile('uplode_file')) {
                $image = $request->file('uplode_file');
                $name = time().'.'.$image->getClientOriginalExtension();
                $destinationPath = public_path('/file/breaking_news/');
                $imagepath =$image->move($destinationPath, $name);
                $path ='file/breaking_news/'.$name;
            }

        }


        if(empty($request->uplode_file)){
            $path =$class_exam->file;
        }


        $class_exam->update([
            'b_title' => $request->b_title,
            'file' => $path,
            'status' => $request->status,
            'updated_at' => Carbon::now()
        ]);

        return redirect('/admin/breaking_news')->with('status', 'Class / Exam  Update successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $image = BreakingNews::find($id);
        $old_image = $image->file;
        unlink($old_image);

        BreakingNews::find($id)->delete();

        return redirect('/admin/breaking_news')->with('status', 'Breaking News delete successfully');
    }
}
