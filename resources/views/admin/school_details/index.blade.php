@extends('admin.layout.master')

@section('style-lib')
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
                        <div class="page-title">School Details List</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right">
                        <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                                                               href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                        </li>
                        <li><a class="parent-item" href="#">Settings</a>&nbsp;<i class="fa fa-angle-right"></i>
                        </li>
                        <li class="active">School Details List</li>
                    </ol>
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
                                                <header>School Details List</header>
                                                <div class="tools">
                                                    <a class="fa fa-repeat btn-color box-refresh"
                                                       href="javascript:;"></a>
                                                </div>
                                            </div>
                                            <div class="card-body ">
                                                @if (session()->has('message'))
                                                    <div class="alert alert-success">
                                                        {{ session('message') }}
                                                    </div>
                                                @elseif(session()->has('error'))
                                                    <div class="alert alert-danger">
                                                        {{ session('error') }}
                                                    </div>
                                                @endif
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-6 col-6">
                                                        <div class="btn-group">
                                                            <a href="{{url('/admin/school_details/add')}}" id="addRow"
                                                               class="btn btn-info">
                                                                Add New <i class="fa fa-plus"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6 col-6">
                                                        <div class="btn-group pull-right">
                                                            <a class="btn deepPink-bgcolor  btn-outline dropdown-toggle"
                                                               data-bs-toggle="dropdown">Tools
                                                                <i class="fa fa-angle-down"></i>
                                                            </a>
                                                            <ul class="dropdown-menu pull-right">
                                                                <li>
                                                                    <a href="javascript:;">
                                                                        <i class="fa fa-print"></i> Print </a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:;">
                                                                        <i class="fa fa-file-pdf-o"></i> Save as
                                                                        PDF </a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:;">
                                                                        <i class="fa fa-file-excel-o"></i>
                                                                        Export to Excel </a>
                                                                </li>

                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="table-scrollable">
                                                    <table
                                                        class="table table-striped table-bordered table-hover table-checkable order-column valign-middle"
                                                        id="example4">
                                                        <thead>


                                                        <tr>
                                                            <th> Id </th>
                                                            <th> School Name </th>
                                                            <th> Title </th>
                                                            <th> Duration of the course </th>
                                                            <th> Duration of class </th>
                                                            <th> Time </th>
                                                            <th> Weekly class day </th>
                                                            <th> Course Status </th>
                                                            <th> Course Fee </th>
                                                            <th> Status </th>
                                                            <th> Action </th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>

                                                        @foreach($school_details as $key=>$mission)

                                                            <tr class="odd gradeX">
                                                                <td class="left">{{ $key+1}}</td>
                                                                <td>{{ $mission->name }}</td>
                                                                <td>{{ $mission->title }}</td>
                                                                <td>{{ $mission->duration_course }}</td>
                                                                <td>{{ $mission->duration_class }}</td>
                                                                <td>{{ $mission->time }}</td>
                                                                <td>{{ $mission->weekly_class }}</td>
                                                                <td>{{ $mission->course_status }}</td>
                                                                <td>{{ $mission->course_fee }}</td>
                                                                @if($mission->status == 1)
                                                                <td>Activate</td>
                                                                @else
                                                                    <td>Deactivate</td>
                                                                    @endif

                                                                <td>
                                                                    <a href="{{ url('/admin/school_details/edit/'.$mission->id) }}"
                                                                       class="btn btn-primary btn-xs">
                                                                        <i class="fa fa-pencil"></i>
                                                                    </a>
                                                                    <a href="{{ url('/admin/school_details/delete/'.$mission->id) }}" onclick="return confirm('Are you sure to delete')"
                                                                       class="btn btn-primary btn-xs">
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

{{--    <script>--}}
{{--        $(document).ready(function () {--}}
{{--            $("#schools").DataTable()--}}
{{--        });--}}
{{--        $(function () {--}}
{{--            $('.toggle-class').change(function () {--}}
{{--                var status = $(this).prop('checked') == true ? 1 : 0;--}}
{{--                var school_id = $(this).data('id');--}}

{{--                jQuery.ajax({--}}
{{--                    url:'/admin/language_school/changeStatus',--}}
{{--                    type:'post',--}}
{{--                    data:'status='+status+'school_id='+school_id+'&_token={{csrf_token()}}',--}}
{{--                    success:function(data){--}}
{{--                        console.log(data.success)--}}
{{--                    }--}}
{{--                });--}}

{{--            });--}}
{{--        });--}}
{{--    </script>--}}
    <!-- data tables -->
    <script src="{{ asset('admin_assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('admin_assets/plugins/datatables/plugins/bootstrap/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('admin_assets/js/pages/table/table_data.js') }}"></script>

@endsection
@push('custom-js')

@endpush
