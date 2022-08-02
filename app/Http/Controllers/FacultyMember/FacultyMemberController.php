<?php

namespace App\Http\Controllers\FacultyMember;

use App\Http\Controllers\Controller;
use App\Models\FacultyMember\Designation;
use App\Models\FacultyMember\FacultyMember;
use App\Models\Settings\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Intervention\Image\ImageManagerStatic as Image;

class FacultyMemberController extends Controller
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

    public function faculty_member()
    {
        $faculty_member = FacultyMember::all();
        return view('admin.faculty_member.index',compact('faculty_member'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $department = Department::all();
        $designations = Designation::all();
        return view('admin.faculty_member.add',compact(['department','designations']));
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
            'm_name' => 'required',
            'designation_id' => 'required',
            'edu_que' => 'required',
            'about_me' => 'required',
            'type' => 'required',
            'school_id' => 'required',
            'status' => 'required',
            'parity' => 'required',
        ]);

//        dd($request);


        if($request->hasFile('image')) {

            $image       = $request->file('image');
            $name = time().'.'.$image->getClientOriginalExtension();
            $image_resize = Image::make($image->getRealPath());
            $image_resize->resize(232, 290);
            $image_resize->save(public_path('image/department/faculty_member/' .$name));
            $last_img ='image/department/faculty_member/'.$name;
        }




        FacultyMember::insert([
            'm_name' => $request->m_name,
            'image' => $last_img,
            'designation_id' => $request->designation_id,
            'adi_designation_id' => $request->adi_designation_id,
            'edu_que' => $request->edu_que,
            'email' => json_encode($request->email),
            'phone' => json_encode($request->phone),
            'about_me' => $request->about_me,
            'research_area' => $request->research_area,
            'research_interest' => $request->research_interest,
            'publication' => $request->publication,
            'experience' => $request->experience,
            'type' => $request->type,
            'leave' => $request->leave,
            'dept_id' => $request->dept_id,
            'school_id' => $request->school_id,
            'status' => $request->status,
            'parity' => $request->parity,
            'created_at' => Carbon::now()
        ]);


        return redirect('/admin/faculty_member/add')->with('status', 'Department Faculty Member Creat successfully');


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
        $designation = Designation::all();


        $dept_faculty = FacultyMember::find($id);
        $dept_faculty['departments']=Department::where('id',$dept_faculty->dept_id)->first();
        $dept_faculty['designations']=Designation::where('id',$dept_faculty->designation_id)->first();

//        dd($designation);

        return view('admin.faculty_member.edit',compact(['department','designation','dept_faculty']));
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
            'm_name' => 'required',
            'designation_id' => 'required',
            'edu_que' => 'required',
            'about_me' => 'required',
            'type' => 'required',
            'school_id' => 'required',
            'status' => 'required',
            'parity' => 'required',
        ],
        [
            'm_name.required' => 'Please Input Name ',
            'designation_id.required' => 'Please Input Designation',
            'edu_que.required' => 'Please Input Education Qualification',
            'about_me.required' => 'Please Input About Me',
            'type.required' => 'Please Select Type',
            'school_id.required' => 'Please Select Department',
            'status.required' => 'Please Select Status',
            'parity.required' => 'Please Select Parity',

        ]);

        $dept_faculty = FacultyMember::find($id);

        $old_image = $dept_faculty->image;

        $vmimage =  $request->file('image');



        if ($dept_faculty->email)
        {
            $previousEmail = json_decode($dept_faculty->email, true);

        }
        $requestEmail = $request->email;

        foreach ($requestEmail as $itememail){

            array_push($previousEmail,$itememail);
        }



        if ( $dept_faculty->phone)
        {
            $previousphone = json_decode($dept_faculty->phone, true);

        }
        $requestphoner = $request->phone;

        foreach ($requestphoner as $item){
//            dd($dept_faculty->phone);


             array_push($previousphone,$item);
        }

