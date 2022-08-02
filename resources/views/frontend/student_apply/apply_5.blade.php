
@extends('frontend.layout.master')


 @section('header')
         @include('frontend.layout.partials.header')
    @endsection

@section('content')

    <!-- Main content Start -->
    <div class="main-content">
        <!-- Breadcrumbs Start -->
        <!-- <div class="rs-breadcrumbs breadcrumbs-overlay">
            <div class="breadcrumbs-img">
                <img src="assets/images/breadcrumbs/2.jpg" alt="Breadcrumbs Image">
            </div>
            <div class="breadcrumbs-text white-color">
                <h1 class="page-title">Blog Post Right</h1>
                <ul>
                    <li>
                        <a class="active" href="index.html">Home</a>
                    </li>
                    <li>Blog Post Right</li>
                </ul>
            </div>
        </div> -->
        <!-- Breadcrumbs End -->

        @if (session('status'))
            <div class="alert alert-success text-center" role="alert">
                {{ session('status') }}
            </div>
    @endif

        <!-- Blog Section Start -->
        <div class="rs-inner-blog orange-color pt-100 pb-100 md-pt-70 md-pb-70">
            <div class="container">
                <div class="row">

                    <div class="col-lg-8 pr-50 md-pr-15">
                        <div class="blog-deatails">
                            <!-- <div class="bs-img">
                                <a href="#"><img src="assets/images/blog/inner/1.jpg" alt=""></a>
                            </div> -->



                            <div class="blog-full">
                                <form method="post" action="{{ route('student_apply.store_1') }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Faculty</label>
                                        <select class="form-control" id="faculty_id" name="faculty_id">

                                            <option value="">Select Faculty</option>
                                            @foreach($faculty as $facultys)
                                            <option value="{{ $facultys->id }}">{{ $facultys->name }}</option>
                                                @endforeach

                                        </select>
                                        @error('faculty')
                                        <span class="text-danger"> {{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label >Department</label>
                                        <select class="form-control" id="depart_id" name="dept_id">
                                            <option value="">Select State</option>
                                        </select>
                                        @error('depart_id')
                                        <span class="text-danger"> {{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label >Program</label>
                                        <select class="form-control" id="program_id" name="program_id">
                                            <option value="">Select State</option>
                                        </select>
                                        @error('program_id')
                                        <span class="text-danger"> {{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Session</label>
                                        <select class="form-control" name="session_id">

                                            <option value="">Select Session</option>
                                            @foreach($session as $sessions)
                                            <option value="{{ $sessions->id }}">{{ $sessions->startsession }}</option>
                                                @endforeach
                                        </select>
                                        @error('session_id')
                                        <span class="text-danger"> {{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Shift</label>
                                        <select class="form-control" name="shift">
                                            <option value="1">Day</option>
                                            <option value="2">Night</option>
                                            <option value="3">Evening</option>
                                        </select>
                                        @error('shift')
                                        <span class="text-danger"> {{ $message }}</span>
                                        @enderror
                                    </div>

                                    <button type="submit" class="btn btn-primary">Next</button>

                                </form>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Blog Section End -->

        <!-- Newsletter section start -->
        <div class="rs-newsletter style1 mb--124 sm-mb-0 sm-pb-70">
            <div class="container">
                <div class="newsletter-wrap">
                    @foreach($home_addr as $home_addrs)
                        <div class="row y-middle">
                            <div class="col-md-4 sm-mb-30">
                                <div class="sec-title">
                                    <div class="sub-title white-color">Address</div>
                                    <p class="title mb-0 white-color">
                                        {!! $home_addrs->address !!}
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-4 border-left">
                                <div class="sec-title">
                                    <div class="sub-title white-color">Phone Number</div>
                                    <p class="title mb-0 white-color">
                                        {!! $home_addrs->phone_number !!}
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-4 border-left">
                                <div class="sec-title">
                                    <div class="sub-title white-color">Email</div>
                                    <p class="title mb-0 white-color">
                                        {!! $home_addrs->email !!}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <!-- Newsletter section end -->
        </div>
        <!-- Section bg Wrap 2 End -->
    </div>
    <!-- Main content End -->

@endsection


@section('footer_script')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" ></script>


    <script>
        jQuery(document).ready(function(){
            jQuery('#faculty_id').change(function(){

                let cid=jQuery(this).val();

                jQuery('#program_id').html('<option value="">Select Program</option>')
                jQuery.ajax({
                    url:'/getDepartment',
                    type:'post',
                    data:'cid='+cid+'&_token={{csrf_token()}}',
                    success:function(result){
                        jQuery('#depart_id').html(result)
                    }
                });
            });

            jQuery('#depart_id').change(function(){

                let did=jQuery(this).val();

                jQuery.ajax({
                    url:'/getProgram',
                    type:'post',
                    data:'did='+did+'&_token={{csrf_token()}}',
                    success:function(result){
                        jQuery('#program_id').html(result)
                    }
                });
            });



        });
    </script>

    @endsection
