
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
                  "
                >Affiliation</span
                >
                        </h4>
                    </div>
                </div>
                <div class="container">
                    <p>Over the years, Prime University has partnered with the following reputed academic and research institutions around the world to enhance our own educational experience by learning from others</p>
                    <div class="row">
                        <div class="col-lg-12 mb-40" >
                            <div class="card-body" style="border: 1px solid grey">
                                <h5 class="card-title"><span
                                        class="btn btn-info btn-block responsive-width"
                                        style="
                      font-family: 'Rubik', sans-serif;
                      font-size: 16px;
                      text-transform: uppercase;
                      white-space: normal;
                      background-color: #22a7d0;
                      border-color: #22a7d0;
                    "
                                    >Affiliated Program</span
                                    ></h5>

                                <div class="list-group">
                                    <a href="#" class="list-group-item list-group-item-action"> &#10095; &nbsp; Ministry of Education, People's Republic of Bangladesh &nbsp;</a>
                                    <a href="#" class="list-group-item list-group-item-action"> &#10095; &nbsp; University Grants Commission of Bangladesh (UGC) &nbsp;</a>
                                    <!--<a href="#" class="list-group-item list-group-item-action"> &#10095; &nbsp; Prime Technology and Training Institute&nbsp;</a>-->
                                </div>
                            </div>
                        </div>
                        <!-- <div class="col-lg-12 mb-40" >
                          <div class="card-body" style="border: 1px solid grey">
                            <h5 class="card-title"><span
                              class="btn btn-info btn-block responsive-width"
                              style="
                                font-family: 'Rubik', sans-serif;
                                font-size: 16px;
                                text-transform: uppercase;
                                white-space: normal;
                                background-color: #22a7d0;
                                border-color: #22a7d0;
                              "
                              >Faculty of Buisness Studies</span
                            ></h5>

                            <div class="list-group">
                              <a href="#" class="list-group-item list-group-item-action"> &#10095; &nbsp; Department of Buisness Administration</a>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-12 mb-40" >
                          <div class="card-body" style="border: 1px solid grey">
                            <h5 class="card-title"><span
                              class="btn btn-info btn-block responsive-width"
                              style="
                                font-family: 'Rubik', sans-serif;
                                font-size: 16px;
                                text-transform: uppercase;
                                white-space: normal;
                                background-color: #22a7d0;
                                border-color: #22a7d0;
                              "
                              >Faculty of Arts and Social Science</span
                            ></h5>

                            <div class="list-group">
                              <a href="#" class="list-group-item list-group-item-action"> &#10095; &nbsp; Department of English</a>
                              <a href="#" class="list-group-item list-group-item-action"> &#10095; &nbsp; Department of Education</a>
                              <a href="#" class="list-group-item list-group-item-action"> &#10095; &nbsp; Department of Bangla</a>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-12 mb-40" >
                          <div class="card-body" style="border: 1px solid grey">
                            <h5 class="card-title"><span
                              class="btn btn-info btn-block responsive-width"
                              style="
                                font-family: 'Rubik', sans-serif;
                                font-size: 16px;
                                text-transform: uppercase;
                                white-space: normal;
                                background-color: #22a7d0;
                                border-color: #22a7d0;
                              "
                              >Faculty of Law</span
                            ></h5>

                            <div class="list-group">
                              <a href="#" class="list-group-item list-group-item-action"> &#10095; &nbsp; Department of Law</a>
                            </div>
                          </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Popular Courses Section End-->

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
