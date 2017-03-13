<?php

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

/*Route::get('/', function () {
    return view('welcome');
});*/

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/admin/', 'AdminController@index')->name('admin');

Route::get('/price/', 'PriceController@index')->name('price.index');
Route::get('/price/create', 'PriceController@create')->name('price.create');
Route::post('/price/', 'PriceController@store')->name('price.store');
Route::get('/price/{price_id}/edit', 'PriceController@edit')->name('price.edit');
Route::put('/price/{price_id}/', 'PriceController@update')->name('price.update');
Route::delete('/price/{price_id}/', 'PriceController@destroy')->name('price.destroy');
