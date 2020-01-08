@extends('front_end.layout.master')
@section('addcss')
<style type="text/css">
	
	div.menu-header ul li:nth-of-type(4){
		border-bottom: 2px solid #54CA89;
	}
</style>
@endsection
@section('content')
<div class="social">
    <p>
        <span>Contact</span>
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
	<div class="contact">
		<h2>Contact Us</h2>

		<div class="form-contact">
			<div class="form-contact-left">
				<form action="contact_submit" method="get" accept-charset="utf-8">
					@csrf
					<label for="name">Name <sup>*</sup></label>
					<input type="text" name="name" id="name">
					<div class="clear-both">	
					</div>
					<label for="Email">Email <sup>*</sup></label>
					<input type="text" name="email" id="Email">
					<div class="clear-both">	
					</div>
					<label for="phone">Phone</label>
					<input type="text" name="phone" id="phone">
					<div class="clear-both">	
					</div>
					<label for="message">Message <sup>*</sup></label>
					<textarea name="message" id="message" rows="10"></textarea>
					<button type="submit">Send Message</button>
				</form>
			</div>

			<div class="form-contact-right">
				<div class="info-company-top">
					<p><i class="fa fa-building" aria-hidden="true"></i> Công ty CP Công nghệ TOVI Việt Nam</p>	
					<p><i class="fa fa-map-marker" aria-hidden="true"></i>Tầng 8, Intracom Building, 82 Dịch Vọng Hậu, Hà Nội</p>	
				</div>
				<div class="google-map w-100">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.0745794055333!2d105.78352431533217!3d21.029701693121094!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab4c68ae925b%3A0x22681e67e619ccaa!2zODIgUGjhu5EgROG7i2NoIFbhu41uZyBI4bqtdSwgROG7i2NoIFbhu41uZyBI4bqtdSwgQ-G6p3UgR2nhuqV5LCBIw6AgTuG7mWksIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1578466971994!5m2!1svi!2s" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" class="w-100"></iframe>
				</div>	
			</div>
		</div>
	</div>
@endsection