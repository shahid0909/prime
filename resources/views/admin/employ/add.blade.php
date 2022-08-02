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
                            <div class="page-title">Add Employ</div>
                        </div>
                        <ol class="breadcrumb page-breadcrumb pull-right">
                            <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                                                                   href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                            </li>
                            <li><a class="parent-item" href="#">Settings</a>&nbsp;<i class="fa fa-angle-right"></i>
                            </li>
                            <li class="active">Add Employee</li>
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
                                                    <header>Add Employee</header>
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

                                                    <form method="post" action="{{ route('employ.store') }}" enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="form-group">
                                                            <div class="form-group col-md-4">
                                                                <label for="simpleFormEmail">Name</label>
                                                                <input type="Text" class="form-control" name="e_name" id="simpleFormEmail"
                                                                       placeholder="Employee Name">
                                                                @error('e_name')
                                                                <span class="text-danger"> {{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                            <div class="form-group col-md-4">
                                                                <label for="simpleFormEmail">Image</label>
                                                                <input type="file" class="form-control" name="image">
                                                                @error('image')
                                                                <span class="text-danger"> {{ $message }}</span>
                                                                @enderror
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
                                                                                    <input id="phone" type="text" name="number[]" class="form-control" aria-required="true" aria-invalid="false">
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

                                                            <div class="form-group col-md-4">
                                                                <label for="simpleFormEmail">Select Designation</label>
                                                                <select class="form-select input-height" name="e_designation">
                                                                    <option value="">Select...</option>
                                                                    @foreach($designation as $designations)
                                                                        <option value={{ $designations->id }}>{{ $designations->designation }}</option>
                                                                    @endforeach
                                                                </select>
                                                                @error('e_designation')
                                                                <span class="text-danger"> {{ $message }}</span>
                                                                @enderror
                                                            </div>

                                                            <div class="form-group col-md-4">
                                                                <label for="simpleFormEmail">Select Administrator</label>
                                                                <select class="form-select input-height" name="administrators_id">
                                                                    <option value="">Select...</option>
                                                                    @foreach($administrator as $administrators)
                                                                        <option value={{ $administrators->id }}>{{ $administrators->o_name }}</option>
                                                                    @endforeach
                                                                </select>
                                                                @error('administrators_id')
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

                                                            <div class="form-group col-md-12">
                                                                <label for="simpleFormEmail">About</label>
                                                                <textarea class="summernote" name="about"></textarea>
                                                                @error('about')
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
        <script>
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

                var html ='<div class="col-md-4 product_phone_'+loop_phone_count+'"><label for="phone" class="control-label mb-1">Phone</label><input id="phone" type="text" name="number[]" class="form-control" aria-required="true" aria-invalid="false"> @error('phone')<div class="alert alert-danger">{{ $message }}</div>@enderror</div>';

                html+='<div class="col-md-2 product_phone_'+loop_phone_count+'"><label for="discount" class="control-label mb-1">&nbsp;</label><br><button type="button" class="btn btn-danger btn-lg" onclick=remove_phone_more("'+loop_phone_count+'")><i class="fas fa-minus"></i> &nbsp;Remove</button></div>';

                jQuery('#Product_phone_box').append(html);
            }
            function remove_phone_more(loop_phone_count){
                jQuery('.product_phone_'+loop_phone_count).remove();
            }
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
