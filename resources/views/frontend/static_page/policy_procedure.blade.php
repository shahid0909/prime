
@extends('frontend.layout.master')


 @section('header')
         @include('frontend.layout.partials.header')
    @endsection

@section('content')


    <!-- Main content Start -->
    <div class="main-content">
        <div class="col-lg-12 mt-50">
            <div class="container">
                <div class="card">
                <h5 class="card-header" style="text-align: center; background: #273c66; color: #ffffff">
                    Policy And Procedure
                </h5>
                    <div class="card-body">
                    <!-- Faq Section Start -->
                        <div class="rs-faq-part style1 orange-color pt-10 pb-20 md-pt-20 md-pb-20">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12 padding-0">
                                        <div class="main-part" style="background-color: #ffffff;">
                                            <div class="faq-content" style="border-radius: 10px 10px 10px 10px;">
                                                <div id="accordion" class="accordion">
                                                    <div class="card" >
                                                        <div class="card-header">
                                                            <a class="card-link" data-toggle="collapse" href="#collapseOne_01" style="background: #607d8b;">Semester</a>
                                                        </div>
                                                        <div id="collapseOne_01" class="collapse show" data-parent="#accordion">
                                                            <div class="card-body" style="max-width: 100%;background: #8bc34a45">
                                                                <div class="row">
                                                                    <div class="col-lg-10 pr-50 md-pr-15" style="margin: 0 auto">
                                                                        <div class="blog-desc mb-20 mt-20">
                                                                            <table class="table r table-bordered"style="background-color: #e9ecef;" >
                                                                                <tr>
                                                                                    <th style="background-color: #e9ecef;">Semester</th>
                                                                                    <th style="background-color: #e9ecef;">Duration</th>
                                                                                </tr>
                                                                                <tr >
                                                                                    <td style="background-color: #e9ecef;">Spring</td>
                                                                                    <td style="background-color: #e9ecef;">February to May</td>
                                        
                                                                                </tr>
                                                                                <tr>
                                                                                    <td style="background-color: #e9ecef;">Summer</td>
                                                                                    <td style="background-color: #e9ecef;">June to September</td>
                                                                                </tr>
                                                                                <tr >
                                                                                    <td style="background-color: #e9ecef;">Fall</td>
                                                                                    <td style="background-color: #e9ecef;">October to January</td>
                                                                                </tr>
                                                                            </table>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="accordion01" class="accordion mt-10">
                                                    <div class="card" >
                                                        <div class="card-header">
                                                            <a class="card-link collapsed" data-toggle="collapse" href="#collapseOne_02" style="background: #607d8b;">Medium of Instruction</a>
                                                        </div>
                                                        <div id="collapseOne_02" class="collapse" data-parent="#accordion01">
                                                            <div class="card-body" style="max-width: 100%;background: #8bc34a45">
                                                                <div class="row">
                                                                    <div class="col-lg-10 pr-50 md-pr-15" style="margin: 0 auto">
                                                                        <p style="text-align: justify;font-size: 20px;font-weight: 500;"
                                                                        >
                                                                            The medium of instruction in the University is English, but the students of BEd may study in Bangla version also.
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="accordion002" class="accordion mt-10">
                                                    <div class="card" >
                                                        <div class="card-header">
                                                            <a class="card-link collapsed" data-toggle="collapse" href="#collapseOne_002" style="background: #607d8b;">Semester Withdrawal</a>
                                                        </div>
                                                        <div id="collapseOne_002" class="collapse" data-parent="#accordion01">
                                                            <div class="card-body" style="max-width: 100%;background: #8bc34a45">
                                                                <div class="row">
                                                                    <div class="col-lg-10 pr-50 md-pr-15" style="margin: 0 auto">
                                                                        <p style="text-align: justify;font-size: 20px;font-weight: 500;"
                                                                        >
                                                                           Students may apply for withdrawal from semester(s) after completion of at least one semester provided that they are in good standing (having CGPA 2.50 or above). Withdrawal will be allowed only once. 
	                                                                       A Student who is granted withdrawal must complete the program within specified academic years from the date of initial registration and will start taking courses that will be missed during withdrawal of semester and will be offered for regular students. 

                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="accordion003" class="accordion mt-10">
                                                    <div class="card" >
                                                        <div class="card-header">
                                                            <a class="card-link collapsed" data-toggle="collapse" href="#collapseOne_003" style="background: #607d8b;">Course Withdrawal</a>
                                                        </div>
                                                        <div id="collapseOne_003" class="collapse" data-parent="#accordion01">
                                                            <div class="card-body" style="max-width: 100%;background: #8bc34a45">
                                                                <div class="row">
                                                                    <div class="col-lg-10 pr-50 md-pr-15" style="margin: 0 auto">
                                                                        <p style="text-align: justify;font-size: 20px;font-weight: 500;"
                                                                        >
                                                                          A student can take withdrawal a maximum of two courses in a semester subject to the approval of the Head of the Department. The student needs to apply for the withdrawal of course(s) prior to the mid-term examination of that running semester. 
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="accordion004" class="accordion mt-10">
                                                    <div class="card" >
                                                        <div class="card-header">
                                                            <a class="card-link collapsed" data-toggle="collapse" href="#collapseOne_004" style="background: #607d8b;">Readmission</a>
                                                        </div>
                                                        <div id="collapseOne_004" class="collapse" data-parent="#accordion004">
                                                            <div class="card-body" style="max-width: 100%;background: #8bc34a45">
                                                                <div class="row">
                                                                    <div class="col-lg-10 pr-50 md-pr-15" style="margin: 0 auto">
                                                                        <p
                                                                            style="
                                                              text-align: justify;
                                                              font-size: 20px;
                                                              font-weight: 500;
                                                            "
                                                                        >
                                                                            Prime University is an institution of higher learning and research dedicated to providing quality higher education commensurate with investment. The Courses and Curriculum are so designed as to enable a student to enter into the world of work and pursue higher academic and professional goals with a sound academic foundation. The University supports its students through is commitment to excellence and demonstrates it through the quality academic service. The University offers academically rigorous and practical instruction in different disciplines to cater to the growing demand for human resources development in compliance with the digital Bangladesh as well as in the context of the present day world.
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                            <!--                                <div class="card-body" style="max-width: 100%;background: #8bc34a45">-->
                            <!--                                    <div class="row">-->
                            <!--                                        <div class="col-lg-10 pr-50 md-pr-15" style="margin: 0 auto">-->
                            <!--                                            <p-->
                            <!--                                                style="-->
                            <!--                                  text-align: justify;-->
                            <!--                                  font-size: 20px;-->
                            <!--                                  font-weight: 500;-->
                            <!--                                "-->
                            <!--                                            >-->
                            <!--                                                The Prime University follows the grading system introduced by the Bangladesh University Grants Commission for the private universities of the country-->
                            <!--                                                The gradings are as follows:-->
                            <!--                                            </p>-->
                            <!--                                            <table class="table table-hover table-bordered" style="-->
                            <!--                                                            margin-top: 30px;-->
                            <!--                                                        ">-->
                            <!--                                                    <tr>-->
                            <!--                                                        <th>Numerical Grade</th>-->
                            <!--                                                        <th>Letter Grade</th>-->
                            <!--                                                        <th>Grade Point</th>-->
                            <!--                                                    </tr>-->
                            <!--                                                    <tr>-->
                            <!--                                                        <td>80% and above</td>-->
                            <!--                                                        <td>A+</td>-->
                            <!--                                                        <td>4.00</td>-->
                            <!--                                                    </tr>-->
                            <!--                                                    <tr>-->
                            <!--                                                        <td>75% to less than 80%</td>-->
                            <!--                                                        <td>A</td>-->
                            <!--                                                        <td>3.75</td>-->
                            <!--                                                    </tr>-->
                            <!--                                                       <tr>-->
                            <!--                                                        <td>70% to less than 75%</td>-->
                            <!--                                                        <td>A-</td>-->
                            <!--                                                        <td>3.50</td>-->
                            <!--                                                    </tr>-->
                            <!--                                                       <tr>-->
                            <!--                                                        <td>65% to less than 70%</td>-->
                            <!--                                                        <td>B+</td>-->
                            <!--                                                        <td>3.250</td>-->
                            <!--                                                    </tr>-->
                            <!--                                                       <tr>-->
                            <!--                                                        <td>60% to less than 65%</td>-->
                            <!--                                                        <td>B</td>-->
                            <!--                                                        <td>3.00</td>-->
                            <!--                                                    </tr>-->
                            <!--                                                       <tr>-->
                            <!--                                                        <td>55% to less than 60%</td>-->
                            <!--                                                        <td>B-</td>-->
                            <!--                                                        <td>2.75</td>-->
                            <!--                                                    </tr>-->
                            <!--                                                       <tr>-->
                            <!--                                                        <td>50% to less than 55%</td>-->
                            <!--                                                        <td>C+</td>-->
                            <!--                                                        <td>2.50</td>-->
                            <!--                                                    </tr>-->
                            <!--                                                       <tr>-->
                            <!--                                                        <td>45% to less than 50%</td>-->
                            <!--                                                        <td>C</td>-->
                            <!--                                                        <td>2.25</td>-->
                            <!--                                                    </tr>-->
                            <!--                                                       <tr>-->
                            <!--                                                        <td>40% to Less than 45%</td>-->
                            <!--                                                        <td>D</td>-->
                            <!--                                                        <td>2.00</td>-->
                            <!--                                                    </tr>-->
                                                                                                                        
                            <!--                                                       <tr>-->
                            <!--                                                        <td>Less than 40%</td>-->
                            <!--                                                        <td>F</td>-->
                            <!--                                                        <td>0.00</td>-->
                            <!--                                                    </tr>-->
                                                                              
                            <!--                                                </table>-->
                            <!--</div>-->
                            <!--                                    </div>-->
                            <!--                                </div>-->
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="accordion005" class="accordion mt-10">
                                                    <div class="card" >
                                                        <div class="card-header">
                                                            <a class="card-link collapsed" data-toggle="collapse" href="#collapseOne_005" style="background: #607d8b;">Grading System</a>
                                                        </div>
                                                        <div id="collapseOne_005" class="collapse" data-parent="#accordion005">
                                                            <div class="card-body" style="max-width: 100%; border: 1px solid gray; border-radius: 0px 0px 15px 15px; background: #8bc34a45; ">
                                                                <div class="col-lg-10 pr-50 md-pr-15" style="margin: 0 auto">
                                                                <p style="font-size:20px;"><b>The letter grade of each course and corresponding grade point shall be calculated as per Uniform Grading System of UGC in the following manner.</b></p>

                                                                <div class="table-responsive">
                                                                    <table id="test" class="table table-bordered">
                                                                        <thead
                                                                            class="thead-light"
                                                                            style="background: #d5eaca; color: #15640b"
                                                                        >
                                                                        <tr>
                                                                            <th scope="col">Numerical Grade</th>
                                                                            <th scope="col" colspan="2">Letter Grade</th>
                                                                            <th scope="col">Grade Point</th>

                                                                        </tr>
                                                                        </thead>
                                                                        <tbody style="background-color: #e9ecef;">
                                                                           <tr>
                                                                             
                                                                                <td>
                                                                                    <p><b>80% and above</b></p>
                                                                                </td>
                                                                                <td align="center">
                                                                                    A+
                                                                                </td>
                                                                                 <td align="center">
                                                                                    (A Plus)
                                                                                </td>
                                                                                <td align="center">
                                                                                    <p><b>4.0</b></p>
                                                                                   
                                                                                </td>

                                                                            </tr>
                                                                        </tbody>
                                                                        <tbody style="background-color: #e9ecef;">
                                                                            <tr>
                                                                             
                                                                                <td>
                                                                                    <p><b>75% to less than 80%</b></p>
                                                                                </td>
                                                                                <td align="center">
                                                                                    A
                                                                                </td>
                                                                                 <td align="center">
                                                                                    (A regular)
                                                                                </td>
                                                                                <td align="center">
                                                                                    <p><b>3.75</b></p>
                                                                                   
                                                                                </td>

                                                                            </tr>

                                                                        </tbody>
                                                                        <tbody style="background-color: #e9ecef;">
                                                                            <tr>
                                                                             
                                                                                <td>
                                                                                    <p><b>70% to less than 75%</b></p>
                                                                                </td>
                                                                                <td align="center">
                                                                                   A–
                                                                                </td>
                                                                                 <td align="center">
                                                                                    (A minus)
                                                                                </td>
                                                                                <td align="center">
                                                                                    <p><b>3.5</b></p>
                                                                                   
                                                                                </td>

                                                                            </tr>

                                                                        </tbody>
                                                                        <tbody style="background-color: #e9ecef;">
                                                                            <tr>
                                                                             
                                                                                <td>
                                                                                    <p><b>65% to less than 70%</b></p>
                                                                                </td>
                                                                                <td align="center">
                                                                                    B+
                                                                                </td>
                                                                                 <td align="center">
                                                                                   (B Plus)
                                                                                </td>
                                                                                <td align="center">
                                                                                    <p><b>3.25</b></p>
                                                                                   
                                                                                </td>

                                                                            </tr>

                                                                        </tbody>
                                                                         <tbody style="background-color: #e9ecef;">
                                                                            <tr>
                                                                             
                                                                                <td>
                                                                                    <p><b>60% to less than 65%</b></p>
                                                                                </td>
                                                                                <td align="center">
                                                                                   B
                                                                                </td>
                                                                                 <td align="center">
                                                                                   (B regular)
                                                                                </td>
                                                                                <td align="center">
                                                                                    <p><b>3.0</b></p>
                                                                                   
                                                                                </td>

                                                                            </tr>

                                                                        </tbody>
                                                                         <tbody style="background-color: #e9ecef;">
                                                                            <tr>
                                                                             
                                                                                <td>
                                                                                    <p><b>55% to less than 60%</b></p>
                                                                                </td>
                                                                                <td align="center">
                                                                                    B–
                                                                                </td>
                                                                                 <td align="center">
                                                                                   (B minus)
                                                                                </td>
                                                                                <td align="center">
                                                                                    <p><b>2.75</b></p>
                                                                                   
                                                                                </td>

                                                                            </tr>

                                                                        </tbody>
                                                                         <tbody style="background-color: #e9ecef;">
                                                                            <tr>
                                                                             
                                                                                <td>
                                                                                    <p><b>50% to less than 55%</b></p>
                                                                                </td>
                                                                                <td align="center">
                                                                                   C+
                                                                                </td>
                                                                                 <td align="center">
                                                                                   (C Plus)
                                                                                </td>
                                                                                <td align="center">
                                                                                    <p><b>2.5</b></p>
                                                                                   
                                                                                </td>

                                                                            </tr>

                                                                        </tbody>
                                                                         <tbody style="background-color: #e9ecef;">
                                                                            <tr>
                                                                             
                                                                                <td>
                                                                                    <p><b>45% to less than 50%</b></p>
                                                                                </td>
                                                                                <td align="center">
                                                                                    C
                                                                                </td>
                                                                                 <td align="center">
                                                                                   (C regular)
                                                                                </td>
                                                                                <td align="center">
                                                                                    <p><b>2.25</b></p>
                                                                                   
                                                                                </td>

                                                                            </tr>

                                                                        </tbody>
                                                                        <tbody style="background-color: #e9ecef;">
                                                                            <tr>
                                                                             
                                                                                <td>
                                                                                    <p><b>40% to less than 45%</b></p>
                                                                                </td>
                                                                                <td align="center">
                                                                                    D
                                                                                </td>
                                                                                 <td align="center">
                                                                                  
                                                                                </td>
                                                                                <td align="center">
                                                                                    <p><b>2.0</b></p>
                                                                                   
                                                                                </td>

                                                                            </tr>

                                                                        </tbody>
                                                                        <tbody style="background-color: #e9ecef;">
                                                                            <tr>
                                                                             
                                                                                <td>
                                                                                    <p><b>Less than 40%</b></p>
                                                                                </td>
                                                                                <td align="center">
                                                                                    F
                                                                                </td>
                                                                                 <td align="center">
                                                                                  
                                                                                </td>
                                                                                <td align="center">
                                                                                    <p><b>0.0</b></p>
                                                                                   
                                                                                </td>

                                                                            </tr>
                                                                            <tr>
                                                                             
                                                                                <td>
                                                                                    <p><b>Less than 40%</b></p>
                                                                                </td>
                                                                                <td align="center">
                                                                                    F
                                                                                </td>
                                                                                 <td align="center">
                                                                                  
                                                                                </td>
                                                                                <td align="center">
                                                                                    <p><b>0.0</b></p>
                                                                                   
                                                                                </td>

                                                                            </tr>
                                                                     

                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                                
                                                                <p style="font-size:20px;"><b>Grades will be converted into Grade Point Average of each semester and ultimately into Cumulative Grade Point Average (CGPA) on the basis of established rules.
                                                                 In preparing the results for the Honours and Master's program if a candidate falls short of First Class (CGPA 3.00) by not more than point 0.01 or of Second Class (CGPA 2.50) by not more than point 0.01, the relevant Examination Committee while finalizing the results shall have the power, with the approval of the Vice-Chancellor, to award such point (0.01) of marks to the candidate as would cover up his shortage of First Class (CGPA 3.00) or Second Class (CGPA 2.50), provided that in marking  the award, the Examination Committee shall take into consideration the record of the work of the candidate during the period of course and reports of the teachers concerned about his general intelligence, regularity of work, earnestness and sense of responsibility and extra-curricular and co curricular contribution in the department as well as to the University.
                                                                 </b></p>

                                                            </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                
                                                
                                                <div id="accordion006" class="accordion mt-10">
                                                    <div class="card" >
                                                        <div class="card-header">
                                                            <a class="card-link collapsed collapsed" data-toggle="collapse" href="#collapseOne_006" style="background: #607d8b;">Incomplete Grade</a>
                                                        </div>
                                                        <div id="collapseOne_006" class="collapse" data-parent="#accordion006">
                                                            <div class="card-body" style="max-width: 100%;background: #8bc34a45">
                                                                <div class="row">
                                                                    <div class="col-lg-10 pr-50 md-pr-15" style="margin: 0 auto">
                                                                        <p
                                                                            style="text-align: justify;font-size: 20px;font-weight: 500;"
                                                                        >
                                                                           A student who has appeared at the Semester Mid Term Examination but fails to appear at the Semester Final Examination will be assigned “I” Grade. Students having “I” Grade must sit for special examinations within 02 (two) weeks in order to replace the “I” grade. If a student fails to do so, he/she will automatically earn the “F” grade. 

                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="accordion007" class="accordion mt-10">
                                                    <div class="card" >
                                                        <div class="card-header">
                                                            <a class="card-link collapsed collapsed" data-toggle="collapse" href="#collapseOne_007" style="background: #607d8b;">Attendance Requirement</a>
                                                        </div>
                                                        <div id="collapseOne_007" class="collapse" data-parent="#accordion007">
                                                            <div class="card-body" style="max-width: 100%;background: #8bc34a45">
                                                                <div class="row">
                                                                    <div class="col-lg-10 pr-50 md-pr-15" style="margin: 0 auto">
                                                                        <p
                                                                            style="text-align: justify;font-size: 20px;font-weight: 500;"
                                                                        >
                                                                           a)	Attendance in class is mandatory for all students. 
                                                                           <br/> b)	A student with class attendance below 70% will not be allowed to sit for the final exams. 
                                                                          <br/>  c)	Student absent in 3 consecutive classes, will require permission of the Head of the Department to attend the following classes. 
                                                                         <br/>   d)	Student unable to attend classes for a known reason, must apply to the Head of the Department, with copies to the course teacher and the Registrar’s Office, mentioning the dates and reasons for absence.
                                                                            	If it is not possible to inform in advance, the Head of the Department must be informed by sending an application through messenger, post, fax or email.
                                                                          <br/>  e) A student will get proportionate marks on attendance depending on his/her percent of attendance in a course.	


                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="accordion008" class="accordion mt-10">
                                                    <div class="card" >
                                                        <div class="card-header">
                                                            <a class="card-link collapsed" data-toggle="collapse" href="#collapseOne_008" style="background: #607d8b;">Duration(Validity) Of Registration</a>
                                                        </div>
                                                        <div id="collapseOne_008" class="collapse" data-parent="#accordion008">
                                                            <div class="card-body" style="max-width: 100%;background: #8bc34a45">
                                                                <div class="row">
                                                                    <div class="col-lg-10 pr-50 md-pr-15" style="margin: 0 auto">
                                                                        <p style="
                                                              text-align: justify;
                                                              font-size: 20px;
                                                              font-weight: 500;
                                                            "
                                                                        >
                                                                            The Validity of registration of a student will be as noted below:<br/>
                                                                            a)	For 01 (one) year program student’s registration will be valid for two years.
                                                                            <br/>b)	For 02 (two) year program student’s registration will remain valid for 04 (four) years.
                                                                           <br/> c)	For 03 (three) year program student’s registration will remain valid for 06 (six) years.
                                                                          <br/>  d)	For 04 (four) year program student’s registration will remain valid for 08 (eight) years.
                                                                          <br/>  Consecutive discontinuation of a maximum of 03 (Three) semesters will be considered as break of study. In such case the student concerned shall have to apply for re-admission.

                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                
