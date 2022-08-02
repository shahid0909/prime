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
                        <div class="page-title">Add Faculty Member</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right">
                        <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                                                               href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                        </li>
                        <li><a class="parent-item" href="#">Settings</a>&nbsp;<i class="fa fa-angle-right"></i>
                        </li>
                        <li class="active">Add Faculty Member</li>
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
                                                <header>Add Faculty Member</header>
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

                                                <form method="post" action="{{ route('faculty_member.store') }}" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="form-group">
                                                        <div class="form-group col-md-4">
                                                            <label for="simpleFormEmail">Name</label>
                                                            <input type="Text" class="form-control" name="m_name" id="simpleFormEmail"
                                                                   placeholder="Enter The Name">
                                                            @error('m_name')
                                                            <span class="text-danger"> {{ $message }}</span>
                                                            @enderror
                                                        </div>

                                                        <div class="form-group col-md-4">
                                                            <label for="simpleFormEmail">Designation</label>
                                                            <select class="form-select input-height" name="designation_id">
                                                                <option value="0">Select...</option>

                                                                @foreach($designations as $designa)
                                                                <option value="{{ $designa->id }}">{{ $designa->designation }}</option>
                                                                    @endforeach
                                                            </select>
                                                            @error('designation_id')
                                                            <span class="text-danger"> {{ $message }}</span>
                                                            @enderror
                                                        </div>

                                                        <!--<div class="form-group col-md-4">-->
                                                        <!--    <label for="simpleFormEmail">Additional Designation</label>-->
                                                        <!--    <select class="form-select input-height" name="adi_designation_id">-->
                                                        <!--        <option value="0">Select...</option>-->

                                                        <!--        @foreach($designations as $desig)-->
                                                        <!--            <option value="{{ $desig->id }}">{{ $desig->adi_designation }}</option>-->
                                                        <!--        @endforeach-->

                                                        <!--    </select>-->
                                                        <!--    @error('adi_designation_id')-->
                                                        <!--    <span class="text-danger"> {{ $message }}</span>-->
                                                        <!--    @enderror-->
                                                        <!--</div>-->

                                                        <div class="form-group col-md-12">
                                                            <label for="simpleFormEmail">Educational Qualifications</label>
                                                            <textarea class="summernote" name="edu_que"></textarea>
                                                        </div>


                                                        <div class="col-lg-12">
                                                            <div class="card">
                                                                <div class="card-body">
                                                                    <div class="form-group">
                                                                        <div class="row"  id="Product_email_box">
                                                                            <div class="col-md-4 product_attr_1">
                                                                                <label for="email" class="control-label mb-1">Email</label>
                                                                                <input id="email" type="email" name="email[]" class="form-control" aria-required="true" aria-invalid="false">
                                                                                @error('email')
                                                                                <div class="alert alert-danger">
                                                                                    {{ $message }}
                                                                                </div>
                                                                                @enderror
                                                                            </div>
                                                                            <div class="col-md-2">
                                                                                <label for="email" class="control-label mb-1">
                                                                                    &nbsp;</label><br>
                                                                                <button type="button" class="btn btn-success btn-lg" onclick="add_email_more()">
                                                                                    <i class="fas fa-plus"></i> &nbsp;ADD
                                                                                </button>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-12">
                                                            <div class="card">
                                                                <div class="card-body">
                                                                    <div class="form-group">
                                                                        <div class="row"  id="Product_phone_box">
                                                                            <div class="col-md-4 product_attr_1">
                                                                                <label for="phone" class="control-label mb-1">Phone</label>
                                                                                <input id="phone" type="text" name="phone[]" class="form-control" aria-required="true" aria-invalid="false">
                                                                                @error('phone')
                                                                                <div class="alert alert-danger">
                                                                                    {{ $message }}
                                                                                </div>
                                                                                @enderror
                                                                            </div>
                                                                            <div class="col-md-2">
                                                                                <label for="phone" class="control-label mb-1">
                                                                                    &nbsp;</label><br>
                                                                                <button type="button" class="btn btn-success btn-lg" onclick="add_phone_more()">
                                                                                    <i class="fas fa-plus"></i> &nbsp;ADD
                                                                                </button>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="form-group col-md-12">
                                                            <label for="simpleFormEmail">About Me</label>
                                                            <textarea class="summernote" name="about_me"></textarea>
                                                        </div>

                                                        <div class="form-group col-md-12">
                                                            <label for="simpleFormEmail">Research Area</label>
                                                            <textarea class="summernote" name="research_area"></textarea>
                                                        </div>

                                                        <div class="form-group col-md-12">
                                                            <label for="simpleFormEmail">Research Interest</label>
                                                            <textarea class="summernote" name="research_interest"></textarea>
                                                        </div>

                                                        <div class="form-group col-md-12">
                                                            <label for="simpleFormEmail">Publication</label>
                                                            <textarea class="summernote" name="publication"></textarea>
                                                        </div>

                                                        <div class="form-group col-md-12">
                                                            <label for="simpleFormEmail">Experience</label>
                                                            <textarea class="summernote" name="experience"></textarea>
                                                        </div>

                                                        <div class="form-group col-md-4">
                                                            <label for="simpleFormEmail">Image</label>
                                                            <input type="file" class="form-control" name="image" id="simpleFormEmail">
                                                            @error('image')
                                                            <span class="text-danger"> {{ $message }}</span>
                                                            @enderror
                                                        </div>

                                                        <div class="form-group col-md-4">
                                                            <label for="simpleFormEmail">Select Type</label>
                                                            <select class="form-select input-height" name="type">
                                                                <option value="1">External</option>
                                                                <option value="2">Internal</option>
                                                            </select>
                                                            @error('type')
                                                            <span class="text-danger"> {{ $message }}</span>
                                                            @enderror
                                                        </div>

                                                        <div class="form-group col-md-4">
                                                            <label for="simpleFormEmail">Leave</label>
                                                            <select class="form-select input-height" name="leave">
                                                                <option value="0">No leave</option>
                                                                <option value="1">Study Leave</option>
                                                                <option value="2">On Leave</option>
                                                            </select>
                                                            @error('leave')
                                                            <span class="text-danger"> {{ $message }}</span>
                                                            @enderror
                                                        </div>

                                                        <div class="form-group col-md-4">
                                                            <label for="simpleFormEmail">Select Department</label>
                                                            <select class="form-select input-height" name="dept_id">
                                                                <option value="">Select...</option>
                                                                @foreach($department as $department)
                                                                    <option value={{ $department->id }}>{{ $department->name }}</option>
                                                                @endforeach
                                                            </select>
                                                            @error('dept_id')
                                                            <span class="text-danger"> {{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                            <label for="simpleFormEmail">Language Faculty</label>
                                                            <select class="form-select input-height" name="school_id">
                                                                     <option value="0">Not Engaged</option>

                                                                    <option value="10000">Is School Faculty</option>

                                                            </select>
                                                            @error('school_id')
                                                            <span class="text-danger"> {{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                            <label for="simpleFormEmail">Status</label>
                                                            <select class="form-select input-height" name="status">
                                                                <option value="1">Active</option>
                                                                <option value="0">Deactivate</option>
                                                            </select>
                                                            @error('status')
                                                            <span class="text-danger"> {{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                            <label for="simpleFormEmail">Parity</label>
                                                            <select class="form-select input-height" name="parity">
                                                                <option>Select Parity</option>
                                                                @foreach([1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47,48,49,50,51,52] as $key =>$sm)
                                                                    <option
                                                                        value="{{$sm}}">Priority: {{$sm}}</option>
                                                                @endforeach
                                                            </select>
                                                            @error('parity')
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
        var loop_count =1;
        function add_more(){
            loop_count++;
            var html ='<div class="card" id="product_attr_'+loop_count+'"><div class="card-body"><div class="form-group"><div class="row">';

            //    html+='<div class="col-md-4"><label for="sku" class="control-label mb-1">Product SKU</label><input id="sku" name="sku[]" type="text" class="form-control" aria-required="true" aria-invalid="false" required>@error("sku")<div class="alert alert-danger">{{ $message }}</div> @enderror</div>';

            html+='<div class="col-md-4"><label for="orginal_price" class="control-label mb-1">Orginal Price</label><input id="orginal_price" name="orginal_price[]" type="text" class="form-control" aria-required="true" aria-invalid="false" required>@error("orginal_price")<div class="alert alert-danger">{{ $message }}</div>@enderror</div>';

            html+='<div class="col-md-4"><label for="offer_price" class="control-label mb-1">Offer Price</label><input id="offer_price" name="offer_price[]" type="text" class="form-control" aria-required="true" aria-invalid="false" >@error("offer_price")<div class="alert alert-danger">{{ $message }}</div>@enderror</div>';


            var weight_html =jQuery('#weight_id').html();
            html+='<div class="col-md-4"><label for="weight_id" class="control-label mb-1">Product Weight</label><select id="weight_id" name="weight_id[]" type="text" class="form-control" aria-required="true" aria-invalid="false" required>'+weight_html+'</select>@error("weight_id")<div class="alert alert-danger">{{ $message }}</div>@enderror</div>';

            var unit_html =jQuery('#unit_id').html();
            html+='<div class="col-md-4"><label for="unit_id" class="control-label mb-1">Product Unit</label><select id="unit_id" name="unit_id[]" type="text" class="form-control" aria-required="true" aria-invalid="false" required>'+unit_html+'</select>@error('unit_id')<div class="alert alert-danger">{{ $message }}</div>@enderror</div>'

            // html+='<div class="col-md-4"><label for="quantity" class="control-label mb-1">Product Quantity</label><input id="quantity" name="quantity[]" type="text" class="form-control" aria-required="true" aria-invalid="false" required>@error("quantity")<div class="alert alert-danger">{{ $message }}</div>@enderror</div>';


            html+='<div class="col-md-4"><label for="discount" class="control-label mb-1">&nbsp;</label><br><button type="button" class="btn btn-danger btn-lg" onclick=remove_more("'+loop_count+'")><i class="fas fa-minus"></i> &nbsp;Remove</button></div>';

            html+='</div></div></div></div>'
            jQuery('#Product_attr_box').append(html);
        }

        function remove_more(loop_count){
            jQuery('#product_attr_'+loop_count).remove();
        }


        var loop_email_count =1;
        function add_email_more(){
            loop_email_count++;

            var html ='<div class="col-md-4 product_email_'+loop_email_count+'"><label for="email" class="control-label mb-1">Email</label><input id="email" type="email" name="email[]" class="form-control" aria-required="true" aria-invalid="false"> @error('images')<div class="alert alert-danger">{{ $message }}</div>@enderror</div>';

            html+='<div class="col-md-2 product_email_'+loop_email_count+'"><label for="discount" class="control-label mb-1">&nbsp;</label><br><button type="button" class="btn btn-danger btn-lg" onclick=remove_emails_more("'+loop_email_count+'")><i class="fas fa-minus"></i> &nbsp;Remove</button></div>';

            jQuery('#Product_email_box').append(html);
        }
        function remove_emails_more(loop_email_count){
            jQuery('.product_email_'+loop_email_count).remove();
        }

        var loop_phone_count =1;
        function add_phone_more(){
            loop_phone_count++;

            var html ='<div class="col-md-4 product_phone_'+loop_phone_count+'"><label for="phone" class="control-label mb-1">Phone</label><input id="phone" type="text" name="phone[]" class="form-control" aria-required="true" aria-invalid="false"> @error('phone')<div class="alert alert-danger">{{ $message }}</div>@enderror</div>';

            html+='<div class="col-md-2 product_phone_'+loop_phone_count+'"><label for="discount" class="control-label mb-1">&nbsp;</label><br><button type="button" class="btn btn-danger btn-lg" onclick=remove_phone_more("'+loop_phone_count+'")><i class="fas fa-minus"></i> &nbsp;Remove</button></div>';

            jQuery('#Product_phone_box').append(html);
        }
        function remove_phone_more(loop_phone_count){
            jQuery('.product_phone_'+loop_phone_count).remove();
        }

        CKEDITOR.replace('short_desc');
        CKEDITOR.replace('description');

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
