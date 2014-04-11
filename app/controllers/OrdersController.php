<?php

class OrdersController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{	

		$orders = Order::with('user')->orderBy('created_at', 'desc');
		$packages = $orders->packages;

		$data = array(
			'orders'   => $orders,
			'packages' => $packages
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
		return View::make('orders.show');
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
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
		// add more items to cart ?
		return Redirect::action('OrdersController@show');
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

	/**
	 * Update a specific order to be packaged.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function order_packaged_at($id)
	{
		// Update an order to be packaged
		$order = Order::findOrFail($id);

		$order->packaged_at = Carbon::now();
		$order->save();

		// Add a success message
		return Redirect::action('OrdersController@index');
	}

	/**
	 * Update a specific order to be delivered.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function order_delivered_at($id)
	{
		// Update an order to be packaged
		$order = Order::findOrFail($id);
		$order->ordered_at = Carbon::now();
		$order->save();
		// delete item from cart/order
		return Redirect::action('OrdersController@index');
	}

}