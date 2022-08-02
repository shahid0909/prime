<?php

namespace App\Http\Controllers;
use App\Models\AcaCalender\AcaCalender;
use App\Models\VisitorsCount\VisitorsCount;
use App\Models\Address\HomeAddress;
use App\Models\CRHP\CrhpDetails;
use App\Models\Library\LibraryEresource;
use App\Models\Gallery\PhotoGallery;
use App\Models\IQAC\IqacDetails;
use App\Models\IQAC\IqacMember;
use Illuminate\Support\Facades\Session;
use App\Models\Administrator\Administrator;
use App\Models\AdmissionPromotion\AdmissionPromotion;
use App\Models\AdmissionRequirement\AdmissionRequirement;
use App\Models\BreakingNews\BreakingNews;
use App\Models\ControllerOfExamination\ControllerOfExamination;
use App\Models\ControllerOfExamination\ControllerOfExaminationApplication;
use App\Models\CRHP\Crhp;
use App\Models\Employ\Employ;
use App\Models\Events\HomeEvents;
use App\Models\FacultyMember\FacultyMember;
use App\Models\FormerViceChancellor\FormerViceChancellor;
use App\Models\Home\HomeSlider;
use App\Models\ImportentDate\ImportentDate;
use App\Models\IQAC\Iqac;
use App\Models\IQAC\IqacResource;
use App\Models\IQAC\IqacWorkshop;
use App\Models\JobPost\JobPost;
use App\Models\Massage\MassageVC;
// use App\Models\Massage\FacultyMember;
// added 3-18-2022
use App\Models\NewsMedia\HomeNewsMedia;
use App\Models\NotableAlumni\HomeNotableAlumni;
use App\Models\Notice\HomeNotice;
use App\Models\Result\Result;
use App\Models\School\School;
use App\Models\School\SchoolDetails;
use App\Models\Settings\Department;
use App\Models\Settings\Faculty;

