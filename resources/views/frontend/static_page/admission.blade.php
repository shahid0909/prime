
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
                        UNDERGRADUTION ADMISSION
                    </h5>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12 pr-50 md-pr-15" style="margin: 0 auto">
                                <h3>Admission Schedule for Spring 2022</h3>
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead
                                            class="thead-light"
                                            style="background: #d5eaca; color: #15640b"
                                        ></thead>
                                        <tbody>
                                        <tr>
                                            <td>Application's Last Date</td>
                                            <td align="center">December 1, 2021</td>
                                        </tr>
                                        <tr>
                                            <td>Admission Test Date</td>
                                            <td align="center">December 10, 2021</td>
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
                                                                                <p><span><h5 style="color: #d20305;">Undergraduate Level</h5></span></p>
                                                                                <p>
                                                                                    The intending student should have minimum GPA 2.50 in S.S.C or equivalent and GPA 2.50 in H.S.C or equivalent examination for admission in undergraduate programs.
                                                                                </p>
                                                                            </div>

                                                                            <div class="card-body">
                                                                                <p><span><h5 style="color: #d20305;"> Graduate Level</h5></span></p>
                                                                                <p>
                                                                                <ul style="list-style-type: disc;  padding-left: 20px; line-height: 30px;">
                                                                                    <li>The student who intends to get enrolled in Post Graduate programs should have minimum 6 points.</li>
                                                                                    <li>For MBA Executive program the student should have at least 2 years working experience in executive level in addition to his basic required qualification.</li>
                                                                                </ul>
                                                                                </p>
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
                                                                                <p>
                                                                                    The intending student is to apply
                                                                                    in a prescribed form duly filled
                                                                                    in and submit the same to the
                                                                                    Admission Office of the
                                                                                    university. The respective
                                                                                    department will arrange written
                                                                                    examination/viva-voce for
                                                                                    admission of the student concerned
                                                                                    in the department.
                                                                                </p>
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
                                                                            >Admission Fee</a
                                                                            >
                                                                        </div>
                                                                        <div
                                                                            id="collapseThree"
                                                                            class="collapse"
                                                                            data-parent="#accordion"

                                                                        >
                                                                            <div class="card-body">
                                                                                <p>
                                                                                <p><b>General Information:</b></p>
                                                                                <ul style=" padding-left: 20px; line-height: 30px;">
                                                                                    <li><b>Admission Fee :</b> Tk. 10,500.00 (Including in total cost);</li>
                                                                                    <li><b>Additional Project/Thesis fee:</b> Tk. 3,000.00;</li>
                                                                                </ul>
                                                                                </p>
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