<!--                                                <div id="accordion03" class="accordion mt-10">-->
<!--                                                    <div class="card" >-->
<!--                                                        <div class="card-header">-->
<!--                                                            <a class="card-link collapsed" data-toggle="collapse" href="#collapseOne_04" style="background: #607d8b;">Attendance</a>-->
<!--                                                        </div>-->
<!--                                                        <div id="collapseOne_04" class="collapse" data-parent="#accordion03">-->
<!--                                                            <div class="card-body" style="max-width: 100%;background: #8bc34a45">-->
<!--                                                                <div class="row">-->
<!--                                                                    <div class="col-lg-10 pr-50 md-pr-15" style="margin: 0 auto">-->
<!--                                                                        <p style="-->
<!--                                                              text-align: justify;-->
<!--                                                              font-size: 20px;-->
<!--                                                              font-weight: 500;-->
<!--                                                            "-->
<!--                                                                        >-->
<!--                                                                            All students are expected to attend the classes regularly. The University believes that regular attendance is essential for effective learning.-->
<!--                                                                            A student is required to attend at least 75% of all the classes held in every course in order to sit for the final examination.-->
<!--                                                                        </p>-->
<!--                                                                    </div>-->
<!--                                                                </div>-->
<!--                                                            </div>-->
<!--                                                        </div>-->
<!--                                                    </div>-->
<!--                                                </div>-->
<!--                                                <div id="accordion04" class="accordion mt-10">-->
<!--                                                    <div class="card" >-->
<!--                                                        <div class="card-header">-->
<!--                                                            <a class="card-link collapsed" data-toggle="collapse" href="#collapseOne_05" style="background: #607d8b;">Scholarship and Financial Aid</a>-->
<!--                                                        </div>-->
<!--                                                        <div id="collapseOne_05" class="collapse" data-parent="#accordion04">-->
<!--                                                            <div class="card-body" style="max-width: 100%;background: #8bc34a45">-->
<!--                                                                <div class="row">-->
<!--                                                                    <div class="col-lg-10 pr-50 md-pr-15" style="margin: 0 auto">-->
<!--                                                                        <p-->
<!--                                                                            style="-->
<!--                                                              text-align: justify;-->
<!--                                                              font-size: 20px;-->
<!--                                                              font-weight: 500;-->
<!--                                                            "-->
<!--                                                                        >-->
<!--                                                                            Prime University is an institution of higher learning and research dedicated to providing quality higher education commensurate with investment. The Courses and Curriculum are so designed as to enable a student to enter into the world of work and pursue higher academic and professional goals with a sound academic foundation. The University supports its students through is commitment to excellence and demonstrates it through the quality academic service. The University offers academically rigorous and practical instruction in different disciplines to cater to the growing demand for human resources development in compliance with the digital Bangladesh as well as in the context of the present day world.-->
<!--                                                                        </p>-->
<!--                                                                    </div>-->
<!--                                                                </div>-->
<!--                                                            </div>-->
<!--                                                        </div>-->
<!--                                                    </div>-->
<!--                                                </div>-->
<!--                                                <div id="accordion05" class="accordion mt-10">-->
<!--                                                    <div class="card" >-->
<!--                                                        <div class="card-header">-->
<!--                                                            <a class="card-link collapsed" data-toggle="collapse" href="#collapseOne_06" style="background: #607d8b;">Readmission</a>-->
<!--                                                        </div>-->
<!--                                                        <div id="collapseOne_06" class="collapse" data-parent="#accordion05">-->
<!--                                                            <div class="card-body" style="max-width: 100%;background: #8bc34a45">-->
<!--                                                                <div class="row">-->
<!--                                                                    <div class="col-lg-10 pr-50 md-pr-15" style="margin: 0 auto">-->
<!--                                                                        <p-->
<!--                                                                            style="-->
<!--                                                              text-align: justify;-->
<!--                                                              font-size: 20px;-->
<!--                                                              font-weight: 500;-->
<!--                                                            "-->
<!--                                                                        >-->
<!--                                                                            Prime University is an institution of higher learning and research dedicated to providing quality higher education commensurate with investment. The Courses and Curriculum are so designed as to enable a student to enter into the world of work and pursue higher academic and professional goals with a sound academic foundation. The University supports its students through is commitment to excellence and demonstrates it through the quality academic service. The University offers academically rigorous and practical instruction in different disciplines to cater to the growing demand for human resources development in compliance with the digital Bangladesh as well as in the context of the present day world.-->
<!--                                                                        </p>-->
<!--                                                                    </div>-->
<!--                                                                </div>-->
<!--                                                            </div>-->
<!--                                                        </div>-->
<!--                                                    </div>-->
<!--                                                </div>-->
<!--                                                <div id="accordion06" class="accordion mt-10">-->
<!--                                                    <div class="card" >-->
<!--                                                        <div class="card-header">-->
<!--                                                            <a class="card-link collapsed" data-toggle="collapse" href="#collapseOne_07" style="background: #607d8b;">Special Exam</a>-->
<!--                                                        </div>-->
<!--                                                        <div id="collapseOne_07" class="collapse" data-parent="#accordion06">-->
<!--                                                            <div class="card-body" style="max-width: 100%;background: #8bc34a45">-->
<!--                                                                <div class="row">-->
<!--                                                                    <div class="col-lg-10 pr-50 md-pr-15" style="margin: 0 auto">-->
<!--                                                                        <p-->
<!--                                                                            style="-->
<!--                                                              text-align: justify;-->
<!--                                                              font-size: 20px;-->
<!--                                                              font-weight: 500;-->
<!--                                                            "-->
<!--                                                                        >-->
<!--                                                                            Prime University is an institution of higher learning and research dedicated to providing quality higher education commensurate with investment. The Courses and Curriculum are so designed as to enable a student to enter into the world of work and pursue higher academic and professional goals with a sound academic foundation. The University supports its students through is commitment to excellence and demonstrates it through the quality academic service. The University offers academically rigorous and practical instruction in different disciplines to cater to the growing demand for human resources development in compliance with the digital Bangladesh as well as in the context of the present day world.-->
<!--                                                                        </p>-->
<!--                                                                    </div>-->
<!--                                                                </div>-->
<!--                                                            </div>-->
<!--                                                        </div>-->
<!--                                                    </div>-->
<!--                                                </div>-->
<!--                                                <div id="accordion07" class="accordion mt-10">-->
<!--                                                    <div class="card" >-->
<!--                                                        <div class="card-header">-->
<!--                                                            <a class="card-link collapsed" data-toggle="collapse" href="#collapseOne_08" style="background: #607d8b;">Retake</a>-->
<!--                                                        </div>-->
<!--                                                        <div id="collapseOne_08" class="collapse" data-parent="#accordion07">-->
<!--                                                            <div class="card-body" style="max-width: 100%;background: #8bc34a45">-->
<!--                                                                <div class="row">-->
<!--                                                                    <div class="col-lg-10 pr-50 md-pr-15" style="margin: 0 auto">-->
<!--                                                                        <p-->
<!--                                                                            style="-->
<!--                                                              text-align: justify;-->
<!--                                                              font-size: 20px;-->
<!--                                                              font-weight: 500;-->
<!--                                                            "-->
<!--                                                                        >-->
<!--                                                                            If any student secures “F” grade in any course or does not appear in any course in the Mid-term or Semester final examination he/she will be treated as failed in that course. In that case, he/she is to re-take the course(s) within the subsequent three semesters. -->
<!--                                                                        </p>-->
<!--                                                                    </div>-->
<!--                                                                </div>-->
<!--                                                            </div>-->
<!--                                                        </div>-->
<!--                                                    </div>-->
<!--                                                </div>-->
<!--                                                <div id="accordion08" class="accordion mt-10">-->
<!--                                                    <div class="card" >-->
<!--                                                        <div class="card-header">-->
<!--                                                            <a class="card-link collapsed collapsed" data-toggle="collapse" href="#collapseOne_09" style="background: #607d8b;">Improvement</a>-->
<!--                                                        </div>-->
<!--                                                        <div id="collapseOne_09" class="collapse" data-parent="#accordion08">-->
<!--                                                            <div class="card-body" style="max-width: 100%;background: #8bc34a45">-->
<!--                                                                <div class="row">-->
<!--                                                                    <div class="col-lg-10 pr-50 md-pr-15" style="margin: 0 auto">-->
<!--                                                                        <p-->
<!--                                                                            style="text-align: justify;font-size: 20px;font-weight: 500;"-->
<!--                                                                        >-->
<!--                                                                            If any student secured C+, C & D Grade shall be eligible to apply for improvement within 15 days of publication of final result. In that case the concerned student is to apply to the Head of the Department stating his/her desire. Being satisfied, the concerned Head of the department shall allow the applicant to participate in the Improvement Examination.	-->
<!--The Improvement Examination shall take place along with the General Mid Term Examination and Semester Final Examination or Special Mid Term Examination and Special Semester Final Examination, as per decision of the Head of the Department. The student is to improve the course(s) within the subsequent two semesters.-->
<!--The marks that shall be secured by the concerned student(s) shall be the marks of the student. But, if the student obtained marks less than previous one, in that case the previous marks shall prevail.-->

<!--                                                                        </p>-->
<!--                                                                    </div>-->
<!--                                                                </div>-->
<!--                                                            </div>-->
<!--                                                        </div>-->
<!--                                                    </div>-->
<!--                                                </div>-->
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
