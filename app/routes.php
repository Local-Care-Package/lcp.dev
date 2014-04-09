<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'HomeController@showAbout');

Route::get('shop-packages', 'HomeController@showPackages');

Route::get('checkout', 'HomeController@showCheckout');

Route::get('confirmation', 'HomeController@showConfirmation');

Route::get('login', 'HomeController@showLogin');

Route::post('login', 'HomeController@doLogin');

Route::get('logout', 'HomeController@logout');

Route::get('register', 'HomeController@showRegister');

Route::get('edit-account', 'UsersController@showEditAccount');

Route::get('account', 'OrdersController@index');
