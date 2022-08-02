

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
                    >
                        Important Date and Deadlines
                    </h5>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-10 pr-50 md-pr-15" style="margin: 0 auto">
                                <div class="blog-desc mb-20 mt-20">
                                    <table class="table table-hover table-bordered">
                                        <tr>
                                            <th>Title</th>
                                            <th>Start Date</th>
                                            <th>Deadlines</th>
                                        </tr>
                                        @foreach($date as $dates)
                                        <tr>
                                            <td>{{ $dates->i_title }}</td>
                                            <td>{{ \Carbon\Carbon::parse($dates->s_date)->isoFormat('Do')}} {{ \Carbon\Carbon::parse($dates->s_date)->isoFormat('MMM')}} {{ \Carbon\Carbon::parse($dates->s_date)->isoFormat('YYYY')}}</td>
                                            <td>{{ \Carbon\Carbon::parse($dates->e_date)->isoFormat('Do')}} {{ \Carbon\Carbon::parse($dates->e_date)->isoFormat('MMM')}} {{ \Carbon\Carbon::parse($dates->e_date)->isoFormat('YYYY')}}</td>
                                        </tr>
                                            @endforeach
                                    </table>
                                </div>
                            </div>
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
