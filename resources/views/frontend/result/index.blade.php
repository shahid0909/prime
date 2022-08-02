
@extends('frontend.layout.master')


 @section('header')
         @include('frontend.layout.partials.header')
    @endsection

@section('content')

    <!-- Main content Start -->
    <div class="main-content">
        <!-- Breadcrumbs Start -->

        <!-- Breadcrumbs End -->
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @elseif(session()->has('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
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
                                <form method="post" action="{{ route('result_show.store') }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label >Student Id</label>
                                        <input type="text" class="form-control" name="s_id" placeholder="Enter Your ID" required>
                                        @error('s_id')
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
