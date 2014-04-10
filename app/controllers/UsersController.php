<?php

class UsersController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		// if ADMIN show view of users
		// else show access denied
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('register');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		// grab form input and send to DB users table
		// create the validator
	    $validator = Validator::make(Input::all(), User::$rules);
	  
	    // attempt validation
	    if ($validator->fails())
	    {
	    	Session::flash('errorMessage', 'Error: User not saved');
	        return Redirect::back()->withInput()->withErrors($validator);
	    } else {
			$user = new User();
			$user->first_name = Input::get('first_name');
			$user->last_name = Input::get('last_name');
			$user->email = Input::get('email');
			$user->phone = Input::get('phone');
			$user->password = Input::get('password');
			$user->is_admin = false;
			$user->save();

			Mail::send('emails.auth.userconfirm', array('first_name'=>Input::get('first_name')), function($message){
        	$message->to(Input::get('email'), Input::get('first_name').' '.Input::get('last_name'))->subject('Welcome to Local Care Package!');
    		});

			Session::flash('successMessage', 'Thanks for being a Local Care Package customer!');
			return Redirect::action('HomeController@showAbout');
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
		$userInfo = User::findOrFail($id);
		// $orders = $query->('where', )
		// $query = Post::with('user');
		// $orderHistory = Order::all();
		$data = [
			'userInfo' => $userInfo,
			// 'orderHistory' => $orderHistory
		];

		return View::make('account')->with($data);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$userInfo = User::findOrFail($id);
		return View::make('edit-account')->with('userInfo', $userInfo);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		// grab input and save changes to users table (same as create)
		// redirect to account with updated info and success message
		// if error, flash error message
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		// delete account button to account view
		// delete record from users table in DB
		// flash success message once deleted, error if not
	}

}