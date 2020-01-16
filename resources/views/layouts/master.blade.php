<!<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
	<link rel="stylesheet" href="{{ asset('css/skeleton.css') }}">
	<link rel="stylesheet" href="{{ asset('css/style.css') }}">
	<link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
</head>
<body>
	@include('layouts.header')
	<section class="content">
		@yield('content')
	</section>
	

	@include('layouts.footer')
	<div class="form_search">
		<form method="GET" action="">
			<input type="text" name="search">
			<span>
				<i class="fa fa-search" aria-hidden="true"></i>
			</span>
		</form>
		<a href="javascript:void(0)" title="" class="close_form_search">
			<span>X</span>
		</a>
	</div>
	<div id="fb-root"></div>
	<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v5.0&appId=1561160237359966&autoLogAppEvents=1"></script>
	<script type="text/javascript">
		var button_search = document.getElementsByClassName('buton_searchs');
		var close_form = document.getElementsByClassName('close_form_search');
		var form_search = document.getElementsByClassName('form_search');
		button_search[0].onclick=function(){
			
			form_search[0].style.display='block';
		};
		close_form[0].onclick=function(){
			form_search[0].style.display='none';
		};
	</script>
</body>
</html>