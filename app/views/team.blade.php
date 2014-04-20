@extends('layouts.master')

@section('main-content')
	<div class="hideMain">
		<h1>Meet Our Web Application Team</h1><hr>
		<div class="row">
			<div class="col-md-3">
				<img src="/img/leslie.jpg" alt="Leslie Tolbert" class="img-rounded img-responsive team-pics">
			</div>
			<div class="col-md-6">
				<h2>Leslie Tolbert</h2>
				<p><em>I have a BFA in Communication Design from Texas State University, providing me a wide range of graphic design, marketing, branding, and artistic skills. I've very much enjoyed learning all aspects of web development and programming during my time at Codeup and am looking forward to continuing my education and experience in the field. I'd like to find work that promotes growth, creativity, and ingenuity and have a particular interest in User Experience design. Have a great project in mind or need help with one in progress? Let's work together to build great things and make this world a better place!</em></p>
				<p><strong>CodeUp Student Profile:</strong> <a href="http://www.codeup.com/students/leslie-tolbert/" target="_blank">Leslie Tolbert</a></p>
				<p><strong>Personal Website:</strong> <a href="http://lesssliemarie.me/" target="_blank">lesssliemarie.me</a></p>
			</div>
			<div class="col-md-3"></div>
		</div><hr>
		
		<div class="row">
			<div class="col-md-3">
				<img src="/img/ken.jpg" alt="Ken Priest" class="img-rounded img-responsive team-pics">
			</div>
			<div class="col-md-6">
				<h2>Ken Priest</h2>
				<p><em>Cardigan 90's kale chips fap plaid brunch swag, freegan American Apparel master cleanse readymade kogi narwhal umami. McSweeney's direct trade Banksy, quinoa lo-fi kogi Carles. Plaid mlkshk ugh post-ironic biodiesel hashtag, aesthetic Helvetica Marfa church-key you probably haven't heard of them retro organic. Squid Williamsburg craft beer fap. Mlkshk shabby chic 90's, gentrify irony umami before they sold out raw denim Shoreditch stumptown skateboard fanny pack hashtag locavore pop-up. Chillwave brunch mumblecore. Viral umami master cleanse cray, skateboard sriracha disrupt.</em></p>
				<p><strong>CodeUp Student Profile:</strong> <a href="http://www.codeup.com/students/ken-priest/" target="_blank">Ken Priest</a></p>
				<p><strong>Personal Website:</strong> <a href="http://kenpriest.me" target="_blank">kenpriest.me</a></p>
			</div>
			<div class="col-md-3"></div>
		</div><hr>
		
		<div class="row">
			<div class="col-md-3">
				<img src="/img/brandon.jpg" alt="Brandon Beidel" class="img-rounded img-responsive team-pics">
			</div>
			<div class="col-md-6">
				<h2>Brandon Beidel</h2>
				<p><em>I'm a former management consultant, turned web developer.  My prior experiences have been focused on business case development, financial modeling and process design across clients and industries.  Within web development, I'd like to continue making things that are data driven, purposeful and that fix real problems.  I am most intrigued by positions that would allow for continued development of both my technical skills and business acumen.  I love to challenge myself and seek out opportunities to tackle tough problems.</em></p>
				<p><strong>CodeUp Student Profile:</strong> <a href="http://www.codeup.com/students/brandon-beidel/" target="_blank">Brandon Beidel</a></p>
				<p><strong>Personal Website:</strong> <a href="http://bcbeidel.com" target="_blank">bcbeidel.com</a></p>
			</div>
			<div class="col-md-3"></div>
		</div>

	</div>
@stop

@section('bottomscript')
<script>
  	$(document).ready(function() {
    	$('.hideMain').fadeIn(1500);
	});
</script>
@stop