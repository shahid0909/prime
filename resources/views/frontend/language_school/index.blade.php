
@extends('frontend.layout.master')

 @section('header')
         @include('frontend.layout.partials.header')
    @endsection

@section('content')

    <!-- Main content Start -->
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
                        style="height: 400px; padding: 20px"
                    />
                @endforeach
            </div>
        </div>
        <!-- Slider Section End -->

        <!-- Bracking News Section Start -->
        <section class="brackingnews my-2" style="padding: 0px; margin: 0px">
            <div class="news">
                <div class="row news-read">
                    <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 tag">
                        Breaking News
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
        <div id="rs-about" class="rs-about style2 pt-94 pb-100 md-pt-64 md-pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 md-mb-50">
                        <div class="about-intro">
                            <div
                                class="sec-title mb-40 wow fadeInUp"
                                data-wow-delay="300ms"
                                data-wow-duration="2000ms"
                            >
                                <!-- <div class="sub-title primary">About US</div> -->
                                <h2 class="title mb-21 yellow-color">
                                    Welcome to Prime University Language School
                                </h2>
                                <div class="desc big white-color">
                                    <p>Prime University Language School is operating its committed venture in terms of disseminating language teaching on several dominating languages of the world including English, Japanese, Chinese and so on with a view to creating competent manpower in order to cope with the challenges of the 21st century. In this multilingual era, language learning has added an influential scope for flourishing an individual to his best level of knowledge to be highly worthy anywhere. Since the launching of this school in 2007, the concerned authority of Prime University has been providing the best outcomes for the learners completing different language courses in different levels. Besides, providing excellent teaching in various languages, we are creating ample opportunities for the learners not only to get internationally acceptable certificates but also to the knowledge about job placement. We have highly qualified language professionals for different languages.</p>
                                </div>
                                <div class="desc big white-color">
                                    <p>Moreover, the teachers of this school conduct the language classes through research experiments and need analysis so that each learner can get all the potentials for developing his target language.</p>
                                </div>
                                <div class="desc big white-color">
                                    <p>The vision of Prime University Language School is to accelerate students' competency through teaching different foreign languages for enhancing their employability in this competitive world.</div>
                                </p>
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

                    @foreach($language_school as $language_schools)
                    <div class="col-lg-4 col-md-6 mb-30">
                        <div class="degree-wrap">
                            <img src="{{ asset($language_schools->b_image) }}" alt="" />
                            <div class="title-part">
                                <h4 class="title">{{ $language_schools->name }}</h4>
                            </div>
                            <div class="content-part">
                                <h4 class="title"><a href="{{ url('/school_details/'.$language_schools->id) }}">{{ $language_schools->name }}</a></h4>
                                <!-- <p class="desc">
                                  Nam libero tempore, cum soluta nobis est eligendi optio
                                  cumque nihil impedit quo minus id quod
                                </p> -->
                                <div class="btn-part">
                                    <a href="{{ url('/school_details/'.$language_schools->id) }}">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                   @endforeach

                </div>
            </div>
        </div>
        <!-- Degree Section End -->
                    <div class="col-lg-8 lg-pl-0 ml--25 md-ml-0" style="margin: 0 auto">
                        <div class="row grid-area">
                            <div class="col-md-12">
                                @foreach($dir as $director)
                                    <div class="col-lg-8 mb-40" style="margin:0 auto;margin-bottom:10px;">
                                        <div class="course-item" style="background: #cae4fb;">
                                            <div class="row" style="padding: 20px;">
                                                <div class="course-image col-md-4">
                                                    <a>
                                                        <img
                                                            src="{{ asset($director->image) }}" style="padding: 0px; border-radius: 10px; background: white;"
                                                        />
                                                    </a>
                                                    
                                                </div>
                                                <div class="course-info col-md-8" style="text-align: right; padding-right: 10%; margin-top: 5%;">
                                                    <h3 class="course-title">
                                                        {{ $director->e_name }}
                                                    </h3>
                                                    <p style="margin: 0px">Director</p>
                                                    <p style="margin: 0px">Prime University Language School
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
        <!-- Intro Courses -->
        <section class="intro-section gray-bg pt-94 pb-100 md-pt-64 md-pb-70">
            <div class="container">
                <div class="row clearfix">
                    <!-- Content Column -->
                    <div class="col-lg-12 md-mb-50">
                        <!-- Intro Info Tabs-->
                        <div class="intro-info-tabs">
                            <ul
                                class="nav nav-tabs intro-tabs tabs-box"
                                id="myTab"
                                role="tablist"
                            >
                                <li class="nav-item tab-btns" style="width: 50%; padding: 0px 30px 0px 30px;">
                                    <a
                                        class="nav-link tab-btn active"
                                        id="prod-overview-tab"
                                        data-toggle="tab"
                                        href="#prod-overview"
                                        role="tab"
                                        aria-controls="prod-overview"
                                        aria-selected="true"
                                        style="
                        font-size: 15px;
                        min-height: 75px;
                        margin-bottom: 20px;
                      "
                                    >Faculties</a
                                    >
                                </li>
                                <li class="nav-item tab-btns" style="width: 50%; padding: 0px 30px 0px 30px;">
                                    <a
                                        class="nav-link tab-btn"
                                        id="prod-curriculum-tab"
                                        data-toggle="tab"
                                        href="#prod-curriculum"
                                        role="tab"
                                        aria-controls="prod-curriculum"
                                        aria-selected="false"
                                        style="
                        font-size: 15px;
                        min-height: 75px;
                        margin-bottom: 20px;
                      "
                                    >Facilities</a
                                    >
                                </li>
                            </ul>
                            <div class="tab-content tabs-content" id="myTabContent">
                                <div
                                    class="tab-pane tab fade show active"
                                    id="prod-overview"
                                    role="tabpanel"
                                    aria-labelledby="prod-overview-tab"
                                >
                                    <div class="main-content">
                                        <section class="mt-50 mb-20">
                                            <div class="container">
                                                <div class="card">
                                                    <h5 class="card-header" style="text-align: center; background: #273c66; color: #ffffff">
                                                        Faculty Members
                                                    </h5>
                                                    <div class="card-body">
                                                        <div class="row" style="padding: 0px; margin: 0px">
                                                            @foreach($faculty_member as $faculty_members)
                                                                @foreach($faculty_members as $faculty_memberss)
                                                                @if($faculty_memberss->designation !="Director")
                                                            <div class="col-lg-6 pt-20 pb-20 md-mb-30">
                                                                <div class="faculty">
                                                                    <div class="row" style="padding: 0px; margin: 0px">
                                                                        <div class="col-lg-3">
                                                                            <img
                                                                                src="{{ $faculty_memberss->image }}"
                                                                                width="100"
                                                                                height="100"
                                                                            />
                                                                        </div>
                                                                        <div class="col-lg-9">
                                                                            <h5 style="margin: 0; margin-bottom: 10px">
                                                                                <a href="#">
                                                                                    {{ $faculty_memberss->m_name }}</a>
                                                                            </h5>
                                                                            <h6 style="margin: 0">{{ $faculty_memberss->designation }} {{ $faculty_memberss->adi_designation }}</h6>
                                                                            <h6 style="margin: 0">
                                                                                {!! $faculty_memberss->edu_que !!}
                                                                            </h6>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            @endif
                                                                @endforeach
                                                           @endforeach
                                                        </div>
                                                    </div>
                                                    <!-- <h5
                                                    class="card-header"
                                                    style="text-align: center; background: #273c66; color: #ffffff"
                                                  >
                                                  Adjunct Faculty Members
                                                  </h5>
                                                  <div class="card-body">
                                                    <div class="row" style="padding: 0px; margin: 0px">
                                                      <div class="col-lg-6 pt-20 pb-20 md-mb-30">
                                                        <div class="faculty">
                                                          <div class="row" style="padding: 0px; margin: 0px">
                                                            <div class="col-lg-3">
                                                              <img
                                                                src="assets/images/faculty/drJahangirAlam_CSE.jpg"
                                                                width="100"
                                                                height="100"
                                                              />
                                                            </div>
                                                            <div class="col-lg-9">
                                                              <h5 style="margin: 0; margin-bottom: 10px">
                                                                <a href="faculty_details.html">Prof Dr. M. M. A. Hashem </a>
                                                              </h5>
                                                              <h6 style="margin: 0">Professor</h6>
                                                              <h6 style="margin: 0">Dean, Faculty of Engineering</h6>
                                                              <h6 style="margin: 0">
                                                                Doctor of Engineering, Morgan State University, USA
                                                              </h6>
                                                              <h6 style="margin: 0">
                                                                M.Sc in Computer Science, American University of London
                                                              </h6>
                                                              <h6 style="margin: 0">
                                                                B.Sc (Physics with Honors), Rajshahi University
                                                              </h6>
                                                            </div>
                                                          </div>
                                                        </div>
                                                      </div>
                                                      <div class="col-lg-6 pt-20 pb-20 md-mb-30">
                                                        <div class="faculty">
                                                          <div class="row" style="padding: 0px; margin: 0px">
                                                            <div class="col-lg-3">
                                                              <img
                                                                src="assets/images/faculty/Shihabul_islam.jpg"
                                                                width="100"
                                                                height="100"
                                                              />
                                                            </div>
                                                            <div class="col-lg-9">
                                                              <h5 style="margin: 0; margin-bottom: 10px">
                                                                <a href="faculty_details.html"> Md Shihabul Islam </a>
                                                              </h5>
                                                              <h6 style="margin: 0">Associate Professor and Head</h6>
                                                              <h6 style="margin: 0">Ph.D (on going),</h6>
                                                            </div>
                                                          </div>
                                                        </div>
                                                      </div>
                                                      <div class="col-lg-6 pt-20 pb-20 md-mb-30">
                                                        <div class="faculty">
                                                          <div class="row" style="padding: 0px; margin: 0px">
                                                            <div class="col-lg-3">
                                                              <img
                                                                src="assets/images/faculty/momo_n.jpg"
                                                                width="100"
                                                                height="100"
                                                              />
                                                            </div>
                                                            <div class="col-lg-9">
                                                              <h5 style="margin: 0; margin-bottom: 10px">
                                                                <a href="faculty_list.html"> Dr Momtaz Begum Momo </a>
                                                              </h5>
                                                              <h6 style="margin: 0">Associate Professor</h6>
                                                              <h6 style="margin: 0">Ph.D, Jahangirnagar University</h6>
                                                              <h6 style="margin: 0">M.Sc (Math),</h6>
                                                              <h6 style="margin: 0">B.Sc (Honors) Math,</h6>
                                                            </div>
                                                          </div>
                                                        </div>
                                                      </div>
                                                      <div class="col-lg-6 pt-20 pb-20 md-mb-30">
                                                        <div class="faculty">
                                                          <div class="row" style="padding: 0px; margin: 0px">
                                                            <div class="col-lg-3">
                                                              <img
                                                                src="assets/images/faculty/dilruba_CSE.jpg"
                                                                width="100"
                                                                height="100"
                                                              />
                                                            </div>
                                                            <div class="col-lg-9">
                                                              <h5 style="margin: 0; margin-bottom: 10px">
                                                                <a href="faculty_list.html">Dilruba Nusrat </a>
                                                              </h5>
                                                              <h6 style="margin: 0">Lecturer</h6>
                                                              <h6 style="margin: 0">
                                                                B.Sc in CSE, Daffodil International University
                                                              </h6>
                                                            </div>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </div> -->
                                                </div>
                                                <div class="card mt-30">
                                                    <h5
                                                        class="card-header"
                                                        style="text-align: center; background: #273c66; color: #ffffff"
                                                    >
                                                        Adjunct Faculty Members
                                                    </h5>
                                                    <div class="card-body">
                                                        <div class="row" style="padding: 0px; margin: 0px">
                                                            @foreach($adjunct_member as $adjunct_members)

                                                                @foreach($adjunct_members as $adjunct_memberss)
                                                            <div class="col-lg-6 pt-20 pb-20 md-mb-30">
                                                                <div class="faculty">
                                                                    <div class="row" style="padding: 0px; margin: 0px">
                                                                        <div class="col-lg-3">
                                                                            <img
                                                                                src="{{ asset($adjunct_memberss->image) }}"
                                                                                width="100"
                                                                                height="100"
                                                                            />
                                                                        </div>
                                                                        <div class="col-lg-9">
                                                                            <h5 style="margin: 0; margin-bottom: 10px">
                                                                                <a href="faculty_details.html">{{ $adjunct_memberss->m_name }}</a>
                                                                            </h5>
                                                                            <h6 style="margin: 0">{{ $adjunct_memberss->designation }} {{ $adjunct_memberss->adi_designation }}</h6>

                                                                            <h6 style="margin: 0">
                                                                                {{ $adjunct_memberss->edu_que }}
                                                                            </h6>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                                    @endforeach
                                                                @endforeach

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                    </div>
                                </div>
                                <div
                                    class="tab-pane fade"
                                    id="prod-curriculum"
                                    role="tabpanel"
                                    aria-labelledby="prod-curriculum-tab"
                                >
                                    <div class="content white-bg pt-30">
                                        <!-- Cource Overview -->
                                        <div class="course-overview">
                                            <div class="inner-box">
                                                <!--<h3><b>Facilities :</b><h3>-->
                                                        <ul class="review-list">
                                                            {!! $director->s_facilities !!}
                                                        </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End intro Courses -->
        <!-- admission apply Section End -->

        <!-- Section bg Wrap 2 start -->
        <!-- <div class="bg2"> -->
        <!-- Blog Section Start -->
        <!-- <div id="rs-blog" class="rs-blog style1 pt-20 pb-30 md-pt-20 md-pb-30">
          <div class="container">
            <div class="sec-title mb-60 md-mb-30 text-center">
              <h2 class="title mb-0">Latest Notice & Events</h2>
            </div>
            <div class="row" style="position: relative;">
              <div class="col-lg-6 col-md-12 overflow_style">
                <div class="conatiner">
                  <div class="col-lg-12">
                    <div
                    class="
                      row
                      align-items-center
                      no-gutter
                      white-bg
                      blog-item
                      wow
                      fadeInUp
                    "
                    data-wow-delay="500ms"
                    data-wow-duration="2000ms"
                  >
                    <div class="col-md-3">
                      <div class="image-part">
                        <a href="#"
                          ><img src="assets/images/degrees/crhp_b.jpg" alt=""/>
                      </a>
                      </div>
                    </div>
                    <div class="col-md-9">
                      <div class="blog-content">
                        <ul class="blog-meta">
                          <li><i class="fa fa-calendar"></i>June 15, 2019</li>
                          <li><i class="fa fa-map-marker"></i> Prime University Auditorium</li>
                        </ul>
                        <h3 class="title">
                          <a href="#"
                            >We are glad to share with you that the Prime University Computer Programming Club (PUCPC) has successfully completed the programming contest, December-2021. </a
                          >
                        </h3>
                        <div class="btn-part">
                          <a class="readon-arrow" href="#">Read More</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div
                  class="
                    row
                    align-items-center
                    no-gutter
                    white-bg
                    blog-item
                    wow
                    fadeInUp
                  "
                  data-wow-delay="500ms"
                  data-wow-duration="2000ms"
                  >
                  <div class="col-md-3">
                    <div class="image-part">
                      <a href="#"
                        ><img src="assets/images/degrees/02.jpg" alt=""/>
                    </a>
                    </div>
                  </div>
                  <div class="col-md-9">
                    <div class="blog-content">
                      <ul class="blog-meta">
                        <li><i class="fa fa-calendar"></i>June 15, 2019</li>
                        <li><i class="fa fa-map-marker"></i> Prime University Auditorium</li>
                      </ul>
                      <h3 class="title">
                        <a href="#"
                          >মহান শহীদ বুদ্ধিজীবী দিবস উপলক্ষে মিরপুরে শহীদ বুদ্ধিজীবী স্মৃতিসৌধে ফুল দিয়ে শ্রদ্ধা জানান প্রাইম ইউনিভার্সিটি</a
                        >
                      </h3>
                      <div class="btn-part">
                        <a class="readon-arrow" href="#">Read More</a>
                      </div>
                    </div>
                  </div>
                  </div>
                  <div
                  class="
                    row
                    align-items-center
                    no-gutter
                    white-bg
                    blog-item
                    wow
                    fadeInUp
                  "
                  data-wow-delay="500ms"
                  data-wow-duration="2000ms"
                >
                  <div class="col-md-3">
                    <div class="image-part">
                      <a href="#"
                        ><img src="assets/images/degrees/3.jpg" alt=""/>
                    </a>
                    </div>
                  </div>
                  <div class="col-md-9">
                    <div class="blog-content">
                      <ul class="blog-meta">
                        <li><i class="fa fa-calendar"></i>June 15, 2019</li>
                        <li><i class="fa fa-map-marker"></i> Prime University Auditorium</li>
                      </ul>
                      <h3 class="title">
                        <a href="#"
                          >Modern School The Lovely Valley Team Work</a
                        >
                      </h3>
                      <div class="btn-part">
                        <a class="readon-arrow" href="#">Read More</a>
                      </div>
                    </div>
                  </div>
                  </div>
                  </div>
                  <div
                  class="btn-part mt-55 mb-55 md-mt-25 wow fadeInUp"
                  data-wow-delay="300ms"
                  data-wow-duration="1800ms"
                >
                  <a href="#">View All</a>
                </div>
                </div>
              </div>

              <div class="col-lg-5 lg-pl-0 overflow_style" style="    position: absolute;
              right: 0px;">
                <div class="rs-latest-events style1 bg-wrap">
                  <div class="container">
                    <div class="row">
                      <div class="col-lg-12">
                        <div id="rs-about" class="rs-about style1 pb-100 md-pb-70">
                          <div class="container">
                            <div class="row">
                              <div class="col-lg-12 order-last pt-50">
                                <div class="notice-bord style1">
                                  <ul>
                                    <li
                                      class="wow fadeInUp"
                                      data-wow-delay="300ms"
                                      data-wow-duration="2000ms"
                                    >
                                      <div class="date"><span>20</span>June</div>
                                      <div class="desc">
                                        We are glad to share with you that the Prime University Computer Programming Club (PUCPC) has successfully completed the programming contest, December-2021.
                                      </div>
                                    </li>
                                    <li
                                      class="wow fadeInUp"
                                      data-wow-delay="400ms"
                                      data-wow-duration="2000ms"
                                    >
                                      <div class="date"><span>22</span>Aug</div>
                                      <div class="desc">
                                        Prime University has successfully participated in  IC4IR-2021
                                      </div>
                                    </li>
                                    <li
                                      class="wow fadeInUp"
                                      data-wow-delay="500ms"
                                      data-wow-duration="2000ms"
                                    >
                                      <div class="date"><span>14</span>May</div>
                                      <div class="desc">
                                        প্রাইম ইউনিভার্সিটি বিভিন্ন অনুষ্ঠানের মাধ্যমে মহান বিজয় দিবস ও স্বাধীনতার ‘‘সুবর্ণ জয়ন্তী’’ ২০২১ উদযাপন করে।
                                      </div>
                                    </li>
                                    <li
                                      class="wow fadeInUp"
                                      data-wow-delay="600ms"
                                      data-wow-duration="2000ms"
                                    >
                                      <div class="date"><span>31</span>Sept</div>
                                      <div class="desc">
                                        Prime University has successfully participated in  IC4IR-2021
                                      </div>
                                    </li>
                                    <li
                                      class="wow fadeInUp"
                                      data-wow-delay="700ms"
                                      data-wow-duration="2000ms"
                                    >
                                      <div class="date"><span>28</span>Oct</div>
                                      <div class="desc">
                                        We are glad to share with you that the Prime University Computer Programming Club (PUCPC) has successfully completed the programming contest, December-2021.
                                      </div>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                            <div
                            class="btn-part mt-55 md-mt-25 wow fadeInUp"
                            data-wow-delay="300ms"
                            data-wow-duration="1800ms"
                          >
                            <a href="#">View All</a>
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
        </div> -->
        <!-- Blog Section End -->

        <!-- </div> -->
        <!-- Section bg Wrap 2 End -->

        <!-- Facilities Section Start -->
        <!-- <div class="rs-facilities pt-100 pb-100 md-pt-70 md-pb-70">
          <div class="container">
            <div class="relative">
              <div class="img-part">
                <img src="assets/images/facilities/01_.jpg" alt="images" />
              </div>
              <div class="choose-part">
                <div class="sec-title2 md-mb-30">
                  <h2 class="title mb-0">Our Strength</h2>
                </div>
                <div class="our-facilities mt-20 mb-15">
                  <div class="icon-part">
                    <img src="assets/images/facilities/icon/1.png" alt="images" />
                  </div>
                  <div class="content-part pt-30 md-pt-0">
                    <div class="text-part">
                      <h2 class="title">Aesthetic Infrastructure with Modern Academic Facilities</h2>
                      <p class="desc">
                        Enhanced with up-to-date academic facilities, and tutored by highly qualified lecturers among whom are industry practitioners, Prime University strives to ensure high quality education in areas of Engineering, Business,  Language Studies, Architecture,  Information Technology and many more.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="our-facilities mb-40">
                  <div class="icon-part">
                    <img src="assets/images/facilities/icon/2.png" alt="images" />
                  </div>
                  <div class="content-part pt-30 md-pt-0">
                    <div class="text-part">
                      <h2 class="title">Library with Digital Facilities</h2>
                      <p class="desc">
                        The Library's website is the gateway to our e-resources and digital services. The library website aims at providing a brief introduction to the facilities and services provided by the library and other basic information pertaining to the library.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="our-facilities mb-40">
                  <div class="icon-part">
                    <img src="assets/images/facilities/icon/3.png" alt="images" />
                  </div>
                  <div class="content-part">
                    <div class="text-part">
                      <h2 class="title">Strong Faculty Line Up</h2>
                      <p class="desc">
                        Our faculty members are industry experts and professionals with advanced degrees in their relevant fields of interest.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="our-facilities mb-40">
                  <div class="icon-part">
                    <img src="assets/images/facilities/icon/5.png" alt="images" />
                  </div>
                  <div class="content-part pt-30 md-pt-0">
                    <div class="text-part">
                      <h2 class="title">Scholarship on Semester Result
                      </h2>
                      <p class="desc">
                        The Library's website is the gateway to our e-resources and digital services. The library website aims at providing a brief introduction to the facilities and services provided by the library and other basic information pertaining to the library.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="our-facilities mb-40">
                  <div class="icon-part">
                    <img src="assets/images/facilities/icon/4.jpg" alt="images" />
                  </div>
                  <div class="content-part pt-30 md-pt-0">
                    <div class="text-part">
                      <h2 class="title">Credit Transfer & Exchange Program</h2>
                      <p class="desc">
                        The Library's website is the gateway to our e-resources and digital services. The library website aims at providing a brief introduction to the facilities and services provided by the library and other basic information pertaining to the library.
                      </p>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div> -->
        <!-- Facilities Section End -->

        <!-- Testiominals Section Start -->
        <!-- <div class="rs-testimonial style3 pt-100 pb-100 md-pt-70 md-pb-70">
          <div class="container">
            <div class="sec-title2 text-center mb-50">
                <div class="sub-title">Student Reviews</div>
                <h2 class="title">Notable Alumni</h2>
            </div>
              <div class="rs-carousel owl-carousel" data-loop="true" data-items="2" data-margin="30" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="true" data-nav="false" data-nav-speed="false" data-center-mode="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="2" data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="1" data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="2" data-md-device-nav="false" data-md-device-dots="true">
                  <div class="testi-item">
                      <div class="row y-middle no-gutter">
                          <div class="col-md-4">
                              <div class="user-info">
                                  <img src="assets/images/testimonial/jorina.jpg" alt="">
                                  <h4 class="name">Saiko Najran</h4>
                                  <span class="designation">Student</span>
                              </div>
                          </div>
                          <div class="col-md-8">
                              <div class="desc">The charms of pleasure of the moment so blinded by desire that they cannot foresee the pain and trouble that are bound ensue and equal blame belongs to those who fail in their duty.</div>
                          </div>
                      </div>
                  </div>
                  <div class="testi-item">
                      <div class="row y-middle no-gutter">
                          <div class="col-md-4">
                              <div class="user-info">
                                  <img src="assets/images/pic/Library2.jpg" alt="">
                                  <h4 class="name">Jorina Khatun</h4>
                                  <span class="designation">Student</span>
                              </div>
                          </div>
                          <div class="col-md-8">
                              <div class="desc">The charms of pleasure of the moment so blinded by desire that they cannot foresee the pain and trouble that are bound ensue and equal blame belongs to those who fail in their duty.</div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
        </div> -->
        <!-- Testiominals Section End -->

        <!-- Section Gray bg Wrap start -->
        <div class="gray-bg">
            <!-- Blog Section Start -->
            <!-- <div id="rs-blog" class="rs-blog style2 pt-94 pb-100 md-pt-64 md-pb-70">
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
                  <div class="blog-item">
                    <div class="image-part">
                      <img src="assets/images/event/event/ev1.jpg" alt="" style="height: 185px; width: 100%;"/>
                    </div>
                    <div class="blog-content new-style">
                      <ul class="blog-meta">
                        <li><i class="fa fa-calendar"></i>June 15, 2019</li>
                      </ul>
                      <h3 class="title">
                        <a href="blog-single.html"
                          >University While The Lovely Valley Team Work</a
                        >
                      </h3>
                      <ul class="blog-bottom">
                        <li class="btn-part">
                          <a class="readon-arrow" href="#">Read More</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="blog-item">
                    <div class="image-part">
                      <img src="assets/images/event/event/prime.jpeg" alt="" style="height: 185px; width: 100%;"/>
                    </div>
                    <div class="blog-content new-style">
                      <ul class="blog-meta">
                        <li><i class="fa fa-calendar"></i>June 15, 2019</li>
                      </ul>
                      <h3 class="title">
                        <a href="blog-single.html"
                          >লক্ষ্য যখন আকাশ ছোঁয়া</a
                        >
                      </h3>
                      <ul class="blog-bottom">
                        <li class="btn-part">
                          <a class="readon-arrow" href="#">Read More</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="blog-item">
                    <div class="image-part">
                      <img src="assets/images/event/event/ev-2.jpg" alt="" style="height: 185px; width: 100%;"/>
                    </div>
                    <div class="blog-content new-style">
                      <ul class="blog-meta">
                        <li><i class="fa fa-calendar"></i>June 15, 2019</li>
                      </ul>
                      <h3 class="title">
                        <a href="blog-single.html"
                          >Department of CSE is going to organize a programming contest on 08 December, 2021 (Wednesday).</a
                        >
                      </h3>
                      <ul class="blog-bottom">
                        <li class="btn-part">
                          <a class="readon-arrow" href="#">Read More</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="blog-item">
                    <div class="image-part">
                      <img src="assets/images/event/event/EEE.jpg" alt="" style="height: 185px; width: 100%;"/>
                    </div>
                    <div class="blog-content new-style">
                      <ul class="blog-meta">
                        <li><i class="fa fa-calendar"></i>June 15, 2019</li>
                      </ul>
                      <h3 class="title">
                        <a href="blog-single.html"
                          >Recent Advancement in Image, Video, and Signal Processing</a
                        >
                      </h3>
                      <ul class="blog-bottom">
                        <li class="btn-part">
                          <a class="readon-arrow" href="#">Read More</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="blog-item">
                    <div class="image-part">
                      <img src="assets/images/event/event/ev-4.jpg" alt="" style="height: 185px; width: 100%;"/>
                    </div>
                    <div class="blog-content new-style">
                      <ul class="blog-meta">
                        <li><i class="fa fa-calendar"></i>June 15, 2019</li>
                      </ul>
                      <h3 class="title">
                        <a href="blog-single.html"
                          >While The Lovely Valley Team Work</a
                        >
                      </h3>
                      <ul class="blog-bottom">
                        <li class="btn-part">
                          <a class="readon-arrow" href="#">Read More</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div> -->
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
    <!-- Main content End -->

@endsection
