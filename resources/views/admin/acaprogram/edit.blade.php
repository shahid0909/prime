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
                            <div class="page-title">Edit Academic Program</div>
                        </div>
                        <ol class="breadcrumb page-breadcrumb pull-right">
                            <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                                                                   href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                            </li>
                            <li><a class="parent-item" href="#">Settings</a>&nbsp;<i class="fa fa-angle-right"></i>
                            </li>
                            <li class="active">Edit Academic Program</li>
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
                                                    <header>Edit Academic Program</header>
                                                    <p style="
                                                        margin-left: 20px;
                                                    ">All fields are required</p>
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

                                                    <form method="post" action="{{ url('/admin/aca_program/update/'.$acaprogram->id) }}" enctype="multipart/form-data">
                                                        @csrf

                                                        <div class="form-group">
                                                            <div class="form-group col-md-4">
                                                                <label for="simpleFormEmail">Program Name</label>
                                                                <input type="Text" class="form-control" name="p_name" id="simpleFormEmail"
                                                                      value="{{ $acaprogram->p_name }}">
                                                                @error('p_name')
                                                                <span class="text-danger"> {{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                            <div class="form-group col-md-4">
                                                                <label for="simpleFormEmail">Total Credits Requiredfor Degree</label>
                                                                <input type="Text" class="form-control" name="credits" id="simpleFormEmail"
                                                                       value="{{ $acaprogram->credits }}">
                                                                @error('credits')
                                                                <span class="text-danger"> {{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                            <div class="form-group col-md-4">
                                                                <label for="simpleFormEmail">Total Years for Degree</label>
                                                                <input type="Text" class="form-control" name="m_year" id="simpleFormEmail"
                                                                       value="{{ $acaprogram->m_year }}">
                                                                @error('m_year')
                                                                <span class="text-danger"> {{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                            <div class="form-group col-md-4">
                                                                <label for="simpleFormEmail">Total Courses Required for Degree</label>
                                                                <input type="Text" class="form-control" name="m_course" id="simpleFormEmail"
                                                                       value="{{ $acaprogram->m_course }}">
                                                                @error('m_course')
                                                                <span class="text-danger"> {{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                            <div class="form-group col-md-4">
                                                                <label for="simpleFormEmail">Total CGPA Required for Degree</label>
                                                                <input type="Text" class="form-control" name="cgpa" id="simpleFormEmail"
                                                                       value="{{ $acaprogram->cgpa }}">
                                                                @error('cgpa')
                                                                <span class="text-danger"> {{ $message }}</span>
                                                                @enderror
                                                            </div>

                                                            <div class="form-group col-md-4">
                                                                <label for="simpleFormEmail">Select Department</label>
                                                                <select class="form-select input-height" name="dept_id">
                                                                    <option value="{{ $acaprogram->departments->id }}" selected>{{ $acaprogram->departments->name }}</option>
                                                                    @foreach($department as $department)
                                                                        <option value={{ $department->id }}>{{ $department->name }}</option>
                                                                    @endforeach
                                                                </select>
                                                                @error('dept_id')
                                                                <span class="text-danger"> {{ $message }}</span>
                                                                @enderror
                                                            </div>

                                                            <div class="form-group col-md-4">
                                                                <label for="simpleFormEmail">Status</label>
                                                                <select class="form-select input-height" name="status">
                                                                    @if( $acaprogram->status = 1)

                                                                        <option value="{{ $acaprogram->status }}">Active</option>

                                                                    @else
                                                                        <option value="{{ $acaprogram->status }}">Deactivate</option>

                                                                    @endif
                                                                    <option value="1">Active</option>
                                                                    <option value="2">Deactivate</option>
                                                                </select>
                                                                @error('status')
                                                                <span class="text-danger"> {{ $message }}</span>
                                                                @enderror
                                                            </div>

                                                            <div class="form-group col-md-12">
                                                                <label for="simpleFormEmail">Program Objective</label>
                                                                <textarea class="summernote" name="p_objective">{!! $acaprogram->p_objective !!}</textarea>
                                                                @error('p_objective')
                                                                <span class="text-danger"> {{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                            <div class="form-group col-md-12">
                                                                <label for="simpleFormEmail">Program Outcomes</label>
                                                                <textarea class="summernote" name="p_outcome">{!! $acaprogram->p_outcome !!}</textarea>
                                                                @error('p_outcome')
                                                                <span class="text-danger"> {{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                            <div class="form-group col-md-12">
                                                                <label for="simpleFormEmail">Curriculum Structure</label>
                                                                <textarea class="summernote" name="c_structure">{!! $acaprogram->c_structure !!}</textarea>
                                                                @error('c_structure')
                                                                <span class="text-danger"> {{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                            <div class="form-group col-md-12">
                                                                <label for="simpleFormEmail">Course Distribution</label>
                                                                <textarea class="summernote" name="c_distribution">{!! $acaprogram->c_distribution !!}</textarea>
                                                                @error('c_distribution')
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
