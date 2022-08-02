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
                                        Students Information
                                    </header>
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label for="simpleFormEmail">Name</label>
                                                <input type="Text" class="form-control" id="simpleFormEmail"
                                                placeholder="Enter Student Name">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="simpleFormEmail">Student ID</label>
                                                <input type="Text" class="form-control" id="simpleFormPassword" placeholder="Enter Institute Name ">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-4">
                                                <label for="simpleFormEmail">Start Session</label>
                                                <select class="form-select input-height" name="department">
                                                <option selected="" value="">Select Any</option>
                                                <option value="FALL-2002">FALL-2002</option>
                                                <option value="SPRING-2002">SPRING-2002</option>
                                                <option value="SUMMER-2002">SUMMER-2002</option>

                                                <option value="FALL-2003">FALL-2003</option>
                                                <option value="SPRING-2003">SPRING-2003</option>
                                                <option value="SUMMER-2003">SUMMER-2003</option>

                                                <option value="FALL-2004">FALL-2004</option>
                                                <option value="SPRING-2004">SPRING-2004</option>
                                                <option value="SUMMER-2004">SUMMER-2004</option>

                                                <option value="FALL-2005">FALL-2005</option>
                                                <option value="SPRING-2005">SPRING-2005</option>
                                                <option value="SUMMER-2005">SUMMER-2005</option>

                                                <option value="FALL-2006">FALL-2006</option>
                                                <option value="SPRING-2006">SPRING-2006</option>
                                                <option value="SUMMER-2006">SUMMER-2006</option>

                                                <option value="FALL-2007">FALL-2007</option>
                                                <option value="SPRING-2007">SPRING-2007</option>
                                                <option value="SUMMER-2007">SUMMER-2007</option>

                                                <option value="FALL-2008">FALL-2008</option>
                                                <option value="SPRING-2008">SPRING-2008</option>
                                                <option value="SUMMER-2008">SUMMER-2008</option>

                                                <option value="FALL-2009">FALL-2009</option>
                                                <option value="SPRING-2009">SPRING-2009</option>
                                                <option value="SUMMER-2009">SUMMER-2009</option>

                                                <option value="FALL-2010">FALL-2010</option>
                                                <option value="SPRING-2010">SPRING-2010</option>
                                                <option value="SUMMER-2010">SUMMER-2010</option>

                                                <option value="FALL-2011">FALL-2011</option>
                                                <option value="SPRING-2011">SPRING-2011</option>
                                                <option value="SUMMER-2011">SUMMER-2011</option>

                                                <option value="FALL-2012">FALL-2012</option>
                                                <option value="SPRING-2012">SPRING-2012</option>
                                                <option value="SUMMER-2012">SUMMER-2012</option>

                                                <option value="FALL-2013">FALL-2013</option>
                                                <option value="SPRING-2013">SPRING-2013</option>
                                                <option value="SUMMER-2013">SUMMER-2013</option>

                                                <option value="FALL-2014">FALL-2014</option>
                                                <option value="SPRING-2014">SPRING-2014</option>
                                                <option value="SUMMER-2014">SUMMER-2014</option>

                                                <option value="FALL-2015">FALL-2015</option>
                                                <option value="SPRING-2015">SPRING-2015</option>
                                                <option value="SUMMER-2015">SUMMER-2015</option>

                                                <option value="FALL-2016">FALL-2016</option>
                                                <option value="SPRING-2016">SPRING-2016</option>
                                                <option value="SUMMER-2016">SUMMER-2016</option>

                                                <option value="FALL-2017">FALL-2017</option>
                                                <option value="SPRING-2017">SPRING-2017</option>
                                                <option value="SUMMER-2017">SUMMER-2017</option>

                                                <option value="FALL-2018">FALL-2018</option>
                                                <option value="SPRING-2018">SPRING-2018</option>
                                                <option value="SUMMER-2018">SUMMER-2018</option>

                                                <option value="SPRING-2019">SPRING-2019</option>
                                                <option value="SUMMER-2019">SUMMER-2019</option>
                                                <option value="FALL-2019">FALL-2019</option>

                                                <option value="SPRING-2020">SPRING-2020</option>
                                                <option selected="" value="SUMMER-2020">SUMMER-2020</option>
                                                <option value="FALL-2020">FALL-2020</option>
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
