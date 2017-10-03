<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/',[
	'uses' => 'ProductController@getIndex',
	'as'   => 'product.index'
	]
	 );
Route::get('/add-to-cart/{id}',[
	'uses' => 'ProductController@getAddToCart',
	'as'   =>  'product.addToCart'
	]);
Route::get('/reduce/{id}',[
	'uses' => 'ProductController@getReduceByOne',
	'as'   => 'product.reduceByOne'
	]);
Route::get('/remove/{id}',[
	'uses' => 'ProductController@removeItem',
	'as'   => 'product.remove'
	]);
Route::get('/shopping-cart',[
	'uses' => 'ProductController@getCart',
	'as'   =>  'product.shopping-cart'
	
	]);
Route::get('/checkout',[
	'uses' => 'ProductController@getCheckout',
	'as'   => 'checkout',
	'middleware' => 'auth'
	]);
Route::post('/checkout',[
	'uses' => 'ProductController@postCheckout',
	'as'   => 'checkout',
	'middleware' => 'auth'
	]);
Route::get('/user/profile',[
	'uses' => 'UserController@getProfile',
	'as'   => 'user.profile'
	]);

Route::auth();
Route::get('auth/logout', 'Auth\AuthController@logout');
Route::get('/home', 'HomeController@index');
