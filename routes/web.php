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

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/tours/create', 'TourController@create')->name('tours.create');
Route::post('/tours', 'TourController@store')->name('tours.store');
Route::get('/tours/{id}', 'TourController@show')->name('tours.show');
