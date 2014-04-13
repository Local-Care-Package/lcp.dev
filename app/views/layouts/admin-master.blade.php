<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Local Care Package</title>

<!-- CSS LOADS -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
	<link rel="shortcut icon" href="/img/favicon.ico">
	<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
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
		    		<li><a href="{{{ action('UsersController@index') }}}">Customers</a></li>
			        <li><a href="{{{ action('OrdersController@index') }}}">Orders</a></li>
			        <li><a href="">Inventory</a></li>
			        <li><a href="">Vendors</a></li>
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
      </div>
    </div>
<!-- END FOOTER -->

<!-- JS LIBRARY LOADS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<script src="https://js.stripe.com/v2/"></script>
<script src="/js/bootbox.min.js"></script>


<script>
  setTimeout(function() {
    $('.session-error').fadeOut(700);
  }, 2000);

</script>

@yield('bottomscript')

</body>
</html>