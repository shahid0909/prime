<div class="full-width-header header-style2">
    <!--Header Start-->
    <header id="rs-header" class="rs-header">
        <!-- Topbar Area Start -->
        <div class="topbar-area">
        <div class="container">
            <div class="row y-middle">
                <div class="col-md-7">
                    <ul class="topbar-contact">
                        <li>
                            <i class="flaticon-email"></i>
                            <a href="mailto:support@rstheme.com"
                            >info@primeuniversity.edu.bd</a
                            >
                        </li>
                        <li>
                            <i class="flaticon-call"></i>
                            <a href="tel:+088589-8745"
                            >+88-02-8031810, +880-1710996196</a
                            >
                        </li>
                    </ul>
                </div>
                <div class="col-md-5 text-right">
                    <ul class="topbar-right">
                        <li class="login-register">
                            <!-- <i class="fa fa-sign-in"></i> -->
                            <a
                                href="{{ url('/student_apply') }}"
                                style="
                            color: #000000;
                            background: #13C619;
                            padding: 8px 15px;
                            border-radius: 10px;
                            font-size: 17px;
                            font-weight: bold;
                          "
                            >Apply Now
                            </a>
                        </li>
                        <li class="login-register">
                            <!-- <i class="fa fa-sign-in"></i> -->
                            <a
                                href="{{ url('/result') }}"
                                style="
                            color: #000000;
                            background: #E1AE22;
                            padding: 8px 20px;
                            border-radius: 5px;
                            font-size: 17px;
                            font-weight: bold;
                          "
                            >Find Result</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
        <!-- Topbar Area End -->

        <!-- Menu Start -->
        <div class="menu-area">
            <div class="container">
                <div class="row y-middle">
                    <div class="col-lg-12">
                        <div class="logo-cat-wrap">
                            <div class="logo-part pr-90">
                                <a class="dark-logo" href="{{url('/')}}">
                                    <img src="{{ asset('assets/images/logo-dark.png') }}" alt="" />
                                </a>
                                <a class="light-logo" href="{{url('/')}}">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="" />
                                </a>
                            </div>
                            <div class="title mt-30">
                                <h4>{{ $department->name }}</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div
                class="col-lg-12 text-center menu-sticky"
                style="background-color: #273C66"
            >
                <div class="rs-menu-area menu-area-academics">
                    <div class="main-menu">
                        <div class="mobile-menu">
                            <a class="rs-menu-toggle">
                                <i class="fa fa-bars"></i>
                            </a>
                        </div>
                        <nav class="rs-menu">
                            <ul class="nav-menu">
                                <li>
                                    <a href="{{ url('/department/details/'.$department->id) }}" style="color:white">Home</a>
                                </li>
                                <!-- <li class="menu-item-has-children">
                                    <a href="#">About US</a>
                                    <ul class="sub-menu">
                                      <li><a href="about.html">Vision</a></li>
                                      <li><a href="Hod.html">Message From HOD </a></li>
                                    </ul>
                                  </li> -->

                                <li>
                                    <a href="{{ url('/department/faculty_member/'.$department->id) }}" style="color:white">Faculty Members</a>
                                </li>

                                <li>
                                    <a href="{{ url('/department/details/facilities/'.$department->id) }}" style="color:white">Facilities</a>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#" style="color:white">Academic Programs</a>
                                    <ul class="sub-menu">
                                        @foreach($aca_program as $aca_prog)

                                            <li><a href="{{ url('/department/program/details/'.$department->id.'/'.$aca_prog->id) }}" >{{ $aca_prog->p_name }}</a></li>

                                        @endforeach
                                    </ul>
                                </li>
                                <li>
                                    <a href="{{ url('/department/class_exam/'.$department->id) }}" style="color:white">Class/Exam Routine</a>
                                </li>

                                <li>
                                    <a href="{{ url('/department/clubs/all/'.$department->id) }}" style="color:white">Clubs</a>
                                </li>

                                <li>
                                    <a href="https://www.pualumni.org/" target="_blank" style="color:white">Alumni</a>
                                </li>
                                <li>
                                    <a href="{{ url('/department/dept_notice/'.$department->id) }}" style="color:white">Notice</a>
                                </li>
                            </ul>
                            <!-- //.nav-menu -->
                        </nav>
                    </div>
                    <!-- //.main-menu -->
                    <div class="col-md-2 text-right">
                        <ul class="topbar-right">
                            <li class="login-register">
                                <i class="fa fa-sign-in" style="color:white"></i>
                                <a href="{{ url('/') }}" style="color:white">PU Home</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Menu End -->
    </header>
    <!--Header End-->
</div>
