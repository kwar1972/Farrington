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

// Route::get('/dashboard/home', 'DashboardController@versionone')->name('home');

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Auth::routes(['verify' => true]);

Route::get('home', 'DashboardController@versionone')->name('home')->middleware('verified');

// User Manager
Route::get('userman', 'DashboardController@usernman')->name('userman')->middleware('verified');
Route::get('users', 'UsermanController@index')->name('users')->middleware('verified');
Route::get('/userdetail/{id}', 'UsermanController@show')->middleware('verified');
Route::get('/useredit/{id}', 'UsermanController@update')->middleware('verified');
Route::get('/userdelete/{id}', 'UsermanController@destroy')->middleware('verified');
Route::get('/userslogins/{id}', 'LoginController@show');

//Ticker Manager
Route::get('tickerman', 'DashboardController@tickerman')->name('userman')->middleware('verified');
Route::get('tickers', 'TickerController@index')->name('tickers')->middleware('verified');
Route::get('/tickerdetail/{id}', 'TickerController@show')->middleware('verified');
Route::post('/tickeredit/{id}', 'TickerController@update')->middleware('verified');
Route::get('/tickercreate', 'TickerController@store')->middleware('verified');
Route::get('/swapticker', 'TickerController@swapticker')->middleware('verified');
Route::get('/tickerdelete/{id}', 'TickerController@destroy')->middleware('verified');

//TEST
Route::get('test', 'DashboardController@test')->name('test')->middleware('verified');
