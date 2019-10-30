<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\VHabit;

class VHabitsController extends Controller
{
    public function store(Request $request) {
        $dados = array_merge($request->except('_token'));
        $V_Habit = VHabit::create($dados);
        return redirect()->route('vacancies.edit', [$V_Habit->property_id]);
    }
    public function destroy(Request $request) {
        VHabit::where('property_id', '=', $request->property_id)->where('habit_id', '=', $request->habit_id)->delete();
        return redirect()->route('vacancies.edit', [$request->property_id]);
    }
}
