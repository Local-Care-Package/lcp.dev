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
				<p><em>Cardigan 90's kale chips fap plaid brunch swag, freegan American Apparel master cleanse readymade kogi narwhal umami. McSweeney's direct trade Banksy, quinoa lo-fi kogi Carles. Plaid mlkshk ugh post-ironic biodiesel hashtag, aesthetic Helvetica Marfa church-key you probably haven't heard of them retro organic. Squid Williamsburg craft beer fap. Mlkshk shabby chic 90's, gentrify irony umami before they sold out raw denim Shoreditch stumptown skateboard fanny pack hashtag locavore pop-up. Chillwave brunch mumblecore. Viral umami master cleanse cray, skateboard sriracha disrupt.</em></p>
				<p><strong>CodeUp Student Profile:</strong> <a href="http://www.codeup.com/students/leslie-tolbert/" target="_blank">Leslie Tolbert</a></p>
				<p><strong>Personal Website:</strong> <a href="" target="_blank">lesssliemarie.me</a></p>
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
				<p><strong>Personal Website:</strong> <a href="" target="_blank">kenpriest.com</a></p>
			</div>
			<div class="col-md-3"></div>
		</div><hr>
		
		<div class="row">
			<div class="col-md-3">
				<img src="/img/brandon.jpg" alt="Brandon Beidel" class="img-rounded img-responsive team-pics">
			</div>
			<div class="col-md-6">
				<h2>Brandon Beidel</h2>
				<p><em>Cardigan 90's kale chips fap plaid brunch swag, freegan American Apparel master cleanse readymade kogi narwhal umami. McSweeney's direct trade Banksy, quinoa lo-fi kogi Carles. Plaid mlkshk ugh post-ironic biodiesel hashtag, aesthetic Helvetica Marfa church-key you probably haven't heard of them retro organic. Squid Williamsburg craft beer fap. Mlkshk shabby chic 90's, gentrify irony umami before they sold out raw denim Shoreditch stumptown skateboard fanny pack hashtag locavore pop-up. Chillwave brunch mumblecore. Viral umami master cleanse cray, skateboard sriracha disrupt.</em></p>
				<p><strong>CodeUp Student Profile:</strong> <a href="http://www.codeup.com/students/brandon-beidel/" target="_blank">Brandon Beidel</a></p>
				<p><strong>Personal Website:</strong> <a href="" target="_blank">brandonbeidel.com</a></p>
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