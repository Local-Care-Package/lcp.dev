<?php

App::bind('lcp.dev\app\billing', 'lcp.dev\app\billing\stripeBilling');

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

	public function buyCheckout()
	{
		$billing = App::make('lcp.dev\app\billing\billingInterface');

		// return 

		return $billing->charge([
		'email' => Input::get('email'),
		'token' => Input::get('token')
		]);
	}

	public function confirmation()
	{
		return 'test';
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

	public function doLogin()
	{
		$email = Input::get('email');
		$password = Input::get('password');
		if (Auth::attempt(array('email' => $email, 'password' => $password))) 
		{	    
			Session::flash('successMessage', 'Login successful.');
			return Redirect::intended('/');

		} else {
		    // login failed, go back to the login screen
		    Session::flash('errorMessage', 'Login unsuccessful. Please try again.');
		    return Redirect::back()->withInput();
		}
	}

	public function logout()
	{
		Auth::logout();
		Session::flash('successMessage', 'Logout successful.');
		return Redirect::action('HomeController@showAbout');
	}

	public function showRegister()
	{
		return View::make('register');
	}



}