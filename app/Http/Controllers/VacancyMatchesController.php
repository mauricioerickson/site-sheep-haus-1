<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\VMatch;
use App\User;
use App\VContract;
use App\Vacancy;

class VacancyMatchesController extends Controller
{
    public function show($id) {

        $dados = [];

        $contract = VContract::where('vacancy_id', '=', $id)->pluck('user_id')->toArray();
        $vmacth = VMatch::where('vacancy_id', '=', $id)->pluck('user_id')->toArray();
        
        $vacancy = Vacancy::where('id', '=', $id)->first();

        $users_contracts = VContract::pluck('user_id')->toArray();

        if(!empty($contract)) {
            $user_id = $contract;
        } else {
            $user_id = array_diff($vmacth, $users_contracts);
        }
        
        $Users = User::whereIn('id', $user_id)->get();

        return view('dashboard.dweller.property.vmatches.index', [
            'dados' => $Users,
            'contract' => $contract,
            'vacancy' => (object) array(
                'id' => $id,
                'property_id' => $vacancy->property_id
            )
        ]);
    }
}
