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

Route::get('cart', 'HomeController@showCart');

Route::get('checkout', 'HomeController@showCheckout');
Route::post('checkout', 'HomeController@confirmation');

Route::get('confirmation', 'HomeController@showConfirmation');

Route::get('account', 'HomeController@showAccount');

Route::get('login', 'HomeController@showLogin');

Route::post('login', 'HomeController@doLogin');

Route::get('logout', 'HomeController@logout');

Route::get('register', 'HomeController@showRegister');