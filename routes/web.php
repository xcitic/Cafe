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

Route::get('/', 'LandingController@index');

// Authentication Routes
Auth::routes(['register' => false]);
Route::get('/home', 'HomeController@index')->name('home');


// Reservation Routes
Route::post('/reservation', 'ReservationController@store');
Route::get('/reservations/get', 'ReservationController@index');
Route::post('/reservation/{id}/delete', 'ReservationController@destroy');
Route::post('/reservation/{id}/update', 'ReservationController@update');

// Message Routes
Route::post('/message', 'MessageController@store');
Route::get('/messages/get', 'MessageController@index');
Route::post('/message/{id}/delete', 'MessageController@destroy');
Route::post('/message/{id}/update', 'MessageController@update');
