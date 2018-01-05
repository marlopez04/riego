<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>

<head>
	<title>Brotes</title>
	<!--/tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Soft Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--//tags -->
	<link href="{{asset('plugins/rrhhtemplate/css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
	<link href="{{asset('plugins/rrhhtemplate/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />

	<link href="{{asset('plugins/rrhhtemplate/css/font-awesome.css')}}" rel="stylesheet">
	<!-- //for bootstrap working -->
	<link href="//fonts.googleapis.com/css?family=Work+Sans:200,300,400,500,600,700" rel="stylesheet">
	<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,900,900italic,700italic'
	    rel='stylesheet' type='text/css'>

	@yield('head')
</head>

<body>
	<!-- header -->
	<div class="header" id="home">
		<div class="content white agile-info">
			@include('front.template.partials.nav')
		</div>
	</div>
	<!-- banner -->


	<!-- /inner_content -->
	<div class="inner_content_info_agileits">
		<div class="container">
			@yield('content')
		</div>
	</div>
	<!-- //mid-services -->
	<!-- js -->
	<script type="text/javascript" src="{{asset('plugins/rrhhtemplate/js/jquery-2.2.4.js')}}"></script>
	<script type="text/javascript" src="{{asset('plugins/rrhhtemplate/js/bootstrap.js')}}"></script>
	@yield('js')

</body>

</html>