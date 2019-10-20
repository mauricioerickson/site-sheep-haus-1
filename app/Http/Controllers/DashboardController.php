<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){

        $user = Auth::user();


        if($user->function === 'M') {
            return view('dashboard.dweller.dashboard');
        }

        if($user->function === 'P') {
            return view('dashboard.owner.dashboard');
        }
        
    }
}
