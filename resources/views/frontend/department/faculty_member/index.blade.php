@extends('frontend.department.master')

@section('header')

    @include('frontend.department.layout.partials.header')

@endsection

@section('content')

    <!-- Main content Start -->
    <section class="intro-section gray-bg pt-94 pb-100 md-pt-64 md-pb-70">
        <div class="container">
            <div class="row clearfix">
                <!-- Content Column -->
                <div class="col-lg-12 md-mb-50">
                    <!-- Intro Info Tabs-->
                    <div class="intro-info-tabs">
                        <ul
                            class="nav nav-tabs intro-tabs tabs-box"
                            id="myTab"
                            role="tablist"
                        >
                            <li class="nav-item tab-btns" style="width: 50%; padding: 0px 30px 0px 30px;">
                                <a
                                    class="nav-link tab-btn active"
                                    id="prod-overview-tab"
                                    data-toggle="tab"
                                    href="#prod-overview"
                                    role="tab"
                                    aria-controls="prod-overview"
                                    aria-selected="true"
                                    style="
                        font-size: 15px;
                        min-height: 75px;
                        margin-bottom: 20px;
                      "
                                >Fulltime Faculty Members</a>
                            </li>
                            <li class="nav-item tab-btns" style="width: 50%; padding: 0px 30px 0px 30px;">
                                <a
                                    class="nav-link tab-btn"
                                    id="prod-curriculum-tab"
                                    data-toggle="tab"
                                    href="#prod-curriculum"
                                    role="tab"
                                    aria-controls="prod-curriculum"
                                    aria-selected="false"
                                    style="
                        font-size: 15px;
                        min-height: 75px;
                        margin-bottom: 20px;
                      "
                                >Adjunct Faculty Members</a
                                >
                            </li>
                        </ul>
                        <div class="tab-content tabs-content" id="myTabContent">
                            <div
                                class="tab-pane tab fade show active"
                                id="prod-overview"
                                role="tabpanel"
                                aria-labelledby="prod-overview-tab"
                            >
                                <div class="main-content">
                                    <section class="mt-50 mb-20">
                                        <div class="container">
                                            <div class="card">
                                                <h5
                                                    class="card-header"
                                                    style="text-align: center; background: #273c66; color: #ffffff"
                                                >
                                                    Faculty Members
                                                </h5>
                                                <div class="card-body">
                                                    <div class="row" style="padding: 0px; margin: 0px">
                                                        @foreach( $facaltymememberarray as $members)

                                                            @foreach( $members as  $member)
                                                                <div class="col-lg-6 pt-20 pb-20 md-mb-30">
                                                                    <div class="faculty">
                                                                        <div class="row" style="padding: 0px; margin: 0px">
                                                                            <div class="col-lg-3">
                                                                                <img
                                                                                    src="{{ asset($member->image) }}"
                                                                                    width="100"
                                                                                    height="100"
                                                                                    style="border-radius: 50%;"
                                                                                    
                                                                                />
                                                                            </div>
                                                                            <div class="col-lg-9">
                                                                                <h5 style="margin: 0; margin-bottom: 10px">
                                                                                    <a href="{{ url('/department/faculty_member/details/'.$department->id.'/'.$member->id) }}">
                                                                                        {{ $member->m_name }}
                                                                                    </a>
                                                                                </h5>
                                                                                <h6 style="margin: 0">{{ $member->designation }}</h6>
                                                                                @if($member->parity == 1 )
                                                                                <h6 style="margin: 0">{{ $department->name }}</h6>
                                                                                @endif

                                                                                @if($member->leave == 1)
                                                                                    <h6 style="margin: 0; color: red">( Study Leave )</h6>
                                                                                @elseif($member->leave == 2)
                                                                                    <h6 style="margin: 0; color: red">( On Leave )</h6>
                                                                                @endif

                                                                                <h6 style="margin: 0">{{ $member->adi_designation }}</h6>
                                                                                <h6 style="margin: 0">
                                                                                    {!! $member->edu_que !!}
                                                                                </h6>

                                                                            </div>
                                                                            <div  style="width:100%">
                                                                                <a class="btn btn-info" href="{{  url('/department/faculty_member/details/'.$department->id.'/'.$member->id) }}" style="float:right;margin-right:30px">More Details<i class="flaticon-right-arrow" style="margin-left:10px"></i></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            @endforeach

                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                            <div
                                class="tab-pane fade"
                                id="prod-curriculum"
                                role="tabpanel"
                                aria-labelledby="prod-curriculum-tab"
                            >
                                <div class="main-content">
                                    <section class="mt-50 mb-20">
                                        <div class="container">
                                            <div class="card">
                                                <h5
                                                    class="card-header"
                                                    style="text-align: center; background: #273c66; color: #ffffff"
                                                >
                                                    Adjunct Faculty Members
                                                </h5>
                                                <div class="card-body">
                                                    <div class="row" style="padding: 0px; margin: 0px">
                                                        @foreach( $adjunctmememberarray as $memberss)

                                                            @foreach( $memberss as  $members)
                                                                <div class="col-lg-6 pt-20 pb-20 md-mb-30">
                                                                    <div class="faculty">
                                                                        <div class="row" style="padding: 0px; margin: 0px">
                                                                            <div class="col-lg-3">
                                                                                <img
                                                                                    src="{{ asset($members->image) }}"
                                                                                    width="100"
                                                                                    height="100"
                                                                                    style="border-radius: 50%;"
                                                                                />
                                                                            </div>
                                                                            <div class="col-lg-9">
                                                                                <h5 style="margin: 0; margin-bottom: 10px">
                                                                                    <a href="{{ url('/department/faculty_member/details/'.$department->id.'/'.$members->id) }}">
                                                                                        {{ $members->m_name }}
                                                                                    </a>
                                                                                </h5>

                                                                                @if($members->leave == 1)
                                                                                    <h6 style="margin: 0">( Study Leave )</h6>
                                                                                @elseif($members->leave == 2)
                                                                                    <h6 style="margin: 0">( On Leave )</h6>
                                                                                @endif
                                                                                <h6 style="margin: 0">{{ $members->designation }}</h6>

                                                                                <h6 style="margin: 0">{{ $members->adi_designation }}</h6>
                                                                                <h6 style="margin: 0">
                                                                                    {!! $members->edu_que !!}
                                                                                </h6>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            @endforeach

                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
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
