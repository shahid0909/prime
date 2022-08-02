<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Fees_payment\FeesPaymenController;
use App\Http\Controllers\Students\StudentController;
use App\Http\Controllers\CRHP\CrhpDetailsController;
use App\Http\Controllers\Library\LibraryEresourceController;
use App\Http\Controllers\IQAC\IqacMemberController;
use App\Http\Controllers\IQAC\IqacDetailsController;
use App\Http\Controllers\Settings\FacultyController;
use App\Http\Controllers\Settings\DepartmentController;
use App\Http\Controllers\IdCard\IdCardController;
use App\Http\Controllers\Department\DeptSliderController;
use App\Http\Controllers\Gallery\PhotoGalleryController;
use App\Http\Controllers\Department\ClubsController;
use App\Http\Controllers\Department\VisionMissionController;
use App\Http\Controllers\Department\FacilitiesController;
use App\Http\Controllers\AcaCalender\AcaCalenderController;
use App\Http\Controllers\Events\HomeEventController;
use App\Http\Controllers\Massage\MassageDirectorcontroller;
use App\Http\Controllers\Events\DeptEventController;
use App\Http\Controllers\JobPost\JobApplyController;
use App\Http\Controllers\Result\ResultController;
use App\Http\Controllers\School\SchoolController;
use App\Http\Controllers\Massage\MassageVCController;
use App\Http\Controllers\Massage\MassageChairmanController;
use App\Http\Controllers\Massage\MassageDeptHadController;
use App\Http\Controllers\Massage\MassageDeanController;
use App\Http\Controllers\School\SchoolDetailsController;
use App\Http\Controllers\StudentApply\StudentApplyController;
use App\Http\Controllers\NotableAlumnis\HomeNotableAlumnies;
use App\Http\Controllers\NewsMedia\HomeNewsMediaController;
use App\Http\Controllers\BreakingNews\BreakingNewsController;
use App\Http\Controllers\ImportentDate\ImportentDateController;
use App\Http\Controllers\Home\HomeSliderController;
use App\Http\Controllers\IQAC\IqacController;
use App\Http\Controllers\ControllerOfExamination\ControllerOfExaminationController;
use App\Http\Controllers\ControllerOfExamination\ControllerOfExaminationApplicationController;
use App\Http\Controllers\CRHP\CrhpController;
use App\Http\Controllers\IQAC\IqacResourceController;
use App\Http\Controllers\IQAC\IqacWorkshopController;
use App\Http\Controllers\AdmissionRequirement\AdmissionRequirementController;
use App\Http\Controllers\AdmissionPromotion\AdmissionPromotionController;
use App\Http\Controllers\Address\HomeAddressController;
use App\Http\Controllers\Administrator\AdministratorController;
use App\Http\Controllers\NewsMedia\DeptNewsMediaController;
use App\Http\Controllers\AcaProgram\AcaProgramController;
use App\Http\Controllers\Employ\EmployController;
use App\Http\Controllers\JobPost\JobPostController;
use App\Http\Controllers\FormerViceChancellor\FormerViceChancellorController;
use App\Http\Controllers\ClassExam\ClassExamController;
use App\Http\Controllers\Shortest\ShortestConterooler;
use App\Http\Controllers\Department\ClubCommitteeController;
use App\Http\Controllers\Department\Club_detailsController;
use App\Http\Controllers\FacultyMember\FacultyMemberController;
use App\Http\Controllers\Address\DeptAddressController;
use App\Http\Controllers\NotableAlumnis\DeptNotableController;
use App\Http\Controllers\Notice\HomeNoticeController;
use App\Http\Controllers\Notice\DeptNoticeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Settings\DeptDetailsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Settings\SettingController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('frontend.home');
// });

Route::get('clear-all', function () {
    \Illuminate\Support\Facades\Artisan::call('view:clear');
    \Illuminate\Support\Facades\Artisan::call('config:clear');
    \Illuminate\Support\Facades\Artisan::call('cache:clear');
    \Illuminate\Support\Facades\Artisan::call('config:cache');
    \Illuminate\Support\Facades\Artisan::call('clear-compiled');
    \Illuminate\Support\Facades\Artisan::call('route:clear');
    dd('Cached Cleared');
});


Route::get('/under_construction',[HomeController::class,'under_construction']);

// ================= Home Notice & event route start=====================
Route::get('/home_event_details/{id}',[HomeController::class,'home_event_details']);
Route::get('/home_notice_details',[HomeController::class,'home_notice_details']);
Route::get('/code_of_conduct',[HomeController::class,'code_of_conduct']);
Route::get('/frequently_questions',[HomeController::class,'frequently_questions']);

Route::get('/home_news_media/{id}',[HomeController::class,'home_news_media']);


// ================= Static Page route start=====================
Route::get('/vision',[HomeController::class,'vision']);
Route::get('/affiliate',[HomeController::class,'affiliate']);
Route::get('/vice_chanchelor',[HomeController::class,'vice_chanchelor']);
Route::get('/faculty_dean/{id}',[HomeController::class,'faculty_dean']);
Route::get('/director',[HomeController::class,'director']);
Route::get('/language_school',[HomeController::class,'language_school']);
Route::get('/school_details/{id}',[HomeController::class,'school_details']);

Route::get('/chairman',[HomeController::class,'chairman']);
Route::get('/library', [HomeController::class,'library']);
Route::get('/photo_gallery',[HomeController::class,'photo_gallery']);
Route::get('/extra_co',[HomeController::class,'extra_co']);
Route::get('/fees_and_payments',[HomeController::class,'fees_and_payments']);
Route::get('/crhp',[HomeController::class,'crhp']);
Route::get('/policy_procedure',[HomeController::class,'policy_procedure']);

