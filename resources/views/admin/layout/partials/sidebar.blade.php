<div class="sidebar-container">
    <div class="sidemenu-container navbar-collapse collapse fixed-menu">
        <div id="remove-scroll" class="left-sidemenu">
            <ul class="sidemenu  page-header-fixed slimscroll-style" data-keep-expanded="false"
                data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
                <li class="sidebar-toggler-wrapper hide">
                    <div class="sidebar-toggler">
                        <span></span>
                    </div>
                </li>
                <li class="sidebar-user-panel">
                    <div class="user-panel">
                        <div class="pull-left image">
                            <!--<img src="{{ asset('admin_assets/img/dp.jpg') }}" class="img-circle user-img-circle"-->
                                <!--alt="User Image" />-->
                        </div>
                        <div class="pull-left info">
                            <h4>{{ Auth::user()->name  }}</h4>
                        </div>
                    </div>
                </li>
                <li class="nav-item start active open">
                    <a href="{{ url('admin/dashboard') }}" class="nav-link nav-toggle">
                        <i class="material-icons">dashboard</i>
                        <span class="title">Dashboard</span>
                        <span class="selected"></span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link nav-toggle"><i class="fa fa-user" aria-hidden="true"></i>

                        <span class="title">Administrators</span><span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="nav-item">
                            <a href="{{url('/admin/administrator')}}" class="nav-link "> <span class="title">List of Administrators</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('/admin/administrators/add')}}" class="nav-link "> <span class="title">Add Administrators</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="{{url('/admin/faculty')}}" class="nav-link nav-toggle"><i class="fa fa-university" aria-hidden="true"></i>

                        <span class="title">Faculty</span><span class="arrow"></span>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link nav-toggle"><i class="fa fa-building" aria-hidden="true"></i>
                        <span class="title">Department</span><span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="nav-item">
                            <a href="{{url('/admin/department')}}" class="nav-link "> <span class="title">Department</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('/admin/dept_slider')}}" class="nav-link "> <span class="title">Department Slider</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('/admin/vision_mission')}}" class="nav-link "> <span class="title">Vision Mission</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('/admin/facilities')}}" class="nav-link "> <span class="title">Facilities</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('/admin/clubs')}}" class="nav-link "> <span class="title">Clubs</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('/admin/club_details')}}" class="nav-link "> <span class="title">Clubs Details</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{url('/admin/club_committee')}}" class="nav-link "> <span class="title">Clubs Committee</span>
                            </a>
                        </li>

                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link nav-toggle"><i class="fa fa-address-card" aria-hidden="true"></i>

                        <span class="title">Employee</span><span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="nav-item">
                            <a href="{{url('/admin/employ')}}" class="nav-link "> <span class="title">List of Employ</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('/admin/employ/add')}}" class="nav-link "> <span class="title">Add Employ</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link nav-toggle"><i class="fa fa-users" aria-hidden="true"></i>

                        <span class="title">Faculty Member</span><span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="nav-item">
                            <a href="{{url('/admin/faculty_member')}}" class="nav-link "> <span class="title">All Member</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('/admin/faculty_member/add')}}" class="nav-link "> <span class="title">Add Member</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link nav-toggle"><i class="fa fa-calendar-check-o" aria-hidden="true"></i>

                        <span class="title">Academic Calender</span><span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="nav-item">
                            <a href="{{url('/admin/aca_calender')}}" class="nav-link "> <span class="title">List Calender</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('/admin/aca_calender/add')}}" class="nav-link "> <span class="title">Add Calender</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link nav-toggle"><i class="fa fa-list-alt" aria-hidden="true"></i>

                        <span class="title">Class Exam Routine</span><span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="nav-item">
                            <a href="{{url('/admin/class_exam')}}" class="nav-link "> <span class="title">List of Routine</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('/admin/class_exam/add')}}" class="nav-link "> <span class="title">Add Routine</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link nav-toggle"><i class="fa fa-calendar-o" aria-hidden="true"></i>

                        <span class="title">Important Date & Deadline</span><span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="nav-item">
                            <a href="{{url('/admin/important_date')}}" class="nav-link "> <span class="title">List of Important Date & Deadline</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('/admin/important_date/add')}}" class="nav-link "> <span class="title">Add Important Date & Deadline</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link nav-toggle"><i class="fa fa-newspaper-o" aria-hidden="true"></i>

                        <span class="title">Breaking News</span><span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="nav-item">
                            <a href="{{url('/admin/breaking_news')}}" class="nav-link "> <span class="title">List of Breaking News</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('/admin/breaking_news/add')}}" class="nav-link "> <span class="title">Add Breaking News</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link nav-toggle"><i class="fa fa-bullhorn" aria-hidden="true"></i>

                        <span class="title">Admission Promotion</span><span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="nav-item">
                            <a href="{{url('/admin/admission_promotion')}}" class="nav-link "> <span class="title">List of Admission Promotion</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('/admin/admission_promotion/add')}}" class="nav-link "> <span class="title">Add Admission Promotion</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link nav-toggle"><i class="fa fa-asterisk" aria-hidden="true"></i>

                        <span class="title">Admission Requirement</span><span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="nav-item">
                            <a href="{{url('/admin/admission_requirement')}}" class="nav-link "> <span class="title">List of Admission Requirement</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('/admin/admission_requirement/add')}}" class="nav-link "> <span class="title">Add Admission Requirement</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link nav-toggle"><i class="fa fa-comments" aria-hidden="true"></i>

                        <span class="title">Massage</span><span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="nav-item">
                            <a href="{{url('/admin/massage_vc')}}" class="nav-link "> <span class="title">VC Massage</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('/admin/massage_Chairman')}}" class="nav-link "> <span class="title">Chairman Massage</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('/admin/massage_department_head')}}" class="nav-link "> <span class="title">Department Head Massage</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('/admin/massage_dean')}}" class="nav-link "> <span class="title">Dean Massage</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('/admin/massage_director')}}" class="nav-link "> <span class="title">Director Massage</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link nav-toggle"><i class="fa fa-bell-o" aria-hidden="true"></i>

                        <span class="title">Notice</span><span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="nav-item">
                            <a href="{{url('/admin/Home_notice')}}" class="nav-link "> <span class="title">Home Notice</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('/admin/dept_notice')}}" class="nav-link "> <span class="title">Department Notice</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link nav-toggle"><i class="fa fa-calendar" aria-hidden="true"></i>

                        <span class="title">Events</span><span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="nav-item">
                            <a href="{{url('/admin/home_event')}}" class="nav-link "> <span class="title">Home Events</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('/admin/dept_event')}}" class="nav-link "> <span class="title">Department Events</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link nav-toggle"><i class="fa fa-file-text" aria-hidden="true"></i>

                        <span class="title">News & Media</span><span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="nav-item">
                            <a href="{{url('/admin/home_news')}}" class="nav-link "> <span class="title">Home News & Media</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('/admin/dept_news')}}" class="nav-link "> <span class="title">Department News & Media</span>
                            </a>
                        </li>
                    </ul>
                </li>
                 <li class="nav-item">
                    <a href="#" class="nav-link nav-toggle"><i class="fa fa-picture-o" aria-hidden="true"></i></i>

                        <span class="title">Photo Gallery</span><span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="nav-item">
                            <a href="{{url('/admin/image_gallery')}}" class="nav-link "> <span class="title">List Of Photo Gallery</span>
                            </a>
                        </li>

                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link nav-toggle"><i class="fa fa-user-circle-o" aria-hidden="true"></i>

                        <span class="title">Notable Alumni</span><span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="nav-item">
                            <a href="{{url('/admin/home_notable')}}" class="nav-link "> <span class="title">Home Notable Alumni</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('/admin/dept_notable')}}" class="nav-link "> <span class="title">Department Notable Alumni</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link nav-toggle"><i class="fa fa-picture-o" aria-hidden="true"></i>

                        <span class="title">Home Slider</span><span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="nav-item">
                            <a href="{{url('/admin/home_slider')}}" class="nav-link "> <span class="title">List of Home Slider</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('/admin/home_slider/add')}}" class="nav-link "> <span class="title">Add Home Slider</span>
                            </a>
                        </li>
                    </ul>
                </li>

                 <li class="nav-item">
                    <a href="#" class="nav-link nav-toggle"><i class="fa fa-cogs" aria-hidden="true"></i>

                        <span class="title">CRHP</span><span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="nav-item">
                            <a href="{{url('/admin/crhp')}}" class="nav-link "> <span class="title">List of CRHP</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('/admin/crhp/add')}}" class="nav-link "> <span class="title">Add CRHP</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('/admin/crhp_details')}}" class="nav-link "> <span class="title">CRHP Details List</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('/admin/crhp_details/add')}}" class="nav-link "> <span class="title">Add CRHP Details</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link nav-toggle"><i class="fa fa-cogs" aria-hidden="true"></i>

                        <span class="title">ID Card Generate</span><span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="nav-item">
                            <a href="{{url('/admin/student_search')}}" class="nav-link "> <span class="title">Student</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('/admin/faculty_search')}}" class="nav-link "> <span class="title">Faculty Member</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('/admin/employ_search')}}" class="nav-link "> <span class="title">Employ</span>
                            </a>
                        </li>
                    </ul>
                </li>


                <li class="nav-item">
                    <a href="#" class="nav-link nav-toggle"><i class="fa fa-cogs" aria-hidden="true"></i>

                        <span class="title">IQAC</span><span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="nav-item">
                            <a href="{{url('/admin/iqac')}}" class="nav-link "> <span class="title">List of IQAC</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('/admin/iqac_workshop')}}" class="nav-link "> <span class="title">List of IQAC Workshop</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('/admin/iqac_resource')}}" class="nav-link "> <span class="title">List of IQAC Resourse</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{url('/admin/iqac_details')}}" class="nav-link "> <span class="title">List of IQAC Details</span>
                            </a>
                        </li>
                         <li class="nav-item">
                            <a href="{{url('/admin/iqac_member/add')}}" class="nav-link "> <span class="title">IQAC Member Add</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{url('/admin/iqac_member')}}" class="nav-link "> <span class="title">IQAC Member List</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link nav-toggle"><i class="fa fa-book" aria-hidden="true"></i>

                        <span class="title">Library</span><span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="nav-item">
                            <a href="{{url('/admin/library_Eresource')}}" class="nav-link "> <span class="title">Library E-Resource</span>
                            </a>
                        </li>

                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link nav-toggle"><i class="fa fa-cogs" aria-hidden="true"></i>

                        <span class="title">Former Vice Chancellor</span><span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="nav-item">
                            <a href="{{url('/admin/f_v_Chancellor')}}" class="nav-link "> <span class="title">List of Former Vice Chancellor</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('/admin/f_v_Chancellor/add')}}" class="nav-link "> <span class="title">Add Former Vice Chancellor</span>
                            </a>
                        </li>
                    </ul>
                </li>

                 <li class="nav-item">
                    <a href="#" class="nav-link nav-toggle"><i class="fa fa-money" aria-hidden="true"></i>

                        <span class="title">Fees & Payment</span><span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="nav-item">
                            <a href="{{url('/admin/fees')}}" class="nav-link "> <span class="title">Fees & Payment List</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('/admin/fees/add')}}" class="nav-link "> <span class="title">Fees & Payment Add</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link nav-toggle"><i class="fa fa-cogs" aria-hidden="true"></i>

                        <span class="title">Academic Program</span><span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="nav-item">
                            <a href="{{url('/admin/aca_program')}}" class="nav-link "> <span class="title">List of Academic Program</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('/admin/aca_program/add')}}" class="nav-link "> <span class="title">Add Academic Program</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                   <a href="#" class="nav-link nav-toggle"><i class="material-icons">group</i>
                   <span class="title">Students</span><span class="arrow"></span>
                  </a>
               <ul class="sub-menu">
                   <li class="nav-item">
                           <a href="{{url('/admin/student')}}" class="nav-link "> <span class="title">All
                                   Students</span>
                           </a>
                       </li>
                       <li class="nav-item">
                           <a href="{{url('/admin/addstudent')}}" class="nav-link "> <span class="title">Add
                                   Student</span>
                           </a>
                       </li>
                       <li class="nav-item">
                           <a href="{{url('/admin/tempaddstudent')}}" class="nav-link "> <span class="title">Add Student Temporary</span>
                           </a>
                       </li>
                       <li class="nav-item">
                           <a href="{{url('/admin/exam')}}" class="nav-link "> <span class="title">
                                   Exam Managment</span>
                           </a>
                       </li>
                       <li class="nav-item">
                           <a href="{{url('/admin/admit')}}" class="nav-link "> <span class="title">
                                   Admit Card</span>
                           </a>
                       </li>
               </ul>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link nav-toggle"><i class="fa fa-cogs" aria-hidden="true"></i>

                        <span class="title">Address</span><span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="nav-item">
                            <a href="{{url('/admin/home_address')}}" class="nav-link "> <span class="title">Home Address</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('/admin/dept_address')}}" class="nav-link "> <span class="title">Department Address</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link nav-toggle"><i class="fa fa-cogs" aria-hidden="true"></i>

                        <span class="title">Job Post</span><span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="nav-item">
                            <a href="{{url('/admin/job')}}" class="nav-link "> <span class="title">Post List</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('/admin/job/add')}}" class="nav-link "> <span class="title">Add Post</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('/admin/job_apply')}}" class="nav-link "> <span class="title">Job Apply List</span>
                            </a>
                        </li>
                    </ul>
                </li>





                <li class="nav-item">
                    <a href="#" class="nav-link nav-toggle"><i class="fa fa-graduation-cap" aria-hidden="true"></i>

                        <span class="title">School</span><span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="nav-item">
                            <a href="{{url('/admin/language_school')}}" class="nav-link "> <span class="title">School List</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('/admin/school_details')}}" class="nav-link "> <span class="title">School Details List</span>
                            </a>
                        </li>
                    </ul>
                </li>




                <li class="nav-item">
                    <a href="#" class="nav-link nav-toggle"><i class="fa fa-list-alt" aria-hidden="true"></i>

                        <span class="title">Result</span><span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="nav-item">
                            <a href="{{url('/admin/result')}}" class="nav-link "> <span class="title">List All</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('/admin/result/add')}}" class="nav-link "> <span class="title">Published Result</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link nav-toggle"><i class="fa fa-users" aria-hidden="true"></i>

                        <span class="title">Student</span><span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="nav-item">
                            <a href="{{url('/admin/student_apply_list')}}" class="nav-link "> <span class="title">List Of Student Apply</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('/admin/student_list')}}" class="nav-link "> <span class="title">Student List</span>
                            </a>
                        </li>
                    </ul>
                </li>



                <li class="nav-item">
                    <a href="#" class="nav-link nav-toggle"><i class="fa fa-cogs" aria-hidden="true"></i>

                        <span class="title">Controller of Examination</span><span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="nav-item">
                            <a href="{{url('/admin/c_o_e')}}" class="nav-link "> <span class="title">List Controller of Examination</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('/admin/c_o_e_a')}}" class="nav-link "> <span class="title">Controller of Examination Application</span>
                            </a>
                        </li>
                    </ul>
                </li>



                <li class="nav-item">
                    <a href="#" class="nav-link nav-toggle"><i class="fa fa-cogs" aria-hidden="true"></i>

                        <span class="title">Settings</span><span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="nav-item">
                            <a href="{{url('/startsession')}}" class="nav-link "> <span class="title">Start Session</span>
                            </a>
                        </li>


                        <!--<li class="nav-item">-->
                        <!--    <a href="{{url('/admin/tempaddstudent')}}" class="nav-link "> <span class="title">Program</span>-->
                        <!--    </a>-->
                        <!--</li>-->
                        <!--<li class="nav-item">-->
                        <!--    <a href="{{url('/admin/exam')}}" class="nav-link "> <span class="title">-->
                        <!--            Shift</span>-->
                        <!--    </a>-->
                        <!--</li>-->
                        <!--<li class="nav-item">-->
                        <!--    <a href="{{url('/admin/admit')}}" class="nav-link "> <span class="title">-->
                        <!--            Batch</span>-->
                        <!--    </a>-->
                        <!--</li>-->
                        <!--<li class="nav-item">-->
                        <!--    <a href="{{url('/admin/admit')}}" class="nav-link "> <span class="title">-->
                        <!--            Group/Section</span>-->
                        <!--    </a>-->
                        <!--</li>-->
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
