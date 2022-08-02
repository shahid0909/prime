
@extends('frontend.layout.master')

 @section('header')
         @include('frontend.layout.partials.header')
    @endsection

@section('content')

    <!-- Main content Start -->
    <div class="main-content">
        <!-- Popular Course Section Start -->
        <div
            class="
          rs-popular-courses
          style1
          course-view-style
          orange-color
          rs-inner-blog
          white-bg
          pt-50
          pb-100
          md-pt-70 md-pb-70
        "
        >
            <div class="container">
                <div class="card">
                    <h5
                        class="card-header"
                        style="text-align: center; background: #273c66; color: #ffffff"
                    >
                        {{ $school->title }}
                    </h5>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-10" style="margin: 0 auto">
                                <div class="col-md-5" style="float: left;">
                                    <img class="mt-30"
                                         src="{{ asset($school->image) }}"
                                         alt=""
                                         style="height: 200px; width: 80%"
                                    />
                                </div>
                                <div class="col-md-7" style="float: right;">
                                    <div class="blog-desc mb-20 mt-20">
                                        <p><b> {!! $school->description !!}</b></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @foreach($school_details as $school_detail)
                <div class="card mt-50">
                    <h5
                        class="card-header"
                        style="text-align: center; background: #273c66; color: #ffffff"
                    >
                        {{ $school_detail->title }}
                    </h5>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-10 pr-50 md-pr-15" style="margin: 0 auto">
                                <table class="table table-hover table-bordered table-responsive" style="display: inline-table !important;">
                                    <tbody>
                                    <tr>
                                        <td class="table_font">Duration of the course	</td>
                                        <td class="table_font"> {{ $school_detail->duration_course }}</td>
                                    </tr>
                                    </tbody>
                                    <tbody>
                                    <tr>
                                        <td class="table_font">Duration of class</td>
                                        <td class="table_font"> {{ $school_detail->duration_class }}</td>
                                    </tr>
                                    </tbody>
                                    <tbody>
                                    <tr>
                                        <td class="table_font">	Time</td>
                                        <td class="table_font"> {{ $school_detail->time }}</td>
                                    </tr>
                                    </tbody>
                                    <tbody>
                                    <tr>
                                        <td class="table_font">	Weekly class day</td>
                                        <td class="table_font"> {{ $school_detail->weekly_class }}</td>
                                    </tr>
                                    </tbody>
                                    <tbody>
                                    <tr>
                                        <td class="table_font">Course Status</td>
                                        <td class="table_font"> {{ $school_detail->course_status }}</td>
                                    </tr>
                                    </tbody>
                                    <tbody>
                                    <tr>
                                        <td class="table_font">	Course Fee</td>
                                        <td class="table_font"> {{ $school_detail->course_fee }}</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                    @endforeach

            </div>
        </div>
        <!-- Popular Course Section End -->
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
