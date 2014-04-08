<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showAbout()
	{
		return View::make('about');
	}

	public function showPackages()
	{
		return View::make('packages');
	}

	public function showCart()
	{
		return View::make('cart');
	}

	public function showCheckout()
	{
		return View::make('checkout');
	}

	public function showConfirmation()
	{
		return View::make('confirmation');
	}

	public function showAccount()
	{
		return View::make('account');
	}

	public function showLogin()
	{
		return View::make('login');
	}

	public function showRegister()
	{
		return View::make('register');
	}

}