Route::get('/admission',[HomeController::class,'admission']);

Route::get('/credit_transfer',[HomeController::class,'credit_transfer']);
Route::get('/scholership_and_financial_aid',[HomeController::class,'scholership_and_financial_aid']);
Route::get('/contact',[HomeController::class,'contact']);

Route::get('/undergraduate',[HomeController::class,'undergraduate']);
Route::get('/postgraduate',[HomeController::class,'postgraduate']);
Route::get('/foreign_student',[HomeController::class,'foreign_student']);
Route::get('/result',[HomeController::class,'result']);
Route::post('/result/show', [HomeController::class,'result_show'])->name('result_show.store');







Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/department',[HomeController::class,'department']);
Route::get('/faculty',[HomeController::class,'faculty']);
Route::get('/office/{id}', [HomeController::class,'o_details']);
Route::get('/f_v_chancellor', [HomeController::class,'f_chancellor']);
Route::get('/iqac', [HomeController::class,'iqac']);
Route::get('/controller_of_examination', [HomeController::class,'controller']);
Route::get('/important_date', [HomeController::class,'date']);
Route::get('/carer', [HomeController::class,'carer']);
Route::get('/job_details/{id}', [HomeController::class,'carer_details']);
Route::get('/job_apply/{id}', [HomeController::class,'carer_apply']);
Route::get('/aca_calender', [HomeController::class,'aca_calender']);




// ================= Student Apply route start=====================
Route::get('/student_apply', [StudentApplyController::class,'index']);
Route::post('/getDepartment', [StudentApplyController::class,'getDepartment']);
Route::post('/getProgram', [StudentApplyController::class,'getProgram']);
Route::post('/student_apply/store_2', [StudentApplyController::class,'store_1'])->name('student_apply.store_1');
Route::post('/student_apply/store_3', [StudentApplyController::class,'store_2'])->name('student_apply.store_2');
Route::post('/student_apply/store_4', [StudentApplyController::class,'store_3'])->name('student_apply.store_3');
Route::post('/student_apply/store_6', [StudentApplyController::class,'store_5'])->name('student_apply.store_5');
Route::post('/student_apply/store_7', [StudentApplyController::class,'store_6'])->name('student_apply.store_6');

Route::get('/admin/student_apply_list', [StudentApplyController::class,'apply_list'])->middleware('auth');
Route::get('/admin/student_apply_list/delete/{id}', [StudentApplyController::class,'destroy'])->middleware('auth');
Route::get('/admin/student_apply_list/show/{id}', [StudentApplyController::class,'show'])->middleware('auth');
Route::get('/admin/student_apply_list/edit/{id}', [StudentApplyController::class,'edit'])->middleware('auth');
Route::post('/admin/student_apply_list/update/{id}', [StudentApplyController::class,'update'])->middleware('auth');
Route::get('/admin/student_list', [StudentApplyController::class,'student_list'])->middleware('auth');



Route::get('/',[HomeController::class,'index']);
Route::get('/about',[HomeController::class,'about']);
Route::get('admin',[AdminController::class,'index']);
Route::get('admin/dashboard',[AdminController::class,'dashboard']);
Route::get('admin/student',[AdminController::class,'student']);
Route::get('admin/addstudent',[AdminController::class,'addstudent']);
Route::get('admin/tempaddstudent',[AdminController::class,'tempaddstudent']);
Route::get('admin/exam',[AdminController::class,'exam']);
Route::get('admin/addexam',[AdminController::class,'addexam']);
Route::get('admin/admit',[AdminController::class,'admit']);



// =================Faculty route start=====================
Route::get('/admin/faculty',[FacultyController::class,'faculty']);
Route::get('/admin/add_faculty',[FacultyController::class,'add_faculty']);
Route::post('/admin/store_faculty', [FacultyController::class,'store_faculty'])->name('faculty.store');
Route::get('/faculty/delete/{id}', [FacultyController::class,'destroy']);
Route::get('/faculty/edit/{id}', [FacultyController::class,'edit']);
Route::post('/faculty/update/{id}', [FacultyController::class,'update']);

// =================Admin Department route start=====================
Route::get('/admin/department',[DepartmentController::class,'index']);
Route::get('/admin/add_department',[DepartmentController::class,'create']);
Route::post('/admin/store_department', [DepartmentController::class,'store'])->name('department.store');
Route::get('/department/delete/{id}', [DepartmentController::class,'destroy']);
Route::get('/department/edit/{id}', [DepartmentController::class,'edit']);
Route::post('/department/update/{id}', [DepartmentController::class,'update']);



// ================= Department slider route start=====================
Route::get('/admin/dept_slider',[DeptSliderController::class,'slider']);
Route::get('/admin/add_slider',[DeptSliderController::class,'add_slider']);
Route::post('/admin/store_slider', [DeptSliderController::class,'store'])->name('slider.store');
Route::get('/slider/delete/{id}', [DeptSliderController::class,'destroy']);
Route::get('/department/slider/edit/{id}', [DeptSliderController::class,'edit']);
Route::post('/department/slider/update/{id}', [DeptSliderController::class,'update']);

// ================= Department vision mission route start=====================
Route::get('/admin/vision_mission',[VisionMissionController::class,'vision_mission']);
Route::get('/admin/add_vision_mission',[VisionMissionController::class,'create']);
Route::post('/admin/store_vision_mission', [VisionMissionController::class,'store'])->name('vision_mission.store');
Route::get('/vision_mission/delete/{id}', [VisionMissionController::class,'destroy']);
Route::get('/vision_mission/edit/{id}', [VisionMissionController::class,'edit']);
Route::post('/vision_mission/update/{id}', [VisionMissionController::class,'update']);


