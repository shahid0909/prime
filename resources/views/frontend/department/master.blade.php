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
    <link rel="apple-touch-icon" href="apple-touch-icon.html" />
    <link
        rel="shortcut icon"
        type="image/x-icon"
        href="{{ asset('assets/images/prime.ico') }}"
    />
    <!-- Bootstrap v4.4.1 css -->
    <link
        rel="stylesheet"
        type="text/css"
        href="{{ asset('assets/css/bootstrap.min.css') }}"
    />
    <!-- font-awesome css -->
    <link
        rel="stylesheet"
        type="text/css"
        href="{{ asset('assets/css/font-awesome.min.css') }}"
    />
    <!-- animate css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animate.css') }}" />
    <!-- owl.carousel css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/owl.carousel.css') }}" />
    <!-- slick css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/slick.css') }}" />
    <!-- off canvas css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/off-canvas.css') }}" />
    <!-- linea-font css -->
    <link
        rel="stylesheet"
        type="text/css"
        href="{{ asset('assets/fonts/linea-fonts.css') }}"
    />
    <!-- flaticon css  -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/fonts/flaticon.css') }}" />
    <!-- magnific popup css -->
    <link
        rel="stylesheet"
        type="text/css"
        href="{{ asset('assets/css/magnific-popup.css') }}"
    />
    <!-- Main Menu css -->
    <link rel="stylesheet" href="{{ asset('assets/css/rsmenu-main.css') }}" />
    <!-- spacing css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/rs-spacing.css') }}" />
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('prime/style.css') }}" />
    <!-- This stylesheet dynamically changed from style.less -->
    <!-- responsive css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/responsive.css') }}" />
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
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

    @yield('style-lib')
    @stack('custom-css')

</head>
<body class="defult-home">

<!-- Start header  -->
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

@yield('header')
<!--Full width header End-->


<!-- End header  -->

<!-- Main content Start -->
<div class="main-content">
@yield('content')

<!-- Newsletter section start -->

    @yield('address')

</div>
<!-- Main content End -->

<!-- Footer Start -->
@include('frontend.department.layout.partials.footer')
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

<!-- modernizr js -->
<script src="{{ asset('assets/js/modernizr-2.8.3.min.js') }}"></script>
<!-- jquery latest version -->
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<!-- Bootstrap v4.4.1 js -->
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<!-- Menu js -->
<script src="{{ asset('assets/js/rsmenu-main.js') }}"></script>
<!-- op nav js -->
<script src="{{ asset('assets/js/jquery.nav.js') }}"></script>
<!-- owl.carousel js -->
<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
<!-- Slick js -->
<script src="{{ asset('assets/js/slick.min.js') }}"></script>
<!-- isotope.pkgd.min js -->
<script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
<!-- imagesloaded.pkgd.min js -->
<script src="{{ asset('assets/js/imagesloaded.pkgd.min.js') }}"></script>
<!-- wow js -->
<script src="{{ asset('assets/js/wow.min.js') }}"></script>
<!-- Skill bar js -->
<script src="{{ asset('assets/js/skill.bars.jquery.js') }}"></script>
<script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
<!-- counter top js -->
<script src="{{ asset('assets/js/waypoints.min.js') }}"></script>
<!-- video js -->
<script src="{{ asset('assets/js/jquery.mb.YTPlayer.min.js') }}"></script>
<!-- magnific popup js -->
<script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
<!-- plugins js -->
<script src="{{ asset('assets/js/plugins.js') }}"></script>
<!-- contact form js -->
<script src="{{ asset('assets/js/contact.form.js') }}"></script>
<!-- main js -->
<script src="{{ asset('assets/js/main.js') }}"></script>
</body>
</html>
