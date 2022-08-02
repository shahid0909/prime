
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
                    Controller of the Examinations
                </h5>
                <div class="card-body">
                    <!-- Faq Section Start -->
                    <div class="rs-faq-part style1 orange-color pt-10 pb-20 md-pt-20 md-pb-20">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12 padding-0">
                                    <div class="main-part" style="background: #ffffff;">
                                        <div class="faq-content">
                                            <div id="accordion" class="accordion">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <a class="card-link" data-toggle="collapse" href="#collapseOne">Regular Exam</a>
                                                    </div>
                                                    <div id="collapseOne" class="collapse show" data-parent="#accordion">
                                                        <div class="card-body" style="max-width: 100%; border: 1px solid gray; border-radius: 0px 0px 15px 15px; background: #8bc34a45;">
                                                            <div class="col-lg-10 pr-50 md-pr-15" style="margin: 0 auto">
                                                                <div class="blog-desc mb-20 mt-20">
                                                                    
                                                                    <!--<p ><b>The Controller of Examinations upon approval of the Vice Chancellor will arrange the Regular Examination, fixing a suitable date(s) in the consultation with the Heads of the Departments. In a Semester there shall be one Regular Mid Term Examination and one Regular Semester Final Examination. All the students of the respective Department are to participate in this examination.</b></p>-->

                                                                    <p style="font-size: 20px;"><b>{!! $controller_of_exam->papers !!}</b></p>

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
                                                        >Special Exam</a>
                                                    </div>
                                                    <div
                                                        id="collapseTwo"
                                                        class="collapse"
                                                        data-parent="#accordion"

                                                    >
                                                        <div class="card-body" style="max-width: 100%; border: 1px solid gray; border-radius: 0px 0px 15px 15px;background: #8bc34a45;">
                                                            <div class="col-lg-10 pr-50 md-pr-15" style="margin: 0 auto">
                                                                <p style="font-size:20px;"><b>Special Examination will be arranged within 15 (Fifteen) days after the completion of the regular examinations for the students who could not appeared in the scheduled regular examinations.   

                                                                    If any student fails to sit for the scheduled Regular Mid Term & Semester Final Examination, the students concerned shall get a chance to appear in the 'Special Examination' having permission from the Head of the Department on payment of TK 1500/- for each course in Special Mid Term and TK 3000/- only for each course of Special Semester Final Examination.
                                                                    </b>
                                                                </p>

                                                                <!--<div class="table-responsive">-->
                                                                <!--    <table id="test" class="table table-bordered">-->
                                                                <!--        <thead-->
                                                                <!--            class="thead-light"-->
                                                                <!--            style="background: #d5eaca; color: #15640b"-->
                                                                <!--        >-->
                                                                <!--        <tr>-->
                                                                <!--            <th scope="col">#</th>-->
                                                                <!--            <th scope="col">Title</th>-->
                                                                <!--            <th scope="col">View</th>-->
                                                                <!--            <th scope="col">Downloads</th>-->

                                                                <!--        </tr>-->
                                                                <!--        </thead>-->
                                                                <!--        <tbody>-->
                                                                <!--        @foreach($application as $key=>$iqac_esources)-->
                                                                <!--            <tr>-->
                                                                <!--                <th>{{ $key+1 }}</th>-->
                                                                <!--                <td>{{ $iqac_esources->a_title }}</td>-->
                                                                <!--                <td align="center">-->
                                                                <!--                    <a-->
                                                                <!--                        target="_blank"-->
                                                                <!--                        href="{{ url($iqac_esources->uplode_file) }}"-->
                                                                <!--                    >-->
                                                                <!--                        <i class="fa fa-eye" aria-hidden="true"></i>-->
                                                                <!--                    </a>-->
                                                                <!--                </td>-->
                                                                <!--                <td align="center">-->
                                                                <!--                    <a-->
                                                                <!--                        target="_blank"-->
                                                                <!--                        href="{{ url($iqac_esources->uplode_file) }}"-->
                                                                <!--                    >-->
                                                                <!--                        <i class="fa fa-download" aria-hidden="true"></i>-->
                                                                <!--                    </a>-->
                                                                <!--                </td>-->

                                                                <!--            </tr>-->
                                                                <!--        @endforeach-->

                                                                <!--        </tbody>-->
                                                                <!--    </table>-->
                                                                <!--</div>-->

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
                                                        >Improvement Exam</a>
                                                    </div>
                                                    <div
                                                        id="collapseThree"
                                                        class="collapse"
                                                        data-parent="#accordion"

                                                    >
                                                        <div class="card-body" style="max-width: 100%; border: 1px solid gray; border-radius: 0px 0px 15px 15px; background: #8bc34a45;">
                                                            <div class="col-lg-10 pr-50 md-pr-15" style="margin: 0 auto">
                                                                <p style="font-size:20px;"><b>If any student secures C+, C, D & I Grade he/she shall be eligible to apply for improvement within 15 days of publication of final result. In that case the student concerned is to apply to the Head of the Department stating his/her desire. Being satisfied, the Head of the Department concerned shall allow the applicant to participate in the Improvement Examination.	
                                                                    The Improvement Examination shall take place along with the Regular Mid Term Examination and Semester Final Examination or Special Mid Term Examination and Special Semester Final Examination, as per decision of the Head of the Department. The student can improve the grades within the period of final semester.
                                                                    	The marks that shall be secured by the student concerned in the improvement examination shall be the marks of the student. But, if the student obtains marks less than previous one, the previous marks shall prevail.
                                                                    	For improvement of grades the student concerned is to pay a sum of TK 3,000/- only per course.
                                                                    </b>
                                                                </p>

                                                                <!--<div class="table-responsive">-->
                                                                <!--    <table id="test" class="table table-bordered">-->
                                                                <!--        <thead-->
                                                                <!--            class="thead-light"-->
                                                                <!--            style="background: #d5eaca; color: #15640b"-->
                                                                <!--        >-->
                                                                <!--        <tr>-->
                                                                <!--            <th scope="col">#</th>-->
                                                                <!--            <th scope="col">Title</th>-->
                                                                <!--            <th scope="col">View</th>-->
                                                                <!--            <th scope="col">Downloads</th>-->

                                                                <!--        </tr>-->
                                                                <!--        </thead>-->
                                                                <!--        <tbody>-->
                                                                <!--        @foreach($application as $key=>$iqac_esources)-->
                                                                <!--            <tr>-->
                                                                <!--                <th>{{ $key+1 }}</th>-->
                                                                <!--                <td>{{ $iqac_esources->a_title }}</td>-->
                                                                <!--                <td align="center">-->
                                                                <!--                    <a-->
                                                                <!--                        target="_blank"-->
                                                                <!--                        href="{{ url($iqac_esources->uplode_file) }}"-->
                                                                <!--                    >-->
                                                                <!--                        <i class="fa fa-eye" aria-hidden="true"></i>-->
                                                                <!--                    </a>-->
                                                                <!--                </td>-->
                                                                <!--                <td align="center">-->
                                                                <!--                    <a-->
                                                                <!--                        target="_blank"-->
                                                                <!--                        href="{{ url($iqac_esources->uplode_file) }}"-->
                                                                <!--                    >-->
                                                                <!--                        <i class="fa fa-download" aria-hidden="true"></i>-->
                                                                <!--                    </a>-->
                                                                <!--                </td>-->

                                                                <!--            </tr>-->
                                                                <!--        @endforeach-->

                                                                <!--        </tbody>-->
                                                                <!--    </table>-->
                                                                <!--</div>-->

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
                                                        >Fees For Certificates</a>
                                                    </div>
                                                    <div
                                                        id="collapseFour"
                                                        class="collapse"
                                                        data-parent="#accordion"

                                                    >
                                                        <div class="card-body" style="max-width: 100%; border: 1px solid gray; border-radius: 0px 0px 15px 15px; background: #8bc34a45;">
                                                            <div class="col-lg-10 pr-50 md-pr-15" style="margin: 0 auto">
                                                                <p style="font-size:20px;"><b>The office of the Controller of Examinations will provide the students with transcripts and provisional certificates and original certificate on receipt of fees payment as mentioned below:
                                                                     <br/> a)	For transcript Tk. 1,000.00 (Taka one thousand) only.
                                                                   <br/>  b)	For Provisional Certificate Tk. 2,000.00 (Taka two thousand) only.
                                                                    <br/> c)	For Original Certificate Tk. 5000.00 (Taka five thousand) only.<br/>
                                                                    In all cases the student concerned has to apply to the Controller of Examinations in writing along with the payment receipts and clearance from Library, Laboratory and Accounts Section or any other office concerned at least 07 days ahead of his/her requirements. In case of emergency the documents noted above may be supplied on the second working day of his/her application (except holidays of the University), on payment of double the normal rate.
                                                                </b></p>

                                                                <!--<div class="table-responsive">-->
                                                                <!--    <table id="test" class="table table-bordered">-->
                                                                <!--        <thead-->
                                                                <!--            class="thead-light"-->
                                                                <!--            style="background: #d5eaca; color: #15640b"-->
                                                                <!--        >-->
                                                                <!--        <tr>-->
                                                                <!--            <th scope="col">#</th>-->
                                                                <!--            <th scope="col">Title</th>-->
                                                                <!--            <th scope="col">View</th>-->
                                                                <!--            <th scope="col">Downloads</th>-->

                                                                <!--        </tr>-->
                                                                <!--        </thead>-->
                                                                <!--        <tbody>-->
                                                                <!--        @foreach($application as $key=>$iqac_esources)-->
                                                                <!--            <tr>-->
                                                                <!--                <th>{{ $key+1 }}</th>-->
                                                                <!--                <td>{{ $iqac_esources->a_title }}</td>-->
                                                                <!--                <td align="center">-->
                                                                <!--                    <a-->
                                                                <!--                        target="_blank"-->
                                                                <!--                        href="{{ url($iqac_esources->uplode_file) }}"-->
                                                                <!--                    >-->
                                                                <!--                        <i class="fa fa-eye" aria-hidden="true"></i>-->
                                                                <!--                    </a>-->
                                                                <!--                </td>-->
                                                                <!--                <td align="center">-->
                                                                <!--                    <a-->
                                                                <!--                        target="_blank"-->
                                                                <!--                        href="{{ url($iqac_esources->uplode_file) }}"-->
                                                                <!--                    >-->
                                                                <!--                        <i class="fa fa-download" aria-hidden="true"></i>-->
                                                                <!--                    </a>-->
                                                                <!--                </td>-->

                                                                <!--            </tr>-->
                                                                <!--        @endforeach-->

                                                                <!--        </tbody>-->
                                                                <!--    </table>-->
                                                                <!--</div>-->

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
                                                        >Examination Guidelines</a>
                                                    </div>
                                                    <div
                                                        id="collapseFive"
                                                        class="collapse"
                                                        data-parent="#accordion"

                                                    >
                                                        <div class="card-body" style="max-width: 100%; border: 1px solid gray; border-radius: 0px 0px 15px 15px; background: #8bc34a45;">
                                                            <div class="col-lg-10 pr-50 md-pr-15" style="margin: 0 auto">
                                                                <p style="font-size:20px;"><b>The following Examination Rules should be strictly followed by the students during the examination: <br/>
                                                                    i.	The student should wear ID Card properly in the Examination Hall.
                                                                    <br/>ii.	The student should show Admit Card to sit for the examination. No one will be allowed to sit for the examination without Admit Card;
                                                                  <br/>  iii.	The student should put all materials (bags, books, notes, electronic devices, mobile phone, laptop etc.) except examination documents in the front area of the examination hall; 
                                                                   <br/> iv.	Students who come late may be allowed to sit for the examination provided they do not ask for extra time. But no student will be allowed after one hour has passed since the start of the examination;
                                                                  <br/>  v.	No Student is allowed to leave the Examination before one hour since the beginning of the examination. Students are allowed to leave examination hall once for a maximum of five minutes after one hour;
                                                                   <br/> vi.	Students are to keep their mobile phones off in the examination hall;
                                                                   <br/> vii.	The student is to ensure that the invigilator has signed  his / her examination script during the examination and also ensure his/her signature in the attendance sheet for each examination slot; 
                                                                    <br/> viii.	The students should ensure that additional script(s) are duly signed by the Invigilator and attached to the main script properly. 
                                                                <br/></b></p>
                                                                <!--<p><b>The letter grade of each course and corresponding grade point shall be calculated as per Uniform Grading System of UGC in the following manner.</b></p>-->

                                                                <!--<div class="table-responsive">-->
                                                                <!--    <table id="test" class="table table-bordered">-->
                                                                <!--        <thead-->
                                                                <!--            class="thead-light"-->
                                                                <!--            style="background: #d5eaca; color: #15640b"-->
                                                                <!--        >-->
                                                                <!--        <tr>-->
                                                                <!--            <th scope="col">Numerical Grade</th>-->
                                                                <!--            <th scope="col" colspan="2">Letter Grade</th>-->
                                                                <!--            <th scope="col">Grade Point</th>-->

                                                                <!--        </tr>-->
                                                                <!--        </thead>-->
                                                                <!--        <tbody>-->
                                                                        <!--@foreach($application as $key=>$iqac_esources)-->
                                                                <!--            <tr>-->
                                                                             
                                                                <!--                <td>-->
                                                                <!--                    <p><b>80% and above</b></p>-->
                                                                <!--                </td>-->
                                                                <!--                <td align="center">-->
                                                                <!--                    A+-->
                                                                <!--                </td>-->
                                                                <!--                 <td align="center">-->
                                                                <!--                    (A Plus)-->
                                                                <!--                </td>-->
                                                                <!--                <td align="center">-->
                                                                <!--                    <p><b>4.0</b></p>-->
                                                                                   
                                                                <!--                </td>-->

                                                                <!--            </tr>-->
                                                                <!--        @endforeach-->

                                                                <!--        </tbody>-->
                                                                <!--        <tbody>-->
                                                                        <!--@foreach($application as $key=>$iqac_esources)-->
                                                                <!--            <tr>-->
                                                                             
                                                                <!--                <td>-->
                                                                <!--                    <p><b>75% to less than 80%</b></p>-->
                                                                <!--                </td>-->
                                                                <!--                <td align="center">-->
                                                                <!--                    A-->
                                                                <!--                </td>-->
                                                                <!--                 <td align="center">-->
                                                                <!--                    (A regular)-->
                                                                <!--                </td>-->
                                                                <!--                <td align="center">-->
                                                                <!--                    <p><b>3.75</b></p>-->
                                                                                   
                                                                <!--                </td>-->

                                                                <!--            </tr>-->
                                                                <!--        @endforeach-->

                                                                <!--        </tbody>-->
                                                                <!--        <tbody>-->
                                                                        <!--@foreach($application as $key=>$iqac_esources)-->
                                                                <!--            <tr>-->
                                                                             
                                                                <!--                <td>-->
                                                                <!--                    <p><b>70% to less than 75%</b></p>-->
                                                                <!--                </td>-->
                                                                <!--                <td align="center">-->
                                                                <!--                   A–-->
                                                                <!--                </td>-->
                                                                <!--                 <td align="center">-->
                                                                <!--                    (A minus)-->
                                                                <!--                </td>-->
                                                                <!--                <td align="center">-->
                                                                <!--                    <p><b>3.5</b></p>-->
                                                                                   
                                                                <!--                </td>-->

                                                                <!--            </tr>-->
                                                                <!--        @endforeach-->

                                                                <!--        </tbody>-->
                                                                <!--        <tbody>-->
                                                                        <!--@foreach($application as $key=>$iqac_esources)-->
                                                                <!--            <tr>-->
                                                                             
                                                                <!--                <td>-->
                                                                <!--                    <p><b>65% to less than 70%</b></p>-->
                                                                <!--                </td>-->
                                                                <!--                <td align="center">-->
                                                                <!--                    B+-->
                                                                <!--                </td>-->
                                                                <!--                 <td align="center">-->
                                                                <!--                   (B Plus)-->
                                                                <!--                </td>-->
                                                                <!--                <td align="center">-->
                                                                <!--                    <p><b>3.25</b></p>-->
                                                                                   
                                                                <!--                </td>-->

                                                                <!--            </tr>-->
                                                                <!--        @endforeach-->

                                                                <!--        </tbody>-->
                                                                <!--         <tbody>-->
                                                                        <!--@foreach($application as $key=>$iqac_esources)-->
                                                                <!--            <tr>-->
                                                                             
                                                                <!--                <td>-->
                                                                <!--                    <p><b>60% to less than 65%</b></p>-->
                                                                <!--                </td>-->
                                                                <!--                <td align="center">-->
                                                                <!--                   B-->
                                                                <!--                </td>-->
                                                                <!--                 <td align="center">-->
                                                                <!--                   (B regular)-->
                                                                <!--                </td>-->
                                                                <!--                <td align="center">-->
                                                                <!--                    <p><b>3.0</b></p>-->
                                                                                   
                                                                <!--                </td>-->

                                                                <!--            </tr>-->
                                                                <!--        @endforeach-->

                                                                <!--        </tbody>-->
                                                                <!--         <tbody>-->
                                                                        <!--@foreach($application as $key=>$iqac_esources)-->
                                                                <!--            <tr>-->
                                                                             
                                                                <!--                <td>-->
                                                                <!--                    <p><b>55% to less than 60%</b></p>-->
                                                                <!--                </td>-->
                                                                <!--                <td align="center">-->
                                                                <!--                    B–-->
                                                                <!--                </td>-->
                                                                <!--                 <td align="center">-->
                                                                <!--                   (B minus)-->
                                                                <!--                </td>-->
                                                                <!--                <td align="center">-->
                                                                <!--                    <p><b>2.75</b></p>-->
                                                                                   
                                                                <!--                </td>-->

                                                                <!--            </tr>-->
                                                                <!--        @endforeach-->

                                                                <!--        </tbody>-->
                                                                <!--         <tbody>-->
                                                                        <!--@foreach($application as $key=>$iqac_esources)-->
                                                                <!--            <tr>-->
                                                                             
                                                                <!--                <td>-->
                                                                <!--                    <p><b>50% to less than 55%</b></p>-->
                                                                <!--                </td>-->
                                                                <!--                <td align="center">-->
                                                                <!--                   C+-->
                                                                <!--                </td>-->
                                                                <!--                 <td align="center">-->
                                                                <!--                   (C Plus)-->
                                                                <!--                </td>-->
                                                                <!--                <td align="center">-->
                                                                <!--                    <p><b>2.5</b></p>-->
                                                                                   
                                                                <!--                </td>-->

                                                                <!--            </tr>-->
                                                                <!--        @endforeach-->

                                                                <!--        </tbody>-->
                                                                <!--         <tbody>-->
                                                                        <!--@foreach($application as $key=>$iqac_esources)-->
                                                                <!--            <tr>-->
                                                                             
                                                                <!--                <td>-->
                                                                <!--                    <p><b>45% to less than 50%</b></p>-->
                                                                <!--                </td>-->
                                                                <!--                <td align="center">-->
                                                                <!--                    C-->
                                                                <!--                </td>-->
                                                                <!--                 <td align="center">-->
                                                                <!--                   (C regular)-->
                                                                <!--                </td>-->
                                                                <!--                <td align="center">-->
                                                                <!--                    <p><b>2.25</b></p>-->
                                                                                   
                                                                <!--                </td>-->

                                                                <!--            </tr>-->
                                                                <!--        @endforeach-->

                                                                <!--        </tbody>-->
                                                                <!--        <tbody>-->
                                                                        <!--@foreach($application as $key=>$iqac_esources)-->
                                                                <!--            <tr>-->
                                                                             
                                                                <!--                <td>-->
                                                                <!--                    <p><b>40% to less than 45%</b></p>-->
                                                                <!--                </td>-->
                                                                <!--                <td align="center">-->
                                                                <!--                    D-->
                                                                <!--                </td>-->
                                                                <!--                 <td align="center">-->
                                                                                  
                                                                <!--                </td>-->
                                                                <!--                <td align="center">-->
                                                                <!--                    <p><b>2.0</b></p>-->
                                                                                   
                                                                <!--                </td>-->

                                                                <!--            </tr>-->
                                                                <!--        @endforeach-->

                                                                <!--        </tbody>-->
                                                                <!--        <tbody>-->
                                                                        <!--@foreach($application as $key=>$iqac_esources)-->
                                                                <!--            <tr>-->
                                                                             
                                                                <!--                <td>-->
                                                                <!--                    <p><b>Less than 40%</b></p>-->
                                                                <!--                </td>-->
                                                                <!--                <td align="center">-->
                                                                <!--                    F-->
                                                                <!--                </td>-->
                                                                <!--                 <td align="center">-->
                                                                                  
                                                                <!--                </td>-->
                                                                <!--                <td align="center">-->
                                                                <!--                    <p><b>0.0</b></p>-->
                                                                                   
                                                                <!--                </td>-->

                                                                <!--            </tr>-->
                                                                <!--        @endforeach-->

                                                                <!--        </tbody>-->
                                                                <!--    </table>-->
                                                                <!--</div>-->
                                                                
                                                                <!--<p><b>Grades will be converted into Grade Point Average of each semester and ultimately into Cumulative Grade Point Average (CGPA) on the basis of established rules.-->
                                                                <!-- In preparing the results for the Honours and Master's program if a candidate falls short of First Class (CGPA 3.00) by not more than point 0.01 or of Second Class (CGPA 2.50) by not more than point 0.01, the relevant Examination Committee while finalizing the results shall have the power, with the approval of the Vice-Chancellor, to award such point (0.01) of marks to the candidate as would cover up his shortage of First Class (CGPA 3.00) or Second Class (CGPA 2.50), provided that in marking  the award, the Examination Committee shall take into consideration the record of the work of the candidate during the period of course and reports of the teachers concerned about his general intelligence, regularity of work, earnestness and sense of responsibility and extra-curricular and co curricular contribution in the department as well as to the University.-->
                                                                <!-- </b></p>-->

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
                                                        >Application Form</a>
                                                    </div>
                                                    <div
                                                        id="collapseSix"
                                                        class="collapse"
                                                        data-parent="#accordion"

                                                    >
                                                        <div class="card-body" style="max-width: 100%; border: 1px solid gray; border-radius: 0px 0px 15px 15px;background: #8bc34a45;">
                                                            <div class="col-lg-10 pr-50 md-pr-15" style="margin: 0 auto">

                                                                <div class="table-responsive">
                                                                    <table id="test" class="table table-bordered">
                                                                        <thead
                                                                            class="thead-light"
                                                                            style="background: #8bc34a45; color: #15640b;"
                                                                        >
                                                                        <tr>
                                                                            <th scope="col">#</th>
                                                                            <th scope="col">Title</th>
                                                                            <th scope="col">View</th>
                                                                            <th scope="col">Downloads</th>

                                                                        </tr>
                                                                        </thead>
                                                                        <tbody style="background-color: #e9ecef;">
                                                                        @foreach($application as $key=>$iqac_esources)
                                                                            <tr>
                                                                                <th>{{ $key+1 }}</th>
                                                                                <td>{{ $iqac_esources->a_title }}</td>
                                                                                <td align="center">
                                                                                    <a
                                                                                        target="_blank"
                                                                                        href="{{ url($iqac_esources->uplode_file) }}"
                                                                                    >
                                                                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                                                                    </a>
                                                                                </td>
                                                                                <td align="center">
                                                                                    <a
                                                                                        target="_blank"
                                                                                        href="{{ url($iqac_esources->uplode_file) }}"
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
            <!-- faq Section Start -->
        </div>
    </div>
    <!-- Content Section end -->

@endsection
