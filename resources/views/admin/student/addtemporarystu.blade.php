@extends('admin.layout.master')

@section('style-lib')
	<link rel="stylesheet" href="{{ asset('admin_assets/plugins/flatpicker/css/flatpickr.min.css') }}" />
    <link href="{{ asset('admin_assets/css/pages/formlayout.css') }}" rel="stylesheet" type="text/css" />
    	<!-- data tables -->
	<link href="{{ asset('admin_assets/plugins/datatables/plugins/bootstrap/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
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
                    @include('admin.layout.partials.message')
                    <div class="card-body" id="bar-parent">


                        <form class="form-horizontal"  method="POST" action="{{ route('strudententry') }}" enctype="multipart/form-data">

                        @csrf
                        <form action="#" id="form_sample_1" class="">
                            <div class="form-body">
                                <div class="panel">
                                    <header class="panel-heading panel-heading-blue">
                                        Students Information
                                    </header>
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label for="simpleFormEmail">Name</label>
                                                <input type="Text" class="form-control" id="simpleFormEmail" name="std_name" required
                                                placeholder="Enter Student Name">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="simpleFormEmail">Student ID</label>
                                                <input type="Text" class="form-control" id="simpleFormPassword" name="std_id" placeholder="Enter Student ID "  required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-4">
                                                <label for="simpleFormEmail">Start Session</label>
                                                <select class="form-select input-height" name="start_session" required>
                                                    <option selected value="" > Select Start Session</option>
                                                    @foreach ($start_session as $item)
                                                    <option select value="{{ $item->id }}">{{ $item->startsession }}</option>
                                                    @endforeach

                                                <!-- <option value="FALL-2002">FALL-2002</option>
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
                                                <option value="FALL-2020">FALL-2020</option> -->
                                                </select>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="simpleFormPassword">Department</label>
                                                <select class="form-select input-height" name="department" required>
                                                    <option selected value="" > Select Department</option>
                                                    @foreach ($department as $item)

                                                    <option select value="{{ $item->id }}">{{ $item->department }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="simpleFormEmail">Program</label>
                                                <select class="form-select input-height" name="program" required>
                                                    <option selected value="" > Select program</option>
                                                    @foreach ($program as $item)

                                                    <option select value="{{ $item->id }}">{{ $item->program }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-4">
                                                <label for="simpleFormPassword">Shift</label>
                                                <select class="form-select input-height" name="shift" required>
                                                    <option selected value="" > Select shift</option>
                                                    @foreach ($shift as $item)

                                                    <option select value="{{ $item->id }}">{{ $item->shift }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="simpleFormPassword">Batch</label>
                                                <select class="form-select input-height" name="batch" required>
                                                    <option selected value="" > Select batch</option>
                                                    @foreach ($batch as $item)

                                                    <option select value="{{ $item->id }}">{{ $item->batche }}</option>
                                                    @endforeach

                                                </select>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="simpleFormPassword">Group/Section</label>
                                                <select class="form-select input-height" name="group_section" required>
                                                    <option selected value="" > Select Group or Section</option>
                                                    @foreach ($group_section as $item)
                                                    <option select value="{{ $item->id }}">{{ $item->groupsection }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-4">
                                                <div class="form-group col-md-6">
                                                    <label for="simpleFormEmail">Upload Student Image</label>
                                                    <input type="file" class="form-control" name="std_image" accept=".png,.jpg,.JPG,PNG"  required>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="form-actions ">
                                        <div class="row ">
                                            <div class="offset-md-1 col-md-12">
                                                 <a href="{{ url('/admin/dashboard') }}" type="button" class="btn btn-default">Cancel</a>
                                                <button type="submit"
                                                    class="btn btn-info m-r-20">Submit</button>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </form>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="tabbable-line">
                                <div class="tab-content">
                                    <div class="tab-pane active fontawesome-demo" id="tab1">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="card card-box">
                                                    <div class="card-head">
                                                        <header>All Students List</header>
                                                        <div class="tools">
                                                            <a class="fa fa-repeat btn-color box-refresh"
                                                                href="javascript:;"></a>
                                                        </div>
                                                    </div>
                                                    <div class="card-body ">
                                                        <div class="table-scrollable">
                                                            <table
                                                                class="table table-striped table-bordered table-hover table-checkable order-column valign-middle"
                                                                id="example4">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Sl No</th>
                                                                        <th>Image</th>
                                                                        <th> Student ID </th>
                                                                        <th> Name </th>
                                                                        <th> Department </th>
                                                                        <th> Program </th>
                                                                        <th> Batch </th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    @foreach ($studentlist as $key=> $item)
                                                                    <tr class="odd gradeX">
                                                                        <td class="left">{{ $key+1 }}</td>
                                                                        <td class="patient-img">
                                                                            <img src="{{ asset($item->std_image) }}" alt="">
                                                                        </td>
                                                                        <td class="left">{{ $item->student_id }}</td>
                                                                        <td>{{ $item->student_name }}</td>
                                                                        <td class="left">{{ $item->department }}</td>
                                                                        <td>{{ $item->program }}</td>
                                                                        <td>{{ $item->batche }}</td>
                                                                    </tr>
                                                                    @endforeach
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script-lib')
	<!-- data tables -->
	<script src="{{ asset('admin_assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
	<script src="{{ asset('admin_assets/plugins/datatables/plugins/bootstrap/dataTables.bootstrap4.min.js') }}"></script>
	<script src="{{ asset('admin_assets/js/pages/table/table_data.js') }}"></script>
    <script src="{{ asset('admin_assets/plugins/jquery-validation/js/jquery.validate.min.js') }}"></script>
	<script src="{{ asset('admin_assets/plugins/jquery-validation/js/additional-methods.min.js') }}"></script>
    <script src="{{ asset('admin_assets/plugins/flatpicker/js/flatpicker.min.js"></script>
	<script src="{{ asset('admin_assets/js/pages/date-time/date-time.init.js"></script>
@endsection


@push('custom-js')

@endpush
