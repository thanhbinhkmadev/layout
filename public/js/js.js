$(document).ready(function(){
	let dem = 0;
	$('.navigation').click(function(){
		if(dem == 0){
			$('.menu-responsive').addClass('w-100');
			$('.menu-header').addClass('menu-responsive');
			$('.menu-header ul li').addClass('menu-responsive-ul-li');
			$('section.container header div.menu-header button').addClass('active-button');
			dem = 1;
		}else{
			$('.menu-responsive').removeClass('w-100');
			$('.menu-header').removeClass('menu-responsive');
			$('.menu-header ul li').removeClass('menu-responsive-ul-li');
			$('section.container header div.menu-header button').removeClass('active-button');
			dem = 0;
		}
	});


            $('body').removeClass('preloading');
            $('#preload').delay(900).fadeOut('fast');

	// $('.navigation').click(function(){
	// 	$('.menu-responsive').removeClass('w-100');
	// });
});