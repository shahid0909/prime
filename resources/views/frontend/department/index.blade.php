@extends('frontend.department.master')

@section('header')

    @include('frontend.department.layout.partials.header')

@endsection

@section('content')

    <!-- Main content Start -->
    <div class="main-content">
        <!-- Slider Section Start -->
        <div class="rs-slider style1">
            <div
                class="rs-carousel owl-carousel"
                data-loop="true"
                data-items="1"
                data-margin="0"
                data-autoplay="true"
                data-hoverpause="true"
                data-autoplay-timeout="3000"
                data-smart-speed="700"
                data-dots="false"
                data-nav="false"
                data-nav-speed="false"
                data-center-mode="false"
                data-mobile-device="1"
                data-mobile-device-nav="false"
                data-mobile-device-dots="false"
                data-ipad-device="1"
                data-ipad-device-nav="false"
                data-ipad-device-dots="false"
                data-ipad-device2="1"
                data-ipad-device-nav2="true"
                data-ipad-device-dots2="false"
                data-md-device="1"
                data-md-device-nav="true"
                data-md-device-dots="false"
            >

            @foreach($slider as $slider)
                <div class="slider-content slide2">
                    <img src="{{ asset($slider->image) }}" alt="" />
                </div>
                @endforeach


            </div>
        </div>
        <!-- Slider Section End -->


        <!-- About Section Start -->
        <div
            id="rs-about"
            class="rs-about style1 pb-100 pt-100 md-pb-70 md-pt-70"
        >
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 order-last">
                        <div class="notice-bord style1">
                            <h4 class="title">Notice Board</h4>
                            <ul>
                                @foreach( $notice as $notice )

                                <li
                                    class="wow fadeInUp"
                                    data-wow-delay="300ms"
                                    data-wow-duration="2000ms"
                                >
                                    <div class="date" style="color: #ed4278;"><span>{{ \Carbon\Carbon::parse($notice->date)->isoFormat('DD')}}</span>{{ \Carbon\Carbon::parse($notice->date)->isoFormat('MMM')}}</div>
                                    <div class="desc">
                                        {{ $notice->title }}
                                    </div>
                                </li>

                                    @endforeach

                            </ul>
                            <div
                                class="btn-part mt-55 md-mt-25 wow fadeInUp"
                                data-wow-delay="100ms"
                                data-wow-duration="2000ms"
                            >
                                <a href="{{ url('/department/dept_notice/'.$department->id) }}">View All</a>
                            </div>
                        </div>
                    </div>
                    @foreach($dept_head_massage as $dept_head_massages)
                    <div class="col-lg-8 pr-50 md-pr-15">
                        <a >
                            <div class="about-part">
                                <div class="sec-title mb-40">
                                    <h2
                                        class="title wow fadeInUp"
                                        data-wow-delay="400ms"
                                        data-wow-duration="2000ms"
                                        style="font-size: 30px"
                                    >
                                        Message From Head of the Department
                                    </h2>
                                    <div
                                        class="desc wow fadeInUp"
                                        data-wow-delay="500ms"
                                        data-wow-duration="2000ms"
                                    >
                                        {!! $dept_head_massages->long_massage !!}
                                    </div>
                                </div>
                                <div
                                    class="sign-part wow fadeInUp"
                                    data-wow-delay="600ms"
                                    data-wow-duration="2000ms"
                                >
                                    <div class="img-part" style="float: left">
                                        <img
                                            src="{{ asset( $dept_head_massages->image) }}"
                                            alt="CEO Image"
                                            style="height: 150px"
                                        />
                                    </div>
                                    <div class="author-part" style="float: right">
{{--                      <span class="sign mb-10"--}}
{{--                      ><img src="{{ asset('assets/images/about/sign.png') }}" alt="Sign"--}}
{{--                          /></span>--}}
                                        <span class="post">{{ $dept_head_massages->m_name }}</span>
                                        <span class="post">Head Of Department</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
        <!-- About Section End -->

        @foreach( $visionmission as $vision_mission )

        <!-- About2 Section Start -->
        <div class="rs-about style1 pt-100 pb-100 md-pt-70 md-pb-70 bg2">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 padding-0 md-pl-15 md-pr-15 md-mb-30">
                        <div class="img-part">
                            <img
                                class=""
                                src="{{ asset($vision_mission->image) }}"
                                alt="About Image"
                            />
                        </div>
                        <ul class="nav nav-tabs histort-part" id="myTab" role="tablist">
                            <li class="nav-item tab-btns single-history">
                                <a
                                    class="nav-link tab-btn active"
                                    id="about-history-tab"
                                    data-toggle="tab"
                                    href="#about-history"
                                    role="tab"
                                    aria-controls="about-history"
                                    aria-selected="true"
                                ><span class="icon-part"
                                    ><i class="flaticon-banknote"></i></span
                                    >VISION</a
                                >
                            </li>
                            <li class="nav-item tab-btns single-history last-item">
                                <a
                                    class="nav-link tab-btn"
                                    id="about-admin-tab"
                                    data-toggle="tab"
                                    href="#about-admin"
                                    role="tab"
                                    aria-controls="about-admin"
                                    aria-selected="false"
                                ><span class="icon-part"
                                    ><i class="flaticon-analysis"></i></span
                                    >Mission</a
                                >
                            </li>
                        </ul>
                    </div>
                    <div class="offset-lg-1"></div>
                    <div class="col-lg-5">
                        <div class="tab-content tabs-content" id="myTabContent">
                            <div
                                class="tab-pane tab fade show active"
                                id="about-history"
                                role="tabpanel"
                                aria-labelledby="about-history-tab"
                            >
                                <div class="sec-title mb-25">
                                    <h2 class="title">VISION</h2>
                                    <div class="desc">
                                        {!! $vision_mission->vision_description !!}
                                    </div>
                                </div>
                                <!-- <div class="tab-img">
                                        <img class="" src="assets/images/about/Meeting.jpg" alt="Tab Image">
                                    </div> -->
                            </div>
                            <div
                                class="tab-pane fade"
                                id="about-admin"
                                role="tabpanel"
                                aria-labelledby="about-admin-tab"
                            >
                                <div class="sec-title mb-25">
                                    <h2 class="title">MISSION</h2>
                                    <div class="desc">
                                        {!! $vision_mission->mission_description !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Intro Info Tabs-->
                <div class="intro-info-tabs"></div>
            </div>
        </div>
        <!-- About Section End -->

        @endforeach

        <!-- Section Eventes bg Wrap 2 start -->
        <div class="bg2">
            <!-- Blog Section Start -->
            <div id="rs-blog" class="rs-blog style1 pt-20 pb-30 md-pt-20 md-pb-30">
                <div class="container">
                    <div class="sec-title mb-60 md-mb-30 text-center">
                        <h2 class="title mb-0">Departmental Events</h2>
                    </div>
                    <div class="row">
                        <div class="col-lg-8 col-md-12" style="margin: 0 auto">

                            @foreach( $events as $event)
                            <div
                                class="row align-items-center no-gutter white-bg blog-item wow fadeInUp"
                                data-wow-delay="500ms"
                                data-wow-duration="2000ms"
                            >
                                <div class="col-md-3">
                                    <div class="image-part">
                                        <a href="#"
                                        ><img src="{{ asset($event->image) }}" alt="" />
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <div class="blog-content">
                                        <ul class="blog-meta">
                                            <li><i class="fa fa-calendar"></i>{{ \Carbon\Carbon::parse($event->date)->isoFormat('Do MMM, YYYY')}}</li>
                                            <li>
                                                <i class="fa fa-map-marker"></i>
                                                {{ $event->place }}
                                            </li>
                                        </ul>
                                        <h3 class="title">
                                            <a href="#">{{ $event->title }}</a>
                                        </h3>
                                        <div class="btn-part">
                                            <!--<a class="readon-arrow" href="#">Read More</a>-->
                                        </div>
                                    </div>
                                </div>
                            </div>

                                @endforeach

                        </div>
                    </div>
                </div>
            </div>
            <!-- Blog Section End -->
        </div>
        <!-- Section bg Wrap 2 End -->

        <!-- Gallery Section Start -->
        <div class="rs-gallery home11-style pb-100 pt-100 md-pb-70">
            <div class="container">
                <div class="sec-title mb-60 md-mb-30 text-center">
                    <h2 class="title mb-0">FACILITIES</h2>
                </div>
                <div class="row">

                    @foreach( $facilities as $facilities)

                        @if($facilities->status == 1 )
                                <div class="col-lg-12 pt-20 pb-20 md-mb-30" style="box-shadow: 0px 0px 5px 0px #ccc; border-radius: 10px; margin-bottom: 10px;">
                                    <div class="gallery-part">
                                        <div class="gallery-img">
                                            <div class="row">
                                                <div class="col-md-4"><img src="{{ asset( $facilities->image ) }}" alt="image-{{ $facilities->title }}" /></div>
                                                <div class="col-md-8">
                                                    <h2 class="title-part">{{ $facilities->title }}</h2>
                                                    <p>
                                                        {!! $facilities->description !!}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        @endif

                    @endforeach

                </div>
            </div>
        </div>

        <!-- Testiominals Section Start -->
        <!--<div class="rs-testimonial style3 pt-100 pb-100 md-pt-70 md-pb-70">-->
        <!--    <div class="container">-->
        <!--        <div class="sec-title2 text-center mb-50">-->
                    <!-- <div class="sub-title">Student Reviews</div> -->
        <!--            <h2 class="title">Departmental Notable Alumni</h2>-->
        <!--        </div>-->
        <!--        <div-->
        <!--            class="rs-carousel owl-carousel"-->
        <!--            data-loop="true"-->
        <!--            data-items="2"-->
        <!--            data-margin="30"-->
        <!--            data-autoplay="true"-->
        <!--            data-hoverpause="true"-->
        <!--            data-autoplay-timeout="5000"-->
        <!--            data-smart-speed="800"-->
        <!--            data-dots="true"-->
        <!--            data-nav="false"-->
        <!--            data-nav-speed="false"-->
        <!--            data-center-mode="false"-->
        <!--            data-mobile-device="1"-->
        <!--            data-mobile-device-nav="false"-->
        <!--            data-mobile-device-dots="false"-->
        <!--            data-ipad-device="2"-->
        <!--            data-ipad-device-nav="false"-->
        <!--            data-ipad-device-dots="false"-->
        <!--            data-ipad-device2="1"-->
        <!--            data-ipad-device-nav2="false"-->
        <!--            data-ipad-device-dots2="false"-->
        <!--            data-md-device="2"-->
        <!--            data-md-device-nav="false"-->
        <!--            data-md-device-dots="true"-->
        <!--        >-->
        <!--            @foreach( $dept_alumni as $dept_alum)-->
        <!--            <div class="testi-item">-->

        <!--                <div class="row y-middle no-gutter">-->
        <!--                    <div class="col-md-4">-->
        <!--                        <div class="user-info">-->
        <!--                            <img src="{{ asset($dept_alum->image) }}" alt="" />-->
        <!--                            <h4 class="name">{{ $dept_alum->title }}</h4>-->
        <!--                            <span class="designation">{{ $dept_alum->designation }}</span>-->
        <!--                        </div>-->
        <!--                    </div>-->
        <!--                    <div class="col-md-8">-->
        <!--                        <div class="desc">-->
        <!--                            {{ $dept_alum->description }}-->
        <!--                        </div>-->
        <!--                    </div>-->
        <!--                </div>-->

        <!--            </div>-->
        <!--            @endforeach-->
        <!--        </div>-->
        <!--    </div>-->
        <!--</div>-->
        <!-- Testiominals Section End -->
        
        <!-- Testiominals Section Start -->
            <div class="rs-testimonial style3 pt-100 pb-100 md-pt-70 md-pb-70">
                <div class="container">
                    <div class="sec-title2 text-center mb-50">
                        <!-- <div class="sub-title">Student Reviews</div> -->
                        <h2 class="title">Departmental Notable Alumni</h2>
                        <!--<p>Our Alumini are our pride as they are engaged in building the world through the nationals and internationals contribution</p>-->
                    </div>
                    <div
                        class="rs-carousel owl-carousel"
                        data-loop="true"
                        data-items="2"
                        data-margin="30"
                        data-autoplay="true"
                        data-hoverpause="true"
                        data-autoplay-timeout="3000"
                        data-smart-speed="700"
                        data-dots="true"
                        data-nav="ture"
                        data-nav-speed="true"
                        data-center-mode="false"
                        data-mobile-device="2"
                        data-mobile-device-nav="false"
                        data-mobile-device-dots="false"
                        data-ipad-device="3"
                        data-ipad-device-nav="false"
                        data-ipad-device-dots="false"
                        data-ipad-device2="3"
                        data-ipad-device-nav2="false"
                        data-ipad-device-dots2="false"
                        data-md-device="4"
                        data-md-device-nav="true"
                        data-md-device-dots="true"
                    >

                        @foreach( $dept_alumni as $dept_alum)
                        <div class="testi-item">
                            <div class="row y-middle no-gutter">
                                <div class="col-md-12">
                                    <div class="user-info">
                                        <img src="{{ asset($dept_alum->image) }}" alt="" />
                                        <h4 class="name">{{ $dept_alum->title }}</h4>
                                        <span class="designation">{{ $dept_alum->designation }}</span>
                                    </div>
                                </div>
                              
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <!-- Testiominals Section End -->

        <!-- CLUB Section Start -->
        <div class="rs-gallery home11-style pb-100 pt-50 md-pb-70">
            <div class="container">
                <h3 style="text-align: center">CLUBS</h3>
                <div class="row">

                    @foreach( $clubs as $clubs )

                    <div class="col-lg-4 pt-20 pb-20 md-mb-30">
                        <a href="{{ url('/department/clubs/all/'.$department->id) }}">
                            <div class="gallery-part">
                                <div class="gallery-img">
                                    <img
                                        src="{{ asset( $clubs->image ) }}"
                                        alt=""
                                    />
                                    <div class="content-part">
                                        <h2 class="title">{{ $clubs->title }}</h2>
                                    </div>
                                    <div class="gallery-info">
                                        <h2 class="title-part">{{ $clubs->title }}</h2>
                                        <!-- <p>
                                          Building a Programing Club takes time and effort, but is
                                          not very difficult once you have everything in one place.
                                          With a little work, you can build a low-cost computer lab
                                          out of old donated computers. Once you have determined the
                                          ideal
                                        </p> -->
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                        @endforeach

                </div>
                <div
                    class="btn-part mt-55 md-mt-25 wow fadeInUp"
                    data-wow-delay="600ms"
                    data-wow-duration="2000ms"
                >
                   <a href="{{ url('/department/clubs/all/'.$department->id) }}">View All</a>
                </div>
            </div>
        </div>
        <!-- CLUB  Section Start -->

        <!-- Section Gray bg Wrap start -->
        <div class="gray-bg">
            <!-- Blog Section Start -->
            <div id="rs-blog" class="rs-blog style2 pt-94 pb-100 md-pt-64 md-pb-70">
                <div class="container">
                    <div class="sec-title mb-60 text-center">
                        <h2 class="title mb-0">Departmental News & Media</h2>
                    </div>
                    <div
                        class="rs-carousel owl-carousel"
                        data-loop="true"
                        data-items="4"
                        data-margin="30"
                        data-autoplay="true"
                        data-hoverpause="true"
                        data-autoplay-timeout="5000"
                        data-smart-speed="800"
                        data-dots="true"
                        data-nav="false"
                        data-nav-speed="true"
                        data-center-mode="true"
                        data-mobile-device="1"
                        data-mobile-device-nav="true"
                        data-mobile-device-dots="false"
                        data-ipad-device="2"
                        data-ipad-device-nav="true"
                        data-ipad-device-dots="false"
                        data-ipad-device2="1"
                        data-ipad-device-nav2="true"
                        data-ipad-device-dots2="false"
                        data-md-device="4"
                        data-md-device-nav="true"
                        data-md-device-dots="false"
                    >

                        @foreach($dept_news as $dept_new)
                        <div class="blog-item">
                            <div class="image-part">
                                <img
                                    src="{{ asset( $dept_new->image) }}"
                                    alt=""
                                    style="height: 185px; width: 100%"
                                />
                            </div>
                            <div class="blog-content new-style">
                                <ul class="blog-meta">
                                    <li><i class="fa fa-calendar"></i>{{ \Carbon\Carbon::parse($dept_new->date)->isoFormat('MMM Do, YYYY')}}</li>
                                </ul>
                                <h3 class="title">
                                    <a href="{{ url('/department_news_media/'.$dept_new->id.'/'.$department->id) }}"
                                    >{{ $dept_new->title }}</a
                                    >
                                </h3>
                                <ul class="blog-bottom">
                                    <li class="btn-part">
                                        <a class="readon-arrow" href="{{ url('/department_news_media/'.$dept_new->id.'/'.$department->id) }}">Read More</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <!-- Blog Section End -->


            <!-- Section bg Wrap 2 End -->
        </div>
    </div>
    <!-- Main content End -->


@endsection

@section('address')

    <!-- Newsletter section start -->
    <div class="rs-newsletter style1 mb--124 sm-mb-0 sm-pb-70">
        <div class="container">
            <div class="newsletter-wrap">
                @foreach( $dept_addr as $dept_add)
                <div class="row y-middle">
                    <div class="col-md-4 sm-mb-30">
                        <div class="sec-title">
                            <div class="sub-title white-color">Address</div>
                            <p class="title mb-0 white-color">
                               {!!  $dept_add->address !!}
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 border-left">
                        <div class="sec-title">
                            <div class="sub-title white-color">Phone Number</div>
                            <p class="title mb-0 white-color">
                                {!!  $dept_add->phone_number !!}
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 border-left">
                        <div class="sec-title">
                            <div class="sub-title white-color">Email</div>
                            <p class="title mb-0 white-color">
                                {!!  $dept_add->email !!}
                            </p>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>
    <!-- Newsletter section end -->

@endsection