<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Local Care Package</title>

<!-- CSS LOADS -->
	<link rel="stylesheet" href="/css/bootstrap.min.css">
	<link rel="shortcut icon" href="/img/favicon.ico">
	<link href="/css/font-awesome.css" rel="stylesheet">
	<link rel="stylesheet" href="/css/lcp.css">

@yield('topscript')

</head>
<body>
<div id="wrapper">	

<!-- HEADER -->	
	<header>
		<div class="container">
			<div class="row">
				<div class="col-md-7">
					<div class="logo">
						<a href="/"><img id="logo-nav" src="/img/lcp_logo_web.png"></a>
					</div>
				</div>
				<div class="col-md-5">
					<div class="hlinks">
						<ul class="list-inline">
							@if (Auth::check())
							<li><em>Hello, {{{ Auth::user()->first_name }}}!</em></li>
							<li><a href="{{{ action('HomeController@logout') }}}" role="button" class="btn btn-sm">Logout</a></li>
							@else
							<li><a href="{{{ action('HomeController@showLogin') }}}" role="button" class="btn btn-sm">Login / Register</a></li>
							@endif
						</ul>
					</div>
				</div>
			</div>
		</div>
	</header>
<!-- END HEADER -->

<!-- NAV -->
	<div class="navbar navbar-default" role="navigation">
		<div class="container">
			<div class="navbar-header">
	      		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
			       	<span class="sr-only">Toggle navigation</span>
				    <span class="icon-bar"></span>
				    <span class="icon-bar"></span>
				    <span class="icon-bar"></span>
			    </button>
	    	</div>

	    	<div class="collapse navbar-collapse">
		    	<ul class="nav navbar-nav">
		    		<li><a href="{{{ action('HomeController@showAbout') }}}">About</a></li>
			        <li><a href="{{{ action('HomeController@showPackages') }}}">Packages</a></li>
			        <li><a href="@if (Auth::check()) {{{ action('UsersController@show', Auth::user()->id) }}} @else {{{ action('HomeController@showLogin') }}} @endif">My Account</a></li>
		    	</ul>
		    </div>
		</div>
	</div>
<!-- END NAV -->

<!-- MAIN CONTENT -->
	<div class="container main">
		@if (Session::has('successMessage'))
        <div class="alert alert-success session-error">{{{ Session::get('successMessage') }}}</div>
      	@endif
      	@if (Session::has('errorMessage'))
        <div class="alert alert-danger session-error">{{{ Session::get('errorMessage') }}}</div>
     	@endif

		@yield('main-content')
	</div>
<!-- END MAIN -->
</div>
<!-- FOOTER -->
	<div id="footer">
      <div class="container">
      	<div class="row">
      		<div class="col-md-4">
      			<h3>Connect with us!</h3>	
      				<ul class="list-inline">	
      					<li><a href="#"><i class="fa fa-facebook-square social"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter social"></i></a></li>
						<li><a href="#"><i class="fa fa-instagram social"></i></a></li>
					</ul>
      		</div>
      		<div class="col-md-8">
      			<h3>Contact</h3>
      				<p>
      				<i class="fa fa-home"></i> 112 E. Pecan Street, Floor 10, San Antonio, Texas 78205</p>
      				<p><i class="fa fa-phone"></i> (210) 111-1111</p>
      				<p><i class="fa fa-envelope"> info@localcarepackage.com</i></p>
      		</div>
      	</div>
      </div>
    </div>
<!-- END FOOTER -->

<!-- JS LIBRARY LOADS -->
<script src="/js/jquery.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/stripe.js"></script>
<script src="/js/bootbox.min.js"></script>


<script>
  setTimeout(function() {
    $('.session-error').fadeOut(700);
  }, 2000);

</script>

@yield('bottomscript')

</body>
</html>