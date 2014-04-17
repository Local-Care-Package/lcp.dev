@extends('layouts.master')

@section('main-content')
	<div class="hideMain">	
		<!-- HERO IMAGE -->
		<div id="hero" class="col-md-12">
			<div id="hero-message" class="img-responsive">
				<h1>Personal, thoughtful hand delivered packages</h1>
				<p>Every order you place is hand packaged and hand delivered by our team making each package unique, thoughtful and handled with care.</p>
			</div>
		</div>
		<!-- END HERO -->

		<!-- MARKETING POINTS -->
		<div id="marketing-points" class="row">
			<div class="col-md-4 sub-message">
				<div id="sub-message4">
					<div class="sub-text" id="sub-text4">
						<h2>Experience</h2>
						<p>Not only do our packages include goods, they also include certificates to restaurants and activities around the city, creating a lasting rich experience after receiving a package.</p>
					</div>
				</div>
			</div>
			<div class="col-md-4 sub-message">
				<div id="sub-message5">
					<div class="sub-text" id="sub-text5">
						<h2>Personality</h2>
						<p>Our packages bring to light local San Antonio personality by highlighting the gems that make our city special.</p>
					</div>
				</div>
			</div>
			<div class="col-md-4 sub-message">
				<div id="sub-message6">
					<div class="sub-text" id="sub-text6">
						<h2>Thoughtfulness</h2>
						<p>We want our packages to be as special and personal as possible. Include a personal gift message with your hand delivered package and receive a text message with a photo of your happy recipient upon delivery.</p>
					</div>
				</div>
			</div>
		</div>
		<!-- END MARKETING POINTS -->

		<!-- PACKAGES -->
		<div id="packages" class="row">
			<div class="col-md-4">
				<img src="/img/package2.jpg">
				<h3>{{{ $packages[0]->description }}} – ${{{ $packages[0]->price }}}</h3>
					<ul>
						<li>6 Bakery Lorraine Macarons</li>
						<li>Dinner for two at Barbaro</li>
						<li>Coffee for two at Local Coffee</li>
						<li>One-hour bike ride for two with Bcycle</li>
					</ul>
				<span><a role="button" class="btn btn-sm" href="{{{ action('OrdersController@create') }}}">Send Package</a></span>
			</div>
			<div class="col-md-4">
				<img src="/img/package2.jpg">
				<h3>{{{ $packages[1]->description }}} – ${{{ $packages[1]->price }}}</h3>
					<ul>
						<li>6 Bakery Lorraine Macarons</li>
						<li>6 cookies from Lily's Cookies</li>
						<li>Dinner for two at Barbaro</li>
						<li>Dinner for two at The Monterey</li>
						<li>Coffee for two at Local Coffee</li>
						<li>One-hour bike ride for two with Bcycle</li>
					</ul>
				<span><a role="button" class="btn btn-sm" href="{{{ action('OrdersController@create') }}}">Send Package</a></span>
			</div>
			<div class="col-md-4">
				<img src="/img/package2.jpg">
				<h3>{{{ $packages[2]->description }}} – ${{{ $packages[2]->price }}}</h3>
					<ul>
						<li>6 Bakery Lorraine Macarons</li>
						<li>6 cookies from Lily's Cookies</li>
						<li>2 juices from Revolucion</li>
						<li>Dinner for two at Barbaro</li>
						<li>Dinner for two at The Monterey</li>
						<li>Coffee for two at Local Coffee</li>
						<li>One-hour bike ride for two with Bcycle</li>
						<li>One-day admission for the San Antonio Museum of Art</li>
					</ul>
				<span><a role="button" class="btn btn-sm" href="{{{ action('OrdersController@create') }}}">Send Package</a></span>
			</div>
		</div>
		<!-- END PACKAGES -->
	</div>
@stop

@section('bottomscript')
<script>
  	$(document).ready(function() {
    	$('.hideMain').fadeIn(1500);
	});

	$('#sub-message4').mouseover(function() {
		$('#sub-text4').fadeIn();
	});

	$('#sub-message4').mouseleave(function() {
		$('#sub-text4').fadeOut();
	});

	$('#sub-message5').mouseover(function() {
		$('#sub-text5').fadeIn();
	});

	$('#sub-message5').mouseleave(function() {
		$('#sub-text5').fadeOut();	
	});

	$('#sub-message6').mouseover(function() {
		$('#sub-text6').fadeIn();
	});

	$('#sub-message6').mouseleave(function() {
		$('#sub-text6').fadeOut();	
	});
</script>
@stop
