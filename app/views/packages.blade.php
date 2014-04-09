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
			@foreach ($packages as $package)
			<div class="col-md-4">
				<img src="/img/package2.jpg">
				<h3>{{{ $package->description }}}</h3>
				<ul>
					<li>{{{ $package->sale_price_USD }}}</li>
				</ul>
				<span><a role="button" class="btn btn-sm" href="{{{ action('HomeController@showCart', $package->id) }}}">Add to Cart</a></span>
			</div>
			@endforeach

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
