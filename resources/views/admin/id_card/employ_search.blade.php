@extends('admin.layout.master')

@section('style-lib')
    <!-- data tables -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote.min.css" integrity="sha256-n3YISYddrZmGqrUgvpa3xzwZwcvvyaZco0PdOyUKA18=" crossorigin="anonymous" />
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
                        <div class="page-title">Search Employ</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right">
                        <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                                                               href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                        </li>
                        <li><a class="parent-item" href="#">Settings</a>&nbsp;<i class="fa fa-angle-right"></i>
                        </li>
                        <li class="active">Search Employ</li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="tabbable-line">
                        <div class="tab-content">
                            <div class="tab-pane active fontawesome-demo" id="tab1">
                                <div class="row">

                                    @if(empty($employInfo))

                                        <div class="col-md-12">
                                            <div class="card card-box">
                                                <div class="card-head">
                                                    <header>Search Employ</header>
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

                                                    <form method="post" action="{{ route('employ_search.store') }}" enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="form-group">
                                                            <div class="form-group col-md-4">
                                                                <label for="simpleFormEmail">Select Employ</label>
                                                                <input type="text" name="e_name" class="form-control">
                                                                @error('employ_id')
                                                                <span class="text-danger"> {{ $message }}</span>
                                                                @enderror
                                                            </div>

                                                        </div>

                                                        <button type="submit" class="btn btn-primary">Submit</button>
                                                    </form>

                                                </div>
                                            </div>
                                        </div>
                                    @else

                                        @isset($employInfo)
                                            <div class="col-md-12">
                                                <div class="card card-box">
                                                    <div class="card-head">
                                                        <header>Employ</header>
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
                                                                    <th> Action </th>
                                                                </tr>
                                                                </thead>
                                                                <tbody>
                                                                @foreach($employInfo as $key=>$employ)

                                                                <tr class="odd gradeX">
                                                                    <td class="left">{{ $key+1}}</td>
                                                                    <td class="left"><img src="{{ asset($employ->image) }}" style="height:40px; width:70px;" ></td>
                                                                    <td>{{ $employ->e_name }}</td>
                                                                    <td>{{ $employ->designation->designation }}</td>
                                                                    <td>
                                                                        <a href="{{ url('/admin/employ_id_download/'.$employ->id) }}"
                                                                           class="btn btn-primary btn-xs">
                                                                            <i class="fa fa-download" aria-hidden="true"></i>
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
                                        @endisset

                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script>


    </script>
@endsection




@section('script-lib')

    <script type="text/javascript">
        $(document).ready(function() {
            $('.summernote').summernote();
        });
    </script>
    <!-- data tables -->
    <script src="{{ asset('admin_assets/plugins/bootstrap-datepicker/bootstrap-datepicker.js') }}"></script>
    <script src="{{ asset('admin_assets/plugins/bootstrap-datepicker/datepicker-init.js') }}"></script>
    <script src="{{ asset('admin_assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js') }}" charset="UTF-8"></script>
    <script src="{{ asset('admin_assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker-init.js') }}" charset="UTF-8"></script>
    <script src="{{ asset('admin_assets/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js') }}" charset="UTF-8"></script>
    <script src="{{ asset('admin_assets/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker-init.js') }}" charset="UTF-8"></script>

    <script src="{{ asset('admin_assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('admin_assets/plugins/datatables/plugins/bootstrap/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('admin_assets/js/pages/table/table_data.js') }}"></script>

@endsection
@push('custom-js')

@endpush
