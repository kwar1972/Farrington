<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function versionone()
    {
        return view('dashboard.dashboard');
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
