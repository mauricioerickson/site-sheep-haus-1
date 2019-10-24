<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Match;
use App\User;

class PropertyMatchesController extends Controller
{
    public function show($id) {

        $dados = [];

        $user_id = Match::where('property_id', '=', $id)->pluck('user_id')->toArray();
        $Users = User::whereIn('id', $user_id)->get();

        return view('dashboard.owner.matches.index', [
            'dados' => $Users,
        ]);
    }
}
