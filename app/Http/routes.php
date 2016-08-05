<?php

Route::get('/', function(){
	return view('welcome');
});


//Route::group(['middleware' => ['web']], function (){
	Route::auth();

	Route::get('/home', 'HomeController@index');

	Route::get('/editarUsuario', 'UserController@editUser');

	Route::post('/editarUsuario', 'UserController@updateUser');

	Route::get('/buscarPersonas', 'UserController@showSearchPeople');

	Route::post('/buscarPersonas', 'UserController@showPeople');

	Route::get('/vender', 'ProductController@showSell');

	Route::get('/cargarProducto', 'ProductController@createProduct');

	Route::post('/cargarProducto', 'ProductController@storeProduct');

	Route::post('/buscarProductos', 'ProductController@searchProducts');

	Route::get('/comprar', [
		'uses' => 'ProductController@showBuy',
		'as' => 'product.showBuy'
	]);

	Route::get('/agregarCarrito/{id}',[
		'uses' => 'ProductController@agregarCarrito',
		'as' => 'product.agregarCarrito'
	]);

	Route::get('/carro',[
		'uses' => 'ProductController@carro',
		'as' => 'product.agregarCarro'
	]);
//});
