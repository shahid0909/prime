
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
    <div class="menu-area menu-sticky">
        <div class="container">
            <div class="row y-middle">
                <div class="col-lg-4">
                    <div class="logo-cat-wrap">
                        <div class="logo-part">
                            <a class="dark-logo" href="{{ url('/') }}">
                                <img
                                    src="{{ asset('prime/assets/images/logo-dark.png') }}"
                                    alt=""
                                    style="height: 80px; width: 100%"
                                />
                            </a>
                            <a class="light-logo" href="{{ url('/') }}">
                                <img src="{{ asset('prime/assets/images/logo.png') }}" alt="" />
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 text-center">
                    <div class="rs-menu-area">
                        <div class="main-menu pr-90">
                            <div class="mobile-menu">
                                <a class="rs-menu-toggle">
                                    <i class="fa fa-bars"></i>
                                </a>
                            </div>
                            <nav class="rs-menu">
                                <ul class="nav-menu">
                                    <li class="current-menu-item">
                                        <a href="{{ url('/') }}">Home</a>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#">About US</a>
                                        <ul class="sub-menu">
                                            <li><a href="{{ url('/vision') }}">Vision</a></li>
                                            <li><a href="{{ url('/affiliate') }}">Affiliation</a></li>
                                            <li>
                                                <a href="{{ url('/vice_chanchelor') }}"
                                                >The Vice Chancellor</a>
                                            </li>
                                            <li>
                                                <a href="{{ url('/f_v_chancellor') }}"
                                                >Former Vice Chancellor</a
                                                >
                                            </li>
                                            <li>
                                                <a href="{{ url('/code_of_conduct') }}"
                                                >Code of Conduct</a
                                                >
                                            </li>
                                            <li>
                                                <a href="{{ url('/frequently_questions') }}"
                                                >Frequently Asked Questions</a
                                                >
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="menu-item-has-children">
                                        <a>Administration</a>
                                        <ul class="sub-menu" style="overflow-y: scroll; max-height: 80vh;overflow-x: hidden !important;">
                                            @foreach($administrator as $admin)
                                                <li>
                                                    <a href="{{ url('/office/'.$admin->id) }}"
                                                    >{{ $admin->o_name }}</a
                                                    >
                                                </li>
                                            @endforeach
                                        </ul>
                                    </li>

                                    <li class="menu-item-has-children">
                                        <a href="#">Academics</a>
                                        <ul class="sub-menu">
                                            <li>
                                                <a href="{{ url('/faculty') }}">Faculties</a>
                                            </li>
                                            <li>
                                                <a href="{{ url('/department') }}">Departments</a>
                                            </li>
                                            <li class="menu-item-has-children right">
                                                <a href="#">Center and Institute</a>
                                                <ul class="sub-menu right">
                                                    <li><a href="{{ url('/crhp') }}">CRHP</a></li>
                                                    <li><a href="{{ url('/language_school') }}">PULS</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="{{ url('/fees_and_payments') }}"
                                                >Fees & Payments</a
                                                >
                                            </li>
                                            <!-- <li>
                                              <a href="Program.html">Programs</a>
                                            </li> -->
                                            <li class="menu-item-has-children right">
                                                <a href="{{ url('/policy_procedure') }}">Policies & Procedure</a>
                                                {{--                                                        <ul class="sub-menu right">--}}
                                                {{--                                                            <li><a href="#">Semester</a></li>--}}
                                                {{--                                                            <li><a href="#">Course Number</a></li>--}}
                                                {{--                                                            <li><a href="#">Credit Hours</a></li>--}}
                                                {{--                                                            <li><a href="#">Course Load</a></li>--}}
                                                {{--                                                            <li><a href="#">cr</a></li>--}}
                                                {{--                                                        </ul>--}}
                                            </li>
                                            <li>
                                                <a href="{{ url('/aca_calender') }}">Academic Calendar</a>
                                            </li>
                                            <li>
                                                <a href="{{ url('/controller_of_examination') }}">Controller of Examinations</a>
                                            </li>
                                            <li>
                                                <a href="{{ url('/iqac') }}">IQAC</a>
                                            </li>
                                             <li>
                                                <a href="{{ url('/photo_gallery') }}">Gallery</a>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="menu-item-has-children">
                                        <a href="#">Admission</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item-has-children">
                                                <a href="{{ url('/admission') }}"
                                                >Admission Requirements</a
                                                >
                                                <ul class="sub-menu right">
                                                    <li>
                                                        <a href="{{ url('/undergraduate') }}">Undergraduate</a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ url('/postgraduate') }}">Postgraduate</a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ url('/foreign_student') }}">Foreign Student</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="{{ url('/credit_transfer') }}">Credit Trasfer</a>
                                            </li>
                                            <li class="menu-item-has-children">
                                                <a href="{{ url('/scholership_and_financial_aid') }}">Scholarships and Financial Aid</a>
                                            </li>
                                            <li class="menu-item-has-children">
                                                <a href="{{ url('/important_date') }}">Important Dates & Deadlines </a>
                                            </li>
                                            <!--<li>-->
                                            <!--    <a href="{{ url('/fees_and_payments') }}"-->
                                            <!--    >Tuition & Fees</a-->
                                            <!--    >-->
                                            <!--</li>-->
                                        </ul>
                                    </li>

                                    <li>
                                        <a href="{{ url('/contact') }}">Contact</a>
                                    </li>
                                </ul>
                                <!-- //.nav-menu -->
                            </nav>
                        </div>
                        <!-- //.main-menu -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Menu End -->
</header>
