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

    }

    public function edit() {
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

        
        return view('dashboard.profile', [
            'user' => (object) $user,
            'habits' => $habits,
            'mhabits' => (object) $mhabits,
            'mhabits_id' => $mhabits_id,
        ]);
    }

    public function update(UpdateProfile $request) {

        $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = time().'.'.$request->image->extension();  
        $request->image->move(public_path('avatar'), $imageName);

        $data = $request->except('_token', '_method', 'image');
        $data['avatar'] = $imageName;

        $user = $request->user();
        $user = User::where('id', $user->id)->update($data);
        return redirect()->route('profile');

    }
}