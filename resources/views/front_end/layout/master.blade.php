<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	
	<link rel="stylesheet" type="text/css" href="css/carousel/owl.carousel.min.css">
	<link rel="stylesheet" type="text/css" href="css/carousel/owl.theme.default.min.css">
	<script src="https://use.fontawesome.com/ead681b26c.js"></script>
	<link rel="stylesheet" href="css/style.css">
	@yield('addcss')
</head>
<body>
	<section class="container">
		@include('front_end.layout.header')
		<div class="content">
			@yield('content')
		</div>
		<div class="clear-both">
			
		</div>
		@include('front_end.layout.footer')
	</section>

	<script src="js/jquery-3.4.1.min.js"></script>
	<script src="js/carousel/owl.carousel.min.js"></script>
	@yield('addjs')
</body>
</html>