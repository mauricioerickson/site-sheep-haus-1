<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Habit;
use App\User;

use App\Http\Requests\StoreRegistration;

class RegistrationController extends Controller
{
    public function index(){
        $auth = Auth::user();
        $habits = Habit::get();
        $mhabits_id = [];
        $mhabits = [];

        $user = User::where('id', '=', $auth->id)->first();

        foreach($habits as $habit){
            $btn_habits[$habit->id] = $habit->name;
        }

        foreach($user->mhabit as $value) {
            $habit = Habit::where('id', '=', $value->habit_id)->first();
            $mhabits_id[] = $value->habit_id; 
            $mhabits[] = (object) array(
                'id' => $value->habit_id,
                'name' => $habit->name
            );
        }

        
        return view('dashboard.registration', [
            'user' => (object) $user,
            'habits' => $habits,
            'mhabits' => (object) $mhabits,
            'mhabits_id' => $mhabits_id,
        ]);
    }
    public function store(StoreRegistration $request){

        $user = $request->user();
        $validated = $request->validated();

        $user = User::where('id', $user->id)->update($validated);

        return redirect()->route('dashboard');
    }
}
