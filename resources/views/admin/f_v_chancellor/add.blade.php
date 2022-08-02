    @extends('admin.layout.master')

    @section('style-lib')
        <!-- data tables -->
        <link href="{{ asset('admin_assets/plugins/datatables/plugins/bootstrap/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote.min.css" integrity="sha256-n3YISYddrZmGqrUgvpa3xzwZwcvvyaZco0PdOyUKA18=" crossorigin="anonymous" />

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
                            <div class="page-title">Former Vice Chancellor</div>
                        </div>
                        <ol class="breadcrumb page-breadcrumb pull-right">
                            <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                                                                   href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                            </li>
                            <li><a class="parent-item" href="#">Settings</a>&nbsp;<i class="fa fa-angle-right"></i>
                            </li>
                            <li class="active">Former Vice Chancellor</li>
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
                                                    <header>Former Vice Chancellor</header>
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

                                                    <form method="post" action="{{ route('f_v_Chancellor.store') }}" enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="form-group">
                                                            <div class="form-group col-md-4">
                                                                <label for="simpleFormEmail"> Name </label>
                                                                <input type="Text" class="form-control" name="f_name" id="simpleFormEmail"
                                                                       placeholder="Name">
                                                                @error('f_name')
                                                                <span class="text-danger"> {{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                            <div class="form-group col-md-4">
                                                                <label for="simpleFormEmail">Image</label>
                                                                <input type="file" class="form-control" name="image" id="simpleFormEmail"
                                                                       placeholder="Minimum Credits Requiredfor Degree">
                                                                @error('image')
                                                                <span class="text-danger"> {{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                            <div class="form-group col-md-4">
                                                                <label for="simpleFormEmail">Starting Date</label>
                                                                <input type="date" class="form-control" name="s_date" id="simpleFormEmail"
                                                                       placeholder="Minimum Years for Degree">
                                                                @error('s_date')
                                                                <span class="text-danger"> {{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                            <div class="form-group col-md-4">
                                                                <label for="simpleFormEmail">Ending Date</label>
                                                                <input type="date" class="form-control" name="e_date" id="simpleFormEmail"
                                                                       placeholder="Minimum Courses Required for Degree">
                                                                @error('e_date')
                                                                <span class="text-danger"> {{ $message }}</span>
                                                                @enderror
                                                            </div>

                                                            <div class="form-group col-md-4">
                                                                <label for="simpleFormEmail">Status</label>
                                                                <select class="form-select input-height" name="status">
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
