<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Habit;

use App\Http\Requests\StoreRegistration;

class RegistrationController extends Controller
{
    public function index(){
        $user = Auth::user();
        $habits = Habit::get();

        $btn_habits = [];

        foreach($habits as $habit){
            $btn_habits[$habit->id] = $habit->name;
        }

        return view('dashboard.registration', [
            'user' => $user,
            'habits' => $btn_habits
        ]);
    }
    public function store(StoreRegistration $request){

        $validated = $request->validated();

        var_dump($validated);

    }
}
