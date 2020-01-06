<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Contract;
use App\Match;

class ContractController extends Controller
{
    public function store(Request $request) {

        $contract = Contract::where('user_id', '=', $request->user_id)->where('property_id', '=', $request->property_id)->first();

        if(empty($contract)) {
            Contract::create($request->except('_token'));   
        }

        return redirect()->back();   
    }

    public function destroy(Request $request) {
        
        Contract::where('user_id', '=', $request->user_id)->where('property_id', '=', $request->property_id)->delete();

        return redirect()->back();   
    }
}
