
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
                        Credit Transfer
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
                                    The student’s credit transfer shall be decided upon the recommendation of the Equivalence Committee of the Department/University. The application of the intending students to enroll in the Prime University from other Universities will be examined by the Equivalence Committee of the respective Department. 
                                    No course will be accepted below 'C+' (Plus) grade or less than 50% marks for a credit transfer of a student coming from other Universities.The recommendations of the Equivalence Committee will be placed before the Vice Chancellor for the final decisions. 
                                    No students will be allowed to enroll with more than 50% of the total courses completed of the relevant Program from another University.  
                                    The Controller of Examinations will convert the grades recommended by Equivalence Committee and approved by the Vice Chancellor in compliance with the Uniform Grading System of the University Grants Commission of Bangladesh (UGC).
                                    The final CGPA of the incumbent student will be calculated incorporating the converted grades along with the grades earned in Prime University.
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
