@extends('frontend.layout.master')


@section('header')
    @include('frontend.layout.partials.header')
@endsection

@section('content')

    <!-- Main content Start -->
    <div class="main-content">

        <!-- Photo Gallery Section -->
        <div class="col-lg-12 mt-50">
            <div class="container">
                <div class="card">
                    <h5
                        class="card-header"
                        style="text-align: center; background: #273c66; color: #ffffff"
                    >
                        Photo Gallery
                    </h5>
                    <div class="card-body">
                        <!-- Faq Section Start -->
                        <div
                            class="rs-faq-part style1 orange-color pt-10 pb-20 md-pt-20 md-pb-20"
                        >
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12 padding-0">
                                        <div class="main-part" style="background-color: #ffffff">
                                            <div
                                                class="faq-content"
                                                style="
                          border-radius: 10px 10px 10px 10px;
                          box-shadow: 0px 0px 15px grey;
                        "
                                            >
                                                @foreach($photo_gallery as $photo_gallerys)
                                                <div id="accordion" class="accordion">
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <a
                                                                class="card-link"
                                                                data-toggle="collapse"
                                                                href="#collapseOne_{{$photo_gallerys->id}}"
                                                            >{{ $photo_gallerys->title }}</a>
                                                        </div>
                                                        <div
                                                            id="collapseOne_{{$photo_gallerys->id}}"
                                                            class="collapse show"
                                                            data-parent="#accordion"
                                                        >
                                                            <!-- overflow: scroll; -->
                                                            <div class="card-body" style="max-width: 100%">
                                                                <div
                                                                    class="rs-gallery pt-10 pb-10 md-pt-10 md-pb-10"
                                                                >
                                                                    <div class="container">
                                                                        <div class="row margin-0">


                                                                            @php
                                                                                $emailarray =json_decode($photo_gallerys->image);

                                                                            @endphp

                                                                            @foreach($emailarray as $key => $email_name)
                                                                            <div
                                                                                class="col-lg-3 mb-0 padding-0 col-md-4"
                                                                            >
                                                                                <div class="gallery-img">
                                                                                    <a
                                                                                        class="image-popup"
                                                                                        href="{{ asset($email_name) }}"
                                                                                        ><img
                                                                                            src="{{ asset($email_name) }}"
                                                                                            alt=""
                                                                                        /></a>
                                                                                </div>
                                                                            </div>
                                                                            @endforeach

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endforeach
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
        <!-- Content Section end -->

        <!-- Student Activities in Pictorials Section -->
        <div class="col-lg-12 mt-50">
            <div class="container">
                <div class="card">
                    <h5
                        class="card-header"
                        style="text-align: center; background: #273c66; color: #ffffff"
                    >
                        Student Activities in Pictorials
                    </h5>
                    <div class="card-body">
                        <!-- Faq Section Start -->
                        <div
                            class="rs-faq-part style1 orange-color pt-10 pb-20 md-pt-20 md-pb-20"
                        >
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12 padding-0">
                                        <div class="main-part" style="background-color: #ffffff">
                                            <div
                                                class="faq-content"
                                                style="
                          border-radius: 10px 10px 10px 10px;
                          box-shadow: 0px 0px 15px grey;
                        "
                                            >
                                                @foreach($activities as $activitiess)
                                                    <div id="accordion" class="accordion">
                                                        <div class="card">
                                                            <div class="card-header">
                                                                <a
                                                                    class="card-link"
                                                                    data-toggle="collapse"
                                                                    href="#collapseOne_{{$activitiess->id}}"
                                                                >{{ $activitiess->title }}</a>
                                                            </div>
                                                            <div
                                                                id="collapseOne_{{$activitiess->id}}"
                                                                class="collapse show"
                                                                data-parent="#accordion"
                                                            >
                                                                <!-- overflow: scroll; -->
                                                                <div class="card-body" style="max-width: 100%">
                                                                    <div
                                                                        class="rs-gallery pt-10 pb-10 md-pt-10 md-pb-10"
                                                                    >
                                                                        <div class="container">
                                                                            <div class="row margin-0">


                                                                                @php
                                                                                    $emailarrays =json_decode($activitiess->image);

                                                                                @endphp

                                                                                @foreach($emailarrays as $key => $email_names)
                                                                                    <div
                                                                                        class="col-lg-3 mb-0 padding-0 col-md-4"
                                                                                    >
                                                                                        <div class="gallery-img">
                                                                                            <a
                                                                                                class="image-popup"
                                                                                                href="{{ asset($email_names) }}"
                                                                                            ><img
                                                                                                    src="{{ asset($email_names) }}"
                                                                                                    alt=""
                                                                                                /></a>
                                                                                        </div>
                                                                                    </div>
                                                                                @endforeach

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
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
        <!-- Content Section end -->

        <!-- Bangabandhu Cerner Section -->
        <!--<div class="col-lg-12 mt-50">-->
        <!--    <div class="container">-->
        <!--        <div class="card">-->
        <!--            <h5-->
        <!--                class="card-header"-->
        <!--                style="text-align: center; background: #273c66; color: #ffffff"-->
        <!--            >-->
        <!--                Bangabandhu Cerner-->
        <!--            </h5>-->
        <!--            <div class="card-body">-->
                        <!-- Faq Section Start -->
        <!--                <div-->
        <!--                    class="rs-faq-part style1 orange-color pt-10 pb-20 md-pt-20 md-pb-20"-->
        <!--                >-->
        <!--                    <div class="container">-->
        <!--                        <div class="row">-->
        <!--                            <div class="col-lg-12 padding-0">-->
        <!--                                <div class="main-part" style="background-color: #ffffff">-->
        <!--                                    <div-->
        <!--                                        class="faq-content"-->
        <!--                                        style="-->
        <!--                  border-radius: 10px 10px 10px 10px;-->
        <!--                  box-shadow: 0px 0px 15px grey;-->
        <!--                "-->
        <!--                                    >-->
        <!--                                        @foreach($bangabandhu as $bangabandhus)-->
        <!--                                            <div id="accordion" class="accordion">-->
        <!--                                                <div class="card">-->
        <!--                                                    <div class="card-header">-->
        <!--                                                        <a-->
        <!--                                                            class="card-link"-->
        <!--                                                            data-toggle="collapse"-->
        <!--                                                            href="#collapseOne_{{$bangabandhus->id}}"-->
        <!--                                                        >{{ $bangabandhus->title }}</a>-->
        <!--                                                    </div>-->
        <!--                                                    <div-->
        <!--                                                        id="collapseOne_{{$bangabandhus->id}}"-->
        <!--                                                        class="collapse show"-->
        <!--                                                        data-parent="#accordion"-->
        <!--                                                    >-->
                                                                <!-- overflow: scroll; -->
        <!--                                                        <div class="card-body" style="max-width: 100%">-->
        <!--                                                            <div-->
        <!--                                                                class="rs-gallery pt-10 pb-10 md-pt-10 md-pb-10"-->
        <!--                                                            >-->
        <!--                                                                <div class="container">-->
        <!--                                                                    <div class="row margin-0">-->


        <!--                                                                        @php-->
        <!--                                                                            $emailarrays =json_decode($bangabandhus->image);-->

        <!--                                                                        @endphp-->

        <!--                                                                        @foreach($emailarrays as $key => $email_na)-->
        <!--                                                                            <div-->
        <!--                                                                                class="col-lg-3 mb-0 padding-0 col-md-4"-->
        <!--                                                                            >-->
        <!--                                                                                <div class="gallery-img">-->
        <!--                                                                                    <a-->
        <!--                                                                                        class="image-popup"-->
        <!--                                                                                        href="{{ asset($email_na) }}"-->
        <!--                                                                                    ><img-->
        <!--                                                                                            src="{{ asset($email_na) }}"-->
        <!--                                                                                            alt=""-->
        <!--                                                                                        /></a>-->
        <!--                                                                                </div>-->
        <!--                                                                            </div>-->
        <!--                                                                        @endforeach-->

        <!--                                                                    </div>-->
        <!--                                                                </div>-->
        <!--                                                            </div>-->
        <!--                                                        </div>-->
        <!--                                                    </div>-->
        <!--                                                </div>-->
        <!--                                            </div>-->
        <!--                                        @endforeach-->
        <!--                                    </div>-->
        <!--                                </div>-->
        <!--                            </div>-->
        <!--                        </div>-->
        <!--                    </div>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--        </div>-->
                <!-- faq Section Start -->
        <!--    </div>-->
        <!--</div>-->
        <!-- Content Section end -->

        <!-- War of Independence Section -->
        <!--<div class="col-lg-12 mt-50">-->
        <!--    <div class="container">-->
        <!--        <div class="card">-->
        <!--            <h5-->
        <!--                class="card-header"-->
        <!--                style="text-align: center; background: #273c66; color: #ffffff"-->
        <!--            >-->
        <!--                War of Independence-->
        <!--            </h5>-->
        <!--            <div class="card-body">-->
                        <!-- Faq Section Start -->
        <!--                <div-->
        <!--                    class="rs-faq-part style1 orange-color pt-10 pb-20 md-pt-20 md-pb-20"-->
        <!--                >-->
        <!--                    <div class="container">-->
        <!--                        <div class="row">-->
        <!--                            <div class="col-lg-12 padding-0">-->
        <!--                                <div class="main-part" style="background-color: #ffffff">-->
        <!--                                    <div-->
        <!--                                        class="faq-content"-->
        <!--                                        style="-->
        <!--                  border-radius: 10px 10px 10px 10px;-->
        <!--                  box-shadow: 0px 0px 15px grey;-->
        <!--                "-->
        <!--                                    >-->
        <!--                                        @foreach($independence as $independences)-->
        <!--                                            <div id="accordion" class="accordion">-->
        <!--                                                <div class="card">-->
        <!--                                                    <div class="card-header">-->
        <!--                                                        <a-->
        <!--                                                            class="card-link"-->
        <!--                                                            data-toggle="collapse"-->
        <!--                                                            href="#collapseOne_{{$independences->id}}"-->
        <!--                                                        >{{ $independences->title }}</a>-->
        <!--                                                    </div>-->
        <!--                                                    <div-->
        <!--                                                        id="collapseOne_{{$independences->id}}"-->
        <!--                                                        class="collapse show"-->
        <!--                                                        data-parent="#accordion"-->
        <!--                                                    >-->
                                                                <!-- overflow: scroll; -->
        <!--                                                        <div class="card-body" style="max-width: 100%">-->
        <!--                                                            <div-->
        <!--                                                                class="rs-gallery pt-10 pb-10 md-pt-10 md-pb-10"-->
        <!--                                                            >-->
        <!--                                                                <div class="container">-->
        <!--                                                                    <div class="row margin-0">-->


        <!--                                                                        @php-->
        <!--                                                                            $emailar =json_decode($independences->image);-->

        <!--                                                                        @endphp-->

        <!--                                                                        @foreach($emailar as $key => $emailars)-->
        <!--                                                                            <div-->
        <!--                                                                                class="col-lg-3 mb-0 padding-0 col-md-4"-->
        <!--                                                                            >-->
        <!--                                                                                <div class="gallery-img">-->
        <!--                                                                                    <a-->
        <!--                                                                                        class="image-popup"-->
        <!--                                                                                        href="{{ asset($emailars) }}"-->
        <!--                                                                                    ><img-->
        <!--                                                                                            src="{{ asset($emailars) }}"-->
        <!--                                                                                            alt=""-->
        <!--                                                                                        /></a>-->
        <!--                                                                                </div>-->
        <!--                                                                            </div>-->
        <!--                                                                        @endforeach-->

        <!--                                                                    </div>-->
        <!--                                                                </div>-->
        <!--                                                            </div>-->
        <!--                                                        </div>-->
        <!--                                                    </div>-->
        <!--                                                </div>-->
        <!--                                            </div>-->
        <!--                                        @endforeach-->
        <!--                                    </div>-->
        <!--                                </div>-->
        <!--                            </div>-->
        <!--                        </div>-->
        <!--                    </div>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--        </div>-->
                <!-- faq Section Start -->
        <!--    </div>-->
        <!--</div>-->
        <!-- Content Section end -->

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
