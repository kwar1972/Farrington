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
Route::get('tickers', 'TickerController@index')->name('tickers');
// FRONTEND
Route::get('/', function () {
    return view('web.coming');
});

Route::get('/webtest', function () {
    return view('web.welcome');
});

Route::get('/whome', function () {
    return view('web.welcome');
});

Route::get('/compprof', function () {
    return view('web.companyprofile');
});
Route::get('/meetteam', function () {
    return view('web.meettheteam');
});
Route::get('/tradingben', function () {
    return view('web.tradingbenefits');
});
Route::get('/tradingplatforms', function () {
    return view('web.tradingplatforms');
});
Route::get('/liveaccount', function () {
    return view('web.liveaccount');
});
Route::get('/equity', function () {
    return view('web.equitystock');
});
Route::get('/forext', function () {
    return view('web.forextrader');
});
Route::get('/commodities', function () {
    return view('web.commodities');
});
Route::get('/faq', function () {
    return view('web.faq');
});
Route::get('/contact', function () {
    return view('web.contact');
});

// BACKEND
Route::get('/debug/{status}', 'HoldingController@checkDebug');

Route::post('/contactform', 'WebFormsController@contactform');
Route::post('/formcall', 'WebFormsController@formCall');
Route::get('/liveaccform', 'WebFormsController@liveaccform');
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::get('/debug/{status}', 'HoldingController@checkDebug');

Auth::routes();
Route::get('home', 'DashboardController@versionone')->name('home');

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
Route::get('/mydetails', 'UsermanController@showClient')->middleware('role:client');
Route::get('/clientdet/{id}', 'UsermanController@clientDetails')->middleware('role:client');
Route::get('/clientbank/{id}', 'BankController@show')->middleware('role:client');
Route::get('/savenewbank/{id}', 'BankController@savenewbank')->middleware('role:client');
Route::get('/savebank/{id}', 'BankController@savebank')->middleware('role:client');
Route::post('/saveclient/{id}', 'UsermanController@savedetails')->middleware('role:client');
Route::get('/chartbig?tvwidgetsymbol={id}', 'UsermanController@savedetails')->middleware('role:client');
Route::get('/mytrades', 'UsermanController@clientTrades')->middleware('role:client');
Route::get('/mytradelist', 'UsermanController@mytradelist')->middleware('role:client');
Route::get('/myholdings', 'HoldingController@clientHoldings')->middleware('role:client');
Route::get('/stockprice/{id}', 'HoldingController@stockprice')->middleware('role:admin|agent|loader|client');
Route::get('/myholdingslist', 'HoldingController@holdingsList')->middleware('role:client');
