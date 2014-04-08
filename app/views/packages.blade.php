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
				<h3>Package 1</h3>
				<ul>
					<li>Spec 1</li>
					<li>Spec 1</li>
					<li>Spec 1</li>
					<li>Spec 1</li>
				</ul>
				<span><a role="button" class="btn btn-sm" href="{{{ action('HomeController@showCart') }}}">Send Package</a></span>
			</div>
			<div class="col-md-4">
				<img src="/img/package2.jpg">
				<h3>Package 2</h3>
				<ul>
					<li>Spec 1</li>
					<li>Spec 1</li>
					<li>Spec 1</li>
					<li>Spec 1</li>
					<li>Spec 1</li>
				</ul>
				<span><a role="button" class="btn btn-sm" href="{{{ action('HomeController@showCart') }}}">Send Package</a></span>
			</div>
			<div class="col-md-4">
				<img src="/img/package2.jpg">
				<h3>Package 3</h3>
				<ul>
					<li>Spec 1</li>
					<li>Spec 1</li>
					<li>Spec 1</li>
					<li>Spec 1</li>
					<li>Spec 1</li>
					<li>Spec 1</li>
				</ul>
				<span><a role="button" class="btn btn-sm" href="{{{ action('HomeController@showCart') }}}">Send Package</a></span>
			</div>
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
