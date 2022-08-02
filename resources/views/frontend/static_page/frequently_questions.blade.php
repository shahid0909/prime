

@extends('frontend.layout.master')


@section('header')
    @include('frontend.layout.partials.header')
@endsection

@section('content')

    <!-- Main content Start -->
    <div class="main-content">
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
                  <li
                    class="nav-item tab-btns"
                    style="width: 30%; margin-right: 4%; margin-bottom: 20px"
                  >
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
                        padding: 25px 0px;
                        border-radius: 20px;
                      "
                      >About Admission</a
                    >
                  </li>
                  <li
                    class="nav-item tab-btns"
                    style="width: 30%; margin-right: 4%; margin-bottom: 20px"
                  >
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
                        padding: 25px 0px;
                        border-radius: 20px;
                      "
                      >About Academic Affairs</a
                    >
                  </li>
                  <li
                    class="nav-item tab-btns"
                    style="width: 30%; margin-right: 10px; margin-bottom: 20px"
                  >
                    <a
                      class="nav-link tab-btn"
                      id="prod-instructor-tab"
                      data-toggle="tab"
                      href="#prod-instructor"
                      role="tab"
                      aria-controls="prod-instructor"
                      aria-selected="false"
                      style="
                        font-size: 15px;
                        min-height: 75px;
                        padding: 25px 0px;
                        border-radius: 20px;
                      "
                      >About Accounts</a
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
                    <div class="content white-bg">
                      <!-- Cource Overview -->
                      <div class="course-overview">
                        <div
                          class="rs-testimonial style2 pt-10 pb-10 md-pt-10 md-pb-10"
                        >
                          <div class="container">
                            <div class="row">
                              <div class="col-lg-12 md-mb-30">
                                <div
                                  class="donation-part"
                                  style="
                                    background-image: url('assets/images/counter/bg1.png');
                                    padding: 15px;
                                  "
                                >
                                  <!--<h3 class="title">Admission</h3>-->
                                 
                                  <div class="inner-box">
                                    <h4>
                                      The following lapses shall constitute
                                      misconduct on the part of a faculty
                                      member:
                                    </h4>
                                    <ul class="review-list">
                                      <li>
                                        Willful failure to perform the academic
                                        duties assigned to him/her in accordance
                                        with the Act, Statutes and Ordinances.
                                      </li>
                                      <li>
                                        Victimization of and discrimination
                                        against students, colleagues and other
                                        staff.
                                      </li>
                                      <li>
                                        Inciting of student(s) against other
                                        student(s), colleague(s), the University
                                        administration and its employee(s). A
                                        faculty member, however, shall have the
                                        right to express his/her opinion and
                                        ventilate differences on matters of
                                        principle in meetings, seminars or
                                        formal assemblies of students.
                                      </li>
                                      <li>
                                        Raising question of caste, creed,
                                        religion, race or sex in his/her
                                        relationship with students, colleagues
                                        and other staff.
                                      </li>
                                      <li>
                                        Refusal to carry out the decisions of
                                        competent authorities/bodies and
                                        officers of the University in due
                                        exercise of their functions, made in
                                        accordance with the Act, Statutes and
                                        Ordinances. A faculty member shall,
                                        however, have the right to express
                                        his/her difference with the policies and
                                        decisions of the authorities and
                                        officers of the
                                        University.Notwithstanding anything
                                        herein before contained, bona fide
                                        criticism or expression of opinion by
                                        any faculty member shall not constitute
                                        misconduct.
                                      </li>
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
                  <div
                    class="tab-pane fade"
                    id="prod-curriculum"
                    role="tabpanel"
                    aria-labelledby="prod-curriculum-tab"
                  >
                    <div class="content white-bg">
                      <!-- Cource Overview -->
                      <div class="course-overview">
                        <div
                          class="rs-testimonial style2 pt-10 pb-10 md-pt-10 md-pb-10"
                        >
                          <div class="container">
                            <div class="row">
                              <div class="col-lg-12 md-mb-30">
                                <div
                                  class="donation-part"
                                  style="
                                    background-image: url('assets/images/counter/bg2.png');
                                    padding: 15px;
                                  "
                                >
                                  <!--<h3 class="title">Academic Affairs</h3>-->
                                  <!--<h4>Code of Conduct for Executives & Staff</h4>-->
                                  <div class="inner-box">
                                    <h4>
                                      The following lapses shall constitute
                                      misconduct on the part of a faculty
                                      member:
                                    </h4>
                                    <ul class="review-list">
                                      <li>
                                        Willful failure to perform the academic
                                        duties assigned to him/her in accordance
                                        with the Act, Statutes and Ordinances.
                                      </li>
                                      <li>
                                        Victimization of and discrimination
                                        against students, colleagues and other
                                        staff.
                                      </li>
                                      <li>
                                        Inciting of student(s) against other
                                        student(s), colleague(s), the University
                                        administration and its employee(s). A
                                        faculty member, however, shall have the
                                        right to express his/her opinion and
                                        ventilate differences on matters of
                                        principle in meetings, seminars or
                                        formal assemblies of students.
                                      </li>
                                      <li>
                                        Raising question of caste, creed,
                                        religion, race or sex in his/her
                                        relationship with students, colleagues
                                        and other staff.
                                      </li>
                                      <li>
                                        Refusal to carry out the decisions of
                                        competent authorities/bodies and
                                        officers of the University in due
                                        exercise of their functions, made in
                                        accordance with the Act, Statutes and
                                        Ordinances. A faculty member shall,
                                        however, have the right to express
                                        his/her difference with the policies and
                                        decisions of the authorities and
                                        officers of the
                                        University.Notwithstanding anything
                                        herein before contained, bona fide
                                        criticism or expression of opinion by
                                        any faculty member shall not constitute
                                        misconduct.
                                      </li>
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
                  <div
                    class="tab-pane fade"
                    id="prod-instructor"
                    role="tabpanel"
                    aria-labelledby="prod-instructor-tab"
                  >
                    <div class="content white-bg">
                      <!-- Cource Overview -->
                      <div class="course-overview">
                        <div
                          class="rs-testimonial style2 pt-10 pb-10 md-pt-10 md-pb-10"
                        >
                          <div class="container">
                            <div class="row">
                              <div class="col-lg-12 md-mb-30">
                                <div
                                  class="donation-part"
                                  style="
                                    background-image: url('assets/images/counter/bg3.png');
                                    padding: 15px;
                                  "
                                >
                                  <!--<h3 class="title">Accounts</h3>-->
                                  <!--<h3 class="title">Code of Conduct for Student</h3>-->
                                 <div class="inner-box">
                                    <h4>
                                      The following lapses shall constitute
                                      misconduct on the part of a faculty
                                      member:
                                    </h4>
                                    <ul class="review-list">
                                      <li>
                                        Willful failure to perform the academic
                                        duties assigned to him/her in accordance
                                        with the Act, Statutes and Ordinances.
                                      </li>
                                      <li>
                                        Victimization of and discrimination
                                        against students, colleagues and other
                                        staff.
                                      </li>
                                      <li>
                                        Inciting of student(s) against other
                                        student(s), colleague(s), the University
                                        administration and its employee(s). A
                                        faculty member, however, shall have the
                                        right to express his/her opinion and
                                        ventilate differences on matters of
                                        principle in meetings, seminars or
                                        formal assemblies of students.
                                      </li>
                                      <li>
                                        Raising question of caste, creed,
                                        religion, race or sex in his/her
                                        relationship with students, colleagues
                                        and other staff.
                                      </li>
                                      <li>
                                        Refusal to carry out the decisions of
                                        competent authorities/bodies and
                                        officers of the University in due
                                        exercise of their functions, made in
                                        accordance with the Act, Statutes and
                                        Ordinances. A faculty member shall,
                                        however, have the right to express
                                        his/her difference with the policies and
                                        decisions of the authorities and
                                        officers of the
                                        University.Notwithstanding anything
                                        herein before contained, bona fide
                                        criticism or expression of opinion by
                                        any faculty member shall not constitute
                                        misconduct.
                                      </li>
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
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End intro Courses -->

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
