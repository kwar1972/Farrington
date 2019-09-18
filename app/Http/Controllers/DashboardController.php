<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Traits\HasRoles;
use App;
use App\User;
use App\Trade;

class DashboardController extends Controller
{
    public function versionone()
    {   
        if(auth()->user()->hasRole('client')){
            $id = auth()->user()->id;
            $ticker = Trade::where('status', '<>' , 'Cancelled')->with('getTicker')->get();
            $deposits = Trade::where('userid', $id)->where('status', '<>' , 'Cancelled')->sum('total');
            $trades = Trade::where('userid', $id)->where('status', '<>' , 'Cancelled')->count();
            $tickers = $ticker[0]->getTicker->get();
            //dd($tickers);
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
