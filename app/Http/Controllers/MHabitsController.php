<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MHabit;

class MHabitsController extends Controller
{
    public function store(Request $request) {
        $dados = array_merge($request->except('_token'));
        $I_Habit = MHabit::create($dados);
        return redirect()->route('profile');
    }
    public function destroy(Request $request) {
        MHabit::where('user_id', '=', $request->user_id)->where('habit_id', '=', $request->habit_id)->delete();
        return redirect()->route('profile');
    }
}
