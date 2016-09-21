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

//Website
Route::get('/','SiteController@index');

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
		Route::post('/store', 'UsuarioController@store');
		Route::get('/update', 'UsuarioController@update');
		Route::get('/delete', 'UsuarioController@destroy');
	});

	//Produtos
	Route::group(['prefix' => 'produto'], function () {
		Route::get('/', 'ProdutoController@index');
		Route::get('/novo', 'ProdutoController@create');
		Route::get('/edit/{id}', 'ProdutoController@edit');
		Route::post('/store', 'ProdutoController@store');
		Route::post('/update/{id}', 'ProdutoController@update');
		Route::get('/delete/{id}', 'ProdutoController@destroy');
	});

	//Categoria
	Route::group(['prefix' => 'categoria'], function () {
		Route::get('/', 'CategoriaController@index');
		Route::get('/edit/{id}', 'CategoriaController@edit');
		Route::post('/store', 'CategoriaController@store');
		Route::post('/update/{id}', 'CategoriaController@update');
		Route::get('/delete/{id}', 'CategoriaController@destroy');
	});

	//Slideshow
	Route::group(['prefix' => 'slideshow'], function () {
		Route::get('/', 'SlideshowController@index');
		Route::post('/store', 'SlideshowController@store');
		Route::get('/delete/{name}', 'SlideshowController@destroy');
	});

	//Galeria
	Route::group(['prefix' => 'galeria'], function () {
		Route::post('/upload', 'GaleriaController@uploadImages');
		Route::get('/delete/image', 'GaleriaController@destroyImage');
		Route::post('/diretorio/store', 'GaleriaController@storeDiretorio');
		Route::post('/subdiretorio/store', 'GaleriaController@storeSubdiretorio');
		
		Route::get('/{name?}/{evento?}', 'GaleriaController@index');
		Route::post('/store', 'GaleriaController@store');
		Route::get('/delete/{name}', 'GaleriaController@destroy');

	});

	//Vídeos
	Route::group(['prefix' => 'video'], function () {
		Route::get('/', 'VideoController@index');
		Route::get('/novo', 'VideoController@create');
		Route::get('/edit/{id}', 'VideoController@edit');
		Route::post('/store', 'VideoController@store');
		Route::post('/update/{id}', 'VideoController@update');
		Route::get('/delete/{id}', 'VideoController@destroy');
	});

	//Newsletter
	Route::group(['prefix' => 'produto'], function () {
		Route::get('/', 'ProdutoController@index');
		Route::get('/edit/{id}', 'ProdutoController@edit');
		Route::get('/store', 'ProdutoController@store');
		Route::get('/update/{id}', 'ProdutoController@update');
		Route::get('/delete/{id}', 'ProdutoController@destroy');
	});

	//Parametro
	Route::group(['prefix' => 'parametro'], function () {
		Route::get('/', 'ParametroController@index');
		Route::get('/novo', 'ParametroController@create');
		Route::post('/store', 'ParametroController@store');
		Route::get('/edit/{id}', 'ParametroController@edit');
		Route::post('/update/{id}', 'ParametroController@update');
		Route::get('/delete/{id}', 'ParametroController@destroy');
	});
});
