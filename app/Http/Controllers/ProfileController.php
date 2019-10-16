<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Habit;
use App\User;

use App\Http\Requests\UpdateProfile;

class ProfileController extends Controller
{
    public function index(){

        $user = Auth::user();
        $habits = Habit::get();

        foreach($habits as $habit){
            $btn_habits[$habit->id] = $habit->name;
        }

        return view('dashboard.profile', [
            'user' => (object) $user,
            'habits' => $btn_habits
        ]);
    }

    public function update(UpdateProfile $request) {

        $user = $request->user();
        $user = User::where('id', $user->id)->update($request->except('_token', '_method'));
        return redirect()->route('profile');

    }
}