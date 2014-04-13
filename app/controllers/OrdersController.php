<?php

class OrdersController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{	

		$orders = Order::with('user')->orderBy('created_at', 'desc')->paginate(10);
		
		$data = array(
			'orders'   => $orders,
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
		return View::make('checkout');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		// save checkout info to DB
		return View::make('confirmation');
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
		return View::make('orders.show')->with('order', $order);
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
		return View::make('orders.edit')->with($data);
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
		return Redirect::action('OrdersController@index');
	}

}