// ================= Department Facilities route start=====================
Route::get('/admin/facilities',[FacilitiesController::class,'facilities']);
Route::get('/admin/add_facilities',[FacilitiesController::class,'create']);
Route::post('/admin/store_facilities', [FacilitiesController::class,'store'])->name('facilities.store');
Route::get('/admin/facilities/delete/{id}', [FacilitiesController::class,'destroy']);
Route::get('/admin/facilities/edit/{id}', [FacilitiesController::class,'edit']);
Route::post('/admin/facilities/update/{id}', [FacilitiesController::class,'update']);

// ================= Clubs route start=====================
Route::get('/admin/clubs',[ClubsController::class,'clubs']);
Route::get('/admin/add_clubs',[ClubsController::class,'create']);
Route::post('/admin/store_clubs', [ClubsController::class,'store'])->name('clubs.store');
Route::get('/admin/clubs/delete/{id}', [ClubsController::class,'destroy']);
Route::get('/admin/clubs/edit/{id}', [ClubsController::class,'edit']);
Route::post('/admin/clubs/update/{id}', [ClubsController::class,'update']);

// ================= Home Notice route start=====================
Route::get('/admin/Home_notice',[HomeNoticeController::class,'notice']);
Route::get('/admin/add_Home_notice',[HomeNoticeController::class,'create']);
Route::post('/admin/store_Home_notice', [HomeNoticeController::class,'store'])->name('home_notice.store');
Route::get('/home_notice/delete/{id}', [HomeNoticeController::class,'destroy']);
Route::get('/home_notice/edit/{id}', [HomeNoticeController::class,'edit']);
Route::post('/admin/home_notice/update/{id}', [HomeNoticeController::class,'update']);

// ================= Department Notice route start=====================
Route::get('/admin/dept_notice',[DeptNoticeController::class,'dept_notice']);
Route::get('/admin/add_dept_notice',[DeptNoticeController::class,'create']);
Route::post('/admin/store_dept_notice', [DeptNoticeController::class,'store'])->name('dept_notice.store');
Route::get('/dept_notice/delete/{id}', [DeptNoticeController::class,'destroy']);
Route::get('/dept_notice/edit/{id}', [DeptNoticeController::class,'edit']);
Route::post('/admin/dept_notice/update/{id}', [DeptNoticeController::class,'update']);


// =================Setting route start=====================
Route::get('startsession',[SettingController::class,'startsession']);
Route::get('startsession/add',[SettingController::class,'creat']);
Route::post('/startsession/store', [SettingController::class,'store'])->name('session.store');
Route::get('startsession/delete/{id}',[SettingController::class,'startsessiondelete'])->name('startsession.delete.id');
Route::post('strudententry',[StudentController::class,'strudententry'])->name('strudententry');
Route::post('examentry',[StudentController::class,'examentry'])->name('examentry');
Route::get('examdelete/{id}',[StudentController::class,'examdelete'])->name('examdelete.id');
Route::post('admincardprint',[StudentController::class,'admitcardprint'])->name('admintcardprint');
Route::post('admincardprint/old',[StudentController::class,'admitcardprintold'])->name('admintcardprintold');



// ================= Home Events route start=====================
Route::get('/admin/home_event',[HomeEventController::class,'home_event']);
Route::get('/admin/add_home_event',[HomeEventController::class,'create']);
Route::post('/admin/store_home_event', [HomeEventController::class,'store'])->name('home_event.store');
Route::get('/admin/home_event/delete/{id}', [HomeEventController::class,'destroy']);
Route::get('/admin/home_event/edit/{id}', [HomeEventController::class,'edit']);
Route::post('/admin/home_event/update/{id}', [HomeEventController::class,'update']);

// ================= Department Events route start=====================
Route::get('/admin/dept_event',[DeptEventController::class,'dept_event']);
Route::get('/admin/add_dept_event',[DeptEventController::class,'create']);
Route::post('/admin/store_dept_event', [DeptEventController::class,'store'])->name('dept_event.store');
Route::get('/admin/dept_event/delete/{id}', [DeptEventController::class,'destroy']);
Route::get('/admin/dept_event/edit/{id}', [DeptEventController::class,'edit']);
Route::post('/admin/dept_event/update/{id}', [DeptEventController::class,'update']);

// ================= Home Notable Alumni route start=====================
Route::get('/admin/home_notable',[HomeNotableAlumnies::class,'home_notable']);
Route::get('/admin/home_notable/add',[HomeNotableAlumnies::class,'create']);
Route::post('/admin/home_notable/store', [HomeNotableAlumnies::class,'store'])->name('home_notable.store');
Route::get('/admin/home_notable/delete/{id}', [HomeNotableAlumnies::class,'destroy']);
Route::get('/admin/home_notable/edit/{id}', [HomeNotableAlumnies::class,'edit']);
Route::post('/admin/home_notable/update/{id}', [HomeNotableAlumnies::class,'update']);

// ================= Department Notable Alumni route start=====================
Route::get('/admin/dept_notable',[DeptNotableController::class,'dept_notable']);
Route::get('/admin/dept_notable/add',[DeptNotableController::class,'create']);
Route::post('/admin/dept_notable/store', [DeptNotableController::class,'store'])->name('dept_notable.store');
Route::get('/admin/dept_notable/delete/{id}', [DeptNotableController::class,'destroy']);
Route::get('/admin/dept_notable/edit/{id}', [DeptNotableController::class,'edit']);
Route::post('/admin/dept_notable/update/{id}', [DeptNotableController::class,'update']);

