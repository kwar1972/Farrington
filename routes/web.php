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

// FRONTEND
Route::get('/', function () {
    return view('welcome');
});




Route::get('/contactform', 'WebFormsController@contactform');
Route::get('/liveaccform', 'WebFormsController@liveaccform');
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');


Auth::routes(['verify' => true]);
Route::get('home', 'DashboardController@versionone')->name('home')->middleware('verified');

//ADMINs
Route::get('/userdelete/{id}', 'UsermanController@destroy')->middleware('role:admin');
Route::get('/tickerdelete/{id}', 'TickerController@destroy')->middleware('role:admin');


Route::group(['middleware' => ['role:admin|loader|agent']], function () {
  
        // User Manager
        Route::get('userman', 'DashboardController@usernman')->name('userman');
        Route::get('users', 'UsermanController@index')->name('users');
        Route::get('/userdetail/{id}', 'UsermanController@show');
        Route::get('/usercreate', 'UsermanController@store');
        Route::get('/useredit/{id}', 'UsermanController@update');
        Route::get('/userslogins/{id}', 'LoginController@show');
        Route::get('/resenduseremail/{id}', 'UsermanController@resendVerificationEmail');
        //Ticker Manager
        Route::get('tickerman', 'DashboardController@tickerman')->name('userman');
        Route::get('tickers', 'TickerController@index')->name('tickers');
        Route::get('/tickerdetail/{id}', 'TickerController@show');
        Route::post('/tickeredit/{id}', 'TickerController@update');
        Route::get('/tickercreate', 'TickerController@store');
        Route::get('/swapticker', 'TickerController@swapticker');
        
        //Trades Manager
        Route::get('trademan', 'DashboardController@trademan')->name('trademan');
        Route::get('trademanlist', 'TradesController@index');
        Route::get('tradeuser', 'TradesController@tradeuser')->name('tradeuser');
        Route::get('tradeagent', 'TradesController@tradeagent')->name('tradeagent');
        Route::get('tradesave', 'TradesController@store')->name('tradesave');
        Route::get('/tradedelete/{id}', 'TradesController@destroy');
        Route::get('/tradedetail/{id}', 'TradesController@show');
        Route::get('/tradeedit/{id}', 'TradesController@update');
        Route::get('/tradelist/{id}', 'TradesController@tradelist');
});

// CLIENTS
Route::get('/mydetails', 'UsermanController@showClient')->middleware('role:client')->middleware('verified');
Route::get('/clientdet/{id}', 'UsermanController@clientDetails')->middleware('role:client')->middleware('verified');
Route::get('/clientbank/{id}', 'BankController@show')->middleware('role:client')->middleware('verified');
Route::get('/savenewbank/{id}', 'BankController@savenewbank')->middleware('role:client')->middleware('verified');
Route::get('/savebank/{id}', 'BankController@savebank')->middleware('role:client')->middleware('verified');
Route::get('/saveclient/{id}', 'UsermanController@savedetails')->middleware('role:client')->middleware('verified');
Route::get('/chartbig?tvwidgetsymbol={id}', 'UsermanController@savedetails')->middleware('role:client')->middleware('verified');
Route::get('/mytrades', 'UsermanController@clientTrades')->middleware('role:client')->middleware('verified');
Route::get('/mytradelist', 'UsermanController@mytradelist')->middleware('role:client')->middleware('verified');
Route::get('/myholdings', 'HoldingController@clientHoldings')->middleware('role:client')->middleware('verified');
Route::get('/stockprice/{id}', 'HoldingController@stockprice')->middleware('role:admin|agent|loader|client')->middleware('verified');
Route::get('/myholdingslist', 'HoldingController@holdingsList')->middleware('role:client')->middleware('verified');
