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

Auth::routes(['verify' => true]);

// Route::get('/dashboard/home', 'DashboardController@versionone')->name('home');

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::get('transmanlist', 'TransactionController@index');
Auth::routes(['verify' => true]);

Route::get('home', 'DashboardController@versionone')->name('home')->middleware('verified');

// User Manager
Route::get('userman', 'DashboardController@usernman')->name('userman')->middleware('verified');
Route::get('users', 'UsermanController@index')->name('users')->middleware('verified');
Route::get('/userdetail/{id}', 'UsermanController@show')->middleware('verified');
Route::get('/usercreate', 'UsermanController@store')->middleware('verified');
Route::get('/useredit/{id}', 'UsermanController@update')->middleware('verified');
Route::get('/userdelete/{id}', 'UsermanController@destroy')->middleware('verified');
Route::get('/userslogins/{id}', 'LoginController@show')->middleware('verified');
Route::get('/resenduseremail/{id}', 'UsermanController@resendVerificationEmail')->middleware('verified');


//Ticker Manager
Route::get('tickerman', 'DashboardController@tickerman')->name('userman')->middleware('verified');
Route::get('tickers', 'TickerController@index')->name('tickers')->middleware('verified');
Route::get('/tickerdetail/{id}', 'TickerController@show')->middleware('verified');
Route::post('/tickeredit/{id}', 'TickerController@update')->middleware('verified');
Route::get('/tickercreate', 'TickerController@store')->middleware('verified');
Route::get('/swapticker', 'TickerController@swapticker')->middleware('verified');
Route::get('/tickerdelete/{id}', 'TickerController@destroy')->middleware('verified');


//Transaction Manager

Route::get('transman', 'DashboardController@transman')->name('userman')->middleware('verified');
// Route::get('transmanlist', 'TransactionController@index')->middleware('verified');
// Route::get('transman', 'TickerController@index')->name('tickers')->middleware('verified');
// Route::get('/transman/{id}', 'TickerController@show')->middleware('verified');
// Route::post('/transman/{id}', 'TickerController@update')->middleware('verified');
// Route::get('/transman', 'TickerController@store')->middleware('verified');
// Route::get('/transman', 'TickerController@swapticker')->middleware('verified');
// Route::get('/transman/{id}', 'TickerController@destroy')->middleware('verified');


//TEST
Route::get('test', 'DashboardController@test')->name('test')->middleware('verified');
