
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
                        Vision
                    </h5>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-10 pr-50 md-pr-15" style="margin: 0 auto">
                                <p
                                    style="
                      text-align: justify;
                      font-size: 20px;
                      font-weight: 500;
                    "
                                >
                                    The prime goal of Prime University is to provide high quality education at undergraduate and postgraduate levels to meet the needs of a dynamic society around the globe. The academic goal of the University is not just to make the students pass the examination but equip them with the means to become productive members of the community and continue the practice of lifelong learning.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mt-50">
                    <h5
                        class="card-header"
                        style="text-align: center; background: #273c66; color: #ffffff"
                    >
                        Mission
                    </h5>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-10 pr-50 md-pr-15" style="margin: 0 auto">
                                <p
                                    style="
                      text-align: justify;
                      font-size: 20px;
                      font-weight: 500;
                    "
                                >
                                    Prime University is an institution of higher learning and research dedicated to providing quality higher education commensurate with investment. The Courses and Curriculum are so designed as to enable a student to enter into the world of work and pursue higher academic and professional goals with a sound academic foundation. The University supports its students through is commitment to excellence and demonstrates it through the quality academic service. The University offers academically rigorous and practical instruction in different disciplines to cater to the growing demand for human resources development in compliance with the digital Bangladesh as well as in the context of the present day world.
                                </p>
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
