<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Vacancy;
use App\User;
use App\VHabit;
use App\MHabit;
use App\IHabit;
use App\Property;

use Illuminate\Support\Facades\Auth;

class SuggestedVacanciesController extends Controller
{
    public function index(){

        $auth = Auth::user();
        $user = User::where('id', '=', $auth->id)->first();

        $mhabit = MHabit::where('user_id', '=', $user->id)->pluck('habit_id')->toArray();

        $vhabit = VHabit::whereIn('habit_id', $mhabit)->pluck('property_id')->toArray();
        $ihabit = IHabit::whereIn('habit_id', $mhabit)->pluck('property_id')->toArray();
        
        $habits = array_merge($vhabit, $ihabit);

        $vacancies = Vacancy::whereIn('property_id', $habits)->get();
        
        return view('dashboard.dweller.property.suggestedvacancies.index', [
            'vacancies' => $vacancies
        ]);
    }
}
