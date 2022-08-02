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
                        <div class="page-title">IQAC Member Search</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right">
                        <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                                                               href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                        </li>
                        <li><a class="parent-item" href="#">Settings</a>&nbsp;<i class="fa fa-angle-right"></i>
                        </li>
                        <li class="active">IQAC Member Search</li>
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
                                                <header>IQAC Member Search</header>
                                                <div class="tools">
                                                    <a class="fa fa-repeat btn-color box-refresh"
                                                       href="javascript:;"></a>
                                                </div>
                                            </div>
                                            <div class="card-body ">

                                                @if (session('status'))
                                                    <div class="alert alert-success" role="alert">
                                                        {{ session('status') }}
                                                    </div>
                                                @endif

                                                <form method="post" action="{{ route('iqac_member_search.store') }}" enctype="multipart/form-data">
                                                    @csrf

                                                <div class="form-group">

                                                    <div class="form-group col-md-6">
                                                        <label for="simpleFormEmail">Type</label>
                                                        <select class="form-select input-height" name="type">
                                                            <option value="1">Employ</option>
                                                            <option value="2">Faculty Member</option>
                                                        </select>
                                                        @error('type')
                                                        <span class="text-danger"> {{ $message }}</span>
                                                        @enderror
                                                    </div>

                                                    <div class="form-group col-md-6">
                                                        <label for="simpleFormEmail">Name</label>
                                                        <input type="Text" class="form-control" name="member_name" id="simpleFormEmail"
                                                               placeholder="Enter The Title">
                                                        @error('i_title')
                                                        <span class="text-danger"> {{ $message }}</span>
                                                        @enderror
                                                    </div>

                                                </div>

                                                    <button type="submit" class="btn btn-primary">Submit</button>

                                                </form>

                                            </div>
                                        </div>
                                        <div class="card card-box">
                                            <div class="card-head">
                                                <header>IQAC Member List</header>
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
                                                            <th> Id </th>
                                                            <th> Image </th>
                                                            <th> Name </th>
                                                            <th> Designation </th>
                                                            <th> Status </th>
                                                            <th> Action </th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        @isset($type)

                                                            @if($type == 1)

                                                                @foreach($member as $key=>$mission)

                                                                    <tr class="odd gradeX">
                                                                        <td class="left">{{ $key+1}}</td>
                                                                        <td class="left"><img src="{{ asset($mission->image) }}" style="height:40px; width:70px;" ></td>
                                                                        <td>{{ $mission->e_name }}</td>
                                                                        <td>{{ $mission->e_designation }}</td>

                                                                        @if($mission->status == 1)
                                                                            <td>Activate</td>
                                                                        @else
                                                                            <td>Deactivate</td>
                                                                        @endif
                                                                        <td>
                                                                            <a href="{{ url('/admin/iqac_member/add/'.$mission->id.'/'.$type) }}"
                                                                               class="btn btn-primary btn-xs">
                                                                                <i class="fa fa-plus-square" aria-hidden="true"></i>
                                                                            </a>

                                                                        </td>
                                                                    </tr>

                                                                @endforeach

                                                                @elseif($type == 2)

                                                                @foreach($member as $key=>$mission)

                                                                    <tr class="odd gradeX">
                                                                        <td class="left">{{ $key+1}}</td>
                                                                        <td class="left"><img src="{{ asset($mission->image) }}" style="height:100px; width:70px;" ></td>
                                                                        <td>{{ $mission->m_name }}</td>
                                                                        <td>{{ $mission->designation_id }}</td>

                                                                        @if($mission->status == 1)
                                                                            <td>Activate</td>
                                                                        @else
                                                                            <td>Deactivate</td>
                                                                        @endif
                                                                        <td>
                                                                            <a href="{{ url('/admin/iqac_member/add/'.$mission->id.'/'.$type) }}"
                                                                               class="btn btn-primary btn-xs">
                                                                                <i class="fa fa-plus-square" aria-hidden="true"></i>
                                                                            </a>
                                                                        </td>
                                                                    </tr>

                                                                @endforeach

                                                             @endif

                                                            @endisset

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
    <!-- data tables -->
    <script src="{{ asset('admin_assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('admin_assets/plugins/datatables/plugins/bootstrap/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('admin_assets/js/pages/table/table_data.js') }}"></script>

@endsection
@push('custom-js')

@endpush
