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

	public function message()
	{
		return View::make('message');
	}

	public function sendMessage()
	{
		if (!empty($_POST['phone'])) {
			$phone=$_POST['phone'];
			$message=$_POST['message'];
			Twilio::message($phone, $message);
			Session::flash('phone', $phone);
			Session::flash('message', $message);
		}
		return View::make('message');
	}
	

	public function showPackages()
	{
		$packages = PackageType::all();
		return View::make('packages')->with('packages', $packages);
	}

	public function showCheckout()
	{
		return View::make('checkout');
	}

	public function buyCheckout($id)
	{
		$order = Order::findOrFail($id);
		Stripe::setApiKey("sk_test_tmZKPpxGIafBRaS640pw8WXC");

		// Get the credit card details submitted by the form
		$token = $_POST['stripeToken'];

		// Create the charge on Stripe's servers - this will charge the user's card
		try {
		$charge = Stripe_Charge::create(array(
		  "amount" => ($order->packageType->price * 100), // amount in cents, again
		  "currency" => "usd",
		  "card" => $token,
		  "description" => "payinguser@example.com")
		);
		return Redirect::action('HomeController@showOrder');

		} catch(Stripe_CardError $e) {

		}
	} 

	public function showConfirmation()
	{
		return View::make('confirmation');
	}

	public function showLogin()
	{
		return View::make('login');
	}

	public function showAdmin()
	{
		$orders = Order::all();
		$newOrders = DB::table('orders')->whereNull('packaged_at')->get();
		$inPackage = DB::table('orders')
					->whereNotNull('packaged_at')
					->whereNull('delivered_at')
					->get();

		$delivered = DB::table('orders')
					->whereNotNull('packaged_at')
					->whereNotNull('delivered_at')
					->get();

		$data = array(
			'orders' => $orders,
			'newOrders' => $newOrders,
			'inPackage' => $inPackage,
			'delivered' => $delivered,
			'users' => $users = User::all()
			);

		return View::make('dashboard')->with($data);
	}

	public function doLogin()
	{
		$email = Input::get('email');
		$password = Input::get('password');
		if (Auth::attempt(array('email' => $email, 'password' => $password))) 
		{	    
			Session::flash('successMessage', 'Login successful.');
			if (Auth::user()->is_admin == true) {
				return Redirect::action('HomeController@showAdmin');
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

	public function showInventory()
	{
		return View::make('inventory');
	}

	public function showVendors()
	{
		return View::make('vendors');
	}


}