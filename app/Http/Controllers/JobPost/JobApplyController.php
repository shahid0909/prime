<?php

namespace App\Http\Controllers\JobPost;

use App\Http\Controllers\Controller;
use App\Models\JobPost\JobApply;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Intervention\Image\ImageManagerStatic as Image;

class JobApplyController extends Controller
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
        $job =DB::table('job_applies')
            ->join('job_posts','job_applies.job_id', '=','job_posts.id')
            ->select('job_posts.j_title','job_applies.name','job_applies.phone',
                'job_applies.email','job_applies.date','job_applies.upload_file','job_applies.image','job_applies.id')->get();


        return view('admin.job_post.job_applay',compact('job'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'date' => 'required',
//            'upload_file' => 'required',
//            'image' => 'required',
            'job_id' => 'required',
        ],
            [
                'name.required' => 'Please Input Name',
                'phone.required' => 'Please Input field',
                'email.required' => 'Please Input field',
                'date.required' => 'Please Input field',
//                'upload_file.required' => 'Please Input field',
//                'image.required' => 'Please Input field',
                'job_id.required' => 'Please Input field',
            ]);
//        dd($request);


        if($request->upload_file){
            if ($request->hasFile('upload_file')) {
                $image = $request->file('upload_file');
                $name = time().'.'.$image->getClientOriginalExtension();
                $destinationPath = public_path('/file/job_cv/');
                $imagepath =$image->move($destinationPath, $name);
                $path ='file/job_cv/'.$name;
            }
        }

        if($request->hasFile('image')) {

            $image       = $request->file('image');
            $name = time().'.'.$image->getClientOriginalExtension();

            $image_resize = Image::make($image->getRealPath());
            $image_resize->resize(232, 290);
            $image_resize->save(public_path('image/job_apply/' .$name));
            $last_img ='image/job_apply/'.$name;

        }



        JobApply::insert([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'date' => $request->date,
            'upload_file' => $path,
            'image' => $last_img,
            'job_id' => $request->job_id,
            'created_at' => Carbon::now()
        ]);


        return redirect('/carer')->with('status', 'Your Application submitted successfully');


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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $image = JobApply::find($id);
        $old_image = $image->image;
        $old_file = $image->upload_file;
        unlink($old_image);
        unlink($old_file);

        JobApply::find($id)->delete();

        return redirect('/admin/job_apply')->with('status', 'Job Apply delete successfully');
    }
}
