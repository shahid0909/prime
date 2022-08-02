@extends('frontend.layout.master')

 @section('header')
         @include('frontend.layout.partials.header')
    @endsection

@section('content')
<!-- Main content Start -->
<div class="main-content">
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
                    background-color: #283d67; border-color: #283d67;
                    margin-bottom: 20px;
                  "
                >{{ $admin_dash->o_name }}</span
                >
                    </h4>
                </div>
            </div>
            
            <div class="row">
                @foreach( $mememberarray as $members)
                    @foreach($members as $key=>$member)
                      @php
                          $emailarray =json_decode($member->email);
                      @endphp
                @if( $member->designation[0].$member->designation[1] !="PA" &&  $member->designation[0].$member->designation[1] !="PS")
                <div class="col-lg-8 mb-40" style="margin:0 auto;margin-bottom:10px;">
                    <div class="course-item" style="background: #cae4fb;">
                        <div class="course-image">
                            <a>
                                <img
                                    src="{{ asset($member->image) }}"
                                />
                            </a>
                        </div>
                        <div class="course-info">
                            <h3 class="course-title">
                                {{ $member->e_name }}
                            </h3>
                            <p style="margin: 0px">{{ $member->designation }}</p>
                            <p style="margin: 0px">Email :
                                @foreach( $emailarray as $key)
                                <span> {{   $key}} ,</span>
                                @endforeach
                            </p>
                        </div>
                    </div>
                </div>
                @endif
                 @if( $member->designation[0].$member->designation[1] =="PA" ||  $member->designation[0].$member->designation[1] =="PS")      
                <div class="col-lg-8 mb-40" style="margin-top:10px;padding:0px;margin: 0 auto;">
                    <div class="col-lg-12 mb-40" style="padding: 0px; margin: 0">
                            <div class="row grid-area">
                                <div class="col-md-4">
                                </div>
                                <div class="col-md-8">
                                    <div class="col-lg-12 mb-40" style="margin:0 auto;margin-bottom:10px;">
                                        <div class="" style="background: #cae4fb;">
                                            <div class="row" style="padding: 20px;">
                                                <div class="col-md-4">
                                                    <a>
                                                        <img src="{{  asset($member->image) }}" style="padding: 0px; border-radius: 10px; background: white; height: 120px; width: auto;"
                                                        />
                                                    </a>
                                                    
                                                </div>
                                                <div class="course-info col-md-8" style="text-align: right; padding-right: 10%; margin-top: 5%;">
                                                    <h3 class="course-title" style="font-size: 20px;">
                                                        {{ $member->e_name }}
                                                    </h3>
                                                    <p style="margin: 0px">{{ $member->designation }}</p>
                                                    <p style="margin: 0px">Email :
                                                        @foreach( $emailarray as $key)
                                                        <span> {{   $key}} </span>
                                                        @endforeach
                                                    </p>
                                                </div>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
                @endforeach
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
</div>
<!-- Main content End -->

@endsection