// ================= Home News & Media route start=====================
Route::get('/admin/home_news',[HomeNewsMediaController::class,'home_news']);
Route::get('/admin/home_news/add',[HomeNewsMediaController::class,'create']);
Route::post('/admin/home_news/store', [HomeNewsMediaController::class,'store'])->name('home_news.store');
Route::get('/admin/home_news/delete/{id}', [HomeNewsMediaController::class,'destroy']);
Route::get('/admin/home_news/edit/{id}', [HomeNewsMediaController::class,'edit']);
Route::post('/admin/home_news/update/{id}', [HomeNewsMediaController::class,'update']);

// ================= Department News & Media route start=====================
Route::get('/admin/dept_news',[DeptNewsMediaController::class,'dept_news']);
Route::get('/admin/dept_news/add',[DeptNewsMediaController::class,'create']);
Route::post('/admin/dept_news/store', [DeptNewsMediaController::class,'store'])->name('dept_news.store');
Route::get('/admin/dept_news/delete/{id}', [DeptNewsMediaController::class,'destroy']);
Route::get('/admin/dept_news/edit/{id}', [DeptNewsMediaController::class,'edit']);
Route::post('/admin/dept_news/update/{id}', [DeptNewsMediaController::class,'update']);

// ================= Home Address route start=====================
Route::get('/admin/home_address',[HomeAddressController::class,'home_address']);
Route::get('/admin/home_address/add',[HomeAddressController::class,'create']);
Route::post('/admin/home_address/store', [HomeAddressController::class,'store'])->name('home_address.store');
Route::get('/admin/home_address/delete/{id}', [HomeAddressController::class,'destroy']);
Route::get('/admin/home_address/edit/{id}', [HomeAddressController::class,'edit']);
Route::post('/admin/home_address/update/{id}', [HomeAddressController::class,'update']);



// ================= Aca Calender route start=====================
Route::get('/admin/aca_calender',[AcaCalenderController::class,'aca_calender']);
Route::get('/admin/aca_calender/add',[AcaCalenderController::class,'create']);
Route::post('/admin/aca_calender/store', [AcaCalenderController::class,'store'])->name('aca_calender.store');
Route::get('/admin/aca_calender/delete/{id}', [AcaCalenderController::class,'destroy']);
Route::get('/admin/aca_calender/edit/{id}', [AcaCalenderController::class,'edit']);
Route::post('/admin/aca_calender/update/{id}', [AcaCalenderController::class,'update']);



// ================= Department Address route start=====================
Route::get('/admin/dept_address',[DeptAddressController::class,'dept_address']);
Route::get('/admin/dept_address/add',[DeptAddressController::class,'create']);
Route::post('/admin/dept_address/store', [DeptAddressController::class,'store'])->name('dept_address.store');
Route::get('/admin/dept_address/delete/{id}', [DeptAddressController::class,'destroy']);
Route::get('/admin/dept_address/edit/{id}', [DeptAddressController::class,'edit']);
Route::post('/admin/dept_address/update/{id}', [DeptAddressController::class,'update']);

// ================= Faculty Member route start=====================
Route::get('/admin/faculty_member',[FacultyMemberController::class,'faculty_member']);
Route::get('/admin/faculty_member/add',[FacultyMemberController::class,'create']);
Route::post('/admin/faculty_member/store', [FacultyMemberController::class,'store'])->name('faculty_member.store');
Route::get('/admin/faculty_member/delete/{id}', [FacultyMemberController::class,'destroy']);
Route::get('/admin/faculty_member_email/{id}/{tid}', [FacultyMemberController::class,'destroy_email'])->name('faculty.member.email.destroy.id.tid');
Route::get('/admin/faculty_member_phone/{id}/{tid}', [FacultyMemberController::class,'destroy_phone'])->name('faculty.member.phone.destroy.id.tid');
Route::get('/admin/faculty_member/edit/{id}', [FacultyMemberController::class,'edit']);
Route::post('/admin/faculty_member/update/{id}', [FacultyMemberController::class,'update']);


// ================= Club Committee route start=====================
Route::get('/admin/club_committee',[ClubCommitteeController::class,'club_committee']);
Route::get('/admin/club_committee/add',[ClubCommitteeController::class,'create']);
Route::post('/admin/club_committee/store', [ClubCommitteeController::class,'store'])->name('club_committee.store');
Route::get('/admin/club_committee/delete/{id}', [ClubCommitteeController::class,'destroy']);
Route::get('/admin/club_committee/edit/{id}', [ClubCommitteeController::class,'edit']);
Route::post('/admin/club_committee/update/{id}', [ClubCommitteeController::class,'update']);


// ================= Club Details route start=====================
Route::get('/admin/club_details',[Club_detailsController::class,'club_details']);
Route::get('/admin/club_details/add',[Club_detailsController::class,'club_details_creat']);
Route::post('/admin/club_details/store', [Club_detailsController::class,'store'])->name('club_details.store');
Route::get('/admin/club_details/delete/{id}', [Club_detailsController::class,'destroy']);
Route::get('/admin/club_details/edit/{id}', [Club_detailsController::class,'edit']);
Route::post('/admin/club_details/update/{id}', [Club_detailsController::class,'update']);



