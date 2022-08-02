
@extends('frontend.layout.master')


 @section('header')
         @include('frontend.layout.partials.header')
    @endsection
@section('content')

    <!-- Main content Start -->
    <div class="main-content">
        <div
            class="rs-popular-courses style1 course-view-style orange-color rs-inner-blog white-bg pt-100 pb-100 md-pt-70 md-pb-70"
        >

            <div class="container">
                <div class="card">
                    <h5
                        class="card-header"
                        style="text-align: center; background: #273c66; color: #ffffff"
                    >
                        FOREGIANSTUDENT ADMISSION
                    </h5>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12 pr-50 md-pr-15" style="margin: 0 auto">
                                <h3>{{ $foreign_student->schedule }}</h3>
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead
                                            class="thead-light"
                                            style="background: #d5eaca; color: #15640b"
                                        ></thead>
                                        <tbody>
                                        <tr>
                                            <td>Application's Last Date</td>
                                            <td align="center">{{ \Carbon\Carbon::parse($foreign_student->a_l_date)->isoFormat('MMMM')}} {{ \Carbon\Carbon::parse($foreign_student->a_l_date)->isoFormat('D')}}, {{ \Carbon\Carbon::parse($foreign_student->a_l_date)->isoFormat('YYYY')}}</td>

                                        </tr>
                                        <tr>
                                            <td>Admission Test Date</td>
                                            <td align="center">{{ \Carbon\Carbon::parse($foreign_student->a_t_date)->isoFormat('MMMM')}} {{ \Carbon\Carbon::parse($foreign_student->a_t_date)->isoFormat('D')}}, {{ \Carbon\Carbon::parse($foreign_student->a_t_date)->isoFormat('YYYY')}}</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-lg-12">
                                    <div class="content-part">
                                        <!-- Faq Section Start -->
                                        <div
                                            class="rs-faq-part style1 orange-color pt-10 pb-20 md-pt-20 md-pb-20"
                                        >
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-lg-12 padding-0">
                                                        <div class="main-part"style="background: none!important; padding: 0px !important;">
                                                            <div class="faq-content">
                                                                <div id="accordion" class="accordion">
                                                                    <div class="card" style="border-radius: 15px; margin-bottom: 20px; box-shadow: 0px 0px 10px 0px #cccccc;">
                                                                        <div class="card-header">
                                                                            <a
                                                                                class="card-link"
                                                                                data-toggle="collapse"
                                                                                href="#collapseOne"
                                                                            >Admission Requirments</a
                                                                            >
                                                                        </div>
                                                                        <div
                                                                            id="collapseOne"
                                                                            class="collapse show"
                                                                            data-parent="#accordion"
                                                                        >
                                                                            <div class="card-body">
                                                                                <p>{!! $foreign_student->a_requirement !!}</p>

                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                    <div class="card" style="margin-bottom: 20px; border-radius: 10px; box-shadow: 0px 0px 10px 0px;">
                                                                        <div class="card-header">
                                                                            <a
                                                                                class="card-link collapsed"
                                                                                data-toggle="collapse"
                                                                                href="#collapseTwo"
                                                                                aria-expanded="false"
                                                                            >How to Apply</a
                                                                            >
                                                                        </div>
                                                                        <div
                                                                            id="collapseTwo"
                                                                            class="collapse"
                                                                            data-parent="#accordion"

                                                                        >
                                                                            <div class="card-body">

                                                                                <p>{!! $foreign_student->how_to_apply !!}</p>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card" style="margin-bottom: 20px; border-radius: 10px; box-shadow: 0px 0px 10px 0px;">
                                                                        <div class="card-header">
                                                                            <a
                                                                                class="card-link collapsed"
                                                                                data-toggle="collapse"
                                                                                href="#collapseThree"
                                                                                aria-expanded="false"
                                                                            >Admission Test</a
                                                                            >
                                                                        </div>
                                                                        <div
                                                                            id="collapseThree"
                                                                            class="collapse"
                                                                            data-parent="#accordion"

                                                                        >
                                                                            <div class="card-body">
                                                                                <p>{!! $foreign_student->admission_fee !!}</p>
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
                </div>
            </div>
        </div>
    </div>
    <!-- Main content End -->

@endsection
