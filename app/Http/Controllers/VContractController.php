<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\VContract;

class VContractController extends Controller
{
    public function store(Request $request) {

        $contract = VContract::where('user_id', '=', $request->user_id)->where('vacancy_id', '=', $request->vacancy_id)->first();

        if(empty($contract)) {
            VContract::create($request->except('_token'));   
        }

        return redirect()->back();   
    }

    public function destroy(Request $request) {
        
        VContract::where('user_id', '=', $request->user_id)->where('vacancy_id', '=', $request->vacancy_id)->delete();

        return redirect()->back();   
    }
}
