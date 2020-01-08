@extends('front_end.layout.master')
@section('addcss')
<style type="text/css">
	
	div.menu-header ul li:nth-of-type(3){
		border-bottom: 2px solid #54CA89;
	}
</style>
@endsection
@section('content')
<div class="social">
    <p>
        <span>About</span>
    </p>
	<ul>
		<li>
			<a href="" title="">
				<i class="fa fa-facebook-official" aria-hidden="true"></i>
			</a>
		</li>
		<li>
			<a href="" title="">
				<i class="fa fa-instagram" aria-hidden="true"></i>
			</a>
		</li>
		<li>
			<a href="" title="">
				<i class="fa fa-twitter" aria-hidden="true"></i>
			</a>
		</li>
		<li>
			<a href="" title="">
				<i class="fa fa-youtube" aria-hidden="true"></i>
			</a>
		</li>
	</ul>
</div>
	<div class="about">
		<img src="image/tovi.png" alt="">
		<h3>Introduction</h3>
		<p>TOVI Corp is a technology company based in the "Silicon Region of Vietnam" Duy Tan, Hanoi. TOVI Corp develops SEO Platform system with a large scale capacity to serve AI and Big Data products of the company.</p>
		<h4>About Company Name - TOVI</h4>
		<p>Inspired by the orientation of "Vietnamese people going to the world", TOVI is an abbreviation of the phrase "Tôi Yêu Việt Nam" (I LOVE VIETNAM ) with the desire to build a strong Vietnamese enterprise, gathered by enthusiastic employees who have a strong desire to create Vietnamese technology products to serve the needs of the world.</p>
		<h4>Activity Field</h4>
		<p>TOVI focuses on manufacturing IT products for the global community, creating innovative new features, bringing high practical applications to society.</p>
	</div>
@endsection