use App\Models\Students\StudentAdminastration;
use App\Models\Students\StudentInfo;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

     public function library()
    {
        $administrator = Administrator::where([
            ['status', '=',"1"],
        ])->orderBy('priority', 'ASC')->get();

        $home_address = HomeAddress::where([
            ['status', '=',"1"],
        ])->get();

        $home_addr = collect($home_address)->slice(0, 1);

        $library_sub = LibraryEresource::where([
            ['category','1'],
            ['status','1'],
        ])->get();
        $library_registered = LibraryEresource::where([
            ['category','2'],
            ['status','1'],
        ])->get();
        $library_open = LibraryEresource::where([
            ['category','3'],
            ['status','1'],
        ])->get();

//        dd($library_sub);

        return view('frontend.static_page.library',compact(['administrator','home_addr','library_sub','library_registered','library_open']));
    }


    public function photo_gallery()
    {
        $administrator = Administrator::where([
            ['status', '=',"1"],
        ])->orderBy('priority', 'ASC')->get();

        $home_address = HomeAddress::where([
            ['status', '=',"1"],
        ])->get();

        $home_addr = collect($home_address)->slice(0, 1);


        $photo_gallery = PhotoGallery::where([
            ['category',1],
            ['status',1]
        ])->get();

        $activities = PhotoGallery::where([
            ['category',2],
            ['status',1]
        ])->get();

        $bangabandhu = PhotoGallery::where([
            ['category',3],
            ['status',1]
        ])->get();

        $independence = PhotoGallery::where([
            ['category',4],
            ['status',1]
        ])->get();

//        dd($photo_gallery);


        return view('frontend.static_page.photo_gallery',compact(['independence','bangabandhu','activities','photo_gallery','administrator','home_addr']));
    }



     public function under_construction()
    {
        $administrator = Administrator::where([
            ['status', '=',"1"],
        ])->orderBy('priority', 'ASC')->get();

        $home_address = HomeAddress::where([
            ['status', '=',"1"],
        ])->get();

        $home_addr = collect($home_address)->slice(0, 1);

        return view('frontend.under_construction',compact(['administrator','home_addr']));
    }

    public function index()
    {

        $visitor = VisitorsCount::where('id','=',1)->first();
        $count = $visitor->total_number + 1;
        $visitor->total_number = $count;
        $visitor->save();


        $home_notice = HomeNotice::where([
            ['status', '=',"1"],
        ])->paginate(4);

        $home_event = HomeEvents::where([
            ['status', '=',"1"],
        ])->paginate(4);

        $administrator = Administrator::where([
            ['status', '=',"1"],
        ])->orderBy('priority', 'ASC')->get();

        $home_alumni = HomeNotableAlumni::where([
            ['status', '=',"1"],
        ])->get();

        $home_news = HomeNewsMedia::where([
            ['status', '=',"1"],
        ])->get();

        $home_address = HomeAddress::where([
            ['status', '=',"1"],
        ])->get();

        $home_addr = collect($home_address)->slice(0, 1);

        $home_slider = HomeSlider::where([
            ['status', '=',"1"],
        ])->get();

        $admission_promotion = AdmissionPromotion::where([
            ['status', '=',"1"],
        ])->get();

        $admission_promotions = collect($admission_promotion)->slice(0, 1);

        $breaking_news = BreakingNews::where([
            ['status', '=',"1"],
        ])->get();


        $massage_vcs =DB::table('massage_v_c_s')
            ->join('employs','massage_v_c_s.e_id', '=','employs.id')
            ->select('employs.image','massage_v_c_s.short_massage','massage_v_c_s.id')->where([
                ['massage_v_c_s.status', '=',"1"],
            ])->get();

        $massage_vc = collect($massage_vcs)->slice(0, 1);

        $chairman =DB::table('massage_chairmen')
            ->join('employs','massage_chairmen.e_id', '=','employs.id')
            ->select('employs.image','massage_chairmen.short_massage','massage_chairmen.id')->where([
                ['massage_chairmen.status', '=',"1"],
            ])->get();

        $chair = collect($chairman)->slice(0, 1);

//        dd($massage_vc);


        return view('frontend.home',compact(['home_notice','administrator','home_event','home_alumni',
            'home_news','home_addr','home_slider','admission_promotions','breaking_news','massage_vc','chair']));


    }

    public function home_news_media($id)
    {
        $administrator = Administrator::where([
            ['status', '=',"1"],
        ])->orderBy('priority', 'ASC')->get();

        $home_address = HomeAddress::where([
            ['status', '=',"1"],
        ])->get();

        $home_addr = collect($home_address)->slice(0, 1);

        $home_news = HomeNewsMedia::find($id);


        return view('frontend.static_page.home_news_media',compact(['home_news','administrator','home_addr']));
    }

     public function code_of_conduct()
    {
        $administrator = Administrator::where([
            ['status', '=',"1"],
        ])->orderBy('priority', 'ASC')->get();

        $home_address = HomeAddress::where([
            ['status', '=',"1"],
        ])->get();

        $home_addr = collect($home_address)->slice(0, 1);


        return view('frontend.static_page.code_of_conduct',compact(['administrator','home_addr']));
    }
    
    public function frequently_questions()
    {
        $administrator = Administrator::where([
            ['status', '=',"1"],
        ])->orderBy('priority', 'ASC')->get();

        $home_address = HomeAddress::where([
            ['status', '=',"1"],
        ])->get();

        $home_addr = collect($home_address)->slice(0, 1);


        return view('frontend.static_page.frequently_questions',compact(['administrator','home_addr']));
    }

      public function home_event_details($id)
    {
        $administrator = Administrator::where([
            ['status', '=',"1"],
        ])->orderBy('priority', 'ASC')->get();

        $home_address = HomeAddress::where([
            ['status', '=',"1"],
        ])->get();

        $home_addr = collect($home_address)->slice(0, 1);

        $home_event = HomeEvents::find($id);
//        dd($home_event);

        return view('frontend.static_page.home_event_details',compact(['administrator','home_addr','home_event']));
    }

     public function home_notice_details()
    {

        $administrator = Administrator::where([
            ['status', '=',"1"],
        ])->orderBy('priority', 'ASC')->get();


        $home_address = HomeAddress::where([
            ['status', '=',"1"],
        ])->get();

        $home_addr = collect($home_address)->slice(0, 1);


        $home_notice = HomeNotice::where([
            ['status', '=',"1"],
        ])->get();

        // dd($home_notice);

        return view('frontend.static_page.home_notice_details',compact(['administrator','home_addr','home_notice']));
    }



      public function faculty_dean($id)
    {
        $facultys = Faculty::where('id',$id)->with('dinMessage')->first();


        $administrator = Administrator::where([
            ['status', '=',"1"],
        ])->orderBy('priority', 'ASC')->get();

        $home_address = HomeAddress::where([
            ['status', '=',"1"],
        ])->get();

        $home_addr = collect($home_address)->slice(0, 1);

        return view('frontend.static_page.dean_massage',compact(['facultys','administrator','home_addr']));

    }

    public function language_school()
    {

        $home_slider = HomeSlider::where([
            ['status', '=',"1"],
        ])->get();

        $admission_promotion = AdmissionPromotion::where([
            ['status', '=',"1"],
        ])->get();

        $admission_promotions = collect($admission_promotion)->slice(0, 1);

        $breaking_news = BreakingNews::where([
            ['status', '=',"1"],
        ])->get();

        $administrator = Administrator::where([
            ['status', '=',"1"],
        ])->orderBy('priority', 'ASC')->get();

        $home_address = HomeAddress::where([
            ['status', '=',"1"],
        ])->get();

        $home_addr = collect($home_address)->slice(0, 1);


        $director =DB::table('massage_directors')
            ->join('employs','massage_directors.e_id', '=','employs.id')
            ->select('employs.image','employs.e_name','massage_directors.short_massage','massage_directors.s_facilities','massage_directors.id')->where([
                ['massage_directors.status', '=',"1"],
            ])->get();

        $dir = collect($director)->slice(0, 1);

        $language_school = School::where('status','1')->get();


        $allfacultymeber= FacultyMember::all();
        $length = $allfacultymeber->count();

        $faculty_member=[];
        for($i=0; $i<$length; $i++){


            $facilities_member =DB::table('faculty_members')
                ->join('designations','faculty_members.designation_id', '=','designations.id')
//            ->join('designations','faculty_members.adi_designation_id', '=','designations.id')
                ->select('designations.designation','designations.adi_designation','faculty_members.m_name','faculty_members.parity','faculty_members.image'
                    ,'faculty_members.edu_que','faculty_members.type','faculty_members.school_id','faculty_members.leave','faculty_members.id')->where([
                    ['faculty_members.type', '=', '2'],
                    ['faculty_members.school_id', '=', '10000'],
                    ['faculty_members.status', '=','1'],
                    ['faculty_members.parity', '=',$i+1],
                ])->get();
            if($facilities_member->count() !=0){
                array_push($faculty_member,$facilities_member);
            };
        }



//        dd($facilities_member);


        $allfacultymeber_adjunct= FacultyMember::all();
        $length_adjunct = $allfacultymeber_adjunct->count();

        $adjunct_member=[];
        for($i=0; $i<$length_adjunct; $i++){


            $facilities_adjunct =DB::table('faculty_members')
                ->join('designations','faculty_members.designation_id', '=','designations.id')
//            ->join('designations','faculty_members.adi_designation_id', '=','designations.id')
                ->select('designations.designation','designations.adi_designation','faculty_members.m_name','faculty_members.parity','faculty_members.image'
                    ,'faculty_members.edu_que','faculty_members.leave','faculty_members.id')->where([
                    ['faculty_members.type', '=', '1'],
                    ['faculty_members.school_id', '=', '10000'],
                    ['faculty_members.status', '=','1'],
                    ['faculty_members.parity', '=',$i+1],
                ])->get();
            if($facilities_adjunct->count() !=0){
                array_push($adjunct_member,$facilities_adjunct);
            };
        }


        return view('frontend.language_school.index',compact(['adjunct_member','faculty_member','dir','language_school','administrator','home_addr','home_slider','admission_promotions','breaking_news']));
    }

    public function school_details($id)
    {

        $administrator = Administrator::where([
            ['status', '=',"1"],
        ])->orderBy('priority', 'ASC')->get();

        $home_address = HomeAddress::where([
            ['status', '=',"1"],
        ])->get();

        $home_addr = collect($home_address)->slice(0, 1);


       $school = School::find($id);

       $school_details = SchoolDetails::where([
           ['school_id',$id],
           ['status','1'],
           ])->get();



//       dd($school_details);


        return view('frontend.language_school.details',compact(['school','school_details','administrator','home_addr']));
    }

    public function result()
    {

        $administrator = Administrator::where([
            ['status', '=',"1"],
        ])->orderBy('priority', 'ASC')->get();

        $home_address = HomeAddress::where([
            ['status', '=',"1"],
        ])->get();

        $home_addr = collect($home_address)->slice(0, 1);

        return view('frontend.result.index',compact(['administrator','home_addr']));
    }

    public function result_show( Request $request)
    {


//        dd($request);
        $administrator = Administrator::where([
            ['status', '=',"1"],
        ])->get();

        $home_address = HomeAddress::where([
            ['status', '=',"1"],
        ])->get();

        $home_addr = collect($home_address)->slice(0, 1);


        $student = StudentInfo::where('s_id',$request->s_id)->with('batches')->first();

        $oldstudent = DB::table('s_result_entry')->where('s_resultentry_sid', $request->s_id)->get();

//        dd($oldstudent);


        if(!empty($student))
        {

            $student_administration = StudentAdminastration::where('student_id',$student->id)->with(['department','program'])->first();
            $result = Result::where('student_id',$student->id)->with('startsession')->latest()->first();

//            dd($result);

            Session::flash('message','Data found!');
            return view('frontend.result.show',compact(['result','student','student_administration','administrator','home_addr']));
        }
        else{
            if ($oldstudent->count() !=0)
            {
                Session::flash('message','Data found!');
                return view('frontend.result.show',compact(['oldstudent','administrator','home_addr']));
            }else
            {
                $administrator = array();
                $result='';
                $student_administration ='';
                $student='';
                Session::flash('message','No Data Found!');
                return view('frontend.result.show',compact(['result','student','student_administration','administrator','home_addr']));
            }

        }

    }

    public function o_details($id)
    {
        $home_address = HomeAddress::where([
            ['status', '=',"1"],
        ])->get();

        $home_addr = collect($home_address)->slice(0, 1);

        $administrator = Administrator::where([
            ['status', '=',"1"],
        ])->orderBy('priority', 'ASC')->get();

        $admin_dash = Administrator::find($id);




        $allmeber= Employ::all();
        $length = $allmeber->count();
        $mememberarray=array();
        for($i=0; $i<$length; $i++){

            $member =DB::table('employs')
                ->join('designations','employs.e_designation', '=','designations.id')
                ->select('designations.designation','designations.adi_designation','employs.e_name','employs.parity','employs.image'
                    ,'employs.email','employs.id')->where([
                    ['employs.administrators_id', '=',$admin_dash->id],
                    ['employs.status','=',"1"],
                    ['employs.parity','=',$i+1],
                ])->get();

            if($member->count() !=0){
                array_push($mememberarray,$member);
            };

        }

        return view('frontend.administrator.administrator',compact(['administrator','admin_dash','mememberarray','home_addr']));
    }




    public function about()
    {
        return view('frontend.about');
    }

    public function department()
    {
        $administrator = Administrator::where([
            ['status', '=',"1"],
        ])->orderBy('priority', 'ASC')->get();


        $home_address = HomeAddress::where([
            ['status', '=',"1"],
        ])->get();

        $home_addr = collect($home_address)->slice(0, 1);



        // $department = Department::all();
            $department = Department::where([
            ['status', '=',"1"],
            ])->orderBy('priority', 'ASC')->get();
        return view('frontend.layout.pages.department',compact(['department','administrator','home_addr']));
    }

    public function faculty()
    {
        $facultys = Faculty::with('department')->with('dinMessage')->get();


        $administrator = Administrator::where([
            ['status', '=',"1"],
        ])->orderBy('priority', 'ASC')->get();

        $home_address = HomeAddress::where([
            ['status', '=',"1"],
        ])->get();

        $home_addr = collect($home_address)->slice(0, 1);

//        $department =DB::table('faculty')
//            ->join('faculties','departments.faculty_id', '=','faculties.id')
////            ->join('designations','faculty_members.adi_designation_id', '=','designations.id')
//            ->select('faculties.name as facultiesName','faculties.establish_year','departments.name as departmentName','departments.image',
//                'departments.id','faculties.id')->where([
//                ['departments.faculty_id', '=', $faculty->id],
//            ])->get();

        return view('frontend.layout.pages.faculty',compact(['facultys','administrator','home_addr']));
    }

    public function f_chancellor()
    {
        $administrator = Administrator::where([
            ['status', '=',"1"],
        ])->orderBy('priority', 'ASC')->get();

        $home_address = HomeAddress::where([
            ['status', '=',"1"],
        ])->get();

        $home_addr = collect($home_address)->slice(0, 1);

        $chancellor = FormerViceChancellor::where([
                ['status', '=',"1"],
            ])->orderBy('e_date', 'desc')->get();



        return view('frontend.f_v_chancellor',compact(['chancellor','administrator','home_addr']));
    }
    public function aca_calender()
    {
        $administrator = Administrator::where([
            ['status', '=',"1"],
        ])->orderBy('priority', 'ASC')->get();

        $home_address = HomeAddress::where([
            ['status', '=',"1"],
        ])->get();

        $home_addr = collect($home_address)->slice(0, 1);


        $aca_calender =DB::table('aca_calenders')
            ->join('start_sessions','aca_calenders.session_id', '=','start_sessions.id')
            ->select('start_sessions.startsession','aca_calenders.upload_file',
                'aca_calenders.status', 'aca_calenders.id')->where([
                ['aca_calenders.status', '=',"1"],
            ])->orderBy('id','desc')->get();


        return view('frontend.academic_calender.academic_calender',compact(['administrator','aca_calender','home_addr']));
    }

     public function iqac()
    {
        $administrator = Administrator::where([
            ['status', '=',"1"],
        ])->orderBy('priority', 'ASC')->get();

        $iqac = Iqac::where([
            ['status', '=',"1"],
        ])->latest()->first();

        $iqac_workshop =DB::table('iqac_workshops')
            ->join('departments','iqac_workshops.dept_id', '=','departments.id')
            ->select('departments.name','iqac_workshops.w_title','iqac_workshops.w_details','iqac_workshops.id')->where([
                ['iqac_workshops.status','=',"1"],
            ])->get();

        $iqac_esource = IqacResource::where([
            ['status', '=',"1"],
        ])->get();

        $Notice_Board = IqacDetails::where([
            ['category', '=',"1"],
            ['status', '=',"1"],
        ])->get();

        $News_Events = IqacDetails::where([
            ['category', '=',"2"],
            ['status', '=',"1"],
        ])->get();



        $allmeber= IqacMember::all();
        $length = $allmeber->count();
        $employ_member=array();
        $faculty_members=array();
        $alldata=[];
        for($i=0; $i<$length; $i++) {

            $employ_membe = IqacMember::where([
                ['type', '=', "1"],
                ['administrator_type', '=', "1"],
                ['parity', '=', $i + 1]
            ])->with('employ')->first();
            if ($employ_membe != null) {
                $employ_member[] = $employ_membe;
            }


            $faculty_membe = IqacMember::where([
                ['type', '=', "2"],
                ['administrator_type', '=', "1"],
                ['parity', '=', $i + 1]
            ])->with('faculty_member')->first();

            if ($faculty_membe != null) {
                $faculty_members[] = $faculty_membe;
            }

        }


        $employ_quality_member=array();
        $faculty_quality_members=array();
        $alldata=[];
        for($i=0; $i<$length; $i++) {

            $employ_quality = IqacMember::where([
                ['type', '=', "1"],
                ['administrator_type', '=', "2"],
                ['parity', '=', $i + 1]
            ])->with('employ')->first();
            if ($employ_quality != null) {
                $employ_quality_member[] = $employ_quality;
            }


            $faculty_quality = IqacMember::where([
                ['type', '=', "2"],
                ['administrator_type', '=', "2"],
                ['parity', '=', $i + 1]
            ])->with('faculty_member')->first();

            if ($faculty_quality != null) {
                $faculty_quality_members[] = $faculty_quality;
            }

        }
        $employ_self_member=array();
        $faculty_self_members=array();
        $alldata=[];
        for($i=0; $i<$length; $i++) {

            $employ_self = IqacMember::where([
                ['type', '=', "1"],
                ['administrator_type', '=', "3"],
                ['parity', '=', $i + 1]
            ])->with('employ')->first();
            if ($employ_self != null) {
                $employ_self_member[] = $employ_self;
            }


            $faculty_self = IqacMember::where([
                ['type', '=', "2"],
                ['administrator_type', '=', "3"],
                ['parity', '=', $i + 1]
            ])->with('faculty_member')->first();

            if ($faculty_self != null) {
                $faculty_self_members[] = $faculty_self;
            }

        }


        // dd($employ_member);

        return view('frontend.iqac.iqac',compact(['faculty_self_members','employ_self_member','faculty_quality_members','employ_quality_member','faculty_members','employ_member','administrator',
            'iqac','iqac_workshop','iqac_esource','Notice_Board','News_Events']));
    }

    public function controller()
    {
        $administrator = Administrator::where([
            ['status', '=',"1"],
        ])->orderBy('priority', 'ASC')->get();

        $controller_of_exam = ControllerOfExamination::where([
            ['status', '=',"1"],
        ])->latest()->first();

        $application = ControllerOfExaminationApplication::where([
            ['status', '=',"1"],
        ])->get();

        return view('frontend.controller_of_examination.controlle_of_examination',compact(['administrator','controller_of_exam','application']));
    }

    public function date()
    {
        $administrator = Administrator::where([
            ['status', '=',"1"],
        ])->orderBy('priority', 'ASC')->get();

        $date = ImportentDate::where([
            ['status', '=',"1"],
        ])->get();

        $home_address = HomeAddress::where([
            ['status', '=',"1"],
        ])->get();

        $home_addr = collect($home_address)->slice(0, 1);

        return view('frontend.importent_date.importent_date',compact(['administrator','home_addr','date']));

    }

    public function carer()
    {

        $administrator = Administrator::where([
            ['status', '=',"1"],
        ])->orderBy('priority', 'ASC')->get();

        $home_address = HomeAddress::where([
            ['status', '=',"1"],
        ])->get();

        $home_addr = collect($home_address)->slice(0, 1);

        $job = JobPost::where([
            ['status', '=',"1"],
        ])->get();

        return view('frontend.career.job_post',compact(['administrator','home_addr','job']));
    }

    public function carer_details($id)
    {

        $administrator = Administrator::where([
            ['status', '=',"1"],
        ])->orderBy('priority', 'ASC')->get();

        $home_address = HomeAddress::where([
            ['status', '=',"1"],
        ])->get();

        $home_addr = collect($home_address)->slice(0, 1);

        $job = JobPost::find($id);

        return view('frontend.career.job_details',compact(['administrator','home_addr','job']));
    }

    public function carer_apply($id)
    {

        $administrator = Administrator::where([
            ['status', '=',"1"],
        ])->orderBy('priority', 'ASC')->get();

        $home_address = HomeAddress::where([
            ['status', '=',"1"],
        ])->get();

        $home_addr = collect($home_address)->slice(0, 1);

        $job = JobPost::find($id);

        return view('frontend.career.job_applay',compact(['administrator','home_addr','job']));
    }


    public function vision()
    {

        $administrator = Administrator::where([
            ['status', '=',"1"],
        ])->orderBy('priority', 'ASC')->get();

        $home_address = HomeAddress::where([
            ['status', '=',"1"],
        ])->get();

        $home_addr = collect($home_address)->slice(0, 1);


        return view('frontend.static_page.vision',compact(['administrator','home_addr']));
    }

    public function affiliate()
    {

        $administrator = Administrator::where([
            ['status', '=',"1"],
        ])->orderBy('priority', 'ASC')->get();

        $home_address = HomeAddress::where([
            ['status', '=',"1"],
        ])->get();

        $home_addr = collect($home_address)->slice(0, 1);


        return view('frontend.static_page.affiliation',compact(['administrator','home_addr']));
    }
    public function director()
    {

        $administrator = Administrator::where([
            ['status', '=',"1"],
        ])->orderBy('priority', 'ASC')->get();

        $home_address = HomeAddress::where([
            ['status', '=',"1"],
        ])->get();

        $home_addr = collect($home_address)->slice(0, 1);

        $massage_vcs =DB::table('massage_directors')
            ->join('employs','massage_directors.e_id', '=','employs.id')
            ->select('employs.image','employs.e_name','massage_directors.short_massage','massage_directors.long_massage','massage_directors.id')->where([
                ['massage_directors.status', '=',"1"],
            ])->get();

        $director = collect($massage_vcs)->slice(0, 1);

//        dd($massage_vc);


        return view('frontend.static_page.director',compact(['administrator','home_addr','director']));
    }


    public function vice_chanchelor()
    {

        $administrator = Administrator::where([
            ['status', '=',"1"],
        ])->orderBy('priority', 'ASC')->get();

        $home_address = HomeAddress::where([
            ['status', '=',"1"],
        ])->get();

        $home_addr = collect($home_address)->slice(0, 1);

        $massage_vcs =DB::table('massage_v_c_s')
            ->join('employs','massage_v_c_s.e_id', '=','employs.id')
            ->select('employs.image','employs.e_name','massage_v_c_s.short_massage','massage_v_c_s.long_massage','massage_v_c_s.id')->where([
                ['massage_v_c_s.status', '=',"1"],
            ])->get();

        $massage_vc = collect($massage_vcs)->slice(0, 1);

//        dd($massage_vc);


        return view('frontend.static_page.vice_chanchelor',compact(['administrator','home_addr','massage_vc']));
    }

    public function chairman()
    {

        $administrator = Administrator::where([
            ['status', '=',"1"],
        ])->orderBy('priority', 'ASC')->get();

        $home_address = HomeAddress::where([
            ['status', '=',"1"],
        ])->get();

        $home_addr = collect($home_address)->slice(0, 1);

        $massage_chairman =DB::table('massage_chairmen')
            ->join('employs','massage_chairmen.e_id', '=','employs.id')
            ->select('employs.image','employs.e_name','massage_chairmen.short_massage','massage_chairmen.long_massage','massage_chairmen.id')->where([
                ['massage_chairmen.status', '=',"1"],
            ])->get();

        $massage_chair = collect($massage_chairman)->slice(0, 1);

//        dd($massage_vc);


        return view('frontend.static_page.chairman',compact(['administrator','home_addr','massage_chair']));
    }
    public function extra_co()
    {
        $administrator = Administrator::where([
            ['status', '=',"1"],
        ])->orderBy('priority', 'ASC')->get();
        
        $home_address = HomeAddress::where([
            ['status', '=',"1"],
        ])->get();

        $home_addr = collect($home_address)->slice(0, 1);


        $activities = PhotoGallery::where([
            ['category',2],
            ['status',1]
        ])->get();

//        dd($photo_gallery);


        return view('frontend.static_page.extra_co',compact(['activities','administrator','home_addr']));
    }

     public function fees_and_payments()
    {
    $fees_payment = DB::table('fees_paymens')
         ->join('departments', 'fees_paymens.dept_id', '=', 'departments.id')
         ->join('aca_programs','fees_paymens.program_id', '=','aca_programs.id')
         ->select('departments.id as did','departments.name', 'aca_programs.p_name', 'fees_paymens.course_fee', 'fees_paymens.r_q_admission', 'fees_paymens.general_information', 'fees_paymens.p_result', 'fees_paymens.p_amount', 'fees_paymens.scholarship', 'fees_paymens.financial_waver'
         , 'fees_paymens.m_fee', 'fees_paymens.status', 'fees_paymens.id')->where([
        ['fees_paymens.status', '=', "1"],
        ])->get();

        $administrator = Administrator::where([
            ['status', '=',"1"],
        ])->orderBy('priority', 'ASC')->get();

        $home_address = HomeAddress::where([
            ['status', '=',"1"],
        ])->get();

        $home_addr = collect($home_address)->slice(0, 1);


        return view('frontend.static_page.fees_and_payments',compact(['fees_payment','administrator','home_addr']));
    }

    public function crhp()
    {

        $administrator = Administrator::where([
            ['status', '=',"1"],
        ])->orderBy('priority', 'ASC')->get();

        $home_address = HomeAddress::where([
            ['status', '=',"1"],
        ])->get();

        $home_addr = collect($home_address)->slice(0, 1);

        $crhp = Crhp::where([
            ['status', '=',"1"],
        ])->latest()->first();

        $Research_Conducted = CrhpDetails::where([
            ['status', '=',"1"],
            ['category', '=',"1"],
        ])->get();

        $Journal_Published = CrhpDetails::where([
            ['status', '=',"1"],
            ['category', '=',"2"],
        ])->get();

        $Annual_Report = CrhpDetails::where([
            ['status', '=',"1"],
            ['category', '=',"3"],
        ])->get();

        $Newsletter_Published = CrhpDetails::where([
            ['status', '=',"1"],
            ['category', '=',"4"],
        ])->get();

        $Magazine_Published = CrhpDetails::where([
            ['status', '=',"1"],
            ['category', '=',"5"],
        ])->get();

        $Notice_Board = CrhpDetails::where([
            ['status', '=',"1"],
            ['category', '=',"6"],
        ])->get();



        return view('frontend.crhp.crhp',compact(['administrator','home_addr','crhp','Notice_Board',
            'Magazine_Published','Newsletter_Published','Annual_Report','Journal_Published','Research_Conducted']));
    }

    public function policy_procedure()
    {

        $administrator = Administrator::where([
            ['status', '=',"1"],
        ])->orderBy('priority', 'ASC')->get();

        $home_address = HomeAddress::where([
            ['status', '=',"1"],
        ])->get();

        $home_addr = collect($home_address)->slice(0, 1);


        return view('frontend.static_page.policy_procedure',compact(['administrator','home_addr']));
    }

    public function admission()
    {

        $administrator = Administrator::where([
            ['status', '=',"1"],
        ])->orderBy('priority', 'ASC')->get();

        $home_address = HomeAddress::where([
            ['status', '=',"1"],
        ])->get();

        $home_addr = collect($home_address)->slice(0, 1);


        return view('frontend.static_page.admission',compact(['administrator','home_addr']));
    }
    public function undergraduate()
    {

        $administrator = Administrator::where([
            ['status', '=',"1"],
        ])->orderBy('priority', 'ASC')->get();

        $home_address = HomeAddress::where([
            ['status', '=',"1"],
        ])->get();

        $home_addr = collect($home_address)->slice(0, 1);

        $undergraduate = AdmissionRequirement::where([
            ['type', '=',"1"],
            ['status', '=',"1"],
        ])->latest()->first();

//        dd($undergraduate);


        return view('frontend.admission_requirement.undergraduate',compact(['administrator','home_addr','undergraduate']));
    }

    public function postgraduate()
    {

        $administrator = Administrator::where([
            ['status', '=',"1"],
        ])->orderBy('priority', 'ASC')->get();

        $home_address = HomeAddress::where([
            ['status', '=',"1"],
        ])->get();

        $home_addr = collect($home_address)->slice(0, 1);

        $postgraduate = AdmissionRequirement::where([
            ['type', '=',"2"],
            ['status', '=',"1"],
        ])->latest()->first();


        return view('frontend.admission_requirement.postgraduate',compact(['administrator','home_addr','postgraduate']));
    }

    public function foreign_student()
    {

        $administrator = Administrator::where([
            ['status', '=',"1"],
        ])->orderBy('priority', 'ASC')->get();

        $home_address = HomeAddress::where([
            ['status', '=',"1"],
        ])->get();

        $home_addr = collect($home_address)->slice(0, 1);

        $foreign_student = AdmissionRequirement::where([
            ['type', '=',"3"],
            ['status', '=',"1"],
        ])->latest()->first();


        return view('frontend.admission_requirement.foregianstudent',compact(['administrator','home_addr','foreign_student']));
    }

    public function credit_transfer()
    {

        $administrator = Administrator::where([
            ['status', '=',"1"],
        ])->orderBy('priority', 'ASC')->get();
        
        
        $home_address = HomeAddress::where([
            ['status', '=',"1"],
        ])->get();

        $home_addr = collect($home_address)->slice(0, 1);


        return view('frontend.static_page.credit_transfer',compact(['administrator','home_addr']));
    }

    public function scholership_and_financial_aid()
    {
        $fees_payment = DB::table('fees_paymens')
            ->join('departments', 'fees_paymens.dept_id', '=', 'departments.id')
            ->join('aca_programs','fees_paymens.program_id', '=','aca_programs.id')
            ->select('departments.name', 'aca_programs.p_name', 'fees_paymens.course_fee', 'fees_paymens.scholarship', 'fees_paymens.financial_waver'
                , 'fees_paymens.m_fee', 'fees_paymens.status', 'fees_paymens.id')->where([
                ['fees_paymens.status', '=', "1"],
            ])->get();

        $administrator = Administrator::where([
            ['status', '=',"1"],
        ])->orderBy('priority', 'ASC')->get();

        $home_address = HomeAddress::where([
            ['status', '=',"1"],
        ])->get();

        $home_addr = collect($home_address)->slice(0, 1);


        return view('frontend.static_page.scholership_and_financial_aid',compact(['fees_payment','administrator','home_addr']));
    }

    public function contact()
    {

        $administrator = Administrator::where([
            ['status', '=',"1"],
        ])->orderBy('priority', 'ASC')->get();

        $home_address = HomeAddress::where([
            ['status', '=',"1"],
        ])->get();

        $home_addr = collect($home_address)->slice(0, 1);


        return view('frontend.static_page.contact',compact(['administrator','home_addr']));
    }




}
