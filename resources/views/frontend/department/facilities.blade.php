@extends('frontend.department.master')

@section('header')

    @include('frontend.department.layout.partials.header')

@endsection

@section('content')

    <!-- Main content Start -->
    <div class="main-content">
        <!-- Facility Section Start -->
        <div class="rs-gallery home11-style pb-100 pt-100 md-pb-70">
            <div class="container">
                <div class="row">
                    @foreach($facilities as $facilitie)
                    <div class="col-lg-12 pt-20 pb-20 md-mb-30" style="box-shadow: 0px 0px 5px 0px #ccc; border-radius: 10px; margin-bottom: 10px;">
                        <div class="gallery-part">
                            <div class="gallery-img">
                                <div class="row">
                                    <div class="col-md-4"><img src="{{ asset( $facilitie->image ) }}" style="height:300px" alt="image-{{ $facilitie->title }}" /></div>
                                    <div class="col-md-8">
                                        <h2 class="title-part">{{ $facilitie->title }}</h2>
                                        <p>
                                            {!! $facilitie->description !!}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- Facility  Section Start -->

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
