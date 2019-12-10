<!Doctype html>
<html class="fixed">
<head>

	<!-- Basic -->
	<meta charset="UTF-8">
	<title>Chuao</title>

	<meta name="keywords" content="HTML5 Admin Template" />
	<meta name="description" content="Porto Admin - Responsive HTML5 Template">
	<meta name="author" content="okler.net">

	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">
	
	<!-- Mobile Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

	<!-- Web Fonts  -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

	<!-- Vendor CSS -->
	<link rel="stylesheet" href="{{ asset( 'css/bootstrap/css/bootstrap.min.css' )}}" />
	<link rel="stylesheet" href="{{ asset( 'css/font-awesome/css/font-awesome.css' )}}" />
	<link rel="stylesheet" href="{{ asset( 'css/magnific-popup/magnific-popup.css' )}}" />
	<link rel="stylesheet" href="{{ asset( 'css/bootstrap-datepicker/css/datepicker3.css' )}}" />

	<!-- Theme CSS -->
	<link rel="stylesheet" href="{{ asset( 'css/theme.css ') }}" />

	<!-- Skin CSS -->
	<link rel="stylesheet" href="{{ asset( 'css/default.css ') }}" />

	<!-- Theme Custom CSS -->
	<link rel="stylesheet" href="{{ asset( 'css/theme-custom.css ') }}">

	<!-- Head Libs -->
	<script src="{{ asset( 'js/modernizr/modernizr.js' ) }}"></script>

</head>
<body>



	<!-- start: page -->
	<section class="body-sign">
		@yield('contenido')
	</section>
	<!-- end: page -->



	<!-- Vendor -->
	<script src="{{ asset( 'js/jquery/jquery.min.js' ) }}"></script>
	<script src="{{ asset( 'js/jquery-browser-mobile/jquery.browser.mobile.js' ) }} "></script>
	<script src="{{ asset( 'css/bootstrap/js/bootstrap.min.js' ) }}"></script>
	<script src="{{ asset( 'js/nanoscroller/nanoscroller.js' ) }}"></script>
	<script src="{{ asset( 'css/bootstrap-datepicker/js/bootstrap-datepicker.js' ) }}"></script>
	<script src="{{ asset( 'css/magnific-popup/magnific-popup.js' ) }}"></script>
	<script src="{{ asset( 'js/jquery-placeholder/jquery.placeholder.js' ) }}"></script>
	
	<!-- Theme Base, Components and Settings -->
	<script src="{{ asset( 'js/theme.js' ) }}"></script>
	
	<!-- Theme Custom -->
	<script src="{{ asset( 'js/theme.custom.js' ) }}"></script>
	
	<!-- Theme Initialization Files -->
	<script src="{{ asset( 'js/theme.init.js' ) }}"></script>

</body>
</html>