// ================= Employ route start =====================
Route::get('/admin/employ',[EmployController::class,'employ']);
Route::get('/admin/employ/add',[EmployController::class,'create']);
Route::post('/admin/employ/store', [EmployController::class,'store'])->name('employ.store');
Route::get('/admin/employ/delete/{id}', [EmployController::class,'destroy']);
Route::get('/admin/employ/edit/{id}', [EmployController::class,'edit']);
Route::post('/admin/employ/update/{id}', [EmployController::class,'update']);
Route::get('/admin/employ_member_email/{id}/{tid}', [EmployController::class,'destroy_email'])->name('employ.member.email.destroy.id.tid');
Route::get('/admin/employ_member_phone/{id}/{tid}', [EmployController::class,'destroy_phone'])->name('employ.member.phone.destroy.id.tid');




// ================= Department Details route start=====================
Route::get('/department/details/{id}',[DeptDetailsController::class,'depDetails']);
Route::get('/department/details/facilities/{id}',[DeptDetailsController::class,'facilities']);

Route::get('/department/clubs/all/{id}',[DeptDetailsController::class,'clubs']);
Route::get('/department/clubs/description/{did}/{id}',[DeptDetailsController::class,'clubs_details']);
Route::get('/department/faculty_member/{id}',[DeptDetailsController::class,'faculty_member']);
Route::get('/department/faculty_member/details/{did}/{id}',[DeptDetailsController::class,'member_details']);
Route::get('/department/class_exam/{id}',[DeptDetailsController::class,'class_exam']);
Route::get('/department/dept_notice/{id}',[DeptDetailsController::class,'dept_notice']);
Route::get('/department/program/details/{did}/{id}',[DeptDetailsController::class,'program_details']);
Route::get('/department_news_media/{did}/{id}',[DeptDetailsController::class,'department_news_media']);




// ================= class/exam routing route start=====================
Route::get('/admin/class_exam',[ClassExamController::class,'class_exam']);
Route::get('/admin/class_exam/add',[ClassExamController::class,'create']);
Route::post('/admin/class_exam/store', [ClassExamController::class,'store'])->name('class_exam.store');
Route::get('/admin/class_exam/delete/{id}', [ClassExamController::class,'destroy']);
Route::get('/admin/class_exam/edit/{id}', [ClassExamController::class,'edit']);
Route::post('/admin/class_exam/update/{id}', [ClassExamController::class,'update']);

// ================= Academic Programs route start=====================
Route::get('/admin/aca_program',[AcaProgramController::class,'aca_program']);
Route::get('/admin/aca_program/add',[AcaProgramController::class,'create']);
Route::post('/admin/aca_program/store', [AcaProgramController::class,'store'])->name('aca_program.store');
Route::get('/admin/aca_program/delete/{id}', [AcaProgramController::class,'destroy']);
Route::get('/admin/aca_program/edit/{id}', [AcaProgramController::class,'edit']);
Route::post('/admin/aca_program/update/{id}', [AcaProgramController::class,'update']);


// ================= Administrators routing route start=====================
Route::get('/admin/administrator',[AdministratorController::class,'administrator']);
Route::get('/admin/administrators/add',[AdministratorController::class,'create']);
Route::post('/admin/administrators/store', [AdministratorController::class,'store'])->name('administrator.store');
Route::get('/admin/administrators/delete/{id}', [AdministratorController::class,'destroy']);
Route::get('/admin/administrators/edit/{id}', [AdministratorController::class,'edit']);
Route::post('/admin/administrators/update/{id}', [AdministratorController::class,'update']);



// ================= Former Vice Chancellor routing route start=====================
Route::get('/admin/f_v_Chancellor',[FormerViceChancellorController::class,'f_v_Chancellor']);
Route::get('/admin/f_v_Chancellor/add',[FormerViceChancellorController::class,'create']);
Route::post('/admin/f_v_Chancellor/store', [FormerViceChancellorController::class,'store'])->name('f_v_Chancellor.store');
Route::get('/admin/f_v_Chancellor/delete/{id}', [FormerViceChancellorController::class,'destroy']);
Route::get('/admin/f_v_Chancellor/edit/{id}', [FormerViceChancellorController::class,'edit']);
Route::post('/admin/f_v_Chancellor/update/{id}', [FormerViceChancellorController::class,'update']);


// ================= Home Slider routing route start=====================
Route::get('/admin/home_slider',[HomeSliderController::class,'home_slider']);
Route::get('/admin/home_slider/add',[HomeSliderController::class,'create']);
Route::post('/admin/home_slider/store', [HomeSliderController::class,'store'])->name('home_slider.store');
Route::get('/admin/home_slider/delete/{id}', [HomeSliderController::class,'destroy']);
Route::get('/admin/home_slider/edit/{id}', [HomeSliderController::class,'edit']);
Route::post('/admin/home_slider/update/{id}', [HomeSliderController::class,'update']);


// ================= Breaking News routing route start=====================
Route::get('/admin/breaking_news',[BreakingNewsController::class,'breaking_news']);
Route::get('/admin/breaking_news/add',[BreakingNewsController::class,'create']);
Route::post('/admin/breaking_news/store', [BreakingNewsController::class,'store'])->name('breaking_news.store');
Route::get('/admin/breaking_news/delete/{id}', [BreakingNewsController::class,'destroy']);
Route::get('/admin/breaking_news/edit/{id}', [BreakingNewsController::class,'edit']);
Route::post('/admin/breaking_news/update/{id}', [BreakingNewsController::class,'update']);


// ================= Admission Promotion routing route start=====================
Route::get('/admin/admission_promotion',[AdmissionPromotionController::class,'admission_promotion']);
Route::get('/admin/admission_promotion/add',[AdmissionPromotionController::class,'create']);
Route::post('/admin/admission_promotion/store', [AdmissionPromotionController::class,'store'])->name('admission_promotion.store');
Route::get('/admin/admission_promotion/delete/{id}', [AdmissionPromotionController::class,'destroy']);
Route::get('/admin/admission_promotion/edit/{id}', [AdmissionPromotionController::class,'edit']);
Route::post('/admin/admission_promotion/update/{id}', [AdmissionPromotionController::class,'update']);


