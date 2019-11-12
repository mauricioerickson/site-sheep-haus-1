<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use App\Property;

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

            $properties = Property::where('user_id', $user->id)->get();

            return view('dashboard.owner.dashboard', [
                'properties' => $properties
            ]);
        }
        
    }
}
