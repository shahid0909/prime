
@extends('frontend.layout.master')

 @section('header')
         @include('frontend.layout.partials.header')
    @endsection

@section('content')

    <!-- Content Section -->
    <div class="col-lg-12 mt-50">
        <div class="container">
            <div class="card">
                <h5 class="card-header" style="text-align: center; background: #273c66; color: #ffffff">
                    Institutional Quality Assurance Cell (IQAC)
                </h5>
                <div class="card-body">
                    <!-- Faq Section Start -->
                    <div class="rs-faq-part style1 orange-color pt-10 pb-20 md-pt-20 md-pb-20">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12 padding-0">
                                    <div class="main-part" style="background: white;">
                                        <div class="faq-content">
                                            <div id="accordion" class="accordion">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <a class="card-link" data-toggle="collapse" href="#collapseOne"
                                                        >IQAC</a>
                                                    </div>
                                                    <div id="collapseOne" class="collapse show" data-parent="#accordion">
                                                        <div class="card-body" style="max-width: 100%;border: 1px solid gray; border-radius: 0px 0px 15px 15px;">
                                                            <div class="card">
                                                                <div class="card-header" style="text-align: center;">
                                                                </div>
                                                                <div class="card-body" style="max-width: 100%;">
                                                                    <p><b>{!! $iqac->about !!}</b> </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header">
                                                        <a
                                                            class="card-link collapsed"
                                                            data-toggle="collapse"
                                                            href="#collapseTwo"
                                                            aria-expanded="false"
                                                        >Vision</a
                                                        >
                                                    </div>
                                                    <div
                                                        id="collapseTwo"
                                                        class="collapse"
                                                        data-parent="#accordion"

                                                    >
                                                        <div class="card-body" style="max-width: 100%; border: 1px solid gray; border-radius: 0px 0px 15px 15px;">
                                                            <div class="card">
                                                                <div class="card-header" style="text-align: center;">
                                                                </div>
                                                                <div class="card-body" style="max-width: 100%;">
                                                                    <p><b>{!! $iqac->vision !!}</b> </p>
                                                                </div>
                                                            </div>
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
                                                        >Mission</a
                                                        >
                                                    </div>
                                                    <div
                                                        id="collapseThree"
                                                        class="collapse"
                                                        data-parent="#accordion"

                                                    >
                                                        <div class="card-body" style="max-width: 100%;border: 1px solid gray; border-radius: 0px 0px 15px 15px;">
                                                            <div class="card">
                                                                <div class="card-header" style="text-align: center;">
                                                                </div>
                                                                <div class="card-body" style="max-width: 100%;">
                                                                    <p><b>{!! $iqac->mission !!}</b> </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header">
                                                        <a
                                                            class="card-link collapsed"
                                                            data-toggle="collapse"
                                                            href="#collapseFour"
                                                            aria-expanded="false"
                                                        >Responsibilities of the office</a
                                                        >
                                                    </div>
                                                    <div
                                                        id="collapseFour"
                                                        class="collapse"
                                                        data-parent="#accordion"
                                                    >
                                                        <div class="card-body" style="max-width: 100%; border: 1px solid gray; border-radius: 0px 0px 15px 15px;">
                                                            <div class="card">
                                                                <div class="card-body" style="max-width: 100%;">
                                                                    <p><b>{!! $iqac->responsibilities !!}</b> </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                                                                <div class="card">
                                                    <div class="card-header">
                                                        <a
                                                            class="card-link collapsed"
                                                            data-toggle="collapse"
                                                            href="#collapseSixss3"
                                                            aria-expanded="false"
                                                        >IQAC Team</a>
                                                    </div>
                                                    <div
                                                        id="collapseSixss3"
                                                        class="collapse"
                                                        data-parent="#accordion"

                                                    >
                                                        <div class="card-body" style="max-width: 100%; border: 1px solid gray; border-radius: 0px 0px 15px 15px;">
                                                            <div class="card">
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
                                                                                >IQAC Team</span>
                                                                            </h4>
                                                                        </div>
                                                                    </div>


                                                                    <div class="row">
                                                                        <!--@foreach( $employ_member as $employ_members)-->

                                                                            @foreach($employ_member as $employ_mem)
                                                                                @php
                                                                                    $emailarray =json_decode($employ_mem->employ->email);
                                                                                @endphp

                                                                                <div class="col-lg-6 mb-40">
                                                                                    <div class="course-item">
                                                                                        <div class="course-image">
                                                                                            <a href="#">
                                                                                                <img
                                                                                                    src="{{ asset($employ_mem->employ->image) }}"
                                                                                                />
                                                                                            </a>
                                                                                        </div>
                                                                                        <div class="course-info">
                                                                                            <h3 class="course-title">
                                                                                                <a href="#">{{ $employ_mem->employ->e_name }}</a>
                                                                                            </h3>
                                                                                            <p style="margin: 0px">{{ $employ_mem->employ->designation->designation }}</p>
                                                                                            @if($employ_mem->iqac_designation == 1)
                                                                                                <p style="margin: 0px">Director, IQAC</p>
                                                                                                @elseif($employ_mem->iqac_designation == 2)
                                                                                                <p style="margin: 0px">QAdditional Director, Quality Assurance(QA)</p>
                                                                                                @else
                                                                                                <p style="margin: 0px">Additional Director, Excellence in Training Learning(ETL)</p>
                                                                                                @endif
                                                                                            @foreach( $emailarray as $key)
                                                                                                <p style="margin: 0px">Email :
                                                                                                    {{   $key}}
                                                                                                </p>
                                                                                            @endforeach

                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            @endforeach
                                                                        <!--@endforeach-->

                                                                            @foreach( $faculty_members as $faculty_memberss)


                                                                                    @php
                                                                                        $emailarray =json_decode($faculty_memberss->faculty_member->email);
                                                                                    @endphp

                                                                                    <div class="col-lg-6 mb-40">
                                                                                        <div class="course-item">
                                                                                            <div class="course-image">
                                                                                                <a href="#">
                                                                                                    <img
                                                                                                        src="{{ asset($faculty_memberss->faculty_member->image) }}"
                                                                                                    />
                                                                                                </a>
                                                                                            </div>
                                                                                            <div class="course-info">
                                                                                                <h3 class="course-title">
                                                                                                    <a href="#">{{ $faculty_memberss->faculty_member->m_name }}</a>
                                                                                                </h3>
                                                                                                <p style="margin: 0px">{{ $faculty_memberss->faculty_member->designation->designation }}</p>
                                                                                                @if($faculty_memberss->iqac_designation == 1)
                                                                                                <p style="margin: 0px">Director, IQAC</p>
                                                                                                @elseif($faculty_memberss->iqac_designation == 2)
                                                                                                <p style="margin: 0px">QAdditional Director, Quality Assurance(QA)</p>
                                                                                                @else
                                                                                                <p style="margin: 0px">Additional Director, Excellence in Training Learning(ETL)</p>
                                                                                                @endif
                                                                                                @foreach( $emailarray as $key)
                                                                                                    <p style="margin: 0px">Email :
                                                                                                        {{   $key}}
                                                                                                    </p>
                                                                                                @endforeach

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
                                                <div class="card">
                                                    <div class="card-header">
                                                        <a
                                                            class="card-link collapsed"
                                                            data-toggle="collapse"
                                                            href="#collapseSixss2"
                                                            aria-expanded="false"
                                                        >Quality Assurance Committee</a>
                                                    </div>
                                                    <div
                                                        id="collapseSixss2"
                                                        class="collapse"
                                                        data-parent="#accordion"

                                                    >
                                                        <div class="card-body" style="max-width: 100%; border: 1px solid gray; border-radius: 0px 0px 15px 15px;">
                                                            <div class="card">
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
                                                                                >Quality Assurance Committee</span>
                                                                            </h4>
                                                                        </div>
                                                                    </div>

                                                                    <div class="row">
                                                                        @foreach( $employ_quality_member as $employ_quality_members)

                                                                                @php
                                                                                  $employ_quality_array =json_decode($employ_quality_members->employ->email);
                                                                                @endphp

                                                                                <div class="col-lg-6 mb-40">
                                                                                    <div class="course-item">
                                                                                        <div class="course-image">
                                                                                            <a href="#">
                                                                                                <img
                                                                                                    src="{{ asset($employ_quality_members->employ->image) }}"
                                                                                                />
                                                                                            </a>
                                                                                        </div>

                                                                                        <div class="course-info">
                                                                                            <h3 class="course-title">
                                                                                                <a href="#">{{ $employ_quality_members->employ->e_name }}</a>
                                                                                            </h3>
                                                                                            <p style="margin: 0px">{{ $employ_quality_members->employ->designation->designation }}</p>
                                                                                            @if($employ_quality_members->iqac_designation == 1)
                                                                                                <p style="margin: 0px">Director, IQAC</p>
                                                                                                @elseif($employ_quality_members->iqac_designation == 2)
                                                                                                <p style="margin: 0px">QAdditional Director, Quality Assurance(QA)</p>
                                                                                                @else
                                                                                                <p style="margin: 0px">Additional Director, Excellence in Training Learning(ETL)</p>
                                                                                                @endif
                                                                                            @foreach( $employ_quality_array as $keyss)
                                                                                                <p style="margin: 0px">Email :
                                                                                                    {{   $keyss}}
                                                                                                </p>
                                                                                            @endforeach

                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                        @endforeach

                                                                        @foreach( $faculty_quality_members as $faculty_quality_member)


                                                                            @php
                                                                                $faculty_quality_member_array =json_decode($faculty_quality_member->faculty_member->email);
                                                                            @endphp

                                                                            <div class="col-lg-6 mb-40">
                                                                                <div class="course-item">
                                                                                    <div class="course-image">
                                                                                        <a href="#">
                                                                                            <img
                                                                                                src="{{ asset($faculty_quality_member->faculty_member->image) }}"
                                                                                            />
                                                                                        </a>
                                                                                    </div>
                                                                                    <div class="course-info">
                                                                                        <h3 class="course-title">
                                                                                            <a href="#">{{ $faculty_quality_member->faculty_member->m_name }}</a>
                                                                                        </h3>
                                                                                        <p style="margin: 0px">{{ $faculty_quality_member->faculty_member->designation->designation }}</p>
                                                                                        @if($faculty_quality_member->iqac_designation == 1)
                                                                                            <p style="margin: 0px">Director, IQAC</p>
                                                                                        @elseif($faculty_quality_member->iqac_designation == 2)
                                                                                            <p style="margin: 0px">QAdditional Director, Quality Assurance(QA)</p>
                                                                                        @else
                                                                                            <p style="margin: 0px">Additional Director, Excellence in Training Learning(ETL)</p>
                                                                                        @endif
                                                                                        @foreach( $faculty_quality_member_array as $keys)
                                                                                            <p style="margin: 0px">Email :
                                                                                                {{   $keys}}
                                                                                            </p>
                                                                                        @endforeach

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
                                                <div class="card">
                                                    <div class="card-header">
                                                        <a
                                                            class="card-link collapsed"
                                                            data-toggle="collapse"
                                                            href="#collapseSixss1"
                                                            aria-expanded="false"
                                                        >Self-Assessment Committee</a>
                                                    </div>
                                                    <div
                                                        id="collapseSixss1"
                                                        class="collapse"
                                                        data-parent="#accordion"

                                                    >
                                                        <div class="card-body" style="max-width: 100%; border: 1px solid gray; border-radius: 0px 0px 15px 15px;">
                                                            <div class="card">
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
                                                                                >Self-Assessment Committee</span>
                                                                            </h4>
                                                                        </div>
                                                                    </div>
                                                                    

                                                                    <div class="row">
                                                                        @foreach( $employ_self_member as $employ_self_members)
                                                                            @php
                                                                                $employ_quality_array =json_decode($employ_self_members->employ->email);
                                                                            @endphp

                                                                            <div class="col-lg-6 mb-40">
                                                                                <div class="course-item">
                                                                                    <div class="course-image">
                                                                                        <a href="#">
                                                                                            <img
                                                                                                src="{{ asset($employ_self_members->employ->image) }}"
                                                                                            />
                                                                                        </a>
                                                                                    </div>

                                                                                    <div class="course-info">
                                                                                        <h3 class="course-title">
                                                                                            <a href="#">{{ $employ_self_members->employ->e_name }}</a>
                                                                                        </h3>
                                                                                        <p style="margin: 0px">{{ $employ_self_members->employ->designation->designation }}</p>
                                                                                        @if($employ_self_members->iqac_designation == 1)
                                                                                            <p style="margin: 0px">Director, IQAC</p>
                                                                                        @elseif($employ_self_members->iqac_designation == 2)
                                                                                            <p style="margin: 0px">QAdditional Director, Quality Assurance(QA)</p>
                                                                                        @else
                                                                                            <p style="margin: 0px">Additional Director, Excellence in Training Learning(ETL)</p>
                                                                                        @endif
                                                                                        @foreach( $employ_quality_array as $keyss)
                                                                                            <p style="margin: 0px">Email :
                                                                                                {{   $keyss}}
                                                                                            </p>
                                                                                        @endforeach

                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        @endforeach

                                                                        @foreach( $faculty_self_members as $faculty_self_member)
                                                                            @php
                                                                                $faculty_quality_member_array =json_decode($faculty_self_member->faculty_member->email);
                                                                            @endphp
                                                                            <div class="col-lg-6 mb-40">
                                                                                <div class="course-item">
                                                                                    <div class="course-image">
                                                                                        <a href="#">
                                                                                            <img
                                                                                                src="{{ asset($faculty_self_member->faculty_member->image) }}"
                                                                                            />
                                                                                        </a>
                                                                                    </div>
                                                                                    <div class="course-info">
                                                                                        <h3 class="course-title">
                                                                                            <a href="#">{{ $faculty_self_member->faculty_member->m_name }}</a>
                                                                                        </h3>
                                                                                        <p style="margin: 0px">{{ $faculty_self_member->faculty_member->designation->designation }}</p>
                                                                                        @if($faculty_self_member->iqac_designation == 1)
                                                                                            <p style="margin: 0px">Director, IQAC</p>
                                                                                        @elseif($faculty_self_member->iqac_designation == 2)
                                                                                            <p style="margin: 0px">QAdditional Director, Quality Assurance(QA)</p>
                                                                                        @else
                                                                                            <p style="margin: 0px">Additional Director, Excellence in Training Learning(ETL)</p>
                                                                                        @endif
                                                                                        @foreach( $faculty_quality_member_array as $keys)
                                                                                            <p style="margin: 0px">Email :
                                                                                                {{   $keys}}
                                                                                            </p>
                                                                                        @endforeach

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
                                                <div class="card">
                                                    <div class="card-header">
                                                        <a
                                                            class="card-link collapsed"
                                                            data-toggle="collapse"
                                                            href="#collapseFive"
                                                            aria-expanded="false"
                                                        >Workshops</a
                                                        >
                                                    </div>
                                                    <div
                                                        id="collapseFive"
                                                        class="collapse"
                                                        data-parent="#accordion"

                                                    >
                                                        <div class="card-body" style="max-width: 100%; border: 1px solid gray; border-radius: 0px 0px 15px 15px;">
                                                            <div class="card">
                                                                @foreach($iqac_workshop as $iqac_workshops)

                                                                <div class="card-body" style="max-width: 100%;">
                                                                    <div class="card-header mt-30" style="text-align: center;">
                                                                        <p class="card-link-new">Workshops - Department of {{ $iqac_workshops->name  }}</p>
                                                                    </div>
                                                                    <div class="card-body" style="max-width: 100%;">
                                                                        <p><b>{{ $iqac_workshops->w_title }}</b></p>
                                                                        <p>
                                                                        <ol>
                                                                            {!! $iqac_workshops->w_details !!}

                                                                        </ol>
                                                                        </p>
                                                                    </div>
                                                                </div>

                                                                    @endforeach

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                                                                <div class="card">
                                                    <div class="card-header">
                                                        <a
                                                            class="card-link collapsed"
                                                            data-toggle="collapse"
                                                            href="#collapseSixss"
                                                            aria-expanded="false"
                                                        >News & Events</a>
                                                    </div>
                                                    <div
                                                        id="collapseSixss"
                                                        class="collapse"
                                                        data-parent="#accordion"

                                                    >
                                                        <div class="card-body" style="max-width: 100%; border: 1px solid gray; border-radius: 0px 0px 15px 15px;">
                                                            <div class="card">
                                                                <div class="card-body" style="max-width: 100%;">
                                                                    <div class="table-responsive">
                                                                        <table id="test" class="table table-bordered">
                                                                            <thead
                                                                                class="thead-light"
                                                                                style="background: #d5eaca; color: #15640b"
                                                                            >
                                                                            <tr>
                                                                                <th scope="col">#</th>
                                                                                <th scope="col">Title</th>
                                                                                <th scope="col">Date</th>
                                                                                <th scope="col">View</th>
                                                                                <th scope="col">Downloads</th>

                                                                            </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                            @foreach($News_Events as $key=>$News_Event)
                                                                                <tr>
                                                                                    <th>{{ $key+1 }}</th>
                                                                                    <td>{{ $News_Event->title }}</td>
                                                                                    <td>{{ $News_Event->date }}</td>
                                                                                    <td align="center">
                                                                                        <a
                                                                                            target="_blank"
                                                                                            href="{{ url($News_Event->file) }}"
                                                                                        >
                                                                                            <i class="fa fa-eye" aria-hidden="true"></i>
                                                                                        </a>
                                                                                    </td>
                                                                                    <td align="center">
                                                                                        <a
                                                                                            target="_blank"
                                                                                            href="{{ url($News_Event->file) }}"
                                                                                        >
                                                                                            <i class="fa fa-download" aria-hidden="true"></i>
                                                                                        </a>
                                                                                    </td>

                                                                                </tr>
                                                                            @endforeach

                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header">
                                                        <a
                                                            class="card-link collapsed"
                                                            data-toggle="collapse"
                                                            href="#collapseSix"
                                                            aria-expanded="false"
                                                        >Resource materials to Download</a>
                                                    </div>
                                                    <div
                                                        id="collapseSix"
                                                        class="collapse"
                                                        data-parent="#accordion"

                                                    >
                                                        <div class="card-body" style="max-width: 100%; border: 1px solid gray; border-radius: 0px 0px 15px 15px;">
                                                            <div class="card">
                                                                <div class="card-body" style="max-width: 100%;">
                                                                    <div class="table-responsive">
                                                                        <table id="test" class="table table-bordered">
                                                                            <thead
                                                                                class="thead-light"
                                                                                style="background: #d5eaca; color: #15640b"
                                                                            >
                                                                            <tr>
                                                                                <th scope="col">#</th>
                                                                                <th scope="col">Title</th>
                                                                                <th scope="col">View</th>
                                                                                <th scope="col">Downloads</th>

                                                                            </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                            @foreach($iqac_esource as $key=>$iqac_esources)
                                                                            <tr>
                                                                                <th>{{ $key+1 }}</th>
                                                                                <td>{{ $iqac_esources->r_title }}</td>
                                                                                <td align="center">
                                                                                    <a
                                                                                        target="_blank"
                                                                                        href="{{ url($iqac_esources->upload_file) }}"
                                                                                    >
                                                                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                                                                    </a>
                                                                                </td>
                                                                                <td align="center">
                                                                                    <a
                                                                                        target="_blank"
                                                                                        href="{{ url($iqac_esources->upload_file) }}"
                                                                                    >
                                                                                        <i class="fa fa-download" aria-hidden="true"></i>
                                                                                    </a>
                                                                                </td>

                                                                            </tr>
                                                                                @endforeach

                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header">
                                                        <a
                                                            class="card-link collapsed"
                                                            data-toggle="collapse"
                                                            href="#collapseSixs"
                                                            aria-expanded="false"
                                                        >Notice Board</a>
                                                    </div>
                                                    <div
                                                        id="collapseSixs"
                                                        class="collapse"
                                                        data-parent="#accordion"

                                                    >
                                                        <div class="card-body" style="max-width: 100%; border: 1px solid gray; border-radius: 0px 0px 15px 15px;">
                                                            <div class="card">
                                                                <div class="card-body" style="max-width: 100%;">
                                                                    <div class="table-responsive">
                                                                        <table id="test" class="table table-bordered">
                                                                            <thead
                                                                                class="thead-light"
                                                                                style="background: #d5eaca; color: #15640b"
                                                                            >
                                                                            <tr>
                                                                                <th scope="col">#</th>
                                                                                <th scope="col">Title</th>
                                                                                <th scope="col">Date</th>
                                                                                <th scope="col">View</th>
                                                                                <th scope="col">Downloads</th>

                                                                            </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                            @foreach($Notice_Board as $key=>$Notice_Boards)
                                                                                <tr>
                                                                                    <th>{{ $key+1 }}</th>
                                                                                    <td>{{ $Notice_Boards->title }}</td>
                                                                                    <td>{{ $Notice_Boards->date }}</td>
                                                                                    <td align="center">
                                                                                        <a
                                                                                            target="_blank"
                                                                                            href="{{ url($Notice_Boards->file) }}"
                                                                                        >
                                                                                            <i class="fa fa-eye" aria-hidden="true"></i>
                                                                                        </a>
                                                                                    </td>
                                                                                    <td align="center">
                                                                                        <a
                                                                                            target="_blank"
                                                                                            href="{{ url($Notice_Boards->file) }}"
                                                                                        >
                                                                                            <i class="fa fa-download" aria-hidden="true"></i>
                                                                                        </a>
                                                                                    </td>

                                                                                </tr>
                                                                            @endforeach

                                                                            </tbody>
                                                                        </table>
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
                        </div>
                    </div>
                </div>
            </div>
            <!-- faq Section Start -->
        </div>
    </div>
    <!-- Content Section end -->

@endsection