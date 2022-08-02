@extends('frontend.layout.master')


 @section('header')
         @include('frontend.layout.partials.header')
    @endsection
@section('content')


    <!-- Popular Courses Section Start -->
    <div class="rs-latest-couses orange-color pt-20 pb-30 md-pt-20 md-pb-30">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-xs-12">
                    <h4>
                <span
                    class="btn btn-info btn-block responsive-width"
                    style="
                    font-family: 'Rubik', sans-serif;
                    font-size: 16px;
                    text-transform: uppercase;
                    white-space: normal;
                    background-color: #283d67;
                    border-color: #283d67;
                  "
                >Former Vice Chanchelor</span
                >
                    </h4>
                </div>
            </div>
            <div class="row">
                @foreach( $chancellor as $chancellors)
                    <div class="col-lg-8 mb-40" style="margin: 0px 210px 40px 210px">
                        <div class="course-item">
                            <div class="course-image">
                                <a href="#">
                                    <img src="{{ $chancellors->image }}" alt="images" />
                                </a>
                            </div>
                            <div class="course-info">
                                <h3 class="course-title">
                                    <a href="#"> {{ $chancellors->f_name }} </a>
                                </h3>
                                <p style="margin: 0px">Tenure : {{ $chancellors->s_date }} TO {{ $chancellors->e_date }}</p>
                                <p style="margin: 0px">Prime University</p>

                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Popular Courses Section End -->



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
    @endsection


