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
    return view('frontend.index');
});
Route::get('company_profile', function () {
    return view('frontend.company_profile');
});
Route::get('trading_benefits', function () {
    return view('frontend.trading_benefits');
});
Route::get('thestaff', function () {
    return view('frontend.thestaff');
});
Route::get('account_types', function () {
    return view('frontend.account_types');
});
Route::get('live_account', function () {
    return view('frontend.live_account');
});
Route::get('research', function () {
    return view('frontend.research');
});
Route::get('trading_platforms', function () {
    return view('frontend.trading_platforms');
});
Route::get('equities', function () {
    return view('frontend.equities');
});
Route::get('forex', function () {
    return view('frontend.forex');
});
Route::get('commodities', function () {
    return view('frontend.commodities');
});
Route::get('faq', function () {
    return view('frontend.faq');
});
Route::get('contactus', function () {
    return view('frontend.contactus');
});
Route::get('/tradelist/{id}', 'TradesController@tradelist');
Route::get('/getHoldings/{id}', 'TradesController@getHoldings');
Route::get('roles', 'permController@preTorole');
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
        
});

// CLIENTS
Route::get('/mydetails/{id}', 'UsermanController@showClient')->middleware('role:client|admin|loader|agent')->middleware('verified');
Route::get('/clientdet/{id}', 'UsermanController@clientDetails')->middleware('role:client')->middleware('verified');
Route::get('/clientbank/{id}', 'BankController@show')->middleware('role:client')->middleware('verified');
Route::get('/saveclient/{id}', 'UsermanController@savedetails')->middleware('role:client')->middleware('verified');

// Route::get('home', 'DashboardController@versionone')->name('home')->middleware('role:client')->middleware('verified');


//TEST
Route::get('test', 'DashboardController@test')->name('test')->middleware('verified');
