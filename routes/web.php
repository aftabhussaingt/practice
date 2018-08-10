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
Route::post('/notify', 'HomeController@notify');
Route::get('sales-get','HomeController@showSales');
Route::get('sales-input','HomeController@showSalesInput');

Route::post('/insert-sales', 'HomeController@insertSales');
Route::get('get-date','HomeController@getDate');

