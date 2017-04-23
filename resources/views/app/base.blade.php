<!DOCTYPE HTML>
<html><head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="Content-type" content="text/html;charset=UTF-8">

	<title>@yield('title', 'Boiler Share') | Boiler Share</title>
	<link REL="icon" HREF="images/fav.png">

	<meta name="author" content="Harris Christiansen">
	<meta name="description" content="Boiler Share - Collaborative Classroom">
	<meta name="keywords" content="boiler, share, software, classrooms, purdue, engagement, resources">
	
	<!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
	
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	
	<!-- IE8 Support -->
	<!--[if lte IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.6.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

	<!-- BValidator -->
	<link href="/vendor/bvalidator/bvalidator.css" rel="stylesheet" type="text/css">
	
	<!-- jQuery UI -->
	<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
	
	<!-- Site Specific CSS -->
	<link rel="stylesheet" type="text/css" href="/css/boilershare.css">
	@yield('wrapper-css')
</head><body>
	<div id="page-wrapper">
		<!-- Header -->
		@include('app.header')
		
		<!-- Content -->
		@yield('content')
		
		<!-- Footer -->
		@include('app.footer')
	</div>

	<!-- ----- Javascript ----- -->
	
	<!-- jQuery / jQuery UI -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
	<script type="text/javascript" src="/js/jquery.cookie.js"></script>
	
	<!-- BValidator -->
	<script type="text/javascript" src="/vendor/bvalidator/jquery.bvalidator-yc.js"></script>

	<!-- Bootstrap JS -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<!--[if lte IE 8]><script src="/js/ie/respond.min.js"></script><![endif]-->
	
	<!-- Tablesorter -->
	<script type="text/javascript" src="/vendor/tablesorter/jquery.tablesorter.min.js"></script>
	
	<!-- Site Specific JS -->
	<script type="text/javascript" src="/js/boilershare.js"></script>
	@stack('scripts')
</body></html>