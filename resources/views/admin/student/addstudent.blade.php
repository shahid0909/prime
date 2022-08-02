@extends('admin.layout.master')

@section('style-lib')
	<!-- Date Time item CSS -->
	<link rel="stylesheet" href="{{ asset('admin_assets/plugins/flatpicker/css/flatpickr.min.css') }}" />
    <link href="{{ asset('admin_assets/css/pages/formlayout.css') }}" rel="stylesheet" type="text/css" />
@endsection
@push('custom-css')
    <style type="text/css">

    </style>
@endpush
@section('admin_containt')
<div class="page-content-wrapper">
    <div class="page-content">
        <div class="page-bar">
            <div class="page-title-breadcrumb">
                <div class=" pull-left">
                    <div class="page-title">Add Student</div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                            href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li><a class="parent-item" href="#">Student</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li class="active">Add Student</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="card card-box">
                    <div class="card-head">
                        <header>Student Entry</header>
                    </div>
                    <div class="card-body" id="bar-parent">
                        <form action="#" id="form_sample_1" class="form-horizontal">
                            <div class="form-body">
                                <div class="panel">
                                    <header class="panel-heading panel-heading-blue">
                                        Applicant Details
                                    </header>
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="form-group col-md-4">
                                                <label for="simpleFormEmail">Name</label>
                                                <input type="Text" class="form-control" id="simpleFormEmail"
                                                placeholder="Enter Student Name">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="simpleFormPassword">Father Name (পিতার নাম)</label>
                                                <input type="Text" class="form-control" id="simpleFormPassword" placeholder="Enter Father Name">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="simpleFormPassword">Mother Name (মাতার নাম) </label>
                                                <input type="Text" class="form-control" id="simpleFormPassword" placeholder="Enter Mother Name">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-4">
                                                <label for="simpleFormEmail">Date of Birth (জন্ম তারিখ)</label>
                                                <div class="input-append date">
                                                    <div id="dateIcon" class="input-group datePicker">
                                                        <input class="formDatePicker form-control" type="text"
                                                            placeholder="Select Date.." data-input>
                                                        <span class="dateBtn">
                                                            <a class="input-button" title="toggle" data-toggle>
                                                                <i class="icon-calendar"></i>
                                                            </a>
                                                            <a class="input-button" title="clear" data-clear>
                                                                <i class="icon-close"></i>
                                                            </a>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="simpleFormPassword">Nationality (জাতীয়তা)</label>
                                                <select class="form-select input-height" name="department">
                                                    <option value="">Select...</option>
                                                    <option value="Category 1">Bangladesh</option>
                                                    <option value="Category 2">India</option>
                                                    <option value="Category 3">Japan</option>
                                                    <option value="Category 3">USA</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="simpleFormPassword">Nationality ID/ Birth Certificate/Passpost No</label>
                                                <input type="Text" class="form-control" id="simpleFormPassword" placeholder="Enter Nationality ID/ Birth Certificate/Passpost No">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-4">
                                                <label for="simpleFormEmail">Gender (লিঙ্গ)</label>
                                                <select class="form-select input-height" name="department">
                                                    <option value="">Select...</option>
                                                    <option value="0">Male</option>
                                                    <option value="1">Female</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="simpleFormPassword">Telephone (টেলিফোন) *</label>
                                                <input type="Text" class="form-control" id="simpleFormPassword" placeholder="Enter Telephone">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="simpleFormPassword">Email (ই-মেইল)</label>
                                                <input type="email" class="form-control" id="simpleFormPassword" placeholder="Enter Email Address">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-4">
                                                <label for="simpleFormEmail">Parents/Guardian Number</label>
                                                <input type="Text" class="form-control" id="simpleFormEmail"
                                                placeholder="Enter Parents/Guardian Number">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="simpleFormPassword">Blood Group</label>
                                                <select class="form-select input-height" name="department">
                                                    <option value="">Select...</option>
                                                    <option value="0">A+</option>
                                                    <option value="1">A-</option>
                                                    <option value="0">O+</option>
                                                    <option value="1">O-</option>
                                                    <option value="0">AB+</option>
                                                    <option value="1">AB-</option>
                                                    <option value="0">B+</option>
                                                    <option value="1">B-</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="simpleFormPassword">Enrollment Date</label>
                                                <div class="input-append date">
                                                    <div id="dateIcon" class="input-group datePicker">
                                                        <input class="formDatePicker form-control" type="text"
                                                            placeholder="Select Date.." data-input>
                                                        <span class="dateBtn">
                                                            <a class="input-button" title="toggle" data-toggle>
                                                                <i class="icon-calendar"></i>
                                                            </a>
                                                            <a class="input-button" title="clear" data-clear>
                                                                <i class="icon-close"></i>
                                                            </a>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel">
                                    <header class="panel-heading panel-heading-blue">
                                        Address Details
                                    </header>
                                    <div class="panel-body">
                                        <p>Present Address</p>
                                        <div class="row">
                                            <div class="form-group col-md-4">
                                                <label for="Country">Country (দেশ)</label>
                                                <select class="form-select input-height" name="department">
                                                    <option value="">Select...</option>
                                                    <option value="0">Bangladesh</option>
                                                    <option value="1">India</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="Country">District (জেলা)</label>
                                                <select class="form-select input-height" name="department">
                                                    <option value="">Select...</option>
                                                    <option value="0">Dhaka</option>
                                                    <option value="1">Feni</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="Country">Upazila (উপজেলা)</label>
                                                <select class="form-select input-height" name="department">
                                                    <option value="">Select...</option>
                                                    <option value="0">Mirpur</option>
                                                    <option value="1">Damrai</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="Country">Police Station(থানা)</label>
                                                <select class="form-select input-height" name="department">
                                                    <option value="">Select...</option>
                                                    <option value="0">Darus salam</option>
                                                    <option value="1">Mirpur 2</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="Country">Post Code (পোস্টকোড)</label>
                                                <input type="Text" class="form-control" id="simpleFormPassword" placeholder="Enter Post Code Number">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="Country">Address (ঠিকানা)</label>
                                                <input type="Text" class="form-control" id="simpleFormPassword" placeholder="Enter Your Address">
                                            </div>
                                        </div>
                                        <div class="row">
                                        <div class="left col-md-6">
                                            <p>Parmanent Address</p>
                                        </div>
                                        <div class="right col-md-6">
                                            <div class="checkbox checkbox-aqua" style="float:right">
                                                <input id="checkboxbg4" type="checkbox" checked="checked">
                                                <label for="checkboxbg4">
                                                    Same As Above
                                                </label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-4">
                                                <label for="Country">Country (দেশ)</label>
                                                <select class="form-select input-height" name="department">
                                                    <option value="">Select...</option>
                                                    <option value="0">Bangladesh</option>
                                                    <option value="1">India</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="Country">District (জেলা)</label>
                                                <select class="form-select input-height" name="department">
                                                    <option value="">Select...</option>
                                                    <option value="0">Dhaka</option>
                                                    <option value="1">Feni</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="Country">Upazila (উপজেলা)</label>
                                                <select class="form-select input-height" name="department">
                                                    <option value="">Select...</option>
                                                    <option value="0">Mirpur</option>
                                                    <option value="1">Damrai</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="Country">Police Station(থানা)</label>
                                                <select class="form-select input-height" name="department">
                                                    <option value="">Select...</option>
                                                    <option value="0">Darus salam</option>
                                                    <option value="1">Mirpur 2</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="Country">Post Code (পোস্টকোড)</label>
                                                <input type="Text" class="form-control" id="simpleFormPassword" placeholder="Enter Post Code Number">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="Country">Address (ঠিকানা)</label>
                                                <input type="Text" class="form-control" id="simpleFormPassword" placeholder="Enter Your Address">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel">
                                    <header class="panel-heading panel-heading-blue">
                                        Educational Qalification Details
                                    </header>
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="form-group col-md-4">
                                                <label for="simpleFormEmail">Lavel of Education</label>
                                                <select class="form-select input-height" name="department">
                                                    <option value="-3">PSC/5 pass</option>
                                                    <option value="-2">JSC/JDC/8 pass</option>
                                                    <option value="1" selected="">Secondary</option>
                                                    <option value="2">Higher Secondary</option>
                                                    <option value="3">Diploma</option>
                                                    <option value="4">Bachelor/Honors</option>
                                                    <option value="5">Masters</option>
                                                    <option value="6">PhD (Doctor of Philosophy)</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="simpleFormPassword">Exam/Degree Title</label>
                                                <select class="form-select input-height" name="department">
                                                    <option value="SSC">SSC</option>
                                                    <option value="O Level">O Level</option>
                                                    <option value="Dakhil (Madrasah)">Dakhil (Madrasah)</option>
                                                    <option value="SSC (Vocational)">SSC (Vocational)</option>
                                                    <option value="others" undefined="">Other</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="simpleFormEmail">Board</label>
                                                <select class="form-select input-height" name="department">
                                                    <option value="-1">Select</option>
                                                    <option value="6">Barishal</option>
                                                    <option value="5">Chattogram</option>
                                                    <option value="3">Cumilla</option>
                                                    <option value="1">Dhaka</option>
                                                    <option value="10">Dinajpur</option>
                                                    <option value="4">Jashore</option>
                                                    <option value="11">Mymensingh</option>
                                                    <option value="2">Rajshahi</option>
                                                    <option value="7">Sylhet</option>
                                                    <option value="8">Madrasah</option>
                                                    <option value="9">Technical</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-4">
                                                <label for="simpleFormPassword">Concentration/ Major/Group </label>
                                                <input type="Text" class="form-control" id="simpleFormPassword" placeholder="Enter Concentration/ Major/Group ">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="simpleFormPassword">Grade</label>
                                                <input type="Text" class="form-control" id="simpleFormPassword" placeholder="Enter Grade">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="simpleFormPassword">Scale</label>
                                                <input type="Text" class="form-control" id="simpleFormPassword" placeholder="Enter Grade Scall">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-4">
                                                <label for="simpleFormEmail">Year of Passing</label>
                                                <div class="input-append date">
                                                    <div id="dateIcon" class="input-group datePicker">
                                                        <input class="formDatePicker form-control" type="text"
                                                            placeholder="Select Date.." data-input>
                                                        <span class="dateBtn">
                                                            <a class="input-button" title="toggle" data-toggle>
                                                                <i class="icon-calendar"></i>
                                                            </a>
                                                            <a class="input-button" title="clear" data-clear>
                                                                <i class="icon-close"></i>
                                                            </a>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-8">
                                                <label for="simpleFormPassword">Institute Name </label>
                                                <input type="Text" class="form-control" id="simpleFormPassword" placeholder="Enter Institute Name ">
                                            </div>
                                        </div>
                                        <button type="button" class="btn btn-round btn-info"><i class="material-icons f-left"></i>Add More Academic Information</button>
                                    </div>
                                </div>
                                <div class="panel">
                                    <header class="panel-heading panel-heading-blue">
                                        Quota Information
                                    </header>
                                    <div class="panel-body">
                                    <div class="row">
                                            <div class="form-group col-md-6">
                                                <label for="simpleFormPassword">Poor & Meritorius:	</label>
                                                <select class="form-select input-height" name="department">
                                                    <option value="-3"> Select..</option>
                                                    <option value="0"> Yes</option>
                                                    <option value="1"> No</option>

                                                </select>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="simpleFormPassword">Is the Father Freedom Fighter?:	</label>
                                                <select class="form-select input-height" name="department">
                                                    <option value="-3">Select...</option>
                                                    <option value="0"> Yes</option>
                                                    <option value="1"> No</option>
                                                  </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel">
                                    <header class="panel-heading panel-heading-blue">
                                        Adminstration Information
                                    </header>
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="form-group col-md-4">
                                                <label for="simpleFormEmail">Start Session</label>
                                                <select class="form-select input-height" name="department">
                                                    <option value="-3">Summer 2021</option>
                                                    <option value="-2">Fall 2021</option>
                                                    <option value="1">Spring2021</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="simpleFormPassword">Department</label>
                                                <select class="form-select input-height" name="department">
                                                <option selected="" value="">Select Any</option>
                                                <option value="Bangla">Bangla</option>
                                                <option value="Business Administration">Business Administration</option>
                                                <option value="CSE">CSE</option>
                                                <option value="EEE">EEE</option>
                                                <option value="ETE">ETE</option>
                                                <option value="Civil">Civil</option>
                                                <option value="Education">Education</option>
                                                <option value="English">English</option>
                                                <option value="Information Technology">Information Technology</option>
                                                <option value="LAW">LAW</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="simpleFormEmail">Program</label>
                                                <select class="form-select input-height" name="department">
                                                <option selected="" value="">Select Any</option>
                                                <option value="BA (Hons) in Bangla">BA (Hons) in Bangla</option>
                                                <option value="BA (Hons) in English">BA (Hons) in English</option>
                                                <option value="MA in English">MA in English</option>
                                                <option value="Diploma in English">Diploma in English</option>
                                                <option value="Bachelor of Law(Hons)">Bachelor of Law(Hons)</option>
                                                <option value="Bachelor of Law(Preliminary and Final)">Bachelor of Law(Preliminary and Final)</option>
                                                <option value="LL.M (Regular)">LL.M (Regular)</option>
                                                <option value="Master of Law(Preliminary and Final)">Master of Law(Preliminary and Final)</option>
                                                <option value="B.Ed">B.Ed</option>
                                                <option value="M.Ed">M.Ed</option>
                                                <option value="BBA">BBA</option>
                                                <option value="MBA">MBA</option>
                                                <option value="MCA">MCA</option>
                                                <option value="BBIS">BBIS</option>
                                                <option value="B.Sc in Computer Science "> B.Sc in Computer Science</option>
                                                <option value="B.Sc in CSE">B.Sc in CSE</option>
                                                <option value="B.Sc in ETE">B.Sc in ETE</option>
                                                <option value="B.Sc in EEE">B.Sc in EEE</option>
                                                <option value="B.Sc in Civil Engineering">B.Sc in Civil</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-4">
                                                <label for="simpleFormPassword">Shift</label>
                                                <select class="form-select input-height" name="department">
                                                    <option value="-3">Summer 2021</option>
                                                    <option value="-2">Fall 2021</option>
                                                    <option value="1">Spring2021</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="simpleFormPassword">Batch</label>
                                                <select class="form-select input-height" name="department">
                                                    <option value="-3">Select...</option>
                                                    @foreach([1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47,48,49,50,51,52,53,54,55,56,57,58,59,60,61,62] as $key =>$sm)
                                                    <option value="{{$sm}}">Batch: {{$sm}}</option>
                                                @endforeach

                                                </select>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="simpleFormPassword">Group/Section</label>
                                                <select class="form-select input-height" name="department">
                                                    <option selected="" value="">Select Any</option>
                                                    <option value="DAY">DAY</option>
                                                    <option value="EVENING">EVENING</option>
                                                    <option value="NONE">NONE</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-4">
                                                <label for="simpleFormEmail">Student ID</label>
                                                <input type="Text" class="form-control" id="simpleFormPassword" placeholder="Enter Institute Name ">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="simpleFormEmail">Total Number of Credits</label>
                                                <input type="Text" class="form-control" id="simpleFormPassword" placeholder="Enter Institute Name ">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="simpleFormEmail">Total Amount</label>
                                                <input type="Text" class="form-control" id="simpleFormPassword" placeholder="Enter Institute Name ">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-4">
                                                <label for="simpleFormEmail">Waiver </label>
                                                <input type="Text" class="form-control" id="simpleFormPassword" placeholder="Enter Institute Name ">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="simpleFormEmail">Waiver Percentage</label>
                                                <input type="Text" class="form-control" id="simpleFormPassword" placeholder="Enter Institute Name ">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="simpleFormEmail">Final Payable Amount</label>
                                                <input type="Text" class="form-control" id="simpleFormPassword" placeholder="Enter Institute Name ">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-4">
                                                <label for="simpleFormEmail">Monthly Installment Amount</label>
                                                <input type="Text" class="form-control" id="simpleFormPassword" placeholder="Enter Institute Name ">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="simpleFormEmail">Upload Image</label>
                                                <input type="Text" class="form-control" id="simpleFormPassword" placeholder="Enter Institute Name ">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="simpleFormEmail">Program Duration</label>
                                                <input type="file" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-actions">
                                    <div class="row">
                                        <div class="offset-md-3 col-md-9">
                                            <button type="submit"
                                                class="btn btn-info m-r-20">Submit</button>
                                            <button type="button" class="btn btn-default">Cancel</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script-lib')
    <script src="{{ asset('admin_assets/plugins/jquery-validation/js/jquery.validate.min.js') }}"></script>
	<script src="{{ asset('admin_assets/plugins/jquery-validation/js/additional-methods.min.js') }}"></script>
    <script src="{{ asset('admin_assets/plugins/flatpicker/js/flatpicker.min.js"></script>
	<script src="{{ asset('admin_assets/js/pages/date-time/date-time.init.js"></script>

@endsection
@push('custom-js')

@endpush
