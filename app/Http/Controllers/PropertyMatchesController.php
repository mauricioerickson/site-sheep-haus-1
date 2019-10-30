<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Match;
use App\User;
use App\Contract;

class PropertyMatchesController extends Controller
{
    public function show($id) {

        $dados = [];

        $contract = Contract::where('property_id', '=', $id)->pluck('user_id')->toArray();
        $macth = Match::where('property_id', '=', $id)->pluck('user_id')->toArray();
        
        $users_contracts = Contract::pluck('user_id')->toArray();

        if(!empty($contract)) {
            $user_id = $contract;
        } else {
            $user_id = $imoveis = array_diff($macth, $users_contracts);
        }
        
        $Users = User::whereIn('id', $user_id)->get();

        return view('dashboard.owner.matches.index', [
            'dados' => $Users,
            'contract' => $contract,
            'property' => (object) array('id' => $id)
        ]);
    }
}
