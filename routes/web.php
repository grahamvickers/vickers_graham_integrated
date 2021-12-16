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
    return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')
    ->name('home');

Route::post('/home', 'ListingController@show')
    ->name('listings.show');

Route::get('/create', function () {
    return view('create');
});

Route::post('/listing', 'ListingController@store')
    ->name('listing.create');


