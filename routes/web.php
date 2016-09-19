<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', 'UsuarioController@login');
Route::post('/autentica', 'UsuarioController@autentica');
Route::get('/logout', 'UsuarioController@logout');

Route::group(['prefix' => 'dashboard', 'middleware' => 'auth'], function () {
    
    Route::get('/', 'DashboardController@index');

    //Usuario
	Route::group(['prefix' => 'usuario'], function () {
		Route::get('/', 'UsuarioController@index');
		Route::get('/novo', 'UsuarioController@create');
		Route::get('/edit/{id}', 'UsuarioController@edit');
		Route::post('/store/{id}', 'UsuarioController@update');
		Route::get('/update', 'UsuarioController@update');
		Route::get('/delete', 'UsuarioController@destroy');
	});

	//Produtos
	Route::group(['prefix' => 'produto'], function () {
		Route::get('/', 'ProdutoController@index');
		Route::get('/store', 'ProdutoController@index');
		Route::get('/update', 'ProdutoController@index');
		Route::get('/delete', 'ProdutoController@index');
	});

	//Categoria
	Route::group(['prefix' => 'produto'], function () {
		Route::get('/', 'ProdutoController@index');
		Route::get('/store', 'ProdutoController@index');
		Route::get('/update', 'ProdutoController@index');
		Route::get('/delete', 'ProdutoController@index');
	});

	//Slideshow
	Route::group(['prefix' => 'produto'], function () {
		Route::get('/', 'ProdutoController@index');
		Route::get('/store', 'ProdutoController@index');
		Route::get('/update', 'ProdutoController@index');
		Route::get('/delete', 'ProdutoController@index');
	});

	//Galeria
	Route::group(['prefix' => 'produto'], function () {
		Route::get('/', 'ProdutoController@index');
		Route::get('/store', 'ProdutoController@index');
		Route::get('/update', 'ProdutoController@index');
		Route::get('/delete', 'ProdutoController@index');
	});

	//Vídeos
	Route::group(['prefix' => 'produto'], function () {
		Route::get('/', 'ProdutoController@index');
		Route::get('/store', 'ProdutoController@index');
		Route::get('/update', 'ProdutoController@index');
		Route::get('/delete', 'ProdutoController@index');
	});

	//Newsletter
	Route::group(['prefix' => 'produto'], function () {
		Route::get('/', 'ProdutoController@index');
		Route::get('/store', 'ProdutoController@index');
		Route::get('/update', 'ProdutoController@index');
		Route::get('/delete', 'ProdutoController@index');
	});

});
