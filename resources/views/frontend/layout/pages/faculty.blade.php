
@extends('frontend.layout.master')

 @section('header')
         @include('frontend.layout.partials.header')
    @endsection

@section('content')
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
          pb-50
          md-pt-70 md-pb-30
        "
>
    @foreach($facultys as $faculty)

    <div class="container">
        <div class="card">
            <h5
                class="card-header"
                style="text-align: center; background: #273c66; color: #ffffff"
            >
                {{ $faculty->name }}
            </h5>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-5 col-md-12 order-last">
                        <table
                            border="0"
                            style="padding-left: 20px"
                            cellspacing="0"
                            cellpadding="0"
                        >
                            <tr valign="top" align="left">
                                <td width="20%" style="padding-bottom: 5px">
                                    <strong>Establish</strong>
                                </td>
                                <td width="3%">:</td>
                                <td width="70%">{{ $faculty->establish_year }}</td>
                            </tr>

                            @foreach($faculty->dinMessage as $dinMessages)


                                @php
                                    $emailarray =json_decode($dinMessages->employee->email);

                                    $phonearray =json_decode($dinMessages->employee->phone);
                                @endphp




                            <tr valign="top" align="left">
                                <td style="padding-bottom: 5px"><strong>Dean</strong></td>
                                <td>:</td>
                                <td>
                                   {{ $dinMessages->employee->m_name }} <br>
                                   {!! $dinMessages->employee->about_me !!}

                                </td>

                            </tr>
                                @foreach( $phonearray as $key)


                            <tr valign="top" align="left">
                                <td style="padding-bottom: 5px">
                                    <strong>Phone</strong>
                                </td>
                                <td>:</td>
                                <td>{{   $key}}</td>
                            </tr>
                                    @endforeach

                                @foreach( $emailarray as $key)

                            <tr valign="top" align="left">
                                <td style="padding-bottom: 5px">
                                    <strong>Email</strong>
                                </td>
                                <td>:</td>
                                <td>{{ $key }}</td>
                            </tr>
                                @endforeach
                                @endforeach
                        </table>
                    </div>
                    <div class="col-lg-7 pr-50 md-pr-15">
                        <div class="card mb-3" style="max-width: 100%">
                            <div class="row no-gutters">
                                @foreach($faculty->dinMessage as $dinMessage)


<!-- {{--                                        {{$dinMessage->employee->e_name}}--}} -->
                                <div class="col-md-4">
                                    <img
                                        src="{{ asset($dinMessage->employee->image) }}"
                                        class="card-img"
                                        alt="..."
                                        style="
                            background: grey;
                            margin: 20px 10px;
                            border: 2px dashed #273c66;
                          "
                                    />
                                </div>


                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Message From Dean</h5>
                                        <p
                                            class="card-text"
                                            style="text-align: justify; line-height: 1"
                                        >
                                                {{ $dinMessage->short_massage }}
                                        </p>
                                        <p
                                            class="card-text"
                                            style="
                              text-align: right;
                              color: white;
                              float: right;
                              font-size: 17px;
                              background: #273c66;
                              padding: 5px 25px;
                              margin: 10px 0px;
                              border-radius: 5px;
                            "
                                        >
                                            <a href="{{ url('/faculty_dean/'.$faculty->id) }}" style="color: #ffffff">Read More</a>
                                        </p>
                                    </div>
                                </div>



                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-50">
                    <!-- <h5 class="card-header">List of Depertment</h5> -->
                    <div class="card-body">
                        <div class="row">

                            @foreach( $faculty->department as $department)

                            <div class="col-lg-4 col-md-6 grid-item">
                                <div class="courses-item mb-30">
                                    <div class="img-part">
                                        <a href="{{ url('/department/details/'.$department->id) }}">
                                        <img src="{{ asset( $department->image ) }}" alt="" style="height:250px"/>
                                        </a>
                                    </div>
                                    <div class="content-part">
                                        <!-- <ul class="meta-part">
                                                <li><span class="price">$55.00</span></li>
                                                <li><a class="categorie" href="#">Web Development</a></li>
                                            </ul> -->
                                        <h3 class="title">
                                            <a href="{{ url('/department/details/'.$department->id) }}">{{ $department->name }}</a>
                                        </h3>
                                        <div class="bottom-part">
                                            <!-- <div class="info-meta">
                                                      <ul>
                                                          <li class="user"><i class="fa fa-user"></i> 245</li>
                                                          <li class="ratings">
                                                              <i class="fa fa-star"></i>
                                                              <i class="fa fa-star"></i>
                                                              <i class="fa fa-star"></i>
                                                              (05)
                                                          </li>
                                                      </ul>
                                                  </div> -->
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
                </div>
            </div>
        </div>
    </div>

        @endforeach
</div>

<!-- Popular Course Section End -->

@endsection


@section('address')

    @include('frontend.layout.partials.home_address')

@endsection
