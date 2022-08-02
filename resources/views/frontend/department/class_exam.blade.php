@extends('frontend.department.master')

@section('header')

    @include('frontend.department.layout.partials.header')

@endsection

@section('content')

    <!-- Main content Start -->
    <div class="main-content">
        <!-- Popular Course Section Start -->
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
                        style="width: 46%; margin-right: 4%; margin-bottom: 20px"
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
                          >Class Routine</a
                        >
                      </li>
                      <li
                        class="nav-item tab-btns"
                        style="width: 46%; margin-right: 4%; margin-bottom: 20px"
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
                          >Exam Routine</a
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
                                        <div class="row">
                                          <div class="col-lg-12 pr-50 md-pr-15" style="margin: 0 auto">
                                              <div class="table-responsive">
                                                  <table class="table table-bordered">
                                                      <thead
                                                          class="thead-light"
                                                          style="background: #d5eaca; color: #15640b"
                                                      ></thead>
                                                      <tbody>
                                                      <tr>
                                                          <th scope="col">#</th>
              
                                                          <th scope="col">Title</th>
                                                          <th scope="col">View</th>
                                                          <th scope="col">Downloads</th>
                                                      </tr>
                                                      @foreach($classroute as $key=>$mission)
              
                                                      <tr>
                                                          <th>{{ $key+1}}</th>
                                                          <td>{{ $mission->title }}</td>
                                                          <td align="center">
                                                              <a
                                                                  target="_blank"
                                                                  href="{{ url($mission->file) }}"
                                                              >
                                                                  <i class="fa fa-eye" aria-hidden="true"></i>
                                                              </a>
                                                          </td>
                                                          <td align="center">
                                                              <a
                                                                  target="_blank"
                                                                  href="{{ url($mission->file) }}"
                                                              >
                                                                  <i class="fa fa-download" aria-hidden="true"></i>
                                                              </a>
                                                          </td>
                                                      </tr>
              
                                                          @endforeach
                                                      </tbody>
                                                  </table>
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
                                        <div class="row">
                                          <div class="col-lg-12 pr-50 md-pr-15" style="margin: 0 auto">
                                              <div class="table-responsive">
                                                  <table class="table table-bordered">
                                                      <thead
                                                          class="thead-light"
                                                          style="background: #d5eaca; color: #15640b"
                                                      ></thead>
                                                      <tbody>
                                                      <tr>
                                                          <th scope="col">#</th>
              
                                                          <th scope="col">Title</th>
                                                          <th scope="col">View</th>
                                                          <th scope="col">Downloads</th>
                                                      </tr>
                                                      @foreach($examroute as $key=>$mission)
              
                                                      <tr>
                                                          <th>{{ $key+1}}</th>
                                                          <td>{{ $mission->title }}</td>
                                                          <td align="center">
                                                              <a
                                                                  target="_blank"
                                                                  href="{{ url($mission->file) }}"
                                                              >
                                                                  <i class="fa fa-eye" aria-hidden="true"></i>
                                                              </a>
                                                          </td>
                                                          <td align="center">
                                                              <a
                                                                  target="_blank"
                                                                  href="{{ url($mission->file) }}"
                                                              >
                                                                  <i class="fa fa-download" aria-hidden="true"></i>
                                                              </a>
                                                          </td>
                                                      </tr>
              
                                                          @endforeach
                                                      </tbody>
                                                  </table>
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
                </div>
              </div>
            </div>
          </section>
        <!-- Popular Course Section End -->

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
