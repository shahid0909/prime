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
                        <div class="page-title">Edit Class Exam</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right">
                        <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                                                               href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                        </li>
                        <li><a class="parent-item" href="#">Settings</a>&nbsp;<i class="fa fa-angle-right"></i>
                        </li>
                        <li class="active">Edit Class Exam</li>
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
                                                <header>Edit Class Exam</header>
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

                                                <form method="post" action="{{ url('/admin/class_exam/update/'.$class_exam->id) }}" enctype="multipart/form-data">
                                                    @csrf

                                                    <div class="form-group">
                                                        <div class="form-group col-md-4">
                                                            <label for="simpleFormEmail">Title</label>
                                                            <input type="Text" class="form-control" name="title" value="{{ $class_exam->title }}">
                                                            @error('title')
                                                            <span class="text-danger"> {{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                            <label for="simpleFormEmail">Select Department</label>
                                                            <select class="form-select input-height" name="dept_id">
                                                                <option value="{{ $class_exam->dept_id }}">{{ $class_exam->departments->name }}</option>
                                                                @foreach($department as $departments)
                                                                    <option value={{ $departments->id }}>{{ $departments->name }}</option>
                                                                @endforeach
                                                            </select>
                                                            @error('dept_id')
                                                            <span class="text-danger"> {{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                            <label for="simpleFormEmail">File</label>
                                                            <input type="file" class="form-control" name="uplode_file" value="{{ $class_exam->file }}">
                                                            @error('Uplode_file')
                                                            <span class="text-danger"> {{ $message }}</span>
                                                            @enderror
                                                        </div>

                                                        <div class="form-group col-md-4">
                                                            <label for="simpleFormEmail">Date</label>
                                                            <input type="date" class="form-control" name="date" value="{{ $class_exam->date }}">
                                                            @error('date')
                                                            <span class="text-danger"> {{ $message }}</span>
                                                            @enderror
                                                        </div>


                                                        <div class="form-group col-md-4">
                                                            <label for="simpleFormEmail">Type</label>
                                                            <select class="form-select input-height" name="type">
                                                                @if( $class_exam->type = 1)

                                                                    <option value="{{ $class_exam->type }}">Class</option>

                                                                @else
                                                                    <option value="{{ $class_exam->type }}">Exam</option>

                                                                @endif
                                                                    <option value="1">Class</option>
                                                                    <option value="2">Exam</option>
                                                            </select>
                                                            @error('status')
                                                            <span class="text-danger"> {{ $message }}</span>
                                                            @enderror
                                                        </div>


                                                        <div class="form-group col-md-4">
                                                            <label for="simpleFormEmail">Status</label>
                                                            <select class="form-select input-height" name="status">
                                                                @if( $class_exam->status = 1)

                                                                    <option value="{{ $class_exam->status }}">Active</option>

                                                                @else
                                                                    <option value="{{ $class_exam->status }}">Deactivate</option>

                                                                @endif
                                                                <option value="1">Active</option>
                                                                <option value="2">Deactivate</option>
                                                            </select>
                                                            @error('status')
                                                            <span class="text-danger"> {{ $message }}</span>
                                                            @enderror
                                                        </div>


                                                    </div>

                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                </form>

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
