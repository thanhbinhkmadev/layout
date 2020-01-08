<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title></title>
	
	<script src="https://use.fontawesome.com/ead681b26c.js"></script>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/responsive.css">
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
	<script type="text/javascript" src="js/js.js"></script>
	@yield('addjs')
</body>
</html>