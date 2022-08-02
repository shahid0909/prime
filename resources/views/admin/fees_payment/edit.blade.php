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
                        <div class="page-title">Edit Fees & Payment</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right">
                        <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                                                               href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                        </li>
                        <li><a class="parent-item" href="#">Settings</a>&nbsp;<i class="fa fa-angle-right"></i>
                        </li>
                        <li class="active">Edit Breaking News</li>
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
                                                <header>Edit Fees & Payment</header>
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

                                                <form method="post" action="{{ url('/admin/fees/update/'.$fees->id) }}" enctype="multipart/form-data">
                                                    @csrf

                                                    <div class="form-group">

                                                        <div class="form-group col-md-4">
                                                            <label for="simpleFormEmail">Select Department</label>
                                                            <select class="form-select input-height" name="dept_id">
                                                                <option value="{{ $fees->departments->id }}">{{ $fees->departments->name }}</option>

                                                                @foreach($department as $departments)
                                                                    <option value="{{ $departments->id }}">{{ $departments->name }}</option>
                                                                @endforeach
                                                            </select>
                                                            @error('dept_id')
                                                            <span class="text-danger"> {{ $message }}</span>
                                                            @enderror
                                                        </div>


                                                        <div class="form-group col-md-4">
                                                            <label for="simpleFormEmail">Select Program</label>
                                                            <select class="form-select input-height" name="program_id">
                                                                <option value="{{ $fees->aca_program->id }}">{{ $fees->aca_program->p_name }}</option>
                                                                @foreach($aca_program as $aca_programs)
                                                                    <option value="{{ $aca_programs->id }}">{{ $aca_programs->p_name }}</option>
                                                                @endforeach
                                                            </select>
                                                            @error('program_id')
                                                            <span class="text-danger"> {{ $message }}</span>
                                                            @enderror
                                                        </div>


                                                        <div class="form-group col-md-4">
                                                            <label for="simpleFormEmail">Total Course Fees:</label>
                                                            <input type="Text" class="form-control" name="course_fee" id="simpleFormEmail"
                                                                  value="{{ $fees->course_fee }}">
                                                            @error('course_fee')
                                                            <span class="text-danger"> {{ $message }}</span>
                                                            @enderror
                                                        </div>

                                                        @php
                                                            $p_resultarray =json_decode($fees->p_result);

                                                            $p_amountarray =json_decode($fees->p_amount);

                                                            $m_feearray =json_decode($fees->m_fee);
                                                        @endphp

                                                        <div class=' row ' style="margin-bottom: 20px;">

                                                            @foreach($p_resultarray as $key => $p_result)
                                                                <div class='col-sm-4 col-xs-12 col-md-4 col-lg-4'>
                                                                    <a class="thumbnail fancybox" rel="ligthbox">
                                                                        <label for="simpleFormEmail">{{ $p_result }}</label>
                                                                        <div class='text-center'>
                                                                            <small class='text-muted'>Waiver Policy Result</small>
                                                                        </div> <!-- text-center / end -->
                                                                    </a>

                                                                    <a  class="close-icon btn btn-danger" href="{{ url('/admin/fees_p_result',$key.'/'.$fees->id) }}"><i class="fa fa-trash" aria-hidden="true"></i></a>

                                                                </div> <!-- col-6 / end -->
                                                            @endforeach

                                                        </div> <!-- col-6 / end -->
                                                        <div class=' row ' style="margin-bottom: 20px;">

                                                            @foreach($p_amountarray as $key => $p_amount)
                                                                <div class='col-sm-4 col-xs-12 col-md-4 col-lg-4'>
                                                                    <a class="thumbnail fancybox" rel="ligthbox">
                                                                        <label for="simpleFormEmail">{{ $p_amount }}</label>
                                                                        <div class='text-center'>
                                                                            <small class='text-muted'>Payable Amount</small>
                                                                        </div> <!-- text-center / end -->
                                                                    </a>

                                                                    <a  class="close-icon btn btn-danger" href="{{ url('/admin/fees_p_amount',$key.'/'.$fees->id) }}"><i class="fa fa-trash" aria-hidden="true"></i></a>

                                                                </div> <!-- col-6 / end -->
                                                            @endforeach

                                                        </div> <!-- col-6 / end -->
                                                        <div class=' row ' style="margin-bottom: 20px;">

                                                            @foreach($m_feearray as $key => $m_fee)
                                                                <div class='col-sm-4 col-xs-12 col-md-4 col-lg-4'>
                                                                    <a class="thumbnail fancybox" rel="ligthbox">
                                                                        <label for="simpleFormEmail">{{ $m_fee }}</label>
                                                                        <div class='text-center'>
                                                                            <small class='text-muted'>Monthly Fee</small>
                                                                        </div> <!-- text-center / end -->
                                                                    </a>

                                                                    <a  class="close-icon btn btn-danger" href="{{ url('/admin/fees_m_fee',$key.'/'.$fees->id) }}"><i class="fa fa-trash" aria-hidden="true"></i></a>

                                                                </div> <!-- col-6 / end -->
                                                            @endforeach

                                                        </div> <!-- col-6 / end -->

                                                        <div class="row"  id="Product_email_box">
                                                            <div class="col-md-4 product_attr_1">
                                                                <label for="p_result" class="control-label mb-1">Waiver Policy Result</label>
                                                                <input id="p_result" type="text" name="p_result[]" class="form-control" aria-required="true" aria-invalid="false" >
                                                                @error('p_result')
                                                                <div class="alert alert-danger">
                                                                    {{ $message }}
                                                                </div>
                                                                @enderror
                                                            </div>
                                                            <div class="col-md-4 product_attr_1">
                                                                <label for="p_amount" class="control-label mb-1">Payable Amount</label>
                                                                <input id="p_amount" type="text" name="p_amount[]" class="form-control" aria-required="true" aria-invalid="false" >
                                                                @error('p_amount')
                                                                <div class="alert alert-danger">
                                                                    {{ $message }}
                                                                </div>
                                                                @enderror
                                                            </div>
                                                            <div class="col-md-4 product_attr_1">
                                                                <label for="m_fee" class="control-label mb-1">Monthly Fee</label>
                                                                <input id="m_fee" type="text" name="m_fee[]" class="form-control" aria-required="true" aria-invalid="false" >
                                                                @error('m_fee')
                                                                <div class="alert alert-danger">
                                                                    {{ $message }}
                                                                </div>
                                                                @enderror
                                                            </div>


                                                            <div class="col-md-2" style="margin-bottom: 20px;">
                                                                <label for="email" class="control-label mb-1">
                                                                    &nbsp;</label><br>
                                                                <button type="button" class="btn btn-success btn-lg" onclick="add_email_more()">
                                                                    <i class="fas fa-plus"></i> &nbsp;ADD
                                                                </button>
                                                            </div>
                                                        </div>

                                                        <div class="form-group col-md-12">
                                                            <label for="simpleFormEmail">Required Qualification for Admission:</label>
                                                            <textarea class="summernote" name="r_q_admission">{!! $fees->r_q_admission !!}</textarea>
                                                            @error('r_q_admission')
                                                            <span class="text-danger"> {{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group col-md-12">
                                                            <label for="simpleFormEmail">General Information:</label>
                                                            <textarea class="summernote" name="general_information">{!! $fees->general_information !!}</textarea>
                                                            @error('general_information')
                                                            <span class="text-danger"> {{ $message }}</span>
                                                            @enderror
                                                        </div>

                                                        <div class="form-group col-md-12">
                                                            <label for="simpleFormEmail">Scholarship:</label>
                                                            <textarea class="summernote" name="scholarship">{!! $fees->scholarship !!}</textarea>
                                                            @error('scholarship')
                                                            <span class="text-danger"> {{ $message }}</span>
                                                            @enderror
                                                        </div>

                                                        <div class="form-group col-md-12">
                                                            <label for="simpleFormEmail">Financial Waiver:</label>
                                                            <textarea class="summernote" name="financial_waver">{!! $fees->financial_waver !!}</textarea>
                                                            @error('financial_waver')
                                                            <span class="text-danger"> {{ $message }}</span>
                                                            @enderror
                                                        </div>

                                                        <div class="form-group col-md-4">
                                                            <label for="simpleFormEmail">Status</label>
                                                            <select class="form-select input-height" name="status">
                                                                @if( $fees->status == 1)

                                                                    <option value="{{ $fees->status }}">Active</option>

                                                                @else
                                                                    <option value="{{ $fees->status }}">Deactivate</option>

                                                                @endif
                                                                <option value="1">Active</option>
                                                                <option value="0">Deactivate</option>
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

    <script>
        var loop_email_count =1;
        function add_email_more(){
            loop_email_count++;

            var html ='<div class="row col-md-12 product_email_'+loop_email_count+'"><div class="col-md-4 product_attr_1"> \
                <label for="p_result" class="control-label mb-1">Waiver Policy Result</label>\
                   <input id="p_result" type="text" name="p_result[]" class="form-control" aria-required="true" aria-invalid="false" required>\
                   @error('p_result')\
                   <div class="alert alert-danger">\
                   {{ $message }}\
                    </div>\
                     @enderror   \
                     </div>        \
               <div class="col-md-4 product_attr_1">\
               <label for="p_amount" class="control-label mb-1">Payable Amount</label>\
                <input id="p_amount" type="text" name="p_amount[]" class="form-control" aria-required="true" aria-invalid="false" required>\
                 @error('p_amount')\
                 <div class="alert alert-danger">\
                {{ $message }}\
                </div>\
                 @enderror\
                 </div>\
                 <div class="col-md-4 product_attr_1">\
                 <label for="m_fee" class="control-label mb-1">Monthly Fee</label>\
                 <input id="m_fee" type="text" name="m_fee[]" class="form-control" aria-required="true" aria-invalid="false" required>\
                   @error('m_fee')\
                   <div class="alert alert-danger">\
                   {{ $message }}\
                   </div>\
                    @enderror\
                    </div>  \
                </div> ' ;

            html+='<div class="col-md-2 product_email_'+loop_email_count+'"><label for="discount" class="control-label mb-1">&nbsp;</label><br><button type="button" class="btn btn-danger btn-lg" onclick=remove_emails_more("'+loop_email_count+'")><i class="fas fa-minus"></i> &nbsp;Remove</button></div>';

            jQuery('#Product_email_box').append(html);
        }
        function remove_emails_more(loop_email_count){
            jQuery('.product_email_'+loop_email_count).remove();
        }
    </script>

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
