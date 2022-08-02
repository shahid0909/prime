

@extends('frontend.layout.master')


@section('header')
    @include('frontend.layout.partials.header')
@endsection

@section('content')
    <div class="main-content">
        <!-- Under Construction Section -->

        <div style=" display: block; margin-left: auto; margin-right: auto; width: 50%;">
            <img src="{{ asset('assets/images/under_construction.png') }}">
        </div>
        <!-- Under Construction Section -->
        <div class="gray-bg">
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
