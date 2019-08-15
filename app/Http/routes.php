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

Route::get('/', 'HalamanController@index');
Route::get('tentang', 'HalamanController@tentang' );
//Penyakit
Route::group(['middleware' => ['web']], function(){	
	Route::get('penyakit', 'PenyakitController@index');
	Route::get('penyakit/create', 'PenyakitController@create');
	Route::post('penyakit', 'PenyakitController@store');
	Route::get('penyakit/{id}', 'PenyakitController@show');
	Route::get('penyakit/{id}/edit', 'PenyakitController@edit');
	Route::patch('penyakit/{id}', 'PenyakitController@update');
	Route::delete('penyakit/{id}', 'PenyakitController@destroy');
});