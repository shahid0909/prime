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
                    <div class="page-title">Examination</div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                            href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li><a class="parent-item" href="#">Examination</a>
                    </li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="card card-box">
                    <div class="card-head">
                        <header>Examination Entry</header>
                    </div>
                    @include('admin.layout.partials.message')
                    <div class="card-body" id="bar-parent">
                        <form  class="form-horizontal" method="post" action="{{ route('examentry') }}">
                            @csrf
                            <div class="form-body">
                                <div class="panel">
                                    <header class="panel-heading panel-heading-blue">
                                        Examinations Information
                                    </header>
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="form-group col-md-4">
                                                <label for="simpleFormEmail">Name of Examination</label>
                                                <input type="Text" class="form-control" id="simpleFormEmail"
                                                placeholder="Enter Examination Name" name="name_of_exam" required>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="simpleFormEmail">Exam Session</label>
                                                <select class="form-select input-height" name="examsession" required>
                                                <option selected="" value="">Select Any</option>
                                                @foreach ($examsession as $item)
                                                <option  value="{{ $item->id }}">{{ $item->startsession }}</option>
                                                @endforeach
                                                {{-- <option value="FALL-2002">FALL-2002</option>
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
                                                <option value="FALL-2020">FALL-2020</option> --}}
                                                </select>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="simpleFormEmail">Date</label>
                                                <input type="date" class="form-control" name="date_of_exam" required>
                                                @error('date_of_exam')
                                                <span class="text-danger"> {{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-actions">
                                    <div class="row">
                                        <div class="offset-md-3 col-md-9">
                                            <button type="submit"
                                                class="btn btn-info m-r-20">Submit</button>
                                            <a href="{{ url('/admin/dashboard') }}" type="button" class="btn btn-default">Cancel</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
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
                                            <header>All Examinations List</header>
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
                                                            <th>ID </th>
                                                            <th> Name of Exam</th>
                                                            <th> Session </th>
                                                            <th>Admission Date</th>
                                                            <th> Action </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                       @foreach ($examlist as $key=>$item)


                                                        <tr class="odd gradeX">
                                                            <td class="left">{{ $key+1 }}</td>
                                                            <td>{{ $item->exam_name }}</td>
                                                            <td>{{ $item->startsession }}</td>
                                                            <td class="left">{{ $item->date_of_exam }}</td>
                                                            <td>
                                                                {{-- <a href=""
                                                                    class="btn btn-primary btn-xs">
                                                                    <i class="fa fa-pencil"></i>
                                                                </a> --}}
                                                                <a href="{{ route('examdelete.id',$item->id) }}" class="btn btn-danger btn-xs">
                                                                    <i class="fa fa-trash-o "></i>
                                                                </a>
                                                            </td>
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
@endsection

@section('script-lib')
    <script src="{{ asset('admin_assets/plugins/jquery-validation/js/jquery.validate.min.js') }}"></script>
	<script src="{{ asset('admin_assets/plugins/jquery-validation/js/additional-methods.min.js') }}"></script>
    <script src="{{ asset('admin_assets/plugins/flatpicker/js/flatpicker.min.js"></script>
	<script src="{{ asset('admin_assets/js/pages/date-time/date-time.init.js"></script>

@endsection
@push('custom-js')

@endpush
