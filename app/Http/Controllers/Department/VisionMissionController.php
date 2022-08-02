<?php

namespace App\Http\Controllers\Department;

use App\Http\Controllers\Controller;
use App\Models\Department\VisionMission;
use Intervention\Image\ImageManagerStatic as Image;
use App\Models\Settings\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class VisionMissionController extends Controller
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

    public function vision_mission()
    {
//        $vision_mission = VisionMission::all();
        $vision_mission =DB::table('vision_missions')
                        ->join('departments','vision_missions.dept_id', '=','departments.id')
                        ->select('departments.name','vision_missions.image','vision_missions.vision_description','vision_missions.mission_description','vision_missions.id')->get();

//        foreach ($vision_mission as $vission){
//            $vision_mission['department'][] =Department::where('id',$vission->dept_id)->get();
//        }

//        dd( $vision_mission);
        return view('admin.department.VisionMission.index',compact('vision_mission'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $department = Department::all();
        return view('admin.department.VisionMission.add',compact('department'));
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
            'vision_description' => 'required',
            'mission_description' => 'required',
        ]);

        if($request->hasFile('image')) {

            $image       = $request->file('image');
            $name = time().'.'.$image->getClientOriginalExtension();

            $image_resize = Image::make($image->getRealPath());
            $image_resize->resize(530, 530);
            $image_resize->save(public_path('image/department/VisionMission/' .$name));
            $last_img ='image/department/VisionMission/'.$name;

        }



        VisionMission::insert([
            'dept_id' => $request->dept_id,
            'image' => $last_img,
            'vision_description' => $request->vision_description,
            'mission_description' => $request->mission_description,
            'created_at' => Carbon::now()
        ]);


        return redirect('/admin/add_vision_mission')->with('status', 'Vision Mission Creat successfully');

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

        $vision_mission = VisionMission::find($id);
        $vision_mission['departments']=Department::where('id',$vision_mission->dept_id)->first();

        return view('admin.department.VisionMission.edit',compact(['vision_mission','department']));

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
            'vision_description' => 'required',
            'mission_description' => 'required',
        ]);

        $vision_mission = VisionMission::find($id);

        $old_image = $vision_mission->image;

        $vmimage =  $request->file('image');

        if ($vmimage){

        if($request->hasFile('image')) {

            if(!empty($old_image)) {
                unlink($old_image);
            }

            $image = $request->file('image');
            $name = time().'.'.$image->getClientOriginalExtension();
            $image_resize = Image::make($image->getRealPath());
            $image_resize->resize(530,530);
            $image_resize->save(public_path('image/department/VisionMission/' .$name));
            $last_img ='image/department/VisionMission/'.$name;

        }


            $vision_mission->update([
                'dept_id' => $request->dept_id,
                'image' => $last_img,
                'vision_description' => $request->vision_description,
                'mission_description' => $request->mission_description,
                'created_at' => Carbon::now()
        ]);


        return redirect('/admin/vision_mission')->with('status', 'Vision Mission Update successfully');


        }else{

            $vision_mission->update([
                'dept_id' => $request->dept_id,
                'vision_description' => $request->vision_description,
                'mission_description' => $request->mission_description,
                'created_at' => Carbon::now()
            ]);
            return redirect('/admin/vision_mission')->with('status', 'Vision Mission Update successfully');

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
        $image = VisionMission::find($id);
        $old_image = $image->image;
        unlink($old_image);

        VisionMission::find($id)->delete();

        return redirect('/admin/vision_mission')->with('status', 'Vision Mission delete successfully');
    }
}
