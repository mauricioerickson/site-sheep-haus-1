<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Property;
use App\IHabit;
use App\User;
use App\Match;

class SuggestedPropertiesController extends Controller
{
    public function index(){

        $auth = Auth::user();
        $user = User::where('id', '=', $auth->id)->first();
        $mhabit = [];
        $ihabit = [];
        $match = [];

        foreach($user->mhabit as $MHabit) {
            $mhabit[] = $MHabit->habit_id;
        }

        $IHabits = IHabit::whereIn('habit_id', $mhabit)->get();

        foreach($IHabits as $IHabit) {
            $ihabit[] = $IHabit->property_id;
        }

        $ihabit = array_unique($ihabit);
        $properties = Property::whereIn('id', $ihabit)->get();

        $matches = Match::where('user_id', '=', $auth->id)->get();

        foreach($matches as $value) {
            $match[] = $value->property_id;
        }

        return view('dashboard.dweller.property.index', [
            'properties' => $properties,
            'match' => $match
        ]);
    }
}
