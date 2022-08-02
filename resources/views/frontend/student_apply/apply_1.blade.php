
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
                                <form method="post" action="{{ route('student_apply.store_5') }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Name</label>
                                         <input type="text" class="form-control" name="s_name" placeholder="Enter Your Name" required>
                                        @error('name')
                                        <span class="text-danger"> {{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Father Name</label>
                                        <input type="text" class="form-control" name="f_name" placeholder="Enter Your Father Name" required>
                                        @error('f_name')
                                        <span class="text-danger"> {{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label >Mother Name</label>
                                        <input type="text" class="form-control" name="m_name" placeholder="Enter Your Mother Name" required>
                                        @error('m_name')
                                        <span class="text-danger"> {{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Birth Date</label>
                                        <input type="date" class="form-control" id="exampleInputEmail1" name="b_date" required>
                                        @error('b_date')
                                        <span class="text-danger"> {{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Gender</label>
                                        <select class="form-control" name="gender">
                                            <option value="1">MAil</option>
                                            <option value="2">female</option>
                                            <option value="2">Other</option>
                                        </select>
                                        @error('gender')
                                        <span class="text-danger"> {{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label >Nationality</label>
                                        <input type="text" class="form-control" name="nationality" placeholder="Enter Nationality" required>
                                        @error('nationality')
                                        <span class="text-danger"> {{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Phone Number</label>
                                        <input type="number" class="form-control" id="exampleInputEmail1" name="phone" placeholder="Enter Phone Number" required>
                                        @error('phone')
                                        <span class="text-danger"> {{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="Enter your email" required>
                                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                        @error('email')
                                        <span class="text-danger"> {{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Freddom Fighter</label>
                                        <select class="form-control" name="freedom_fighter">
                                            <option value="1">No</option>
                                            <option value="2">Yes</option>
                                        </select>
                                        @error('freedom_fighter')
                                        <span class="text-danger"> {{ $message }}</span>
                                        @enderror
                                    </div>


                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Poor</label>
                                        <select class="form-control" name="poor">
                                            <option value="1">No</option>
                                            <option value="2">Yes</option>
                                        </select>
                                        @error('poor')
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
