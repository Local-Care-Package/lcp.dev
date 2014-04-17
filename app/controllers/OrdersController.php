<?php

use Carbon\Carbon;

class OrdersController extends \BaseController {

	public function __construct()
	{
		// Include parent constructor
		parent::__construct();

		// Run an authentication filter before all methods except create and store
		$this->beforeFilter('auth', array('except' => array('create', 'store', 'confirm')));

		$this->beforeFilter('orders.protect', array('only' => array('show')));

	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index($show = null)
	{	
		$show = Input::get('show');
		switch ($show) {
			case 'newOrders':
				$orders = DB::table('orders')->whereNull('packaged_at')->paginate(20);
				break;
			case 'inPackage':
				$orders = DB::table('orders')
					->whereNotNull('packaged_at')
					->whereNull('delivered_at')
					->paginate(20);
				break;
			case 'delivered':
				$orders = DB::table('orders')
					->whereNotNull('packaged_at')
					->whereNotNull('delivered_at')
					->paginate(20);
				break;
			default:
				$orders = Order::with('user')->orderBy('created_at', 'desc')->paginate(20);
				break;
		}

		// view all orders if ADMIN
		return View::make('orders.index')->with('orders', $orders);
	}

	/**
	 * Show the form for creating a new order.
	 *
	 * @return Response
	 */
	public function create()
	{
		// Make sure user is logged in or registers to place order
		if (Auth::check()) {
			return View::make('orders.create');	
		} else {
			Session::flash('errorMessage', 'Please login or register to place an order.');
			return View::make('login');
		}
		
	}

	/**
	 * Store the result of a stripe processing, and create a new order if successful
	 *
	 * @return Response
	 */
	public function makePayment()
	{
		{
			
			Stripe::setApiKey("sk_test_tmZKPpxGIafBRaS640pw8WXC");

			// Get the credit card details submitted by the form
			$token = Input::get('stripeToken');

			// Create the charge on Stripe's servers - this will charge the user's card
			try {
			$charge = Stripe_Charge::create(array(
			  "amount" => (Session::get('package_type_price') * 100), // amount in cents, again
			  "currency" => "usd",
			  "card" => $token,
			  "description" => Session::get('package_type_description'))
			);

			} catch(Stripe_CardError $e) {
				dd($e);
			}
			$order = new Order();
			
			if (auth::check()) {
				$order->user_id = Auth::user()->id;
				// Next steps: Grab customer token from stripe, for reuse.
			} else {
				// Else put to guest id
				$order->user_id = 2;
			}
			$order->recipient_name = (Session::get('recipient_name'));
	    	$order->street = (Session::get('street'));
	    	$order->city = (Session::get('city'));
	    	$order->state = (Session::get('state'));
	    	$order->zip = (Session::get('zip'));
	    	$order->gift_message = (Session::get('gift_message'));
	    	$order->package_type_id = (Session::get('package_type_id'));
	    	$order->stripe_transaction_token = $charge->id;
	    	$order->save();

	    	Session::flash('successMessage', 'Your purchase was successful!');
			return Redirect::action('OrdersController@show', $order->id);
		} 
	}

	/**
	 * Store a newly created order in a session.
	 *
	 * @return Response
	 */
	public function store()
	{

		$validator = Validator::make(Input::all(), Order::$rules);
	  
	    // attempt validation
	    if ($validator->fails())
	    {
	    	Session::flash('errorMessage', 'Error: Order not processed');
	        return Redirect::back()->withInput()->withErrors($validator);

	    } else {
	    	$packageType = PackageType::findOrFail(Input::get('package_type_id'));

	    	Session::put('recipient_name', Input::get('recipient_name'));
	    	Session::put('street', Input::get('street'));
	    	Session::put('city', Input::get('city'));
	    	Session::put('state', Input::get('state'));
	    	Session::put('zip', Input::get('zip'));
	    	Session::put('gift_message', Input::get('gift_message'));
	    	Session::put('package_type_id', Input::get('package_type_id'));
	    	Session::put('package_type_description', $packageType->description);
	    	Session::put('package_type_price', $packageType->price);
			return View::make('orders.confirm');
		}
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		// show order/package details (for order history, confirm email)
		$order = Order::findOrFail($id);

		if (Auth::user()->is_admin) {
			return View::make('orders.admin-show')->with('order', $order);
		} else {
			return View::make('orders.show')->with('order', $order);
		}
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$order = Order::findOrFail($id);
		$packageType = $order->packageType;
		$data = array('order' => $order, 'packageType' => $packageType);

		return View::make('orders.admin-edit')->with($data);
		// edit order history (ADMIN FUNCITON ONLY)
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		// NOTE THIS REQUIRES A LOGGED IN USER TO CREATE CUSTOMER ID FOR ORDER
		$data = Input::all();
		Log::info($data);

		$order = Order::findOrFail($id);
		$validator = Validator::make(Input::all(), Order::$rules);
	  
	    // attempt validation
	    if ($validator->fails())
	    {
	    	Session::flash('errorMessage', 'Error: Changes not saved');
	        return Redirect::back()->withInput()->withErrors($validator);

	    } else {
	    	
	    	$order->recipient_name = Input::get('recipient_name');
	    	$order->street = Input::get('street');
	    	$order->city = Input::get('city');
	    	$order->state = Input::get('state');
	    	$order->zip = Input::get('zip');
	    	$order->gift_message = Input::get('gift_message');
	    	// These two fields are currently not working, as of now it reverts to null on submission
	    	// See edit form for details
	    	if (Input::get('packaged_at') == true) {
	    		$order->packaged_at = Carbon::now();
	    	}
	    	if (Input::get('delivered_at') == true) {
	    		$order->delivered_at = Carbon::now();
	    	}
	    	$order->save();
		
		}
		Session::flash('successMessage', 'Your information has successfully been updated!');
		return Redirect::action('OrdersController@show', $order->id);
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		// delete item from cart/order
		if (Auth::user()->is_admin) {
			return Redirect::action('OrdersController@index');
		} else {
			return Redirect::action('HomeController@showPackages');
		}
	}

}