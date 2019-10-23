<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Match;
use App\User;

class PropertyMatchesController extends Controller
{
    public function show($id) {

        $dados = [];

        $properties = Match::where('property_id', '=', $id)->get();

        foreach($properties as $property) {
            $user = User::where('id', '=', $property->user_id)->first();
            $dados[] = $user;
        }

        return view('dashboard.owner.matches.index', [
            'dados' => $dados,
        ]);
    }
}
