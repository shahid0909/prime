<?php

namespace App\Http\Controllers\Settings;

use App\Http\Controllers\Controller;
use App\Models\AcaProgram\AcaProgram;
use App\Models\Address\DeptAddress;
use App\Models\ClassExam\ClassExam;
use App\Models\Department\Club_Committee;
use App\Models\Department\ClubDetails;
use App\Models\Department\Clubs;
use App\Models\Department\Facilities;
use App\Models\Department\VisionMission;
use App\Models\Events\DeptEvents;
use App\Models\FacultyMember\Designation;
use App\Models\FacultyMember\FacultyMember;
use App\Models\NewsMedia\DeptNewsMedia;
use App\Models\NotableAlumni\DeptNotableAlumni;
use App\Models\Notice\DeptNotice;
use App\Models\Settings\Detp_slider;
use App\Models\Settings\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DeptDetailsController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    public function depDetails($id)
    {
        $department = Department::find($id);
        $slider = Detp_slider::where('dept_id', '=', $department->id)->get();

        $visionmission = VisionMission::where('dept_id', '=', $department->id)->get();

        $facilities = Facilities::where([
            ['dept_id', '=', $department->id],
            ['status', '=',"1"],
        ])->paginate(4);

        $clubs = Clubs::where([
            ['dept_id', '=', $department->id],
            ['status', '=',"1"],
        ])->paginate(3);

        $notice = DeptNotice::where([
            ['dept_id', '=', $department->id],
            ['status', '=',"1"],
        ])->paginate(3);

        $events = DeptEvents::where([
            ['dept_id', '=', $department->id],
            ['status', '=',"1"],
        ])->get();

        $dept_alumni = DeptNotableAlumni::where([
            ['dept_id', '=', $department->id],
            ['status', '=',"1"],
        ])->get();

        $dept_news = DeptNewsMedia::where([
            ['dept_id', '=', $department->id],
            ['status', '=',"1"],
        ])->get();

        $dept_address = DeptAddress::where([
            ['dept_id', '=',$department->id],
            ['status', '=',"1"],
        ])->get();

        $dept_addr = collect($dept_address)->slice(0, 1);

        $aca_program = AcaProgram::where([
            ['dept_id', '=',$department->id],
            ['status', '=',"1"],
        ])->get();

        $dept_head_massagee =DB::table('massage_dept_hads')
            ->join('faculty_members','massage_dept_hads.faculty_member_id', '=','faculty_members.id')
//            ->join('designations','faculty_members.adi_designation_id', '=','designations.id')
            ->select('faculty_members.m_name','faculty_members.image','faculty_members.m_name','massage_dept_hads.long_massage'
                ,'massage_dept_hads.id')->where([
                ['massage_dept_hads.dept_id', '=', $department->id],
                ['massage_dept_hads.status', '=',"1"],
            ])->get();

//        dd($dept_head_massage);

        $dept_head_massage = collect($dept_head_massagee)->slice(0, 1);



        return view('frontend.department.index',compact(['department','slider','dept_head_massage',
            'visionmission','facilities','clubs','notice','events','dept_alumni','dept_news','dept_addr','aca_program']));

    }

    public function faculty_member($id)
    {
        $department = Department::find($id);
        $allfacultymeber= FacultyMember::all();
        $length = $allfacultymeber->count();

       $facaltymememberarray=[];
        for($i=0; $i<$length; $i++){


          $facilities_member =DB::table('faculty_members')
            ->join('designations','faculty_members.designation_id', '=','designations.id')
//            ->join('designations','faculty_members.adi_designation_id', '=','designations.id')
            ->select('designations.designation','designations.adi_designation','faculty_members.m_name','faculty_members.parity','faculty_members.image'
                ,'faculty_members.edu_que','faculty_members.leave','faculty_members.id')->where([
                ['faculty_members.dept_id', '=', $department->id],
                ['faculty_members.status', '=',"1"],
                ['faculty_members.type', '=',"2"],
                ['faculty_members.parity', '=',$i+1],
            ])->get();
          if($facilities_member->count() !=0){
              array_push($facaltymememberarray,$facilities_member);
          };
        }
//        dd($facaltymememberarray);


        $adjunctmememberarray=[];
        for($i=0; $i<$length; $i++){


            $adjunct_member =DB::table('faculty_members')
                ->join('designations','faculty_members.designation_id', '=','designations.id')
//            ->join('designations','faculty_members.adi_designation_id', '=','designations.id')
                ->select('designations.designation','designations.adi_designation','faculty_members.m_name','faculty_members.parity','faculty_members.image'
                    ,'faculty_members.edu_que','faculty_members.leave','faculty_members.id')->where([
                    ['faculty_members.dept_id', '=', $department->id],
                    ['faculty_members.status', '=',"1"],
                    ['faculty_members.type', '=',"1"],
                    ['faculty_members.parity', '=',$i+1],
                ])->get();
            if($adjunct_member->count() !=0){
                array_push($adjunctmememberarray,$adjunct_member);
            };
        }



        $dept_address = DeptAddress::where([
            ['dept_id', '=',$department->id],
            ['status', '=',"1"],
        ])->get();

        $dept_addr = collect($dept_address)->slice(0, 1);
        
         $aca_program = AcaProgram::where([
            ['dept_id', '=',$department->id],
            ['status', '=',"1"],
        ])->get();



        return view('frontend.department.faculty_member.index',compact(['adjunctmememberarray','department','facaltymememberarray','dept_addr','aca_program']));
    }
    
     public function department_news_media($did,$id)
    {
        $department = Department::find($id);

        $dept_address = DeptAddress::where([
            ['dept_id', '=',$department->id],
            ['status', '=',"1"],
        ])->get();

        $dept_addr = collect($dept_address)->slice(0, 1);

        $aca_program = AcaProgram::where([
            ['dept_id', '=',$department->id],
            ['status', '=',"1"],
        ])->get();


        $dept_news_media = DeptNewsMedia::where([
            ['id', '=',$did],
            ['dept_id', '=',$department->id],
            ['status', '=',"1"],
        ])->first();

//        dd($dept_news_media);

        return view('frontend.department.department_news_media',compact(['department','dept_addr','dept_news_media','aca_program']));

    }
    
    

   public function class_exam($id)
    {
        $department = Department::find($id);

        $dept_address = DeptAddress::where([
            ['dept_id', '=',$department->id],
            ['status', '=',"1"],
        ])->get();

        $dept_addr = collect($dept_address)->slice(0, 1);


        $aca_program = AcaProgram::where([
            ['dept_id', '=',$department->id],
            ['status', '=',"1"],
        ])->get();


        $classroute = ClassExam::where([
            ['dept_id', '=',$department->id],
            ['type', '=',"1"],
            ['status', '=',"1"],
        ])->get();
        
        $examroute = ClassExam::where([
            ['dept_id', '=',$department->id],
            ['type', '=',"2"],
            ['status', '=',"1"],
        ])->get();

        return view('frontend.department.class_exam',compact(['department','dept_addr','classroute','examroute','aca_program']));

    }
    
    public function dept_notice($id)
    {
        $department = Department::find($id);

        $dept_address = DeptAddress::where([
            ['dept_id', '=',$department->id],
            ['status', '=',"1"],
        ])->get();

        $dept_addr = collect($dept_address)->slice(0, 1);

        $aca_program = AcaProgram::where([
            ['dept_id', '=',$department->id],
            ['status', '=',"1"],
        ])->get();


        $dept_notice = DeptNotice::where([
            ['dept_id', '=',$department->id],
            ['status', '=',"1"],
        ])->get();

//        dd($dept_notice);

        return view('frontend.department.department_notice',compact(['department','dept_addr','dept_notice','aca_program']));

    }

    public function facilities($id)
    {
        $department = Department::find($id);

        $dept_address = DeptAddress::where([
            ['dept_id', '=',$department->id],
            ['status', '=',"1"],
        ])->get();

        $dept_addr = collect($dept_address)->slice(0, 1);
        

        $aca_program = AcaProgram::where([
            ['dept_id', '=',$department->id],
            ['status', '=',"1"],
        ])->get();



        $facilities = Facilities::where([
            ['dept_id', '=', $department->id],
            ['status', '=',"1"],
        ])->get();

        return view('frontend.department.facilities',compact(['department','dept_addr','facilities','aca_program']));

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
   public function clubs($id)
    {
        $department = Department::find($id);

        $clubs = Clubs::where([
            ['dept_id', '=', $department->id],
            ['status', '=',"1"],
        ])->get();

        $dept_address = DeptAddress::where([
            ['dept_id', '=',$department->id],
            ['status', '=',"1"],
        ])->get();

        $dept_addr = collect($dept_address)->slice(0, 1);

        $aca_program = AcaProgram::where([
            ['dept_id', '=',$department->id],
            ['status', '=',"1"],
        ])->get();

        return view('frontend.department.clubs.index',compact(['department','clubs','dept_addr','aca_program']));
    }


    public function clubs_details($did,$id)
    {
        $department = Department::find($did);

        $clubs = Clubs::find($id);

        $club_committee = Club_Committee::where([
            ['club_id', '=',$clubs->id],
            ['status', '=',"1"],
        ])->get();

        $club_details = ClubDetails::where([
            ['club_id', '=',$clubs->id],
            ['status', '=',"1"],
        ])->get();


        $club_details = collect($club_details)->slice(0, 1);
        
        $aca_program = AcaProgram::where([
            ['dept_id', '=',$department->id],
            ['status', '=',"1"],
        ])->get();
        
        $dept_address = DeptAddress::where([
            ['dept_id', '=',$department->id],
            ['status', '=',"1"],
        ])->get();

        $dept_addr = collect($dept_address)->slice(0, 1);
        $aca_program = AcaProgram::where([
            ['dept_id', '=',$department->id],
            ['status', '=',"1"],
        ])->get();





//        if ( $club_details->count() > 1)
//        {
//            $club_details = array();
//            $club_details = ClubDetails::where([
//                ['club_id', '=',$clubs->id],
//                ['status', '=',"1"],
//            ])->first();
//
//
//        }

//         foreach ($club_details as $club_detail) {
//
//             $club_detail['faculty']=FacultyMember::where('id',$club_detail->faculty_member_id)->first();
//
//         }

//         dd($club_detail);
//        $club_details['faculty']=FacultyMember::where('id',$club_details->faculty_member_id)->first();


        $club_info =DB::table('club_details')
            ->join('faculty_members','club_details.faculty_member_id', '=','faculty_members.id')
            ->join('designations','faculty_members.designation_id', '=','designations.id')
            ->select('faculty_members.m_name','faculty_members.image','designations.designation','designations.adi_designation'
                ,'club_details.vision','club_details.activities','club_details.description','club_details.status','club_details.id','club_details.club_id')
            ->where([
                ['club_details.club_id', '=', $clubs->id],
                ['club_details.status', '=',"1"],
            ])
        ->get();

        $club_inf = collect($club_info)->slice(0, 1);

//           dd($club_details);

        return view('frontend.department.clubs.club_details',compact(['dept_addr','aca_program','department','aca_program','clubs','club_committee','club_details','club_inf']));
    }



    public function member_details($did,$id)
    {
        $department = Department::find($did);

        $dept_address = DeptAddress::where([
            ['dept_id', '=',$department->id],
            ['status', '=',"1"],
        ])->get();

        $dept_addr = collect($dept_address)->slice(0, 1);


        $member_info =DB::table('faculty_members')
            ->join('designations','faculty_members.designation_id', '=','designations.id')
            ->select('faculty_members.m_name','faculty_members.image','designations.designation','designations.adi_designation'
                ,'faculty_members.edu_que','faculty_members.email','faculty_members.phone','faculty_members.status','faculty_members.id','faculty_members.about_me','faculty_members.research_area'
                ,'faculty_members.research_interest','faculty_members.publication','faculty_members.experience','faculty_members.type','faculty_members.leave')
            ->where([
                ['faculty_members.id', '=', $id],
                ['faculty_members.status', '=',"1"],
            ])->get();

//        dd($member_info);

        $aca_program = AcaProgram::where([
            ['dept_id', '=',$department->id],
            ['status', '=',"1"],
        ])->get();


        return view('frontend.department.faculty_member.faculty_details',compact(['department','dept_addr','member_info','aca_program']));
    }


    public function program_details($did,$id)
    {
        $department = Department::find($did);

        $aca_program = AcaProgram::where([
            ['dept_id', '=',$department->id],
            ['status', '=',"1"],
        ])->get();

        $acaprogram = AcaProgram::find($id);

        $dept_address = DeptAddress::where([
            ['dept_id', '=',$department->id],
            ['status', '=',"1"],
        ])->get();

        $dept_addr = collect($dept_address)->slice(0, 1);

        return view('frontend.department.program_details',compact(['department','aca_program','acaprogram','dept_addr']));
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
        //
    }
}
