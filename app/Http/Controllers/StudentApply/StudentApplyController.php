<?php

namespace App\Http\Controllers\StudentApply;

use App\Http\Controllers\Controller;
use App\Models\AcaProgram\AcaProgram;
use App\Models\Address\HomeAddress;
use Illuminate\Support\Facades\Session;
use App\Models\Administrator\Administrator;
use Intervention\Image\ImageManagerStatic as Image;
use App\Models\Settings\Department;
use App\Models\Settings\Faculty;
use App\Models\Settings\StartSession;
use App\Models\Students\StudentAdminastration;
use App\Models\Students\StudentEducation;
use App\Models\Students\StudentInfo;
use App\Models\Students\StudentPermanentAddress;
use App\Models\Students\StudentPrasentAddress;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class StudentApplyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $administrator = Administrator::where([
            ['status', '=',"1"],
        ])->get();

        $home_address = HomeAddress::where([
            ['status', '=',"1"],
        ])->get();

        $home_addr = collect($home_address)->slice(0, 1);

        $faculty = Faculty::all();

        $session = StartSession::all();


//        return view('frontend.student_apply.apply_5',compact(['administrator','home_addr','faculty','session']));

        return view('frontend.student_apply.apply_5',compact(['administrator','home_addr','faculty','session']));


//        return view('frontend.student_apply.apply_1',compact(['administrator','home_addr']));
    }





    public function getDepartment(Request $request)
    {

        $cid=$request->post('cid');

        $state=Department::where('faculty_id',$cid)->get();
        $html='<option value="">Select Department</option>';
        foreach($state as $list){
            $html.='<option value="'.$list->id.'">'.$list->name.'</option>';
        }
        echo $html;
    }
    public function getProgram(Request $request)
    {

        $did=$request->post('did');

        $state=AcaProgram::where('dept_id',$did)->get();
        $html='<option value="">Select Program</option>';
        foreach($state as $list){
            $html.='<option value="'.$list->id.'">'.$list->p_name.'</option>';
        }
        echo $html;
    }


    public function store_1(Request $request)
    {

        $requestdata['faculty_id']=$request->faculty_id;
        $requestdata['dept_id']=$request->dept_id;
        $requestdata['program_id']=$request->program_id;
        $requestdata['session_id']=$request->session_id;
        $requestdata['shift']=$request->shift;


        session()->put('student_adminastrations',$requestdata );

//        $requestdata['s_name']=$request->s_name;
//        $requestdata['f_name']=$request->f_name;
//        $requestdata['name']=$request->name;
//        $requestdata['m_name']=$request->m_name;
//        $requestdata['b_date']=$request->b_date;
//        $requestdata['gender']=$request->gender;
//        $requestdata['nationality']=$request->nationality;
////        $requestdata['enroll_date']= Carbon::now();
//        $requestdata['phone']=$request->phone;
//        $requestdata['email']=$request->email;
//        $requestdata['freedom_fighter']=$request->freedom_fighter;
//        $requestdata['poor']=$request->poor;
//
//
//        session()->put('student_info',$requestdata );



        $administrator = Administrator::where([
            ['status', '=',"1"],
        ])->get();

        $home_address = HomeAddress::where([
            ['status', '=',"1"],
        ])->get();

        $home_addr = collect($home_address)->slice(0, 1);

        return view('frontend.student_apply.apply_2',compact(['administrator','home_addr']));

    }
    public function store_2(Request $request)
    {

        $requestdata['country']=$request->country;
        $requestdata['district']=$request->district;
        $requestdata['thana']=$request->thana;
        $requestdata['police_station']=$request->police_station;
        $requestdata['post_code']=$request->post_code;
        $requestdata['address']=$request->address;


        session()->put('student_present_address',$requestdata );



        $administrator = Administrator::where([
            ['status', '=',"1"],
        ])->get();

        $home_address = HomeAddress::where([
            ['status', '=',"1"],
        ])->get();

        $home_addr = collect($home_address)->slice(0, 1);

        return view('frontend.student_apply.apply_3',compact(['administrator','home_addr']));

    }

    public function store_3(Request $request)
    {

        $requestdata['country']=$request->country;
        $requestdata['district']=$request->district;
        $requestdata['thana']=$request->thana;
        $requestdata['police_station']=$request->police_station;
        $requestdata['post_code']=$request->post_code;
        $requestdata['address']=$request->address;


        session()->put('student_permanent_address',$requestdata );


        $administrator = Administrator::where([
            ['status', '=',"1"],
        ])->get();

        $home_address = HomeAddress::where([
            ['status', '=',"1"],
        ])->get();

        $faculty = Faculty::all();

        $session = StartSession::all();

        $home_addr = collect($home_address)->slice(0, 1);

//        return view('frontend.student_apply.apply_5',compact(['administrator','home_addr','faculty','session']));

        return view('frontend.student_apply.apply_1',compact(['administrator','home_addr']));
    }



    public function store_5(Request $request)
    {
        $requestdata['s_name']=$request->s_name;
        $requestdata['f_name']=$request->f_name;
        $requestdata['name']=$request->name;
        $requestdata['m_name']=$request->m_name;
        $requestdata['b_date']=$request->b_date;
        $requestdata['gender']=$request->gender;
        $requestdata['nationality']=$request->nationality;
//        $requestdata['enroll_date']= Carbon::now();
        $requestdata['phone']=$request->phone;
        $requestdata['email']=$request->email;
        $requestdata['freedom_fighter']=$request->freedom_fighter;
        $requestdata['poor']=$request->poor;


        session()->put('student_info',$requestdata );

//        $requestdata['faculty_id']=$request->faculty_id;
//        $requestdata['dept_id']=$request->dept_id;
//        $requestdata['program_id']=$request->program_id;
//        $requestdata['session_id']=$request->session_id;
//        $requestdata['shift']=$request->shift;
//
//
//        session()->put('student_adminastrations',$requestdata );



        $administrator = Administrator::where([
            ['status', '=',"1"],
        ])->get();

        $home_address = HomeAddress::where([
            ['status', '=',"1"],
        ])->get();

        $home_addr = collect($home_address)->slice(0, 1);

        return view('frontend.student_apply.apply_6',compact(['administrator','home_addr']));

    }


    public function store_6(Request $request)
    {

        $validator = Validator::make($request->all(), [
            "grade"    => "required|array",
            "grade.*"  => "required|numeric",
        ]);


        $test1 = session()->get('student_info');
        $test2 = session()->get('student_present_address');
        $test3 = session()->get('student_permanent_address');
        $test4 = session()->get('student_adminastrations');


        if ($request->hasFile('image')) {

            $image = $request->file('image');
            $name = time() . '.' . $image->getClientOriginalExtension();
            $image_resize = Image::make($image->getRealPath());
            $image_resize->resize(232, 290);
            $image_resize->save(public_path('/image/student/' . $name));
            $last_img = 'image/student/' . $name;
        }

           $piidArr = $request->upload_file;
            foreach ($piidArr as $key=>$val) {
                if($request->hasFile("upload_file.$key")) {
                    $images =$request->file("upload_file.$key");
                    $ext =$images->extension();
                    $images_name =rand(1111111111,9999999999).'.'.$ext;
                    $destinationPath = public_path('/file/student_education/');
                    $imagepath =$images->move($destinationPath, $images_name);
                    $path[] ='file/student_education/'.$images_name;
                }
            }






        $student_info = new  StudentInfo();
        $student_info->s_name= $test1['s_name'];
        $student_info->image= $last_img;
        $student_info->f_name= $test1['f_name'];
        $student_info->m_name= $test1['m_name'];
        $student_info->b_date= $test1['b_date'];
        $student_info->gender= $test1['gender'];
        $student_info->nationality= $test1['nationality'];
        $student_info->enroll_date= Carbon::now();
        $student_info->phone= $test1['phone'];
        $student_info->email= $test1['email'];
        $student_info->freedom_fighter= $test1['freedom_fighter'];
        $student_info->poor= $test1['poor'];
        $student_info->created_at= Carbon::now();
        $student_info->save();




        StudentPermanentAddress::insert([
            'student_id' => $student_info->id,
            'country' => $test2['country'],
            'district' => $test2['district'],
            'thana' => $test2['thana'],
            'police_station' => $test2['police_station'],
            'post_code' => $test2['post_code'],
            'address' => $test2['address'],
            'created_at' => Carbon::now()
        ]);


        StudentPrasentAddress::insert([
            'student_id' => $student_info->id,
            'country' => $test3['country'],
            'district' => $test3['district'],
            'thana' => $test3['thana'],
            'police_station' => $test3['police_station'],
            'post_code' => $test3['post_code'],
            'address' => $test3['address'],
            'created_at' => Carbon::now()
        ]);

        StudentAdminastration::insert([
            'student_id' => $student_info->id,
            'faculty_id' => $test4['faculty_id'],
            'dept_id' => $test4['dept_id'],
            'program_id' => $test4['program_id'],
            'session_id' => $test4['session_id'],
            'shift' => $test4['shift'],
            'created_at' => Carbon::now()
        ]);




        $exam_name = json_encode($request->exam_name);
        $institute = json_encode($request->institute);
        $major_area = json_encode($request->major_area);
        $passing_year = json_encode($request->passing_year);
        $grade = json_encode($request->grade);
        $file = json_encode($path);


        StudentEducation::insert([
            'student_id' => $student_info->id,
            'exam_name' => $exam_name,
            'institute' => $institute,
            'major_area' => $major_area,
            'passing_year' => $passing_year,
            'grade' => $grade,
            'upload_file' => $file,
            'created_at' => Carbon::now()
        ]);



//        dd("Done");

//
//
//
//
//        $administrator = Administrator::where([
//            ['status', '=',"1"],
//        ])->get();
//
//        $home_address = HomeAddress::where([
//            ['status', '=',"1"],
//        ])->get();
//
//        $home_addr = collect($home_address)->slice(0, 1);

//        return view('frontend.student_apply.apply_6',compact(['administrator','home_addr']));

        return redirect('/student_apply')->with('status' ,'Apply Successfully Submite' );
    }


    public function apply_list()
    {
        $student_info = StudentInfo::all();

//        dd($student_info);

        return view('admin.student_apply_list.index',compact('student_info'));
    }

    public function student_list()
    {
        $student_info = StudentInfo::where('status','1')->get();

//        dd($student_info);

        return view('admin.student_list.index',compact('student_info'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $student_info = StudentInfo::find($id);

        $student_present = StudentPrasentAddress::where('student_id', $id)->first();
        $student_permanent = StudentPermanentAddress::where('student_id', $id)->first();
        $student_education = StudentEducation::where('student_id', $id)->first();


        $student_administration =DB::table('student_adminastrations')
            ->join('faculties','student_adminastrations.faculty_id', '=','faculties.id')
            ->join('departments','student_adminastrations.dept_id', '=','departments.id')
            ->join('aca_programs','student_adminastrations.program_id', '=','aca_programs.id')
            ->join('start_sessions','student_adminastrations.session_id', '=','start_sessions.id')
            ->select('faculties.name as facaltiName','departments.name as departName', 'aca_programs.p_name', 'start_sessions.startsession',
                'student_adminastrations.shift','student_adminastrations.id')->where([
                ['student_adminastrations.student_id', '=', $id],
                ])->get();



        return view('admin.student_apply_list.show',compact('student_info','student_present','student_permanent','student_administration','student_education'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = StudentInfo::find($id);

        return view('admin.student_apply_list.edit',compact('student'));
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
            's_id' => 'required',
            'batch' => 'required',
            'f_semester' => 'required',
            'status' => 'required',
        ]);


        $student = StudentInfo::find($id);
        $student->s_id = $request->s_id;
        $student->batch = $request->batch;
        $student->f_semester = $request->f_semester;
        $student->status = $request->status;
        if ($student->save()) {
            Session::flash('message', 'Save successfully!');
            return redirect('/admin/student_apply_list');
        } else {
            Session::flash('error', 'Something went wrong!');
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
        $images = StudentEducation::where('student_id', $id)->first();

        $previousImages = json_decode($images->upload_file, true);
         foreach ($previousImages as $key=>$value){
               unlink($value);
         }

        $images->delete();


        $student = StudentInfo::find($id);
        $old_image = $student->image;
        unlink($old_image);

        StudentInfo::find($id)->delete();

        return redirect('/admin/student_apply_list')->with('status', 'Student delete successfully');
    }
}
