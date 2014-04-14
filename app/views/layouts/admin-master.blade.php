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

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand"><a href="{{{ action('HomeController@showAdmin') }}}"><img id="logo-nav-admin" src="/img/lcp_logo_web.png"></a>
                </li>
                <li><a href="{{{ action('UsersController@index') }}}"><i class="fa fa-users"></i> Customers</a></li>
                <li><a href="{{{ action('OrdersController@index') }}}"><i class="fa fa-gift"></i> Orders</a></li>
                <li><a href=""><i class="fa fa-archive"></i> Inventory</a></li>
                <li><a href=""><i class="fa fa-briefcase"></i> Vendors</a></li>
                <li><a href=""><i class="fa fa-envelope"></i> Messages</a></li>
                <li><a href="{{{ action('HomeController@logout') }}}"><i class="fa fa-sign-out"></i> Logout</a></li>
            </ul>
        </div>

        <!-- Page content -->
        <div id="page-content-wrapper">
            <div class="content-header">
				<a id="menu-toggle" class="btn btn-default"><i class="icon-reorder"></i></a>
                    @yield('header')
            </div>
            <!-- Keep all page content within the page-content inset div! -->
            <div class="container">
	            <div class="page-content inset">
	                @yield('main-content')
	            </div>
	        </div>
        </div>

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