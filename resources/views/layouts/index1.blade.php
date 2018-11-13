<!doctype html>
<html class="no-js" lang="zxx">

<!-- Mirrored from d29u17ylf1ylz9.cloudfront.net/junior/index-4.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Nov 2018 07:10:30 GMT -->
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Home-04 || Junior Child Care & Shop HTML5 Template</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Favicons -->
	<link rel="shortcut icon" href="{{asset('assets/baru/images/favicon.ico')}}">
	<link rel="apple-touch-icon" href="{{asset('assets/baru/images/icon.png')}}">
	<!-- Google font (font-family: 'Dosis', Roboto;) -->
	<link href="https://fonts.googleapis.com/css?family=Dosis:400,500,600,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="{{asset('assets/baru/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('assets/baru/css/plugins.css')}}">
	<link rel="stylesheet" href="{{asset('assets/baru/style.css')}}">

	<!-- Cusom css -->
   <link rel="stylesheet" href="{{asset('assets/baru/css/custom.css')}}">

	<!-- Modernizer js -->
	<script src="{{asset('assets/baru/js/vendor/modernizr-3.5.0.min.js')}}"></script>
</head>
<body>
	<!--[if lte IE 9]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
	<![endif]-->

	<!-- Add your site or application content here -->
	
	<!-- <div class="fakeloader"></div> -->

	<!-- Main wrapper -->
	<div class="wrapper" id="wrapper">
		
		<!-- Header -->
		@include('front.header')
		<!-- //Header -->
		<!-- Strat Slider Area -->
		
		<!-- End Slider Area -->
		<!-- Start Service Area -->
		@yield('content')
		@include('front.footer')
		@include('front.tawk')
	</div><!-- //Main wrapper -->

	<!-- JS Files -->
	<script src="{{asset('assets/baru/js/vendor/jquery-3.2.1.min.js')}}"></script>
	<script src="{{asset('assets/baru/js/popper.min.js')}}"></script>
	<script src="{{asset('assets/baru/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('assets/baru/js/plugins.js')}}"></script>
	<script src="{{asset('assets/baru/js/active.js')}}"></script>
</body>

<!-- Mirrored from d29u17ylf1ylz9.cloudfront.net/junior/index-4.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Nov 2018 07:10:55 GMT -->
</html>
