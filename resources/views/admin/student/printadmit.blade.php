@extends('admin.layout.master')

@section('style-lib')
	<!-- data tables -->
	<link href="{{ asset('admin_assets/plugins/datatables/plugins/bootstrap/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
@endsection
@push('custom-css')
    <style type="text/css">
        .txt-center {
        text-align: center;
        }
        .border- {
        border: 1px solid #000 !important;
        }
        .padding {
        padding: 15px;
        }
        .mar-bot {
        margin-bottom: 15px;
        }
        .admit-card {
        border: 2px solid #000;
        padding: 15px;
        margin: 20px 0;
        }
        .BoxA h5,
        .BoxA p {
        margin: 0;
        }
        h5 {
        text-transform: uppercase;
        }
        table img {
        width: 100%;
        margin: 0 auto;
        }
        .table-bordered td,
        .table-bordered th,
        .table thead th {
        border: 1px solid #000000 !important;
        }

    </style>
@endpush
@section('admin_containt')
<div class="page-content-wrapper">
    <div class="page-content">
        <div class="page-bar">
            <div class="page-title-breadcrumb">
                <div class=" pull-left">
                    <div class="page-title">Print Admit Card</div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                            href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li><a class="parent-item" href="#">Admit Card</a>
                    </li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="card card-box">
                    <div class="card-head">
                        <header>Create Admit Card</header>
                    </div>
                    <div class="card-body" id="bar-parent">
                        <form action="{{ route('admintcardprint') }}" method="POST" id="form_sample_1" class="form-horizontal">
                           @csrf
                            <div class="form-body">
                                <div class="panel">
                                    <header class="panel-heading panel-heading-blue">
                                        Student Information
                                    </header>
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="form-group col-md-4">
                                                <label for="simpleFormEmail">Name of Examination</label>
                                                <select class="form-select input-height" name="examname" required>
                                                <option selected="" value="">Select Any</option>
                                                @foreach ($examlist as $item)
                                                <option value="{{ $item->id }}">{{ $item->exam_name }}</option>
                                                @endforeach

                                                </select>
                                            </div>
{{--                                            <div class="form-group col-md-4">--}}
{{--                                                <label for="simpleFormEmail">Batch</label>--}}
{{--                                                <input type="Text" class="form-control" id="simpleFormEmail"--}}
{{--                                                       placeholder="Enter Batch" name="batch">--}}
{{--                                            </div>--}}
                                          <!--<div class="form-group col-md-4">-->
                                          <!--      <label for="simpleFormEmail">Batch</label>-->
                                          <!--      <select class="form-select input-height" name="batch">-->
                                          <!--      <option selected="" value="">Select Any</option>-->
                                          <!--      @foreach ($batch as $item)-->
                                          <!--      <option value="{{ $item->id }}">{{ $item->batch }}</option>-->
                                          <!--      @endforeach-->
                                          <!--      </select>-->
                                          <!--  </div>-->
                                            <div class="form-group col-md-4">
                                                <label for="simpleFormEmail">Student ID</label>
                                                <input type="Text" class="form-control" id="simpleFormEmail"
                                                placeholder="Enter Examination Name" name="student_id">
                                            </div>
                                        </div>
                                        <div class="form-actions">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <button type="submit"
                                                        class="btn btn-info serch_btn">Search</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--<div class="row">-->
        <!--    <div class="col-md-12 col-sm-12">-->
        <!--        <div class="card card-box">-->
        <!--            <div class="card-head">-->
        <!--                <header>Create Admit Card</header>-->
        <!--            </div>-->
        <!--            <div class="card-body" id="bar-parent">-->
        <!--                <form action="{{ route('admintcardprintold') }}" method="POST" id="form_sample_1" class="form-horizontal">-->
        <!--                    @csrf-->
        <!--                    <div class="form-body">-->
        <!--                        <div class="panel">-->
        <!--                            <header class="panel-heading panel-heading-blue">-->
        <!--                               Old Student Information-->
        <!--                            </header>-->
        <!--                            <div class="panel-body">-->
        <!--                                <div class="row">-->
        <!--                                    <div class="form-group col-md-4">-->
        <!--                                        <label for="simpleFormEmail">Name of Examination</label>-->
        <!--                                        <select class="form-select input-height" name="examname" required>-->
        <!--                                            <option selected="" value="">Select Any</option>-->
        <!--                                            @foreach ($examlist as $item)-->
        <!--                                                <option value="{{ $item->id }}">{{ $item->exam_name }}</option>-->
        <!--                                            @endforeach-->

        <!--                                        </select>-->
        <!--                                    </div>-->
        <!--                                    {{--                                            <div class="form-group col-md-4">--}}-->
        <!--                                    {{--                                                <label for="simpleFormEmail">Batch</label>--}}-->
        <!--                                    {{--                                                <input type="Text" class="form-control" id="simpleFormEmail"--}}-->
        <!--                                    {{--                                                       placeholder="Enter Batch" name="batch">--}}-->
        <!--                                    {{--                                            </div>--}}-->

        <!--                                    <div class="form-group col-md-4">-->
        <!--                                        <label for="simpleFormEmail">Student ID</label>-->
        <!--                                        <input type="Text" class="form-control" id="simpleFormEmail"-->
        <!--                                               placeholder="Enter Examination Name" name="student_id">-->
        <!--                                    </div>-->
        <!--                                </div>-->
        <!--                                <div class="form-actions">-->
        <!--                                    <div class="row">-->
        <!--                                        <div class="col-md-12">-->
        <!--                                            <button type="submit"-->
        <!--                                                    class="btn btn-info serch_btn">Search</button>-->
        <!--                                        </div>-->
        <!--                                    </div>-->
        <!--                                </div>-->
        <!--                            </div>-->
        <!--                        </div>-->
        <!--                    </div>-->
        <!--                </form>-->
        <!--            </div>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--</div>-->
        {{-- <div class="row">
            <div class="col-md-12">
                <div class="tabbable-line">
                    <div class="tab-content">
                        <div class="tab-pane active fontawesome-demo" id="tab1">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card card-box">
                                        <div class="card-head">
                                            <header>All Admit Card List</header>
                                            <div class="tools">
                                                <a class="fa fa-repeat btn-color box-refresh"
                                                    href="javascript:;"></a>
                                            </div>
                                        </div>
                                        <div class="card-body ">
                                            <div class="admit-card">
                                                <div class="BoxA border- padding mar-bot">
                                                    <div class="row">
                                                    <div class="col-sm-2">
                                                        <img src="{{ asset('admin_assets/img/admit/Prime_University.png') }}" width="123px" height="165px" />
                                                    </div>
                                                    <div class="col-sm-8 txt-center">
                                                        <h5>PRIME UNIVERSITY</h5>
                                                        <p>114/116 Mazar Road, Mirpur-1, Dhaka 1216, Bangladesh</p>
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <table class="table table-bordered">
                                                        <tbody>
                                                            <tr>
                                                            <th scope="row txt-center">
                                                                <img src="{{ asset('admin_assets/img/dp.jpg') }}" width="123px" height="165px" />
                                                            </th>
                                                            </tr>
                                                        </tbody>
                                                        </table>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="BoxC border- padding mar-bot">
                                                    <div class="row">
                                                    <div class="col-sm-12 txt-center">
                                                        <h5>Admit Card</h5>
                                                        <h3>Semister Final Examination, Summer-2021</h3>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="BoxD border- padding mar-bot">
                                                    <div class="row">
                                                    <div class="col-sm-12">
                                                        <table class="table table-bordered">
                                                        <tbody>
                                                            <tr>
                                                            <td><b>Student Name: </b>Vinod Sharma</td>
                                                            <td><b>ID: </b> 172010102001</td>
                                                            </tr>
                                                            <tr>
                                                            <td><b>Batch: </b>12th</td>
                                                            <td><b>Program: </b>MA in English</td>
                                                            </tr>
                                                            <tr>
                                                            <td><b>Date of Examination</td>
                                                            <td><b>02 Jul 2021</td>
                                                            </tr>
                                                        </tbody>
                                                        </table>
                                                    </div>
                                                    </div>
                                                </div>
                                                <footer class="txt-center">
                                                    <p>*** PRIME UNIVERSITY ***</p>
                                                </footer>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
    </div>
</div>
@endsection
@section('script-lib')
	<!-- data tables -->
	<script src="{{ asset('admin_assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
	<script src="{{ asset('admin_assets/plugins/datatables/plugins/bootstrap/dataTables.bootstrap4.min.js') }}"></script>
	<script src="{{ asset('admin_assets/js/pages/table/table_data.js') }}"></script>

@endsection
@push('custom-js')

@endpush
