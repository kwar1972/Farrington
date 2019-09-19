<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Support\Collection;
use App;
use App\User;
use App\Trade;

class DashboardController extends Controller
{
    public function versionone()
    {   
        if(auth()->user()->hasRole('client')){
            $id = auth()->user()->id;
            $deposits = Trade::where('userid', $id)->where('status', '<>' , 'Cancelled')->sum('total');
            $trades = Trade::where('userid', $id)->where('status', '<>' , 'Cancelled')->count();
            $ticker = Trade::where('userid', $id)->where('status', '<>' , 'Cancelled')->with('getTicker')->get();
            $tickers = $ticker->pluck('getTicker');
            $tickers = $tickers->unique('ticker');
            
            //dd($tvalue);
            return view('client.dashboard')->with('trades', $trades)->with('deposits', $deposits)->with('tickers', $tickers);
        }else {
            return view('dashboard.dashboard');
        }
    }
    public function usernman()
    {
        return view('dashboard.userman');
    }
    public function tickerman()
    {
        return view('dashboard.tickerman');
    }
    public function versionthree()
    {
        return view('dashboard.v3');
    }
    public function test()
    {
        return view('dashboard.test');
    }
    public function trademan()
    {
        return view('dashboard.trades');
    }
}
