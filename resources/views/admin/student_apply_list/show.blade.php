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

    <!-- start page content -->
    <div class="page-content-wrapper">
        <div class="page-content">
            <div class="page-bar">
                <div class="page-title-breadcrumb">
                    <div class=" pull-left">
                        <div class="page-title">Student Information</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right">
                        <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                                                               href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                        </li>
                        <li><a class="parent-item" href="#">Professor</a>&nbsp;<i class="fa fa-angle-right"></i>
                        </li>
                        <li class="active">Student Information</li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="card card-box">

                        <div class="card-body" id="bar-parent">
                            <div class="form-group">
                                <img src="{{ asset($student_info->image) }}" style="width:400px; height:200px;" >
                            </div>
                            <form action="#" id="form_sample_1" class="form-horizontal">
                                <h3 >Student Information</h3>
                                <div class="form-body">
                                    <div class="form-group row">
                                        <label class="control-label col-md-3">Enroll Date
                                            <span class="required"> * </span>
                                        </label>
                                        <div class="col-md-5">
                                            <label class="form-control input-height">{{ \Carbon\Carbon::parse( $student_info->enroll_date)->format('d/m/Y')}}
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="control-label col-md-3">Name
                                            <span class="required"> * </span>
                                        </label>
                                        <div class="col-md-5">
                                            <label class="form-control input-height">{{ $student_info->s_name }}
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="control-label col-md-3">Father Name
                                            <span class="required"> * </span>
                                        </label>
                                        <div class="col-md-5">
                                            <label class="form-control input-height">{{ $student_info->f_name }}
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="control-label col-md-3">Mother Name
                                            <span class="required"> * </span>
                                        </label>
                                        <div class="col-md-5">
                                            <label class="form-control input-height">{{ $student_info->m_name }}
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="control-label col-md-3">Birth Date
                                            <span class="required"> * </span>
                                        </label>
                                        <div class="col-md-5">
                                            <label class="form-control input-height">{{ $student_info->b_date }}
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="control-label col-md-3">Gender
                                            <span class="required"> * </span>
                                        </label>
                                        <div class="col-md-5">
                                            <select class="form-select input-height" name="department">
                                                @if($student_info->gender == 1)
                                                <option value="Category 1">Mail</option>
                                                @elseif($student_info->gender == 2)
                                                <option value="Category 2">Female</option>
                                                @else
                                                <option value="Category 3">Other</option>
                                                @endif
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="control-label col-md-3">Nationality
                                            <span class="required"> * </span>
                                        </label>
                                        <div class="col-md-5">
                                            <label class="form-control input-height">{{ $student_info->nationality }}
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="control-label col-md-3">Phone Number
                                            <span class="required"> * </span>
                                        </label>
                                        <div class="col-md-5">
                                            <label class="form-control input-height">{{ $student_info->phone }}
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="control-label col-md-3">Email
                                            <span class="required"> * </span>
                                        </label>
                                        <div class="col-md-5">
                                            <label class="form-control input-height">{{ $student_info->email }}
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="control-label col-md-3">Freddom Fighter
                                            <span class="required"> * </span>
                                        </label>
                                        <div class="col-md-5">
                                            <select class="form-select input-height" name="department">
                                                @if($student_info->freedom_fighter == 1)
                                                    <option value="Category 1">No</option>
                                                @else
                                                    <option value="Category 3">Yes</option>
                                                @endif
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="control-label col-md-3">Poor
                                            <span class="required"> * </span>
                                        </label>
                                        <div class="col-md-5">
                                            <select class="form-select input-height" name="department">
                                                @if($student_info->poor == 1)
                                                    <option value="Category 1">No</option>
                                                @else
                                                    <option value="Category 3">Yes</option>
                                                @endif
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <h3 >Student Present Address</h3>
                                <div class="form-body">
                                    <div class="form-group row">
                                        <label class="control-label col-md-3">Country
                                            <span class="required"> * </span>
                                        </label>
                                        <div class="col-md-5">
                                            <label class="form-control input-height">{{ $student_present->country }}
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="control-label col-md-3">District
                                            <span class="required"> * </span>
                                        </label>
                                        <div class="col-md-5">
                                            <label class="form-control input-height">{{ $student_present->district }}
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="control-label col-md-3">Thana
                                            <span class="required"> * </span>
                                        </label>
                                        <div class="col-md-5">
                                            <label class="form-control input-height">{{ $student_present->thana }}
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="control-label col-md-3">Police Station
                                            <span class="required"> * </span>
                                        </label>
                                        <div class="col-md-5">
                                            <label class="form-control input-height">{{ $student_present->police_station }}
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="control-label col-md-3">Post Code
                                            <span class="required"> * </span>
                                        </label>
                                        <div class="col-md-5">
                                            <label class="form-control input-height">{{ $student_present->post_code }}
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="control-label col-md-3">Address
                                            <span class="required"> * </span>
                                        </label>
                                        <div class="col-md-5">
                                            <label class="form-control input-height">{{ $student_present->address }}
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <h3 >Student Permanent Address</h3>
                                <div class="form-body">
                                    <div class="form-group row">
                                        <label class="control-label col-md-3">Country
                                            <span class="required"> * </span>
                                        </label>
                                        <div class="col-md-5">
                                            <label class="form-control input-height">{{ $student_permanent->country }}
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="control-label col-md-3">District
                                            <span class="required"> * </span>
                                        </label>
                                        <div class="col-md-5">
                                            <label class="form-control input-height">{{ $student_permanent->district }}
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="control-label col-md-3">Thana
                                            <span class="required"> * </span>
                                        </label>
                                        <div class="col-md-5">
                                            <label class="form-control input-height">{{ $student_permanent->thana }}
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="control-label col-md-3">Police Station
                                            <span class="required"> * </span>
                                        </label>
                                        <div class="col-md-5">
                                            <label class="form-control input-height">{{ $student_permanent->police_station }}
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="control-label col-md-3">Post Code
                                            <span class="required"> * </span>
                                        </label>
                                        <div class="col-md-5">
                                            <label class="form-control input-height">{{ $student_permanent->post_code }}
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="control-label col-md-3">Address
                                            <span class="required"> * </span>
                                        </label>
                                        <div class="col-md-5">
                                            <label class="form-control input-height">{{ $student_permanent->address }}
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <h3 >Student Administration</h3>
                                <div class="form-body">
                                    @foreach($student_administration as $student_adm)
                                    <div class="form-group row">
                                        <label class="control-label col-md-3">Faculty Name
                                            <span class="required"> * </span>
                                        </label>
                                        <div class="col-md-5">
                                            <label class="form-control input-height">{{ $student_adm->facaltiName }}
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="control-label col-md-3">Department Name
                                            <span class="required"> * </span>
                                        </label>
                                        <div class="col-md-5">
                                            <label class="form-control input-height">{{ $student_adm->departName }}
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="control-label col-md-3">Program
                                            <span class="required"> * </span>
                                        </label>
                                        <div class="col-md-5">
                                            <label class="form-control input-height">{{ $student_adm->p_name }}
                                            </label>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="control-label col-md-3">Session
                                            <span class="required"> * </span>
                                        </label>
                                        <div class="col-md-5">
                                            <label class="form-control input-height">{{ $student_adm->startsession }}
                                            </label>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="control-label col-md-3">Shift
                                            <span class="required"> * </span>
                                        </label>
                                        <div class="col-md-5">
                                            <select class="form-select input-height" name="department">
                                                @if($student_adm->shift == 1)
                                                    <option value="Category 1">Day</option>
                                                @elseif($student_adm->shift == 2)
                                                    <option value="Category 2">Night</option>
                                                @else
                                                    <option value="Category 3">Evening</option>
                                                @endif
                                            </select>
                                        </div>
                                    </div>

                                    @endforeach

                                </div>
                                <h3 >Student Education</h3>
                                <div class="form-body">

                                    <div class="table-scrollable">
                                        <table
                                            class="table table-striped table-bordered table-hover table-checkable order-column valign-middle"
                                            id="example4">


                                            @php

                                                $exam_name =json_decode($student_education->exam_name);
                                                $institute =json_decode($student_education->institute);
                                                $major_area =json_decode($student_education->major_area);
                                                $passing_year =json_decode($student_education->passing_year);
                                                $grade =json_decode($student_education->grade);
                                                $upload_file =json_decode($student_education->upload_file);

                                            @endphp


                                            <tr>
                                            <th> Examination</th>
                                            @foreach($exam_name as $exam_nam)
                                                <td>{{ $exam_nam }} </td>
                                                 @endforeach
                                            </tr>
                                            <tr>
                                            <th> Institute Name </th>
                                            @foreach($institute as $institut)
                                                <td>{{ $institut }} </td>
                                            @endforeach
                                            </tr>
                                            <tr>
                                                <th> Major Area </th>
                                                @foreach($major_area as $major_are)
                                                    <td>{{ $major_are }} </td>
                                                @endforeach
                                            </tr>
                                            <tr>
                                                <th> Passing Year </th>
                                                @foreach($passing_year as $passing_yea)
                                                    <td>{{ \Carbon\Carbon::parse( $passing_yea)->format('d/m/Y')}} </td>
                                                @endforeach
                                            </tr>
                                            <tr>
                                                <th> Grade </th>
                                                @foreach($grade as $grad)
                                                    <td>{{ $grad }} </td>
                                                @endforeach
                                            </tr>
                                            <tr>
                                                <th> Certificate </th>
                                                @foreach($upload_file as $upload_fil)
                                                    <td align="center">
                                                        <a
                                                            target="_blank"
                                                            href="{{ url( $upload_fil ) }}">
                                                            <i class="fa fa-eye" aria-hidden="true"></i>
                                                        </a>
                                                    </td>
                                                @endforeach
                                            </tr>


                                        </table>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end page content -->

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
