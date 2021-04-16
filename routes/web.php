<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'WelcomeController@index')->name('artikel');
Route::get('/video', 'WelcomeController@video')->name('video');
Route::get('/book', 'WelcomeController@video')->name('video');

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

Route::group(['prefix' => 'art', 'as' => 'art.'], function () {
	Route::get('', ['as' => 'index', 'uses' => 'ArtikelController@index']);
	Route::post('', ['as' => 'store', 'uses' => 'ArtikelController@store']);
	Route::get('/create', ['as' => 'create', 'uses' => 'ArtikelController@create']);
	Route::get('/{artikel}', ['as' => 'show', 'uses' => 'ArtikelController@show']);
	Route::put('/{artikel}', ['as' => 'update', 'uses' => 'ArtikelController@update']);
	Route::delete('/{artikel}', ['as' => 'destroy', 'uses' => 'ArtikelController@destroy']);
	Route::get('/{artikel}/edit', ['as' => 'edit', 'uses' => 'ArtikelController@edit']);
});

Route::group(['prefix' => 'vid', 'as' => 'vid.'], function () {
	Route::get('', ['as' => 'index', 'uses' => 'VideoController@index']);
	Route::post('', ['as' => 'store', 'uses' => 'VideoController@store']);
	Route::get('/create', ['as' => 'create', 'uses' => 'VideoController@create']);
	Route::get('/{video}', ['as' => 'show', 'uses' => 'VideoController@show']);
	Route::put('/{video}', ['as' => 'update', 'uses' => 'VideoController@update']);
	Route::delete('/{video}', ['as' => 'destroy', 'uses' => 'VideoController@destroy']);
	Route::get('/{video}/edit', ['as' => 'edit', 'uses' => 'VideoController@edit']);
});

Route::group(['prefix' => 'bk', 'as' => 'bk.'], function () {
	Route::get('', ['as' => 'index', 'uses' => 'BookController@index']);
	Route::post('', ['as' => 'store', 'uses' => 'BookController@store']);
	Route::get('/create', ['as' => 'create', 'uses' => 'BookController@create']);
	Route::get('/{book}', ['as' => 'show', 'uses' => 'BookController@show']);
	Route::put('/{book}', ['as' => 'update', 'uses' => 'BookController@update']);
	Route::delete('/{book}', ['as' => 'destroy', 'uses' => 'BookController@destroy']);
	Route::get('/{book}/edit', ['as' => 'edit', 'uses' => 'BookController@edit']);
});

require __DIR__.'/auth.php';
