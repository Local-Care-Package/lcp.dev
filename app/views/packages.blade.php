@extends('layouts.master')

@section('main-content')
	<div class="hideMain">	
		<!-- HERO IMAGE -->
		<div id="hero">
			<div id="hero-message">
				<h1>High quality products with a personal touch</h1>
				<p>Blah blah blah blah</p>
			</div>
		</div>
		<!-- END HERO -->

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
				<span><a role="button" class="btn btn-sm" href="">Send Package</a></span>
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
				<span><a role="button" class="btn btn-sm" href="">Send Package</a></span>
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
				<span><a role="button" class="btn btn-sm" href="">Send Package</a></span>
			</div>
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
