
    @extends('frontend.layout.master')


    @section('header')
         @include('frontend.layout.partials.header')
    @endsection

    @section('content')
        <div class="main-content">
            <!-- Slider Section Start -->
            <div class="row align-items-center">
                <div class="col-lg-8 col-md-12 md-mb-30">
                    <div class="rs-slider style1" style="margin: 20px 0px">
                        <!-- min-height: 400px; -->
                        <div
                            class="rs-carousel owl-carousel fadeOut"
                            data-loop="true"
                            data-items="1"
                            data-margin="0"
                            data-autoplay="true"
                            data-hoverpause="true"
                            data-autoplay-timeout="3000"
                            data-smart-speed="700"
                            data-dots="false"
                            data-nav="true"
                            data-nav-speed="true"
                            data-center-mode="true"
                            data-mobile-device="1"
                            data-mobile-device-nav="true"
                            data-mobile-device-dots="false"
                            data-ipad-device="1"
                            data-ipad-device-nav="true"
                            data-ipad-device-dots="false"
                            data-ipad-device2="1"
                            data-ipad-device-nav2="true"
                            data-ipad-device-dots2="false"
                            data-md-device="1"
                            data-md-device-nav="true"
                            data-md-device-dots="false"
                        >

                            @foreach($home_slider as $home_sliders)
                            <div class="slider-content">
                                <img
                                    src="{{ $home_sliders->image }}"
                                    alt=""
                                    style="width: 80%; height: 450px; margin: 0 auto"
                                />
                            </div>
                                @endforeach

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    @foreach($admission_promotions as $admission_promotion)
                    <img
                        src="{{ $admission_promotion->image }}"
                        alt=""
                        style="height: 500px; padding: 20px"
                    />
                        @endforeach
                </div>
            </div>
            <!-- Slider Section End -->

            <!-- Bracking News Section Start -->
            <section class="brackingnews my-2" style="padding: 0px; margin: 0px">
                <div class="news">
                    <div class="row news-read">
                        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 tag" style="
                            color:#000000;
                            text-align: center;
                            background-color: #CAE4FB;
                            padding: 8px 20px;
                            border-radius: 5px;
                            font-size: 17px;
                            font-weight: bold;
                          ">
                            Top News
                        </div>

                        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10 news">
                            <marquee
                                onmouseover="this.stop();"
                                onmouseout="this.start();"
                                style="color: white; font-size: 17px; padding-top: 12px"
                            >
                                @foreach($breaking_news as $breaking_newss)
                                <a
                                    href="{{ url($breaking_newss->file) }}"
                                    style="color: white; font-size: 18px; font-weight: bold"
                                    download
                                >
                                   {{ $breaking_newss->b_title }}
                                </a>
                                @endforeach
                            </marquee>
                        </div>

                        <!-- <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 search-B">
                                  <div class="input-group p-1">
                                      <input class="form-control border-secondary py-2" type="search" placeholder="Find Program">
                                      <div class="input-group-append">
                                          <button class="btn btn-outline-secondary" type="button" style="border-color:#ffffff">
                                              <i class="fa fa-search" style="color:#ffffff;"></i>
                                          </button>
                                      </div>
                                  </div>
                              </div> -->
                    </div>
                </div>
            </section>
            <!-- Bracking News Section end -->

            <!-- About Section Start -->
            <div id="rs-about" class="rs-about style2 pt-30 pb-30 md-pt-10 md-pb-10">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 md-mb-50">
                            <div class="about-intro" style="padding: 20px 20px 20px !important;">
                                <div
                                    class="sec-title mb-40 wow fadeInUp"
                                    data-wow-delay="300ms"
                                    data-wow-duration="2000ms"
                                >
                                    <!-- <div class="sub-title primary">About US</div> -->
                                    <h2 class="title mb-21" style="color: #13CF19">
                                        Welcome to Prime University
                                    </h2>
                                    <div class="desc big white-color">
                                        Prime University is one of the leading private Universities
                                        of the country. A group of educationists and philanthropists
                                        has established this institute of higher studies with an aim
                                        to create knowledge based society in the year 2002. The
                                        University grants Commissions and the Government of the
                                        People's Republic of Bangladesh accorded permission to
                                        establish this magnificent institute.
                                    </div>
                                </div>
                                <!-- <div
                                  class="btn-part wow fadeInUp"
                                  data-wow-delay="400ms"
                                  data-wow-duration="2000ms"
                                >
                                  <a class="readon2" href="#">Read More</a>
                                </div> -->
                            </div>
                        </div>
                        <div class="col-lg-12" style="margin: 0px;padding:0px">
                            <div class="row grid-area" style="margin:0px">
                                <div class="col-md-6">
                                    @foreach($chair as $chairman)
                                    <div class="rs-categories style2 pt-10 pb-10 md-pt-70 md-pb-70">
                                        <!-- Cta Section Start -->
                                        <div class="rs-cta home-style14" style="max-width: 100% !important; background: linear-gradient( 90deg, #9c27b0 8%, #e91e63 83%, #ff5722 100% );padding:10px 30px 10px 30px;">
                                            <div class="container">
                                                <div class="row align-items-center">
                                                    <div class="col-lg-8 col-md-12 md-mb-30">
                                                        <div class="content-part">
                                                            <h2 class="title" style="color:#fff">
                                                               Message From The Honorable Chairman, BOT
                                                            </h2>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-12">
                                                        <div class="btn-part text-right">
                                                            <a class="readon2 cta-btn" href="{{ url('/chairman') }}">View</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>                
                                
                                <div class="col-md-6 sm-mb-30">
                                    @foreach($massage_vc as $massage_vcs)
                                    <div class="rs-categories style2 pt-10 pb-10 md-pt-10 md-pb-10">
                                        <!-- Cta Section Start -->
                                        <div class="rs-cta home-style14" style="max-width: 100% !important; background: linear-gradient( 90deg, #009688 8%, #cddc39 83%, #8bc34a 100% );padding:10px 30px 10px 30px;">
                                            <div class="container">
                                                <div class="row align-items-center">
                                                    <div class="col-lg-8 col-md-12 md-mb-30">
                                                        <div class="content-part">
                                                            <h2 class="title" style="color:#fff">
                                                               Message From The Honorable Vice Chancellor
                                                            </h2>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-12">
                                                        <div class="btn-part text-right">
                                                            <a class="readon2 cta-btn" href="{{ url('/vice_chanchelor') }}">View</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- About Section End -->

            <!-- Degree Section Start -->
            <div
                class="rs-degree style1 modify gray-bg pt-100 pb-70 md-pt-70 md-pb-40"
            >
                <div class="container">
                    <div class="row y-middle">
                        <div class="col-lg-4 col-md-6 mb-30">
                            <div
                                class="sec-title wow fadeInUp"
                                data-wow-delay="300ms"
                                data-wow-duration="2000ms"
                            >
                                <div class="sub-title primary">Academics</div>
                                <h2 class="title mb-0">
                                    Build Your Career With Prime University.
                                </h2>
                                <br />
                                <h2 class="title mt-20">
                                    <span style="color: #b40e16">You Dream, We Fulfill.</span>
                                </h2>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-30">
                            <div class="degree-wrap">
                                <img src="{{ asset('prime/assets/images/degrees/1 (3).jpg') }}" alt="" style="height:250px"/>
                                <div class="title-part">
                                    <h4 class="title">Undergraduate</h4>
                                </div>
                                <div class="content-part">
                                    <h4 class="title"><a href="{{ url('/undergraduate') }}">Undergraduate</a></h4>
                                    <!-- <p class="desc">
                                      Nam libero tempore, cum soluta nobis est eligendi optio
                                      cumque nihil impedit quo minus id quod
                                    </p> -->
                                    <div class="btn-part">
                                        <a href="{{ url('/undergraduate') }}">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-30">
                            <div class="degree-wrap">
                                <img src="{{ asset('prime/assets/images/degrees/postg.jpg') }}" alt="" style="height:250px"/>
                                <div class="title-part">
                                    <h4 class="title">Postgraduate</h4>
                                </div>
                                <div class="content-part">
                                    <h4 class="title"><a href="{{ url('/postgraduate') }}">Postgraduate</a></h4>
                                    <!-- <p class="desc">
                                      Nam libero tempore, cum soluta nobis est eligendi optio
                                      cumque nihil impedit quo minus id quod
                                    </p> -->
                                    <div class="btn-part">
                                        <a href="{{ url('/postgraduate') }}">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-30">
                            <div class="degree-wrap">
                                <img src="{{ asset('prime/assets/images/degrees/language.jpg') }}" alt="" style="height:250px"/>
                                <div class="title-part">
                                    <h4 class="title">Language School</h4>
                                </div>
                                <div class="content-part">
                                    <h4 class="title"><a href="{{ url('/language_school') }}">Language School</a></h4>
                                    <!-- <p class="desc">
                                      Nam libero tempore, cum soluta nobis est eligendi optio
                                      cumque nihil impedit quo minus id quod
                                    </p> -->
                                    <div class="btn-part">
                                        <a href="{{ url('/language_school') }}">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-30">
                            <div class="degree-wrap">
                                <img src="{{ asset('prime/assets/images/degrees/crhp_b.jpg') }}" alt="" style="height:250px"/>
                                <div class="title-part">
                                    <h4 class="title">
                                        Centre for Research, Human Resource Development and
                                        Publications (CRHP)
                                    </h4>
                                </div>
                                <div class="content-part">
                                    <h4 class="title">
                                        <a href="{{ url('/crhp') }}">CRHP</a>
                                    </h4>
                                    <!-- <p class="desc">
                                      Nam libero tempore, cum soluta nobis est eligendi optio
                                      cumque nihil impedit quo minus id quod
                                    </p> -->
                                    <div class="btn-part">
                                        <a href="{{ url('/crhp') }}">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-30">
                            <div class="degree-wrap">
                                <img src="{{ asset('prime/assets/images/degrees/iaqc.jpg') }}" alt="" style="height:250px"/>
                                <div class="title-part">
                                    <h4 class="title">
                                        Institutional Quality Assurance Cell (IQAC)
                                    </h4>
                                </div>
                                <div class="content-part">
                                    <h4 class="title"><a href="{{ url('/iqac') }}">IQAC</a></h4>
                                    <!-- <p class="desc">
                                      Nam libero tempore, cum soluta nobis est eligendi optio
                                      cumque nihil impedit quo minus id quod
                                    </p> -->
                                    <div class="btn-part">
                                        <a href="{{ url('/iqac') }}">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Degree Section End -->

            <!-- Services Section Start -->
            <div class="rs-services style1 container">
                <div class="row y-middle">
                    <!--<div class="col-lg-3 col-md-6">-->
                    <!--    <div class="service-item overly1">-->
                    <!--        <img-->
                    <!--            src="{{ asset('prime/assets/images/services/1.jpg') }}"-->
                    <!--            alt=""-->
                    <!--            style="height: 225px"-->
                    <!--        />-->
                    <!--        <div class="content-part">-->
                    <!--            <a href="{{ url('/under_construction') }}">-->
                    <!--            <img src="{{ asset('prime/assets/images/services/icons/1.png') }}" alt="" />-->
                    <!--            <h4 class="title"style="color:white;">Campus Life</h4></a>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</div>-->
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item overly3">
                            <a href="{{ url('/undergraduate') }}">
                            <img
                                src="{{ asset('prime/assets/images/services/admission.jpg') }}"
                                alt=""
                                style="height: 225px"
                            />
                            <div class="content-part">
                                <img src="{{ asset('prime/assets/images/services/icons/2.png') }}" alt="" />
                                <h4 class="title"style="color:white;">Admission</h4>
                            </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item overly3">
                            <a href="{{ url('/extra_co') }}">
                            <img
                                src="{{ asset('prime/assets/images/services/extra.png') }}"
                                alt=""
                                style="height: 225px"
                            />
                            <div class="content-part">
                                <img src="{{ asset('prime/assets/images/services/icons/3.png') }}" alt="" />

                                <h4 class="title"style="color:white;">Extra & Co-curricular Activities</h4>
                            </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item overly4">
                             <a href="{{ url('/library') }}">
                            <img
                                src="{{ asset('prime/assets/images/services/library.jpg') }}"
                                alt=""
                                style="height: 225px"
                            />
                            <div class="content-part">
                                <img src="{{ asset('prime/assets/images/services/icons/1.png') }}" alt="" />
                                <h4 class="title" style="color:white;">Library</h4>
                            </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Services Section End -->

            <!-- admission apply Section Start -->
            <div class="rs-categories style2 pt-100 pb-100 md-pt-70 md-pb-70">
                <!-- Cta Section Start -->
                <div class="rs-cta home-style14">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-8 col-md-12 md-mb-30">
                                <div class="content-part">
                                    <span class="sub-text">Join With Us</span>
                                    @foreach($admission_promotions as $admission_promotion)
                                    <h2 class="title">
                                       {{ $admission_promotion->a_title }}
                                    </h2>
                                    @endforeach
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-12">
                                <div class="btn-part text-right">
                                    <a class="readon2 cta-btn" href="{{ url('/student_apply') }}">Apply Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Cta Section End -->
            </div>
            <!-- admission apply Section End -->

            <!-- Section bg Wrap 2 start -->
            <div class="bg2">
                <!-- Blog Section Start -->
                <div id="rs-blog" class="rs-blog style1 pt-20 pb-30 md-pt-20 md-pb-30">
                    <div class="container">
                        <div class="sec-title mb-60 md-mb-30 text-center">
                            <h2 class="title mb-0">Latest Notice & Events</h2>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-12 overflow_style">
                                @foreach($home_event as $home_events)
                                <div
                                    class="row align-items-center no-gutter white-bg blog-item wow fadeInUp"
                                    data-wow-delay="500ms"
                                    data-wow-duration="2000ms"
                                >
                                    <div class="col-md-3">
                                        <div class="image-part">
                                            <a href="{{ url('/home_event_details/'.$home_events->id) }}"
                                            ><img src="{{ $home_events->image }}" alt="" />
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-9">
                                        <div class="blog-content">
                                            <ul class="blog-meta">
                                                <li><i class="fa fa-calendar"></i>{{ \Carbon\Carbon::parse($home_events->date)->isoFormat('MMM')}} {{ \Carbon\Carbon::parse($home_events->date)->isoFormat('DD')}}, {{ \Carbon\Carbon::parse($home_events->date)->isoFormat('YYYY')}}</li>
                                                <li>
                                                    <i class="fa fa-map-marker"></i> {{ $home_events->place }}
                                                </li>
                                            </ul>
                                            <h3 class="title">
                                                <a href="{{ url('/home_event_details/'.$home_events->id) }}"
                                                >{{ $home_events->title }}.
                                                </a>
                                            </h3>
                                            <div class="btn-part">
                                                <a class="readon-arrow" href="{{ url('/home_event_details/'.$home_events->id) }}">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                    @endforeach

                            </div>
                            <div class="col-lg-1 col-xs-hideen"></div>

                            <div class="col-lg-5 lg-pl-0 overflow_style">
                                <div class="rs-latest-events style1 bg-wrap">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div
                                                    id="rs-about"
                                                    class="rs-about style1 pb-100 md-pb-70"
                                                >
                                                    <div class="container">
                                                        <div class="row">
                                                            <div class="col-lg-12 order-last pt-50">
                                                                <div class="notice-bord style1">
                                                                    <ul>
                                                                        @foreach( $home_notice as $home_notices)
                                                                        <li
                                                                            class="wow fadeInUp"
                                                                            data-wow-delay="300ms"
                                                                            data-wow-duration="2000ms"
                                                                        >
                                                                            <div class="date" style="color: #000000;">
                                                                                <span>{{ \Carbon\Carbon::parse($home_notices->date)->isoFormat('DD')}}</span>{{ \Carbon\Carbon::parse($home_notices->date)->isoFormat('MMM')}}
                                                                            </div>
                                                                            <div class="desc">
                                                                                <a href="{{ url('/home_notice_details') }}">
                                                                               {{ $home_notices->title }}.
                                                                                </a>
                                                                            </div>
                                                                        </li>
                                                                            @endforeach
                                                                    </ul>
                                                                    <div
                                                                        class="btn-part mt-55 md-mt-25 wow fadeInUp"
                                                                        data-wow-delay="600ms"
                                                                        data-wow-duration="2000ms"
                                                                    >
                                                                        <a href="{{ url('/home_notice_details') }}">View All Notice</a>
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
                        </div>
                    </div>
                </div>
                <!-- Blog Section End -->
            </div>
            <!-- Section bg Wrap 2 End -->

            <!-- Facilities Section Start -->
            <div class="rs-facilities pt-20 pb-20 md-pt-15 md-pb-15">
                <div class="container">
                    <div class="relative">
                        <div class="img-part">
                            <img src="{{ asset('prime/assets/images/facilities/building.jpg') }}" alt="images" />
                        </div>
                        <div class="choose-part">
                            <div class="sec-title2 md-mb-30">
                                <h2 class="title mb-0">Our Strength</h2>
                            </div>
                            <div class="our-facilities mt-20 mb-15">
                                <div class="icon-part">
                                    <img src="{{ asset('prime/assets/images/facilities/icon/1.png') }}" alt="images" />
                                </div>
                                <div class="content-part pt-30 md-pt-0">
                                    <div class="text-part">
                                        <h2 class="title">
                                            Aesthetic Infrastructure with Modern Academic Facilities
                                        </h2>
                                        <!-- <p class="desc">
                                          Enhanced with up-to-date academic facilities, and tutored by highly qualified lecturers among whom are industry practitioners, Prime University strives to ensure high quality education in areas of Engineering, Business,  Language Studies, Architecture,  Information Technology and many more.
                                        </p> -->
                                    </div>
                                </div>
                            </div>
                            <div class="our-facilities mb-40">
                                <div class="icon-part">
                                    <img src="{{ asset('prime/assets/images/facilities/icon/2.png') }}" alt="images" />
                                </div>
                                <div class="content-part pt-30 md-pt-0">
                                    <div class="text-part">
                                        <h2 class="title">Library with Digital Facilities</h2>
                                        <!-- <p class="desc">
                                          The Library's website is the gateway to our e-resources and digital services. The library website aims at providing a brief introduction to the facilities and services provided by the library and other basic information pertaining to the library.
                                        </p> -->
                                    </div>
                                </div>
                            </div>
                            <div class="our-facilities mb-40">
                                <div class="icon-part">
                                    <img src="{{ asset('prime/assets/images/facilities/icon/3.png') }}" alt="images" />
                                </div>
                                <div class="content-part">
                                    <div class="text-part">
                                        <h2 class="title">Strong Faculty Line Up</h2>
                                        <!-- <p class="desc">
                                          Our faculty members are industry experts and professionals with advanced degrees in their relevant fields of interest.
                                        </p> -->
                                    </div>
                                </div>
                            </div>
                            <div class="our-facilities mb-40">
                                <div class="icon-part">
                                    <img src="{{ asset('prime/assets/images/facilities/icon/5.png') }}" alt="images" />
                                </div>
                                <div class="content-part pt-30 md-pt-0">
                                    <div class="text-part">
                                        <h2 class="title">Scholarship on Semester Result</h2>
                                        <!-- <p class="desc">
                                          The Library's website is the gateway to our e-resources and digital services. The library website aims at providing a brief introduction to the facilities and services provided by the library and other basic information pertaining to the library.
                                        </p> -->
                                    </div>
                                </div>
                            </div>
                            <div class="our-facilities mb-40">
                                <div class="icon-part">
                                    <img src="{{ asset('prime/assets/images/facilities/icon/4.jpg') }}" alt="images" />
                                </div>
                                <div class="content-part pt-30 md-pt-0">
                                    <div class="text-part">
                                        <h2 class="title">Credit Transfer & Exchange Program</h2>
                                        <!-- <p class="desc">
                                          The Library's website is the gateway to our e-resources and digital services. The library website aims at providing a brief introduction to the facilities and services provided by the library and other basic information pertaining to the library.
                                        </p> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Facilities Section End -->

            <!-- Testiominals Section Start -->
            <div class="rs-testimonial style3 pt-20 pb-20 md-pt-15 md-pb-15">
                <div class="container">
                    <div class="sec-title2 text-center mb-50">
                        <!-- <div class="sub-title">Student Reviews</div> -->
                        <h2 class="title">Notable Alumni</h2>
                        <p>Our Alumini are our pride as they are engaged in building the world through the nationals and internationals contribution</p>
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

                        @foreach($home_alumni as $home_alumnis)
                        <div class="testi-item">
                            <div class="row y-middle no-gutter">
                                <div class="col-md-12">
                                    <div class="user-info">
                                        <img src="{{ $home_alumnis->image }}" alt="" />
                                        <h4 class="name">{{ $home_alumnis->name }}</h4>
                                        <span class="designation">{{ $home_alumnis->designation }}</span>
                                    </div>
                                </div>
                                <!--<div class="col-md-8">-->
                                <!--    <div class="desc">-->
                                <!--        {!! $home_alumnis->description !!}.-->
                                <!--    </div>-->
                                <!--</div>-->
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <!-- Testiominals Section End -->
              <!-- Partner Start -->
                  <!--<div class="rs-partner pt-30 pb-30 md-pt-10 md-pb-10 gray-bg">-->
                  <!--  <div class="container">-->
                  <!--    <h4 style="text-align: center">Our Strategic Partnar</h4>-->
                  <!--    <div-->
                  <!--      class="rs-carousel owl-carousel"-->
                  <!--      data-loop="true"-->
                  <!--      data-items="5"-->
                  <!--      data-margin="30"-->
                  <!--      data-autoplay="true"-->
                  <!--      data-hoverpause="true"-->
                  <!--      data-autoplay-timeout="5000"-->
                  <!--      data-smart-speed="800"-->
                  <!--      data-dots="false"-->
                  <!--      data-nav="false"-->
                  <!--      data-nav-speed="false"-->
                  <!--      data-center-mode="false"-->
                  <!--      data-mobile-device="1"-->
                  <!--      data-mobile-device-nav="false"-->
                  <!--      data-mobile-device-dots="false"-->
                  <!--      data-ipad-device="3"-->
                  <!--      data-ipad-device-nav="false"-->
                  <!--      data-ipad-device-dots="false"-->
                  <!--      data-ipad-device2="2"-->
                  <!--      data-ipad-device-nav2="false"-->
                  <!--      data-ipad-device-dots2="false"-->
                  <!--      data-md-device="5"-->
                  <!--      data-md-device-nav="false"-->
                  <!--      data-md-device-dots="false"-->
                  <!--    >-->
                  <!--      <div-->
                  <!--        class="partner-item"-->
                  <!--        style="-->
                  <!--          padding: 30px 20px;-->
                  <!--          background: white;-->
                  <!--          border-radius: 10px;-->
                  <!--          box-shadow: 0px 0px 5px 0px #ccc;-->
                  <!--        "-->
                  <!--      >-->
                  <!--        <a href="#"><img src="assets/images/partner/1.png" alt="" /></a>-->
                  <!--      </div>-->
                  <!--      <div-->
                  <!--        class="partner-item"-->
                  <!--        style="-->
                  <!--          padding: 30px 20px;-->
                  <!--          background: white;-->
                  <!--          border-radius: 10px;-->
                  <!--          box-shadow: 0px 0px 5px 0px #ccc;-->
                  <!--        "-->
                  <!--      >-->
                  <!--        <a href="#"><img src="assets/images/partner/2.png" alt="" /></a>-->
                  <!--      </div>-->
                  <!--      <div-->
                  <!--        class="partner-item"-->
                  <!--        style="-->
                  <!--          padding: 30px 20px;-->
                  <!--          background: white;-->
                  <!--          border-radius: 10px;-->
                  <!--          box-shadow: 0px 0px 5px 0px #ccc;-->
                  <!--        "-->
                  <!--      >-->
                  <!--        <a href="#"><img src="assets/images/partner/3.png" alt="" /></a>-->
                  <!--      </div>-->
                  <!--      <div-->
                  <!--        class="partner-item"-->
                  <!--        style="-->
                  <!--          padding: 30px 20px;-->
                  <!--          background: white;-->
                  <!--          border-radius: 10px;-->
                  <!--          box-shadow: 0px 0px 5px 0px #ccc;-->
                  <!--        "-->
                  <!--      >-->
                  <!--        <a href="#"><img src="assets/images/partner/4.png" alt="" /></a>-->
                  <!--      </div>-->
                  <!--      <div-->
                  <!--        class="partner-item"-->
                  <!--        style="-->
                  <!--          padding: 30px 20px;-->
                  <!--          background: white;-->
                  <!--          border-radius: 10px;-->
                  <!--          box-shadow: 0px 0px 5px 0px #ccc;-->
                  <!--        "-->
                  <!--      >-->
                  <!--        <a href="#"><img src="assets/images/partner/5.png" alt="" /></a>-->
                  <!--      </div>-->
                  <!--      <div-->
                  <!--        class="partner-item"-->
                  <!--        style="-->
                  <!--          padding: 30px 20px;-->
                  <!--          background: white;-->
                  <!--          border-radius: 10px;-->
                  <!--          box-shadow: 0px 0px 5px 0px #ccc;-->
                  <!--        "-->
                  <!--      >-->
                  <!--        <a href="#"><img src="assets/images/partner/6.png" alt="" /></a>-->
                  <!--      </div>-->
                  <!--    </div>-->
                  <!--  </div>-->
                  <!--</div>-->
            <!-- Partner End -->

            <!-- Section Gray bg Wrap start -->
            <div>
                <!-- Blog Section Start -->
                <div id="rs-blog" class="rs-blog style2 pt-94 pb-100 md-pt-64 md-pb-70">
                    <div class="container">
                        <div class="sec-title mb-60 text-center">
                            <h2 class="title mb-0">Latest News in Media</h2>
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
                            @foreach( $home_news as $home_new)
                            <div class="blog-item">
                                <div class="image-part">
                                    <img
                                        src="{{ $home_new->image }}"
                                        alt=""
                                        style="height: 185px; width: 100%"
                                    />
                                </div>
                                <div class="blog-content new-style">
                                    <ul class="blog-meta">
                                        <li><i class="fa fa-calendar"></i>{{ \Carbon\Carbon::parse($home_new->date)->isoFormat('MMM')}} {{ \Carbon\Carbon::parse($home_new->date)->isoFormat('DD')}}, {{ \Carbon\Carbon::parse($home_new->date)->isoFormat('YYYY')}}</li>
                                    </ul>
                                    <h3 class="title">
                                        <a href="{{ url('/home_news_media/'.$home_new->id) }}"
                                        >{{ $home_new->title }}</a>
                                    </h3>
                                    <ul class="blog-bottom">
                                        <li class="btn-part">
                                            <a class="readon-arrow" href="{{ url('/home_news_media/'.$home_new->id) }}">Read More</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                                @endforeach

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
        </div>
    @endsection
