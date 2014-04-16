@extends('layouts.master')

@section('main-content')
		<!-- HERO IMAGE -->
	<div class="hideMain">
		<div id="hero">
			<div id="hero-message">
				<h1>The best of local brought to you</h1>
				<p>Local Care Package is a curated gift service featuring high quality products from local San Antonio businesses, aiming to connect residents to their community and support local business. Know someone who needs some local love?</p>
				<span><a role="button" class="btn btn-sm" href="{{{ action('HomeController@showPackages') }}}">Send a package</a></button>
			</div>
		</div>
		<!-- END HERO -->

		<!-- MARKETING POINTS -->
		<div id="marketing-points" class="row">
			<div class="col-md-4">
				<h2>Point 1</h2>
				<p>Pinterest umami Tonx ethnic. Blue Bottle Brooklyn Odd Future, wolf 90's cray iPhone blog organic mixtape. VHS Helvetica squid scenester locavore fixie, biodiesel yr food truck pickled semiotics.</p>
			</div>
			<div class="col-md-4">
				<h2>Point 2</h2>
				<p>Irony mustache lo-fi polaroid, meh church-key bitters Etsy meggings tousled Banksy. Hoodie single-origin coffee hella meggings. </p>
			</div>
			<div class="col-md-4">
				<h2>Point 3</h2>
				<p>Pour-over meggings bitters church-key iPhone chambray squid distillery post-ironic salvia, disrupt small batch kale chips viral Brooklyn. Tousled food truck Thundercats actually seitan.</p>
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
</script>
@stop
