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
		// redirect to UsersController@show with their new id
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
		return View::make('account')->with('userInfo', $userInfo);
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