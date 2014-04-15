<?php

class OrdersController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{	

		$orders = Order::with('user')->orderBy('created_at', 'desc')->paginate(20);
		// $users = User::with('order');
		$data = array(
			// 'users' => $users,
			'orders'   => $orders
		);
		// view all orders if ADMIN
		return View::make('orders.index')->with($data);	;
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('orders.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{

		$order = new Order;
		$validator = Validator::make(Input::all(), Order::$rules);
	  
	    // attempt validation
	    if ($validator->fails())
	    {
	    	Session::flash('errorMessage', 'Error: Order not processed');
	        return Redirect::back()->withInput()->withErrors($validator);

	    } else {
	    	$order->user_id = Auth::user()->id;
	    	$order->recipient_name = Input::get('recipient_name');
	    	$order->street = Input::get('street');
	    	$order->city = Input::get('city');
	    	$order->state = Input::get('state');
	    	$order->zip = Input::get('zip');
	    	$order->gift_message = Input::get('gift_message');
	    	$order->package_type_id = Input::get('package_type_id');
	    	$order->save();
			return View::make('orders.show')->with('order', $order);
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
		$data = INPUT::all();
		Log::info($data);

		$order = Order::findOrFail($id);
		$validator = Validator::make(Input::all(), Order::$rules);
	  
	    // attempt validation
	    if ($validator->fails())
	    {
	    	Session::flash('errorMessage', 'Error: Changes not saved');
	        return Redirect::back()->withInput()->withErrors($validator);

	    } else {
	    	$order->user_id = Input::get('user_id');
	    	$order->recipient_name = Input::get('recipient_name');
	    	$order->street = Input::get('street');
	    	$order->city = Input::get('city');
	    	$order->state = Input::get('state');
	    	$order->zip = Input::get('zip');
	    	$order->gift_message = Input::get('gift_message');
	    	// These two fields are currently not working, as of now it reverts to null on submission
	    	// See edit form for details
	    	$order->packaged_at = Input::get('packaged_at');
	    	$order->delivered_at = Input::get('delivered_at');
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