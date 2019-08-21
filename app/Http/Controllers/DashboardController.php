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
    public function versionthree()
    {
        return view('dashboard.v3');
    }
}
