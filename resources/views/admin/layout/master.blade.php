<!DOCTYPE html>
<html lang="en">
<!-- BEGIN HEAD -->

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1" name="viewport" />
	<meta name="description" content="Responsive Admin Template" />
	<meta name="author" content="PrimeUniversity" />
	<title>Prime University | Admin</title>
	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet" type="text/css" />
	<!-- icons -->
	<link href="{{ asset('admin_assets/fonts/simple-line-icons/simple-line-icons.min.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('admin_assets/fonts/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('admin_assets/fonts/material-design-icons/material-icon.css') }}" rel="stylesheet" type="text/css" />
	<!--bootstrap -->
	<link href="{{ asset('admin_assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('admin_assets/plugins/summernote/summernote.css') }}" rel="stylesheet">
	<!-- Material Design Lite CSS -->
	<link rel="stylesheet" href="{{ asset('admin_assets/plugins/material/material.min.css') }}">
	<link rel="stylesheet" href="{{ asset('admin_assets/css/material_style.css') }}">
	<!-- inbox style -->
	<link href="{{ asset('admin_assets/css/pages/inbox.min.css') }}" rel="stylesheet" type="text/css" />
	<!-- Theme Styles -->
	<link href="{{ asset('admin_assets/css/theme/light/theme_style.css') }}" rel="stylesheet" id="rt_style_components" type="text/css" />
	<link href="{{ asset('admin_assets/css/plugins.min.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('admin_assets/css/theme/light/style.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('admin_assets/css/responsive.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('admin_assets/css/theme/light/theme-color.css') }}" rel="stylesheet" type="text/css" />
	<!-- favicon -->
	<link rel="shortcut icon" href="https://radixtouch.com/templates/admin/smart/source/assets/img/favicon.ico" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js" integrity="sha512-F636MAkMAhtTplahL9F6KmTfxTmYcAcjcCkyu0f0voT3N/6vzAuJ4Num55a0gEJ+hRLHhdz3vDvZpf6kqgEa5w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-toggle/2.2.2/css/bootstrap-toggle.css" integrity="sha512-9tISBnhZjiw7MV4a1gbemtB9tmPcoJ7ahj8QWIc0daBCdvlKjEA48oLlo6zALYm3037tPYYulT0YQyJIJJoyMQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	@yield('style-lib')
    @stack('custom-css')
</head>
<!-- END HEAD -->

<body
	class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-white white-sidebar-color logo-indigo">
	<div class="page-wrapper">
		<!-- start header -->
		@include('admin.layout.partials.header')
		<!-- end header -->

		<!-- start color quick setting -->
		<!-- @include('admin.layout.partials.color_quick_setting') -->
		<!-- end color quick setting -->

		<!-- start page container -->
		<div class="page-container">

			<!-- start sidebar menu -->
			@include('admin.layout.partials.sidebar')
			<!-- end sidebar menu -->

			<!-- start page content -->
			@yield('admin_containt')

			<!-- end page content -->

			<!-- start chat sidebar -->
			@include('admin.layout.partials.chat_sidebar')
			<!-- end chat sidebar -->

		</div>
		<!-- end page container -->
		<!-- start footer -->

		@include('admin.layout.partials.footer')

		<!-- end footer -->
	</div>
	<!-- start js include path -->
	<!-- <script data-cfasync="false" src="../../../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script> -->
	<script src="{{ asset('admin_assets/plugins/jquery/jquery.min.js') }}"></script>
	<script src="{{ asset('admin_assets/plugins/popper/popper.js') }}"></script>
	<script src="{{ asset('admin_assets/plugins/jquery-blockui/jquery.blockui.min.js') }}"></script>
	<script src="{{ asset('admin_assets/plugins/jquery-slimscroll/jquery.slimscroll.js') }}"></script>
	<!-- bootstrap -->
	<script src="{{ asset('admin_assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('admin_assets/plugins/bootstrap-switch/js/bootstrap-switch.min.js') }}"></script>
	<script src="{{ asset('admin_assets/plugins/sparkline/jquery.sparkline.js') }}"></script>
	<script src="{{ asset('admin_assets/js/pages/sparkline/sparkline-data.js') }}"></script>
	<!-- Common js-->
	<script src="{{ asset('admin_assets/js/app.js') }}"></script>
	<script src="{{ asset('admin_assets/js/layout.js') }}"></script>
	<script src="{{ asset('admin_assets/js/theme-color.js') }}"></script>
	<!-- material -->
	<script src="{{ asset('admin_assets/plugins/material/material.min.js') }}"></script>
	<!--apex chart-->
	<script src="{{ asset('admin_assets/plugins/apexcharts/apexcharts.min.js') }}"></script>
	<script src="{{ asset('admin_assets/js/pages/chart/chartjs/home-data.js') }}"></script>
	<!-- summernote -->
	<script src="{{ asset('admin_assets/plugins/summernote/summernote.js') }}"></script>
	<script src="{{ asset('admin_assets/js/pages/summernote/summernote-data.js') }}"></script>

	<!-- end js include path -->
	@yield('script-lib')
	@stack('custom-js')
</body>


</html>
