<?php

class UsersController extends \BaseController {

	public function __construct()
	{
		// Include parent constructor
		parent::__construct();

		// Run an authentication filter before all methods except index and show
		$this->beforeFilter('auth', array('except' => array('create', 'store')));

		$this->beforeFilter('users.protect', array('only' => array('show', 'edit', 'update', 'destroy')));
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		// Check if a user is an admin, if so, allow them to progress to index page
		if(Auth::user()->is_admin) {
			// $users = User::all()->with('orders')->orderBy('created_at', 'desc')->paginate(10);
			// $data = array(
			// 	'users'=>$users
			// );
			return View::make('account.index');
		} else {
		// If a user is not the admin, push them to the show page for their own page
			return Redirect::action('HomeController@accessDenied');
		}
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('account.register');
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
		$user = User::findOrFail($id);
		$orders = $user->orders;
		$data = array('user' => $user, 'orders' => $orders);

		return View::make('account.show')->with($data);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$user = User::findOrFail($id);
		return View::make('account.edit')->with('user', $user);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$user = User::findOrFail($id);
		// create the validator
		$tempRules = User::$editRules;
		$tempRules['email'] = $tempRules['email'] . ",email,$id";
	    $validator = Validator::make(Input::all(), $tempRules);
	  
	    // attempt validation
	    if ($validator->fails())
	    {
	    	Session::flash('errorMessage', 'Error: User information did not save properly.');
	        return Redirect::back()->withInput()->withErrors($validator);
	    } else {
			$user->first_name = Input::get('first_name');
			$user->last_name = Input::get('last_name');
			$user->email = Input::get('email');
			$user->phone = Input::get('phone');
			$user->save();

			Session::flash('successMessage', 'Your information has successfully been updated!');
			return Redirect::action('UsersController@show', $user->id);
		}
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
		// return 'DELETE, Deletes a specific post';
		User::findOrFail($id)->delete();
		if (User::find($id)) {
			Session::flash('errorMessage', 'Account delete was unsuccessful.');
		} else {
			Session::flash('successMessage', 'Your account was deleted successfully');
			return Redirect::action('HomeController@showAbout');
		}
	}

}