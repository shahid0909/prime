@extends('frontend.department.master')

@section('header')

    @include('frontend.department.layout.partials.header')

@endsection

@section('content')

    <section
        class="profile-section orange-color pt-100 pb-100 md-pt-70 md-pb-70"
    >
        <div class="container">

            @foreach( $member_info as $member_in)

                @php
                    $emailarray =json_decode($member_in->email);

                    $phonearray =json_decode($member_in->phone);
                @endphp


            <div class="row clearfix">
                <!-- Image Section -->
                <div class="image-column col-lg-5 md-mb-50">
                    <div class="inner-column mb-50 md-mb-0">
                        <div class="image" style="text-align:center">
                            <img
                                src="{{ url($member_in->image) }}"
                                alt=""
                                style="border: 2px solid grey;height:350px;width:70%"
                            />
                        </div>
                        <div class="team-content text-center" style="margin-top: 20px;">
                            <h3 style="margin: 0; text-align: center">
                                {{ $member_in->m_name }}
                            </h3>
                            <div class="text" style="margin: 0; text-align: center">
                                {{ $member_in->designation }} {{ $member_in->adi_designation }}
                            </div>
                            <p style="margin: 0; text-align: center">
                                {!! $member_in->edu_que !!}
                            </p>

                            <ul class="personal-info" style="margin: 0; text-align: left">
                                <li class="email">
                                    <span><i class="glyph-icon flaticon-email"> </i> </span>
                                    <a href="#">
                                        @foreach( $emailarray as $key)
                                            {{   $key}}
                                        @endforeach</a>
                                </li>
                                <li class="phone">
                                    <span><i class="glyph-icon flaticon-call"></i></span>
                                    <a href="tel:880-2-9004957">
                                        @foreach( $phonearray as $key)
                                            {{   $key}}
                                        @endforeach
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Content Section -->
                <div class="content-column col-lg-7 pl-60 pt-10 md-pl-15 md-pt-0">
                    <div class="inner-column">
                        <h5>{{ $member_in->m_name }}</h5>
                        <!--<p>-->
                        <!--    {!! $member_in->about_me !!}-->
                        <!--</p>-->
                        <div class="col-lg-12">
                            <div class="content-part">
                                <!-- Faq Section Start -->
                                <div
                                    class="
                        rs-faq-part
                        style1
                        orange-color
                        pt-10
                        pb-20
                        md-pt-20 md-pb-20
                      "
                                >
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-12 padding-0">
                                                <div class="main-part">
                                                    <div class="faq-content">
                                                        <div id="accordion" class="accordion">
                                                            <!--<div class="card">-->
                                                            <!--    <div class="card-header">-->
                                                            <!--        <a-->
                                                            <!--            class="card-link"-->
                                                            <!--            data-toggle="collapse"-->
                                                            <!--            href="#collapseOne"-->
                                                            <!--        >Research Area</a-->
                                                            <!--        >-->
                                                            <!--    </div>-->
                                                            <!--    <div-->
                                                            <!--        id="collapseOne"-->
                                                            <!--        class="collapse show"-->
                                                            <!--        data-parent="#accordion"-->
                                                            <!--    >-->
                                                            <!--        <div class="card-body">-->
                                                            <!--            <p>{!! $member_in->research_area !!} </p>-->
                                                            <!--        </div>-->
                                                            <!--    </div>-->
                                                            <!--</div>-->
                                                            <div class="card">
                                                                <div class="card-header">
                                                                    <a
                                                                        class="card-link collapsed"
                                                                        data-toggle="collapse"
                                                                        href="#collapseTwo"
                                                                        aria-expanded="false"
                                                                    >Research Interest</a
                                                                    >
                                                                </div>
                                                                <div
                                                                    id="collapseTwo"
                                                                    class="collapse"
                                                                    data-parent="#accordion"

                                                                >
                                                                    <div class="card-body">
                                                                        <p>
                                                                            {!! $member_in->research_interest !!}
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="card">
                                                                <div class="card-header">
                                                                    <a
                                                                        class="card-link collapsed"
                                                                        data-toggle="collapse"
                                                                        href="#collapseThree"
                                                                        aria-expanded="false"
                                                                    >Publications</a
                                                                    >
                                                                </div>
                                                                <div
                                                                    id="collapseThree"
                                                                    class="collapse"
                                                                    data-parent="#accordion"

                                                                >
                                                                    <div class="card-body">
                                                                        <p>
                                                                            {!! $member_in->publication !!}
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="card">
                                                                <div class="card-header">
                                                                    <a
                                                                        class="card-link collapsed"
                                                                        data-toggle="collapse"
                                                                        href="#collapsefour"
                                                                        aria-expanded="false"
                                                                    >Experience</a
                                                                    >
                                                                </div>
                                                                <div
                                                                    id="collapsefour"
                                                                    class="collapse"
                                                                    data-parent="#accordion"

                                                                >
                                                                    <div class="card-body">
                                                                        <div class="card">
                                                                            <p>
                                                                                {!! $member_in->experience !!}
                                                                            </p>

                                                                            <hr />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- faq Section Start -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>

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
