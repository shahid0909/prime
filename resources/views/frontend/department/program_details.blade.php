@extends('frontend.department.master')

@section('header')

    @include('frontend.department.layout.partials.header')

@endsection

@section('content')

    <!-- Main content Start -->
    <div class="main-content">
        <!-- Intro Courses -->
        <section class="intro-section gray-bg pt-94 pb-100 md-pt-64 md-pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-md-6" style="margin: 0 auto; padding: 0px 0px 40px 0px;">
                        <div class="card">
                            <h5
                                class="card-header"
                                style="text-align: center; background: #273c66; color: #ffffff"
                            > Program Summary </h5>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-12 pr-50 md-pr-15" style="margin: 0 auto">
                                        <div class="table-responsive">
                                            <table class="table table-striped">
                                                <thead
                                                    class="thead-light"
                                                    style="background: #d5eaca; color: #15640b"
                                                ></thead>
                                                <tbody>
                                                <tr>
                                                    <td>Total Credits Required for Degree:</td>
                                                    <td align="center">{{ $acaprogram->credits }} credits</td>
                                                </tr>
                                                <tr>
                                                    <td>Total Duration for Degree:</td>
                                                    <td align="center">	{{ $acaprogram->m_year }} year(s)</td>
                                                </tr>
                                                <!--<tr>-->
                                                <!--    <td>Minimum Courses Required for Degree:</td>-->
                                                <!--    <td align="center">	{{ $acaprogram->m_course }} course(s)</td>-->
                                                <!--</tr>-->
                                                <tr>
                                                    <td>Total CGPA Required for Degree:</td>
                                                    <td align="center">	{{ $acaprogram->cgpa }}</td>
                                                </tr>
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
                                <li class="nav-item tab-btns">
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
                                    >Program Objective</a
                                    >
                                </li>
                                <li class="nav-item tab-btns">
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
                                    >Program Outcomes</a
                                    >
                                </li>
                                <li class="nav-item tab-btns">
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
                        margin-bottom: 20px;
                      "
                                    >Curriculam Structure</a
                                    >
                                </li>
                                <li class="nav-item tab-btns">
                                    <a
                                        class="nav-link tab-btn"
                                        id="prod-faq-tab"
                                        data-toggle="tab"
                                        href="#prod-faq"
                                        role="tab"
                                        aria-controls="prod-faq"
                                        aria-selected="false"
                                        style="
                        font-size: 15px;
                        min-height: 75px;
                        margin-bottom: 20px;
                      "
                                    >Course Distribution</a
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
                                    <div class="content white-bg pt-30">
                                        <!-- Cource Overview -->
                                        <div class="course-overview">
                                            <div class="inner-box">
                                                <!-- <h4>Educavo Course Details</h4> -->
                                                <h3>Program Objective<h3>
                                                <p>
                                                   {!! $acaprogram->p_objective	 !!}
                                                </p>

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
                                    <div class="content white-bg pt-30">
                                        <!-- Cource Overview -->
                                        <div class="course-overview">
                                            <div class="inner-box">
                                                <h3>Program Outcome<h3>
                                                        <p>{!! $acaprogram->p_outcome !!}
                                                        </p>
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
                                    <div class="content white-bg pt-30">
                                        <div class="course-overview">
                                            <div class="inner-box">
                                                <h3>Curriculum Structure<h3>
                                                        <p>{!! $acaprogram->c_structure !!}
                                                        </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="tab-pane fade"
                                    id="prod-faq"
                                    role="tabpanel"
                                    aria-labelledby="prod-faq-tab"
                                >
                                    <div class="content white-bg pt-30">
                                        <div class="course-overview">
                                            <div class="inner-box">
                                                <h3>Course Distribution<h3>
                                                        <p>{!! $acaprogram->c_distribution !!}
                                                        </p>
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
