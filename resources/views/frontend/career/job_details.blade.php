
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
                    <div class="col-lg-4 col-md-12 order-last">
                        <div class="widget-area">
                            <!-- <div class="search-widget mb-50">
                                <div class="search-wrap">
                                    <input type="search" placeholder="Searching..." name="s" class="search-input" value="">
                                    <button type="submit" value="Search"><i class=" flaticon-search"></i></button>
                                </div>
                            </div> -->
                            <!-- <div class="recent-posts mb-50">
                                <h3 class="widget-title">Recent Posts</h3>
                                <ul>
                                    <li><a href="#">University while the lovely valley team work</a></li>
                                    <li><a href="#">High school program starting soon 2021</a></li>
                                    <li><a href="#">Modern School the lovely valley team work</a></li>
                                    <li><a href="#">While the lovely valley team work</a></li>
                                    <li><a href="#">This is a great source of content for anyone…</a></li>
                                </ul>
                            </div> -->
                            <div class="widget-archives mb-50">
                                <div class="card">
                                    <h5
                                        class="card-header"
                                        style="text-align: center; background: #273c66; color: #ffffff"
                                    >
                                        Job Summary
                                    </h5>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-12 md-pr-15">
                                                <p><b>Published on:</b> {{ \Carbon\Carbon::parse($job->p_date)->isoFormat('DD')}}
                                                    {{ \Carbon\Carbon::parse($job->p_date)->isoFormat('MMM')}}
                                                    {{ \Carbon\Carbon::parse($job->p_date)->isoFormat('YYYY')}}</p>
                                                <p><b>Vacancy:</b> {{ $job->vacation }}</p>
                                                <p><b>Employment Status:</b>
                                                    @if( $job->e_status == 1)
                                                        Full Time
                                                    @else
                                                        Part Time
                                                    @endif
                                                </p>
                                                <p><b>Experience:</b> {{ $job->experience }}</p>
                                                <p><b>Age:</b> {{ $job->age }}</p>
                                                <p><b>Job Location::</b> {{ $job->location }}</p>
                                                <p><b>Application Deadline:</b> {{ \Carbon\Carbon::parse($job->d_date)->isoFormat('DD')}}
                                                    {{ \Carbon\Carbon::parse($job->d_date)->isoFormat('MMM')}}
                                                    {{ \Carbon\Carbon::parse($job->d_date)->isoFormat('YYYY')}}</p>
                                            </div>
                                            <div class="blog-desc mb-20" style="margin: 0 auto;">
                                                <div class="btn-part">
                                                    <a class="readon2 mod" href="{{ url('/job_apply/'.$job->id) }}">Apply Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 pr-50 md-pr-15">
                        <div class="blog-deatails">
                            <!-- <div class="bs-img">
                                <a href="#"><img src="assets/images/blog/inner/1.jpg" alt=""></a>
                            </div> -->
                            <div class="blog-full">
                                <h2 class="title mb-40">{{ $job->j_title }}</h2>
                                <!-- <ul class="single-post-meta">

                                    <li>
                                        <span class="p-date"> <i class="fa fa-calendar-check-o"></i> April 6, 2020 </span>
                                    </li>
                                    <li>
                                        <span class="p-date"> <i class="fa fa-user-o"></i> admin </span>
                                    </li>
                                    <li class="Post-cate">
                                        <div class="tag-line">
                                            <i class="fa fa-book"></i>
                                            <a href="#">Strategy</a>
                                        </div>
                                    </li>
                                    <li class="post-comment"> <i class="fa fa-comments-o"></i> 0</li>
                                </ul> -->

                                <div class="blog-desc mb-20">
                                    <p ><b>Vacancy</b></p>
                                    <p>{{ $job->vacation }}</p>
                                </div>
                                <div class="blog-desc mb-20">
                                    <p ><b>Employment Status</b></p>
                                    <p> @if( $job->e_status == 1)
                                            Full Time
                                        @else
                                            Part Time
                                        @endif </p>
                                </div>
                                <div class="blog-desc mb-20">
                                    <p ><b>Educational Requirements</b></p>
                                    {!! $job->e_requirement !!}
                                </div>
                                <div class="blog-desc mb-20">
                                    <p ><b>Experience Requirements </b></p>
                                    <ul class="unorder-list mb-20">
                                        <li>{{ $job->experience }}</li>

                                    </ul>
                                </div>

                                <div class="blog-desc mb-20">
                                    <p ><b>Job Location</b></p>
                                    <p>{{ $job->location }}</p>
                                </div>

                                <div class="blog-desc mb-20">
                                    <p ><b>Salary</b></p>
                                    {!! $job->salary !!}
                                </div>


                                <div class="blog-desc mb-20">
                                   {!! $job->description !!}
                                </div>



                                <div class="row"  style="margin: 0 auto;">
                                    <div class="col-md-12 mb-20">
                                        <div class="btn-part">
                                            <a class="readon2 mod" href="{{ url('/job_apply/'.$job->id) }}">Apply Now</a>
                                        </div>
                                    </div>
                                </div>

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
