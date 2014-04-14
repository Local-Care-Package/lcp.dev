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
<div id="wrapper-admin">	

<!-- HEADER -->	
	<header id="header-admin">
		<div class="">
			<div class="row">
				<div class="col-md-12">
					@if (Session::has('successMessage'))
			        <div class="alert alert-success session-error">{{{ Session::get('successMessage') }}}</div>
			      	@endif
			      	@if (Session::has('errorMessage'))
			        <div class="alert alert-danger session-error">{{{ Session::get('errorMessage') }}}</div>
			     	@endif
			     </div>
				<div class="col-md-7">
					<div class="logo">
						<a href="{{{ action('HomeController@showAdmin') }}}"><img id="logo-nav" src="/img/lcp_logo_web.png"></a>
					</div>
				</div>
			</div>
		</div>
	</header>
<!-- END HEADER -->

<!-- NAV -->
	<div id="sidebar-nav" class="navbar navbar-default" role="navigation">
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
		    	<ul id="dashboard-menu" class="nav navbar-nav">
		    		<li><a href="{{{ action('UsersController@index') }}}"><i class="fa fa-users"></i> Customers</a></li>
			        <li><a href="{{{ action('OrdersController@index') }}}"><i class="fa fa-gift"></i> Orders</a></li>
			        <li><a href=""><i class="fa fa-archive"></i> Inventory</a></li>
			        <li><a href=""><i class="fa fa-briefcase"></i> Vendors</a></li>
			        <li><a href="{{{ action('HomeController@logout') }}}"><i class="fa fa-sign-out"></i> Logout</a></li>
		    	</ul>
		    </div>
		</div>
	</div>
<!-- END NAV -->

<!-- MAIN CONTENT -->
	<div class="container main">
		@yield('main-content')
	</div>
<!-- END MAIN -->
</div>

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