// ================= Admission Requirement routing route start=====================
Route::get('/admin/admission_requirement',[AdmissionRequirementController::class,'admission_requirement']);
Route::get('/admin/admission_requirement/add',[AdmissionRequirementController::class,'create']);
Route::post('/admin/admission_requirement/store', [AdmissionRequirementController::class,'store'])->name('admission_requirement.store');
Route::get('/admin/admission_requirement/delete/{id}', [AdmissionRequirementController::class,'destroy']);
Route::get('/admin/admission_requirement/edit/{id}', [AdmissionRequirementController::class,'edit']);
Route::post('/admin/admission_requirement/update/{id}', [AdmissionRequirementController::class,'update']);


// ================= Important Date routing route start=====================
Route::get('/admin/important_date',[ImportentDateController::class,'important_date']);
Route::get('/admin/important_date/add',[ImportentDateController::class,'create']);
Route::post('/admin/important_date/store', [ImportentDateController::class,'store'])->name('important_date.store');
Route::get('/admin/important_date/delete/{id}', [ImportentDateController::class,'destroy']);
Route::get('/admin/important_date/edit/{id}', [ImportentDateController::class,'edit']);
Route::post('/admin/important_date/update/{id}', [ImportentDateController::class,'update']);


// ================= IQAC routing route start=====================
Route::get('/admin/iqac',[IqacController::class,'iqac']);
Route::get('/admin/iqac/add',[IqacController::class,'create']);
Route::post('/admin/iqac/store', [IqacController::class,'store'])->name('iqac.store');
Route::get('/admin/iqac/delete/{id}', [IqacController::class,'destroy']);
Route::get('/admin/iqac/edit/{id}', [IqacController::class,'edit']);
Route::post('/admin/iqac/update/{id}', [IqacController::class,'update']);

// ================= IQAC Workshop routing route start=====================
Route::get('/admin/iqac_workshop',[IqacWorkshopController::class,'iqac_workshop']);
Route::get('/admin/iqac_workshop/add',[IqacWorkshopController::class,'create']);
Route::post('/admin/iqac_workshop/store', [IqacWorkshopController::class,'store'])->name('iqac_workshop.store');
Route::get('/admin/iqac_workshop/delete/{id}', [IqacWorkshopController::class,'destroy']);
Route::get('/admin/iqac_workshop/edit/{id}', [IqacWorkshopController::class,'edit']);
Route::post('/admin/iqac_workshop/update/{id}', [IqacWorkshopController::class,'update']);

// ================= IQAC Resource routing route start=====================
Route::get('/admin/iqac_resource',[IqacResourceController::class,'iqac_resource']);
Route::get('/admin/iqac_resource/add',[IqacResourceController::class,'create']);
Route::post('/admin/iqac_resource/store', [IqacResourceController::class,'store'])->name('iqac_resource.store');
Route::get('/admin/iqac_resource/delete/{id}', [IqacResourceController::class,'destroy']);
Route::get('/admin/iqac_resource/edit/{id}', [IqacResourceController::class,'edit']);
Route::post('/admin/iqac_resource/update/{id}', [IqacResourceController::class,'update']);


// ================= CRHP routing route start=====================
Route::get('/admin/crhp',[CrhpController::class,'crhp']);
Route::get('/admin/crhp/add',[CrhpController::class,'create']);
Route::post('/admin/crhp/store', [CrhpController::class,'store'])->name('crhp.store');
Route::get('/admin/crhp/delete/{id}', [CrhpController::class,'destroy']);
Route::get('/admin/crhp/edit/{id}', [CrhpController::class,'edit']);
Route::post('/admin/crhp/update/{id}', [CrhpController::class,'update']);


// ================= Controller Of Examination routing route start=====================
Route::get('/admin/c_o_e',[ControllerOfExaminationController::class,'c_o_e']);
Route::get('/admin/c_o_e/add',[ControllerOfExaminationController::class,'create']);
Route::post('/admin/c_o_e/store', [ControllerOfExaminationController::class,'store'])->name('c_o_e.store');
Route::get('/admin/c_o_e/delete/{id}', [ControllerOfExaminationController::class,'destroy']);
Route::get('/admin/c_o_e/edit/{id}', [ControllerOfExaminationController::class,'edit']);
Route::post('/admin/c_o_e/update/{id}', [ControllerOfExaminationController::class,'update']);


// ================= Controller Of Examination Application routing route start=====================
Route::get('/admin/c_o_e_a',[ControllerOfExaminationApplicationController::class,'c_o_e_a']);
Route::get('/admin/c_o_e_a/add',[ControllerOfExaminationApplicationController::class,'create']);
Route::post('/admin/c_o_e_a/store', [ControllerOfExaminationApplicationController::class,'store'])->name('c_o_e_a.store');
Route::get('/admin/c_o_e_a/delete/{id}', [ControllerOfExaminationApplicationController::class,'destroy']);
Route::get('/admin/c_o_e_a/edit/{id}', [ControllerOfExaminationApplicationController::class,'edit']);
Route::post('/admin/c_o_e_a/update/{id}', [ControllerOfExaminationApplicationController::class,'update']);


