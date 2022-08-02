@extends('frontend.layout.master')



 @section('header')
         @include('frontend.layout.partials.header')
    @endsection

@section('content')

    <!-- Popular Courses Section Start -->
    <div
        id="rs-popular-courses"
        class="
          rs-popular-courses
          style1
          orange-color
          pt-50
          pb-50
          md-pt-30 md-pb-30
        "
    >
        <div class="container">
            <div class="gridFilter text-center mb-50">
                <!-- <h3 class="title"><a href="course-single.html">Departments</a></h3> -->
            </div>
            <div class="row grid">
                @foreach($department as $department)

                <div class="col-lg-4 col-md-6 grid-item">
                    <div class="courses-item mb-30">
                        <div class="img-part">
                            <a href="{{ url('/department/details/'.$department->id) }}">
                            <img src="{{ asset($department->image) }}" alt="" style="height:250px"/>
                            </a>
                        </div>
                        <div class="content-part">
                            <!-- <ul class="meta-part">
                                                  <li><span class="price">$55.00</span></li>
                                                  <li><a class="categorie" href="#">Web Development</a></li>
                                              </ul> -->
                            <h3 class="title" style="font-size:17px;min-height:50px">
                                <a href="{{ url('/department/details/'.$department->id) }}">{{{ $department->name }}}</a>
                            </h3>
                            <div class="bottom-part">

                                <div class="btn-part">
                                    <a href="{{ url('/department/details/'.$department->id) }}"
                                    ><i class="flaticon-right-arrow"></i
                                        ></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                    @endforeach
            </div>

        </div>


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
    <!-- Popular Courses Section End -->

@endsection