//         dd($previousphone);



        if ($vmimage){

            if($request->hasFile('image')) {

                if(!empty($old_image)) {
                    unlink($old_image);
                }

                $image = $request->file('image');
                $name = time().'.'.$image->getClientOriginalExtension();
                $image_resize = Image::make($image->getRealPath());
                $image_resize->resize(232,290);
                $image_resize->save(public_path('image/department/faculty_member/' .$name));
                $last_img ='image/department/faculty_member/'.$name;

            }



            $dept_faculty->update([
                'm_name' => $request->m_name,
                'image' => $last_img,
                'designation_id' => $request->designation_id,
                'adi_designation_id' => $request->adi_designation_id,
                'edu_que' => $request->edu_que,
                'email' => json_encode($previousEmail),
                'phone' => json_encode($previousphone),
                'about_me' => $request->about_me,
                'research_area' => $request->research_area,
                'research_interest' => $request->research_interest,
                'publication' => $request->publication,
                'experience' => $request->experience,
                'type' => $request->type,
                'leave' => $request->leave,
                'dept_id' => $request->dept_id,
                'school_id' => $request->school_id,
                'status' => $request->status,
                'parity' => $request->parity,
                'updated_at' => Carbon::now()
            ]);


            return redirect('/admin/faculty_member')->with('status', 'Faculty Member Update successfully');


        }else{



            $dept_faculty->update([
                'm_name' => $request->m_name,
                'designation_id' => $request->designation_id,
                'adi_designation_id' => $request->adi_designation_id,
                'edu_que' => $request->edu_que,
                'about_me' => $request->about_me,
                'email' => json_encode($previousEmail),
                'phone' => json_encode($previousphone),
                'research_area' => $request->research_area,
                'research_interest' => $request->research_interest,
                'publication' => $request->publication,
                'experience' => $request->experience,
                'type' => $request->type,
                'leave' => $request->leave,
                'dept_id' => $request->dept_id,
                'school_id' => $request->school_id,
                'status' => $request->status,
                'parity' => $request->parity,
                'updated_at' => Carbon::now()
            ]);
            return redirect('/admin/faculty_member')->with('status', 'Faculty Member Update successfully');

        }
    }


//
//if($request->hasFile('upload_file'))
//{
//foreach ($request->upload_file as $upload_file) {
//$name = time().'.'.$upload_file->getClientOriginalExtension();
//$destinationPath = public_path('/file/student_education/');
//$imagepath =$upload_file->move($destinationPath, $name);
//$path[] ='file/student_education/'.$name;
//}
//}





    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $image = FacultyMember::find($id);
        $old_image = $image->image;
        unlink($old_image);

        FacultyMember::find($id)->delete();

        return redirect('/admin/faculty_member')->with('status', 'Faculty Member delete successfully');
    }

    public function destroy_email($id,$did)
    {


        $faculty = FacultyMember::where('id', $did)->first();
        $oldemail = json_decode($faculty->email, true);
        $previesid =  $oldemail[$id];
        unset($oldemail[$id]);

        $ooldemail = json_encode($oldemail);
        $faculty->update(['email' => $ooldemail]);
        return back()->with('success','Email removed successfully.');

//        $previesid->update(['email' => $images]);
//        if (!$hotel)
//            abort('404', 'Hotel Not Found');
//        $previousImages = json_decode($hotel->images, true);
//
//        $image = $previousImages[$id];
//        if (File::exists($image)) {
//            File::delete($image);
//        }
//
//        unset($previousImages[$id]);
//        $images = json_encode($previousImages);
//
//        $hotel->update(['images' => $images]);
//        return back()->with('success','Image removed successfully.');
    }

    public function destroy_phone($id,$did)
    {



        $faculty = FacultyMember::where('id', $did)->first();

        $oldphone = json_decode($faculty->phone, true);
        $previesid =  $oldphone[$id];
        unset($oldphone[$id]);

        $ooldphone = json_encode($oldphone);
        $faculty->update(['phone' => $ooldphone]);
        return back()->with('success','Phone removed successfully.');

    }

}
