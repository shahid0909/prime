
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
                <h3>Departmental CLUB</h3>
                <div class="row">
                    @foreach( $clubs as  $club)
                    <div class="col-lg-4 pt-20 pb-20 md-mb-30">
                        <a href="{{ url('/department/clubs/description/'. $department->id.'/'.$club->id ) }}">
                            <div class="gallery-part">
                                <div class="gallery-img">
                                    <img src="{{ asset( $club->image ) }}" alt="" />
                                    <div class="content-part">
                                        <h2 class="title">{{ $club->title }}</h2>
                                    </div>
                                    <div class="gallery-info">
                                        <h2 class="title-part">{{ $club->title }}</h2>
                                        <p>
                                            {!! $club->description !!}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </a>
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
