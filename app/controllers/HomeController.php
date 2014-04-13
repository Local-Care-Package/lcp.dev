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

<<<<<<< HEAD
=======
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

		Stripe::setApiKey("sk_test_tmZKPpxGIafBRaS640pw8WXC");

		// Get the credit card details submitted by the form
		$token = $_POST['stripeToken'];

		// Create the charge on Stripe's servers - this will charge the user's card
		try {
		$charge = Stripe_Charge::create(array(
		  "amount" => 2500, // amount in cents, again
		  "currency" => "usd",
		  "card" => $token,
		  "description" => "payinguser@example.com")
		);
		return Redirect::action('HomeController@showConfirmation');

		} catch(Stripe_CardError $e) {

		}
	} 


	public function confirmation()
	{
		
	}

	public function showConfirmation()
	{
		return View::make('confirmation');
	}

	public function showAccount()
	{
		return View::make('account');
	}

>>>>>>> ken
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
			if (Auth::user()->is_admin == true) {
				return Redirect::action('UsersController@index');
			} else {
				return Redirect::intended('/');
			}
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

	public function accessDenied()
	{
		return View::make('accessDenied');
	}




}