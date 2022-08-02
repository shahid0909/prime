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
                        <div class="page-title">School List</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right">
                        <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                                                               href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                        </li>
                        <li><a class="parent-item" href="#">Settings</a>&nbsp;<i class="fa fa-angle-right"></i>
                        </li>
                        <li class="active">School List</li>
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
                                                <header>School List</header>
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
                                                @endif
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-6 col-6">
                                                        <div class="btn-group">
                                                            <a href="{{url('/admin/language_school/add')}}" id="addRow"
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
                                                            <th> Name </th>
                                                            <th> Title </th>
                                                            <th> Banner Image </th>
                                                            <th> Image </th>
                                                            <th> Description </th>
                                                            <th> Status </th>
                                                            <th> Action </th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>

                                                        @foreach($school as $key=>$mission)

                                                            <tr class="odd gradeX">
                                                                <td class="left">{{ $key+1}}</td>
                                                                <td>{{ $mission->name }}</td>
                                                                <td>{{ $mission->title }}</td>
                                                                <td class="left"><img src="{{ asset($mission->b_image) }}" style="height:40px; width:70px;" ></td>
                                                                <td class="left"><img src="{{ asset($mission->image) }}" style="height:40px; width:70px;" ></td>
                                                                <td>{!! $mission->description !!}</td>
{{--                                                                @if($mission->status == 1)--}}
{{--                                                                <td>Activate</td>--}}
{{--                                                                @else--}}
{{--                                                                    <td>Deactivate</td>--}}
{{--                                                                    @endif--}}
{{--                                                                <td>--}}
{{--                                                                    <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect"--}}
{{--                                                                           for="switch-8">--}}
{{--                                                                        <input data-id="{{ $mission->id }}" type="checkbox" id="switch-8" class="mdl-switch__input toggle-class"--}}
{{--                                                                              data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="Inactive"--}}
{{--                                                                               {{ $mission->status ? 'checked' : '' }}>--}}
{{--                                                                    </label>--}}
{{--                                                                </td>--}}
                                                                <td>
                                                                <button id="status{{$mission->id}}" type="button" name="status"  data-idea_id="{{$mission->id}}" class="btn btn-xs btn-info status">

                                                                    @if($mission->status == 1)
                                                                        Active
                                                                    @else
                                                                        Not Active
                                                                    @endif
                                                                </button>
                                                                </td>
                                                                <td>
                                                                    <a href="{{ url('/admin/language_school/edit/'.$mission->id) }}"
                                                                       class="btn btn-primary btn-xs">
                                                                        <i class="fa fa-pencil"></i>
                                                                    </a>
                                                                    <a href="{{ url('/admin/language_school/delete/'.$mission->id) }}" onclick="return confirm('Are you sure to delete')"
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

<script type="text/javascript">
    $(document).on('click','.status',function () {
        var idea_id = $(this).data("idea_id");
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            method:"post",
            url:'/admin/language_school/changeStatus',
            data:{
                'idea_id':idea_id,
            },
            dataType:"text",
            success:function (data) {
                //console.log(data);
                //$('.status').html("Not Active");
                $('#status'+idea_id).html(data);
            }
        });
        //$(this).closest('tr').remove();
    })
</script>



    <!-- data tables -->
    <script src="{{ asset('admin_assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('admin_assets/plugins/datatables/plugins/bootstrap/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('admin_assets/js/pages/table/table_data.js') }}"></script>

@endsection
@push('custom-js')

@endpush
