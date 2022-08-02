
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
                                <form method="post" action="{{ route('job_apply.store') }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Name</label>
                                         <input type="text" class="form-control" name="name" placeholder="Enter Your Name">
                                        <input type="hidden" class="form-control" name="job_id" value="{{ $job->id }}">
                                        @error('name')
                                        <span class="text-danger"> {{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Phone Number</label>
                                        <input type="Number" class="form-control" name="phone" placeholder="Enter Yout Phone Number">
                                        @error('phone')
                                        <span class="text-danger"> {{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email address</label>
                                        <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                        @error('email')
                                        <span class="text-danger"> {{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Birth Date</label>
                                        <input type="date" class="form-control" id="exampleInputEmail1" name="date">
                                        @error('date')
                                        <span class="text-danger"> {{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Upload Your CV</label>
                                        <input type="file" class="form-control" name="upload_file" >
                                        @error('upload_file')
                                        <span class="text-danger"> {{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Your Picture</label>
                                        <input type="file" class="form-control" id="exampleInputEmail1" name="image" >
                                        @error('image')
                                        <span class="text-danger"> {{ $message }}</span>
                                        @enderror
                                    </div>

                                    <button type="submit" class="btn btn-primary">Submit</button>
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
