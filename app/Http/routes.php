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

Route::get('/', function(){
	return view('welcome');
});

Route::group(['middleware' => ['web']], function (){
	Route::auth();

	Route::get('/home', 'HomeController@index');

	Route::get('/editarUsuario', 'UserController@editUser');

	Route::post('/editarUsuario', 'UserController@updateUser');

	Route::get('/buscarVendedores', 'UserController@showSearchSeller');

	Route::get('/vender', 'ProductController@showSell');

	Route::get('/cargarProducto', 'ProductController@createProduct');

	Route::post('/cargarProducto', 'ProductController@storeProduct');

	Route::get('/comprar', 'ProductController@showBuy');
});
