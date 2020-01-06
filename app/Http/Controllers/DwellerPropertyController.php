<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contract;
use App\Property;

use Illuminate\Support\Facades\Auth;

class DwellerPropertyController extends Controller
{
    public function index() {

        $auth = Auth::user();
        $contract = Contract::where('user_id', '=', $auth->id)->pluck('property_id')->toArray();;
        $property = Property::whereIn('id', $contract)->first();

        return view('dashboard.dweller.property.index', [
            'property' => $property
        ]);
    }
}
