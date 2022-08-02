<?php

namespace App\Http\Controllers\JobPost;

use App\Http\Controllers\Controller;
use App\Models\JobPost\JobPost;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class JobPostController extends Controller
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

    public function job()
    {
        $job = JobPost::all();

        return view('admin.job_post.index',compact('job'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.job_post.add');
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
            'j_title' => 'required',
            'location' => 'required',
            'vacation' => 'required',
            'e_status' => 'required',
            'experience' => 'required',
            'e_requirement' => 'required',
            'salary' => 'required',
            'description' => 'required',
            'age' => 'required',
            'p_date' => 'required',
            'd_date' => 'required',
            'status' => 'required',


        ],
            [
                'j_title.required' => 'Please Input field',
                'location.required' => 'Please Select field',
                'vacation.required' => 'Please Select field',
                'e_status.required' => 'Please Input field',
                'experience.required' => 'Please Input field',
                'e_requirement.required' => 'Please Input field',
                'salary.required' => 'Please Input field',
                'description.required' => 'Please Input field',
                'age.required' => 'Please Input field',
                'p_date.required' => 'Please Input field',
                'd_date.required' => 'Please Input field',
                'status.required' => 'Please Input field',

            ]);

//        dd($request);


        JobPost::insert([
            'j_title' => $request->j_title,
            'location' => $request->location,
            'vacation' => $request->vacation,
            'e_status' => $request->e_status,
            'experience' => $request->experience,
            'e_requirement' => $request->e_requirement,
            'salary' => $request->salary,
            'description' => $request->description,
            'age' => $request->age,
            'p_date' => $request->p_date,
            'd_date' => $request->d_date,
            'status' => $request->status,
            'created_at' => Carbon::now()
        ]);


        return redirect('/admin/job/add')->with('status', 'Job Post Creat successfully');

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
        $job = JobPost::find($id);

        return view('admin.job_post.edit',compact('job'));
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
            'j_title' => 'required',
            'location' => 'required',
            'vacation' => 'required',
            'e_status' => 'required',
            'experience' => 'required',
            'e_requirement' => 'required',
            'salary' => 'required',
            'description' => 'required',
            'age' => 'required',
            'p_date' => 'required',
            'd_date' => 'required',
            'status' => 'required',


        ],
            [
                'j_title.required' => 'Please Input field',
                'location.required' => 'Please Select field',
                'vacation.required' => 'Please Select field',
                'e_status.required' => 'Please Input field',
                'experience.required' => 'Please Input field',
                'e_requirement.required' => 'Please Input field',
                'salary.required' => 'Please Input field',
                'description.required' => 'Please Input field',
                'age.required' => 'Please Input field',
                'p_date.required' => 'Please Input field',
                'd_date.required' => 'Please Input field',
                'status.required' => 'Please Input field',

            ]);

//        dd($request);


        JobPost::find($id)->update([
            'j_title' => $request->j_title,
            'location' => $request->location,
            'vacation' => $request->vacation,
            'e_status' => $request->e_status,
            'experience' => $request->experience,
            'e_requirement' => $request->e_requirement,
            'salary' => $request->salary,
            'description' => $request->description,
            'age' => $request->age,
            'p_date' => $request->p_date,
            'd_date' => $request->d_date,
            'status' => $request->status,
            'updated_at' => Carbon::now()
        ]);


        return redirect('/admin/job')->with('status', 'Job Post Update successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $iqac = JobPost::findOrFail($id);
        $iqac->delete();

        return redirect('/admin/job')->with('success', 'Delete Successfully');
    }
}
