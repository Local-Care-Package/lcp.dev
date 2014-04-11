@extends('layouts.master')

@section('main-content')

		<!-- HERO IMAGE -->
		<div id="hero">
			<div id="hero-message">
				<h1>High quality products with a personal touch</h1>
				<p>Blah blah blah blah</p>
				<span><a role="button" class="btn btn-sm" id="goToPackages" href="#packages">Pick a package!</a></button>
			</div>
		</div>
		<!-- END HERO -->

		<div id="packages" class="row">
			<div class="col-md-4">
				<img src="/img/package2.jpg">
				<h3>Package Description</h3>
					<ul>
						<li>Price</li>
						<li>Price</li>
						<li>Price</li>
					</ul>
				<span><a role="button" class="btn btn-sm" href="">Send Package</a></span>
			</div>
			<div class="col-md-4">
				<img src="/img/package2.jpg">
				<h3>Package Description</h3>
					<ul>
						<li>Price</li>
						<li>Price</li>
						<li>Price</li>
					</ul>
				<span><a role="button" class="btn btn-sm" href="">Send Package</a></span>
			</div>
			<div class="col-md-4">
				<img src="/img/package2.jpg">
				<h3>Package Description</h3>
					<ul>
						<li>Price</li>
						<li>Price</li>
						<li>Price</li>
					</ul>
				<span><a role="button" class="btn btn-sm" href="">Send Package</a></span>
			</div>
		</div>

@stop

@section('bottomscript')
<script>
$('#goToPackages').click(function() {
	$('#packages').animate({
		// animate to slide down
	});
})

</script>

@stop
