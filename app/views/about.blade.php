@extends('layouts.master')

@section('main-content')
		<!-- HERO IMAGE -->
	<div class="hideMain">
		<div id="hero" class="col-md-12">
			<div id="hero-message" class="img-responsive">
				<h1>The best of local brought to you</h1>
				<p>Local Care Package is a curated gift service featuring high quality products from local San Antonio businesses, aiming to connect residents to their community and support local business. Know someone who needs a little local love?</p>
				<span><a role="button" class="btn btn-sm" href="{{{ action('HomeController@showPackages') }}}">Send a package today!</a></button>
			</div>
		</div>
		<!-- END HERO -->

		<!-- MARKETING POINTS -->
		<div id="marketing-points" class="row">
			<div class="col-md-4 sub-message">
				<div id="sub-message1">
					<div class="sub-text" id="sub-text1">
						<h2>Community</h2>
						<p>Help grow our community by giving gifts that create connection, form meaningful relationships, and show what makes our city unique.</p>
					</div>
				</div>
			</div>
			<div class="col-md-4 sub-message">
				<div id="sub-message2">
					<div class="sub-text" id="sub-text2">
						<h2>Quality</h2>
						<p>Our packages feature the highest quality of goods and experiences in San Antonio from favorite local businesses, sure to be a special treat for anyone living and playing in the 210.</p>
					</div>
				</div>
			</div>
			<div class="col-md-4 sub-message">
				<div id="sub-message3">
					<div class="sub-text" id="sub-text3">
						<h2>Care</h2>
						<p>We care about our customers, recipients, and businesses and their satisfaction with our products and services. Our ears and eyes are always open, seeking the best experience for everyone.</p>
					</div>
				</div>
			</div>
		</div>
		<!-- END MARKETING POINTS -->

		<!-- PARNTER COMPANITES -->
			<div id="partners" class="row">
			</div>
		<!-- END PARNTERS -->
	</div>
@stop

@section('bottomscript')
<script>
  	$(document).ready(function() {
    	$('.hideMain').fadeIn(1500);
	});

	$('#sub-message1').mouseover(function() {
		$('#sub-text1').fadeIn();
	});

	$('#sub-message1').mouseleave(function() {
		$('#sub-text1').fadeOut();
	});

	$('#sub-message2').mouseover(function() {
		$('#sub-text2').fadeIn();
	});

	$('#sub-message2').mouseleave(function() {
		$('#sub-text2').fadeOut();	
	});

	$('#sub-message3').mouseover(function() {
		$('#sub-text3').fadeIn();
	});

	$('#sub-message3').mouseleave(function() {
		$('#sub-text3').fadeOut();	
	});

</script>
@stop
