
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
        rs-latest-couses orange-color pt-20 pb-30 md-pt-20 md-pb-30
        "
        >
            @if (session('status'))
                <div class="alert alert-success text-center" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <div class="container">
                <div class="card">
                    <h5
                        class="card-header"
                        style="text-align: center; background: #273c66; color: #ffffff"
                    >
                        Career Opportunity
                    </h5>
                    <div class="card-body" style="margin: 0px 0px 0px 150px;">
                        <div class="row">
                            @foreach( $job as $jobs)
                            <div class="col-lg-10 mb-40">
                                <div class="course-item job-opportunity">

                                    <div class="course-info job-info">
                                        <a href="{{ url('/job_details/'.$jobs->id) }}">
                                            <h3 class="course-title">{{ $jobs->j_title }}</h3>
                                            <p class="course-title">Prime University</p>
                                            <p style="margin: 0px">{{ $jobs->location }}</p>
                                            <p style="margin: 0px">{!! $jobs->e_requirement !!} </p>
                                            <p style="margin: 0px">{{ $jobs->experience }}</p>
                                            <div class="bottom-part">
                                                <div class="btn-part">
                                                    Deadline: {{ \Carbon\Carbon::parse($jobs->d_date)->isoFormat('DD')}}
                                                    {{ \Carbon\Carbon::parse($jobs->d_date)->isoFormat('MMM')}}
                                                    {{ \Carbon\Carbon::parse($jobs->d_date)->isoFormat('YYYY')}}
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                           @endforeach
                        </div>
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
