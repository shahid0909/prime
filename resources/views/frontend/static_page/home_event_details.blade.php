
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
          pt-100
          pb-100
          md-pt-70 md-pb-70
        "
        >
            <div class="container">
                <div class="card">
                    <h5
                        class="card-header"
                        style="text-align: center; background: #273c66; color: #ffffff"
                    >{{ $home_event->title }}</h5>
                    <div class="card-body">
                        <section
                            class="
                  profile-section
                  orange-color
                  pt-100
                  pb-100
                  md-pt-70 md-pb-70
                "
                        >
                            <div class="container">
                                <div class="row clearfix">
                                    <!-- Image Section -->
                                        <div class="image-column col-lg-5 md-mb-50">
                                            <div class="inner-column mb-50 md-mb-0">
                                                <div class="image">
                                                    <img
                                                        src="{{ asset( $home_event->image) }}"
                                                        alt="HOD"
                                                        style="border: 2px solid grey"
                                                    />
                                                </div>
                                                <div class="team-content text-center"style="margin-top: 20px;">
                                                    <h4><i class="fa fa-calendar"></i>{{ \Carbon\Carbon::parse($home_event->date)->isoFormat('MMM')}} {{ \Carbon\Carbon::parse($home_event->date)->isoFormat('DD')}}, {{ \Carbon\Carbon::parse($home_event->date)->isoFormat('YYYY')}}</h4>
                                                    <h5>
                                                        <i class="fa fa-map-marker"></i> {{ $home_event->place }}
                                                    </h5>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Content Section -->
                                        <div
                                            class="
                        content-column
                        col-lg-7
                        pl-60
                        pt-50
                        md-pl-15 md-pt-0
                      "
                                        >
                                            <div class="inner-column">
                                                <h3>Details</h3>
                                                <p>
                                                    {!! $home_event->description !!}
                                                </p>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
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
