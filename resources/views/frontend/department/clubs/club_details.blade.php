
@extends('frontend.department.master')

@section('header')

    @include('frontend.department.layout.partials.header')

@endsection

@section('content')


    <!-- main content strat -->
    <div class="main-content">
        <!-- Breadcrumbs Start -->
        <div class="rs-breadcrumbs breadcrumbs-overlay">
            <div class="breadcrumbs-img">
                <img src="{{ asset('prime/assets/images/blog/prize_n.jpg') }}" alt="Breadcrumbs Image">
            </div>
            <div class="breadcrumbs-text white-color">
                <h1 class="page-title">{{ $clubs->title }}</h1>
                <!-- <ul>
                    <li>
                        <a class="active" href="index.html">Home</a>
                    </li>
                    <li>Programing Club</li>
                </ul> -->
            </div>
        </div>
        <!-- Breadcrumbs End -->

        <!-- Blog Section Start -->
        <div class="rs-inner-blog orange-color pt-100 pb-100 md-pt-70 md-pb-70">
            <div class="container">
                <div class="blog-deatails">
                    @foreach($club_details as $club_det)
                        <div class="blog-full">
                            <div class="blog-desc mb-20">
                                <h3>Vision</h3>
                                <p>
                                    {!! $club_det->vision !!}
                                </p>
                            </div>
                            <div class="blog-desc mb-20">
                                <h3>Activities</h3>
                                <p>
                                    {!! $club_det->activities !!}
                                </p>
                            </div>
                            <div class="blog-desc mb-20 mt-20">
                                <h3>Committee of the Club</h3>
                                <table class="table table-hover table-bordered">
                                    @foreach($club_committee as $club_com)
                                    <tr>
                                        @if($club_com->designation == 1)
                                            <th>President</th>
                                        <td>{{ $club_com->name }}</td>
                                        <td>{{ $club_com->batch }}</td>
                                            @elseif($club_com->designation == 2)
                                            <th>Vice-president</th>
                                            <td>{{ $club_com->name }}</td>
                                            <td>{{ $club_com->batch }}</td>
                                            @else
                                            <th>Secretary</th>
                                            <td>{{ $club_com->name }}</td>
                                            <td>{{ $club_com->batch }}</td>
                                            @endif
                                    </tr>
                                    @endforeach
                                </table>
                            </div>
                            <div class="blog-desc mb-20 mt-20">
                                <h3>Advisor Panel</h3>
                                @foreach( $club_inf as $club_in )
                                <div class="row">
                                    <div class="col-md-6">
                                        <img src="{{ asset( $club_in->image ) }}" class="card-img" style="height:150px;width:150px;border-radius:2%">
                                        <div class="card-body" style="padding: 1.25rem 0px">
                                            <h5 class="card-title">{{ $club_in->m_name }}</h5>
                                            <p class="card-text" style="text-align: justify; line-height: 1">
                                                <b>{{ $club_in->designation }} {{ $club_in->adi_designation }} </b><br>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            <div class="blog-desc mb-20">
                                <h3>Related Page</h3>
                                <p>{!! $club_det->description !!}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        
            <div style="height:20px"></div>
        
        <!-- Blog Section End -->

        <!-- Newsletter section start -->
        <!-- Section bg Wrap 2 End -->
    </div>
    <!-- main content end -->
    <div class="rs-newsletter style1 mb--124 sm-mb-0 sm-pb-70">
        <div class="container">
            <div class="newsletter-wrap">
                @foreach($dept_addr as $dept_address)
                    <div class="row y-middle">
                        <div class="col-md-4 sm-mb-30">
                            <div class="sec-title">
                                <div class="sub-title white-color">Address</div>
                                <p class="title mb-0 white-color">
                                    {!! $dept_address->address !!}
                                </p>
                            </div>
                        </div>
                        <div class="col-md-4 border-left">
                            <div class="sec-title">
                                <div class="sub-title white-color">Phone Number</div>
                                <p class="title mb-0 white-color">
                                    {!! $dept_address->phone_number !!}
                                </p>
                            </div>
                        </div>
                        <div class="col-md-4 border-left">
                            <div class="sec-title">
                                <div class="sub-title white-color">Email</div>
                                <p class="title mb-0 white-color">
                                    {!! $dept_address->email !!}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <!-- Newsletter section end -->
    </div>

@endsection
