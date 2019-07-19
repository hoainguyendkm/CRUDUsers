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

Route::get('/', 'PageController@index')->name('list-users');
Route::get('detail/{id}', 'PageController@show')->name('detail');
Route::get('create', 'PageController@create')->name('create');
Route::post('store', 'PageController@store')->name('store');
Route::get('edit/{id}', 'PageController@edit')->name('edit');
Route::post('update/{id}', 'PageController@update')->name('update');
Route::get('delete/{id}', 'PageController@destroy')->name('delete');