// ================= Job Post routing route start=====================
Route::get('/admin/job',[JobPostController::class,'job']);
Route::get('/admin/job/add',[JobPostController::class,'create']);
Route::post('/admin/job/store', [JobPostController::class,'store'])->name('job.store');
Route::get('/admin/job/delete/{id}', [JobPostController::class,'destroy']);
Route::get('/admin/job/edit/{id}', [JobPostController::class,'edit']);
Route::post('/admin/job/update/{id}', [JobPostController::class,'update']);


// ================= Job Apply routing route start=====================
Route::get('/admin/job_apply',[JobApplyController::class,'index']);
Route::get('/admin/job_apply/add',[JobApplyController::class,'create']);
Route::post('/job_apply/store', [JobApplyController::class,'store'])->name('job_apply.store');
Route::get('/admin/job_apply/delete/{id}', [JobApplyController::class,'destroy']);
Route::get('/admin/job_apply/edit/{id}', [JobApplyController::class,'edit']);
Route::post('/admin/job_apply/update/{id}', [JobApplyController::class,'update']);


// ================= Massage VC routing route start=====================
Route::get('/admin/massage_vc',[MassageVCController::class,'massage_vc']);
Route::get('/admin/massage_vc/add',[MassageVCController::class,'create']);
Route::post('/admin/massage_vc/store', [MassageVCController::class,'store'])->name('massage_vc.store');
Route::get('/admin/massage_vc/delete/{id}', [MassageVCController::class,'destroy']);
Route::get('/admin/massage_vc/edit/{id}', [MassageVCController::class,'edit']);
Route::post('/admin/massage_vc/update/{id}', [MassageVCController::class,'update']);


// ================= Massage Chairmen routing route start=====================
Route::get('/admin/massage_Chairman',[MassageChairmanController::class,'massage_Chairman']);
Route::get('/admin/massage_Chairman/add',[MassageChairmanController::class,'create']);
Route::post('/admin/massage_Chairman/store', [MassageChairmanController::class,'store'])->name('massage_Chairman.store');
Route::get('/admin/massage_Chairman/delete/{id}', [MassageChairmanController::class,'destroy']);
Route::get('/admin/massage_Chairman/edit/{id}', [MassageChairmanController::class,'edit']);
Route::post('/admin/massage_Chairman/update/{id}', [MassageChairmanController::class,'update']);




// ================= Massage Dean routing route start=====================
Route::get('/admin/massage_dean',[MassageDeanController::class,'massage_dean']);
Route::get('/admin/massage_dean/add',[MassageDeanController::class,'create']);
Route::post('/admin/massage_dean/store', [MassageDeanController::class,'store'])->name('massage_dean.store');
Route::get('/admin/massage_dean/delete/{id}', [MassageDeanController::class,'destroy']);
Route::get('/admin/massage_dean/edit/{id}', [MassageDeanController::class,'edit']);
Route::post('/admin/massage_dean/update/{id}', [MassageDeanController::class,'update']);



// ================= Massage Department Head routing route start=====================
Route::get('/admin/massage_department_head',[MassageDeptHadController::class,'massage_department_head']);
Route::get('/admin/massage_department_head/add',[MassageDeptHadController::class,'create']);
Route::post('/admin/massage_department_head/store', [MassageDeptHadController::class,'store'])->name('massage_department_head.store');
Route::get('/admin/massage_department_head/delete/{id}', [MassageDeptHadController::class,'destroy']);
Route::get('/admin/massage_department_head/edit/{id}', [MassageDeptHadController::class,'edit']);
Route::post('/admin/massage_department_head/update/{id}', [MassageDeptHadController::class,'update']);


// ================= Massage Director routing route start=====================
Route::get('/admin/massage_director',[MassageDirectorcontroller::class,'massage_director']);
Route::get('/admin/massage_director/add',[MassageDirectorcontroller::class,'create']);
Route::post('/admin/massage_director/store', [MassageDirectorcontroller::class,'store'])->name('massage_director.store');
Route::get('/admin/massage_director/delete/{id}', [MassageDirectorcontroller::class,'destroy']);
Route::get('/admin/massage_director/edit/{id}', [MassageDirectorcontroller::class,'edit']);
Route::post('/admin/massage_director/update/{id}', [MassageDirectorcontroller::class,'update']);


// ================= School routing route start=====================
Route::get('/admin/language_school',[SchoolController::class,'language_school']);
Route::get('/admin/language_school/add',[SchoolController::class,'create']);
Route::post('/admin/language_school/store', [SchoolController::class,'store'])->name('language_school.store');
Route::get('/admin/language_school/delete/{id}', [SchoolController::class,'destroy']);
Route::get('/admin/language_school/edit/{id}', [SchoolController::class,'edit']);
Route::post('/admin/language_school/update/{id}', [SchoolController::class,'update']);
Route::post('/admin/language_school/changeStatus', [SchoolController::class,'changeStatus']);



// ================= School Details routing route start=====================
Route::get('/admin/school_details', [SchoolDetailsController::class, 'school_details']);
Route::get('/admin/school_details/add', [SchoolDetailsController::class, 'create']);
Route::post('/admin/school_details/store', [SchoolDetailsController::class, 'store'])->name('school_details.store');
Route::get('/admin/school_details/delete/{id}', [SchoolDetailsController::class, 'destroy']);
Route::get('/admin/school_details/edit/{id}', [SchoolDetailsController::class, 'edit']);
Route::post('/admin/school_details/update/{id}', [SchoolDetailsController::class, 'update']);



// ================= Result routing route start=====================
Route::get('/admin/result', [ResultController::class, 'result']);
Route::get('/admin/result/add', [ResultController::class, 'create']);
Route::post('/admin/result/store', [ResultController::class, 'store'])->name('result.store');
Route::get('/admin/result/delete/{id}', [ResultController::class, 'destroy']);
Route::get('/admin/result/edit/{id}', [ResultController::class, 'edit']);
Route::post('/admin/result/update/{id}', [ResultController::class, 'update']);


