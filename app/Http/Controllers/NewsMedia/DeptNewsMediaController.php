<?php

namespace App\Http\Controllers\NewsMedia;

use App\Http\Controllers\Controller;
use App\Models\NewsMedia\DeptNewsMedia;
use App\Models\Settings\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Carbon;

class DeptNewsMediaController extends Controller
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

    public function dept_news()
    {

        $dept_news =DB::table('dept_news_media')
            ->join('departments','dept_news_media.dept_id', '=','departments.id')
            ->select('departments.name','dept_news_media.title','dept_news_media.image',
                'dept_news_media.date','dept_news_media.description',
                'dept_news_media.status','dept_news_media.id')->get();


        return view('admin.NewsMedia.dept_news_media.index',compact('dept_news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $department = Department::all();

        return view('admin.NewsMedia.dept_news_media.add',compact('department'));
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
            'image' => 'required',
            'date' => 'required',
            'description' => 'required',
            'dept_id' => 'required',
            'status' => 'required',
        ],
            [
                'title.required' => 'Please Input title ',
                'title.max' => 'title Less Then 255Chars',
                'image.required' => 'Please input Image',
                'date.required' => 'Please Input date',
                'description.required' => 'Please Input description',
                'dept_id.required' => 'Please Select Department',
                'status.required' => 'Please Select Status',

            ]);

        if($request->hasFile('image')) {

            $image       = $request->file('image');
            $name = time().'.'.$image->getClientOriginalExtension();

            $image_resize = Image::make($image->getRealPath());
            $image_resize->resize(2048, 1024);
            $image_resize->save(public_path('image/department/news_media/' .$name));
            $last_img ='image/department/news_media/'.$name;

        }



        DeptNewsMedia::insert([
            'title' => $request->title,
            'image' => $last_img,
            'date' => $request->date,
            'description' => $request->description,
            'dept_id' => $request->dept_id,
            'status' => $request->status,
            'created_at' => Carbon::now()
        ]);


        return redirect('/admin/dept_news/add')->with('status', 'Department News & Media Creat successfully');
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

        $dept_news = DeptNewsMedia::find($id);
        $dept_news['departments']=Department::where('id',$dept_news->dept_id)->first();
        return view('admin.NewsMedia.dept_news_media.edit',compact(['dept_news','department']));
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
            'description' => 'required',
            'dept_id' => 'required',
            'status' => 'required',
        ],
            [
                'title.required' => 'Please Input title ',
                'title.max' => 'title Less Then 255Chars',
                'date.required' => 'Please Input Designation',
                'description.required' => 'Please Input description',
                'dept_id.required' => 'Please Select Department',
                'status.required' => 'Please Select Status',

            ]);

        $dept_news = DeptNewsMedia::find($id);

        $old_image = $dept_news->image;

        $vmimage =  $request->file('image');

        if ($vmimage){

            if($request->hasFile('image')) {

                if(!empty($old_image)) {
                    unlink($old_image);
                }

                $image = $request->file('image');
                $name = time().'.'.$image->getClientOriginalExtension();
                $image_resize = Image::make($image->getRealPath());
                $image_resize->resize(2048,1024);
                $image_resize->save(public_path('image/department/news_media/' .$name));
                $last_img ='image/department/news_media/'.$name;

            }


            $dept_news->update([
                'title' => $request->title,
                'image' => $last_img,
                'date' => $request->date,
                'description' => $request->description,
                'dept_id' => $request->dept_id,
                'status' => $request->status,
                'updated_at' => Carbon::now()
            ]);


            return redirect('/admin/dept_news')->with('status', 'Department News & Media Update successfully');


        }else{

            $dept_news->update([
                'title' => $request->title,
                'date' => $request->date,
                'description' => $request->description,
                'dept_id' => $request->dept_id,
                'status' => $request->status,
                'updated_at' => Carbon::now()
            ]);
            return redirect('/admin/dept_news')->with('status', 'Department News & Media Update successfully');

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
        $image = DeptNewsMedia::find($id);
        $old_image = $image->image;
        unlink($old_image);

        DeptNewsMedia::find($id)->delete();

        return redirect('/admin/dept_news')->with('status', 'Department News & Media delete successfully');
    }
}
