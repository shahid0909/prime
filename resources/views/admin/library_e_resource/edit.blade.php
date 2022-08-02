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
                        <div class="page-title">Edit Library E-Resource</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right">
                        <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                                                               href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                        </li>
                        <li><a class="parent-item" href="#">Settings</a>&nbsp;<i class="fa fa-angle-right"></i>
                        </li>
                        <li class="active">Edit Library E-Resource</li>
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
                                                <header>Edit Library E-Resource</header>
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

                                                <form method="post" action="{{ url('/admin/library_Eresource/update/'.$library->id) }}" enctype="multipart/form-data">
                                                    @csrf

                                                    <div class="form-group">

                                                        <div class="form-group col-md-4">
                                                            <label for="simpleFormEmail">Category</label>
                                                            <select class="form-select input-height" name="category" >
                                                                @if( $library->category == 1)
                                                                <option value="1">Subscribed</option>
                                                                @elseif($library->category == 2)
                                                                <option value="2">Registered</option>
                                                                @elseif($library->category == 3)
                                                                <option value="2">Open Access</option>
                                                                @endif
                                                                <option value="1">Subscribed</option>
                                                                <option value="2">Registered</option>
                                                                <option value="2">Open Access</option>
                                                            </select>
                                                            @error('category')
                                                            <span class="text-danger"> {{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                            <label for="simpleFormEmail">Title</label>
                                                            <input type="Text" class="form-control" name="title" value="{{ $library->title }}">
                                                            @error('title')
                                                            <span class="text-danger"> {{ $message }}</span>
                                                            @enderror
                                                        </div>

                                                        <div class="form-group col-md-4">
                                                            <label for="simpleFormEmail">Image</label>
                                                            <input type="file" class="form-control" name="image" value="{{ $library->image }}">
                                                            @error('image')
                                                            <span class="text-danger"> {{ $message }}</span>
                                                            @enderror
                                                        </div>

                                                        <div class="form-group col-md-4">
                                                            <label for="simpleFormEmail">URL</label>
                                                            <input type="text" class="form-control" name="link" value="{{ $library->link }}">
                                                            @error('link')
                                                            <span class="text-danger"> {{ $message }}</span>
                                                            @enderror
                                                        </div>

                                                        <div class="form-group col-md-4">
                                                            <label for="simpleFormEmail">Status</label>
                                                            <select class="form-select input-height" name="status" >
                                                                @if($library->status == 1)
                                                                <option value="1">Active</option>
                                                                @else
                                                                <option value="0">Deactivate</option>
                                                                @endif
                                                                <option value="1">Active</option>
                                                                <option value="0">Deactivate</option>
                                                            </select>
                                                            @error('status')
                                                            <span class="text-danger"> {{ $message }}</span>
                                                            @enderror
                                                        </div>


                                                    </div>
                                                    <div class="form-group">
                                                        <img src="{{ asset($library->image) }}" style="width:400px; height:200px;" >

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