// ================= Fees & payment route start=====================
Route::get('/admin/fees', [FeesPaymenController::class, 'index']);
Route::get('/admin/fees/add', [FeesPaymenController::class, 'create']);
Route::post('/admin/fees/store', [FeesPaymenController::class, 'store'])->name('fees.store');
Route::get('/admin/fees/delete/{id}', [FeesPaymenController::class, 'destroy']);
Route::get('/admin/fees/edit/{id}', [FeesPaymenController::class, 'edit']);
Route::post('/admin/fees/update/{id}', [FeesPaymenController::class, 'update']);
Route::get('/admin/fees_p_result/{id}/{tid}', [FeesPaymenController::class,'destroy_p_result']);
Route::get('/admin/fees_p_amount/{id}/{tid}', [FeesPaymenController::class,'destroy_p_amount']);
Route::get('/admin/fees_m_fee/{id}/{tid}', [FeesPaymenController::class,'destroy_m_fee']);


// ================= CRHP Detail routing route start=====================
Route::get('/admin/crhp_details',[CrhpDetailsController::class,'index']);
Route::get('/admin/crhp_details/add',[CrhpDetailsController::class,'create']);
Route::post('/admin/crhp_details/store', [CrhpDetailsController::class,'store'])->name('crhp_details.store');
Route::get('/admin/crhp_details/delete/{id}', [CrhpDetailsController::class,'destroy']);
Route::get('/admin/crhp_details/edit/{id}', [CrhpDetailsController::class,'edit']);
Route::post('/admin/crhp_details/update/{id}', [CrhpDetailsController::class,'update']);




// ================= IQAC Detail routing route start=====================
Route::get('/admin/iqac_details',[IqacDetailsController::class,'index']);
Route::get('/admin/iqac_details/add',[IqacDetailsController::class,'create']);
Route::post('/admin/iqac_details/store', [IqacDetailsController::class,'store'])->name('iqac_details.store');
Route::get('/admin/iqac_details/delete/{id}', [IqacDetailsController::class,'destroy']);
Route::get('/admin/iqac_details/edit/{id}', [IqacDetailsController::class,'edit']);
Route::post('/admin/iqac_details/update/{id}', [IqacDetailsController::class,'update']);




// ================= IQAC Member routing route start=====================
Route::get('/admin/iqac_member',[IqacMemberController::class,'index']);
Route::get('/admin/iqac_member/add',[IqacMemberController::class,'create']);
Route::post('/admin/iqac_member/search', [IqacMemberController::class,'search_member'])->name('iqac_member_search.store');
Route::post('/admin/iqac_member/store', [IqacMemberController::class,'store'])->name('iqac_member.store');
Route::get('/admin/iqac_member/delete/{id}', [IqacMemberController::class,'destroy']);
Route::get('/admin/iqac_member/edit/{id}', [IqacMemberController::class,'edit']);
Route::post('/admin/iqac_member/update/{id}', [IqacMemberController::class,'update']);
Route::get('/admin/iqac_member/add/{id}/{tid}',[IqacMemberController::class,'create_iqac']);


// ================= Library E-Resources Detail routing route start=====================
Route::get('/admin/library_Eresource',[LibraryEresourceController::class,'index']);
Route::get('/admin/library_Eresource/add',[LibraryEresourceController::class,'create']);
Route::post('/admin/library_Eresource/store', [LibraryEresourceController::class,'store'])->name('library_Eresource.store');
Route::get('/admin/library_Eresource/delete/{id}', [LibraryEresourceController::class,'destroy']);
Route::get('/admin/library_Eresource/edit/{id}', [LibraryEresourceController::class,'edit']);
Route::post('/admin/library_Eresource/update/{id}', [LibraryEresourceController::class,'update']);


// ================= Image Gallery Detail routing route start=====================
Route::get('/admin/image_gallery',[PhotoGalleryController::class,'index']);
Route::get('/admin/image_gallery/add',[PhotoGalleryController::class,'create']);
Route::post('/admin/image_gallery/store', [PhotoGalleryController::class,'store'])->name('image_gallery.store');
Route::get('/admin/image_gallery/delete/{id}', [PhotoGalleryController::class,'destroy']);
Route::get('/admin/image_gallery/edit/{id}', [PhotoGalleryController::class,'edit']);
Route::post('/admin/image_gallery/update/{id}', [PhotoGalleryController::class,'update']);
Route::get('/admin/image_gallery/single_image/delete/{id}/{did}', [PhotoGalleryController::class,'single_image']);


// ================= Id Card Generator routing route start=====================
Route::get('/admin/student_search',[IdCardController::class,'student']);
Route::post('/admin/student/search', [IdCardController::class,'result'])->name('student_search.store');
Route::get('/admin/student_id_download/{id}',[IdCardController::class,'student_id']);

Route::get('/admin/employ_search',[IdCardController::class,'employ']);
Route::post('/admin/employ/search', [IdCardController::class,'employ_result'])->name('employ_search.store');
Route::get('/admin/employ_id_download/{id}',[IdCardController::class,'employ_id']);

Route::get('/admin/faculty_search',[IdCardController::class,'faculty']);
Route::post('/admin/faculty/search', [IdCardController::class,'faculty_result'])->name('faculty_search.store');
Route::get('/admin/faculty_id_download/{id}',[IdCardController::class,'faculty_id']);


//test ---
Route::get('/test',[ShortestConterooler::class,'shortest']);


