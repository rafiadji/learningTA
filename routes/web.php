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

Route::get('/', 'WelcomeController@index')->name('welcome');

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

require __DIR__.'/auth.php';
