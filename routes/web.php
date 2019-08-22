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
Route::get('/userslogins/{id}', 'LoginController@show');
Auth::routes();

// Route::get('/dashboard/home', 'DashboardController@versionone')->name('home');

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Auth::routes(['verify' => true]);

Route::get('home', 'DashboardController@versionone')->name('home')->middleware('verified');
Route::get('userman', 'DashboardController@usernman')->name('userman')->middleware('verified');
Route::get('users', 'UsermanController@index')->name('users')->middleware('verified');
Route::get('/userdetail/{id}', 'UsermanController@show')->middleware('verified');
