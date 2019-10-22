<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Habit;
use App\IHabit;

class IHabitsController extends Controller
{
    public function index() {

    }


    public function store(Request $request) {


        

        $dados = array_merge($request->except('_token'));
        $I_Habit = IHabit::create($dados);
        return redirect()->route('property.edit', [$I_Habit->property_id]);
        
    }

}
