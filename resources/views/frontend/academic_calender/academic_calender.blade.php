
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
                        Academic Calendar
                    </h5>
                    <div class="card-body">
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
                                            <th scope="col">Session</th>
                                            <th scope="col">View</th>
                                            <th scope="col">Downloads</th>
                                        </tr>
                                        @foreach($aca_calender as $key=>$mission)
                                        <tr>
                                            <th>{{ $key+1}}</th>
                                            <td>{{ $mission->startsession }}</td>
                                            <td align="center">
                                                <a
                                                    target="_blank"
                                                    href="{{ url( $mission->upload_file ) }}"
                                                >
                                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                                </a>
                                            </td>
                                            <td align="center">
                                                <a
                                                    target="_blank"
                                                    href="{{ url( $mission->upload_file ) }}"
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
