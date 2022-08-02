    <!DOCTYPE html>
    <html lang="zxx">
    <head>
        <!-- meta tag -->
        <meta charset="utf-8" />
        <title>Prime University - A Home for Rendering Prime Knowledge</title>
        <meta name="description" content="" />
        <!-- responsive tag -->
        <meta http-equiv="x-ua-compatible" content="ie=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <!-- favicon -->
        <link rel="apple-touch-icon" href="{{ asset('prime/apple-touch-icon.html') }}" />
        <link
            rel="shortcut icon"
            type="image/x-icon"
            href="{{ asset('prime/assets/images/prime.ico') }}"
        />
        <!-- Bootstrap v4.4.1 css -->
        <link
            rel="stylesheet"
            type="text/css"
            href="{{ asset('prime/assets/css/bootstrap.min.css') }}"
        />
        <!-- font-awesome css -->
        <link
            rel="stylesheet"
            type="text/css"
            href="{{ asset('prime/assets/css/font-awesome.min.css') }}"
        />
        <!-- animate css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('prime/assets/css/animate.css') }}" />
        <!-- owl.carousel css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('prime/assets/css/owl.carousel.css') }}" />
        <!-- slick css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('prime/assets/css/slick.css') }}" />
        <!-- off canvas css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('prime/assets/css/off-canvas.css') }}" />
        <!-- linea-font css -->
        <link
            rel="stylesheet"
            type="text/css"
            href="{{ asset('prime/assets/fonts/linea-fonts.css') }}"
        />
        <!-- flaticon css  -->
        <link rel="stylesheet" type="text/css" href="{{ asset('prime/assets/fonts/flaticon.css') }}" />
        <!-- magnific popup css -->
        <link
            rel="stylesheet"
            type="text/css"
            href="{{ asset('prime/assets/css/magnific-popup.css') }}"
        />
        <!-- Main Menu css -->
        <link rel="stylesheet" href="{{ asset('prime/assets/css/rsmenu-main.css') }}" />
        <!-- spacing css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('prime/assets/css/rs-spacing.css') }}" />
        <!-- style css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('prime/style.css') }}" />
        <!-- This stylesheet dynamically changed from style.less -->
        <!-- responsive css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('prime/assets/css/responsive.css') }}" />
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->


        @yield('header_script')


        <style>
            /* width */
            ::-webkit-scrollbar {
                width: 10px;
            }

            /* Track */
            ::-webkit-scrollbar-track {
                box-shadow: inset 0 0 5px grey;
                border-radius: 10px;
            }

            /* Handle */
            ::-webkit-scrollbar-thumb {
                background: #273c66;
                border-radius: 10px;
            }

            /* Handle on hover */
            ::-webkit-scrollbar-thumb:hover {
                background: red;
            }
        </style>
    </head>
    <body class="home-style2">
    <!--Preloader area start here-->
    <div id="loader" class="loader">
        <div class="loader-container">
            <div class="loader-icon">
                <img src="{{ asset('prime/assets/images/pre-logo.png') }}" alt="" />
            </div>
        </div>
    </div>
    <!--Preloader area End here-->

    <!--Full width header Start-->
    <div class="full-width-header header-style2">
        <!--Header Start-->
        @yield('header')

        <!--Header End-->
    </div>
    <!--Full width header End-->

    <!-- Main content Start -->
    @yield('content')
    <!-- Main content End -->

    <!-- Footer Start -->
    <footer id="rs-footer" class="rs-footer home9-style main-home">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-12 col-sm-12 footer-widget md-mb-50">
                        
                        
            
              <h3 class="widget-title">Quick Link</h3>
              <ul class="site-map">
                <li><a href="{{ url('/department') }}">Academic</a></li>
                <li><a href="https://www.facebook.com/Primevarsity/">Facebook</a></li>
                <li><a href="https://www.youtube.com/channel/UCMKKLOsb5UtO9UJi1OyiZSA?view_as=subscriber">Youtube</a></li>
                <li><a href="{{ url('/contact?#contact_us') }}">Write Us</a></li>
              </ul>
            </div>
            <div
              class="col-lg-4 col-md-12 col-sm-12 pl-50 md-pl-15 footer-widget md-mb-50"
            >
              <h3 class="widget-title">Our Strategic Partners</h3>
              <ul class="site-map">
                <li><a href="https://iul.ac.in/" target="_blank">Integral University</a></li>
                <li><a href="https://cutm.ac.in/" target="_blank">Centurion University</a></li>
                <li><a href="https://dhu.edu.so/" target="_blank">Darul Hikmah University</a></li>
                <li><a href="https://mu.edu.so/" target="_blank">Mogadishu University</a></li>

                
              </ul>
            </div>
            <div class="col-lg-5 col-md-12 col-sm-12 footer-widget">
              <h3 class="widget-title">Campus Direction</h3>
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7515.511293286911!2d90.34796616022672!3d23.79085658704206!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b9cb8a002d35%3A0xf36071651f4f6585!2sPrime%20University!5e0!3m2!1sen!2sbd!4v1640180286143!5m2!1sen!2sbd"
                width="100%"
                height="200"
                style="border: 0"
                allowfullscreen=""
                loading="lazy"
              ></iframe>
            </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row y-middle">
                    <div class="col-lg-3 md-mb-20">
                        <div class="copyright">
                            <p>
                                &copy; 2022 Prime University
                                <!--Developed By-->
                                <!--<a href="http://reflexit.com.bd/">Reflex It</a>-->
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-9 text-right md-text-left">
                        <ul class="copy-right-menu">
                            <li><a href="{{ url('/aca_calender') }}">Academic Calander</a></li>
                            <li><a href="{{ url('/under_construction') }}">Prime ERP</a></li>
                            <li><a href="https://mail.google.com/" target="_blank">Webmail</a></li>
                            <li><a href="http://prime.reflexit.com.bd/admin/">Admin</a></li>
                            <li><a href="https://www.pualumni.org/" target="_blank">Alumni</a></li>
                            <li><a href="{{ url('/carer') }}">Career Opportunity</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer End -->

    <!-- start scrollUp  -->
    <div id="scrollUp">
        <i class="fa fa-angle-up"></i>
    </div>
    <!-- End scrollUp  -->

    <!-- Search Modal Start -->
    <div
        aria-hidden="true"
        class="modal fade search-modal"
        role="dialog"
        tabindex="-1"
    >
        <button
            type="button"
            class="close"
            data-dismiss="modal"
            aria-label="Close"
        >
            <span class="flaticon-cross"></span>
        </button>
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="search-block clearfix">
                    <form>
                        <div class="form-group">
                            <input
                                class="form-control"
                                placeholder="Search Here..."
                                type="text"
                            />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Search Modal End -->


    @yield('footer_script')


    <!-- modernizr js -->
    <script src="{{ asset('prime/assets/js/modernizr-2.8.3.min.js') }}"></script>
    <!-- jquery latest version -->
    <script src="{{ asset('prime/assets/js/jquery.min.js') }}"></script>
    <!-- Bootstrap v4.4.1 js -->
    <script src="{{ asset('prime/assets/js/bootstrap.min.js') }}"></script>
    <!-- Menu js -->
    <script src="{{ asset('prime/assets/js/rsmenu-main.js') }}"></script>
    <!-- op nav js -->
    <script src="{{ asset('prime/assets/js/jquery.nav.js') }}"></script>
    <!-- owl.carousel js -->
    <script src="{{ asset('prime/assets/js/owl.carousel.min.js') }}"></script>
    <!-- Slick js -->
    <script src="{{ asset('prime/assets/js/slick.min.js') }}"></script>
    <!-- isotope.pkgd.min js -->
    <script src="{{ asset('prime/assets/js/isotope.pkgd.min.js') }}"></script>
    <!-- imagesloaded.pkgd.min js -->
    <script src="{{ asset('prime/assets/js/imagesloaded.pkgd.min.js') }}"></script>
    <!-- wow js -->
    <script src="{{ asset('prime/assets/js/wow.min.js') }}"></script>
    <!-- Skill bar js -->
    <script src="{{ asset('prime/assets/js/skill.bars.jquery.js') }}"></script>
    <script src="{{ asset('prime/assets/js/jquery.counterup.min.js') }}"></script>
    <!-- counter top js -->
    <script src="{{ asset('prime/assets/js/waypoints.min.js') }}"></script>
    <!-- video js -->
    <script src="{{ asset('prime/assets/js/jquery.mb.YTPlayer.min.js') }}"></script>
    <!-- magnific popup js -->
    <script src="{{ asset('prime/assets/js/jquery.magnific-popup.min.js') }}"></script>
    <!-- plugins js -->
    <script src="{{ asset('prime/assets/js/plugins.js') }}"></script>
    <!-- contact form js -->
    <script src="{{ asset('prime/assets/js/contact.form.js') }}"></script>
    <!-- main js -->
    <script src="{{ asset('prime/assets/js/main.js') }}"></script>
    </body>
    </html>
