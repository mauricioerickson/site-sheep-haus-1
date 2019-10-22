<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Characteristic;
use App\Property;
use App\Habit;
use App\Gallery;
use App\Account;
use App\User;

use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreProperty;

class PropertyController extends Controller
{

    public function index() {

        $user = Auth::user();
        $properties = Property::where('user_id', $user->id)->get();

        return view('dashboard.owner.property.index', [
            'properties' => $properties
        ]);
    }

    public function create() {
        $characteristics = Characteristic::get();
        $btn_characteristics = [];
        
        foreach($characteristics as $characteristic){
            $btn_characteristics[$characteristic->id] = $characteristic->name;
        }

        return view('dashboard.owner.property.create', [
            'characteristics' => $btn_characteristics,
        ]);
    }

    public function edit($id) {

        $characteristics = Characteristic::get();
        $habits = Habit::get();
        $btn_characteristics = [];
        $galleries = [];
        $accounts = [];

        $property = Property::where('id', $id)->first();
        $galleries = Gallery::where('property_id', $id)->get();
        $accounts = Account::where('property_id', $id)->get();

        foreach($characteristics as $characteristic){
            $btn_characteristics[$characteristic->id] = $characteristic->name;
        }

        return $property->ihabit;

        return view('dashboard.owner.property.edit', [
            'id' => $id,
            'property' => (object) $property,
            'characteristics' => $btn_characteristics,
            'habits' => $habits,
            'galleries' => $galleries,
            'accounts' => $accounts
        ]);
        
    }


    
    public function store(Request $request) {

        $user = $request->user();

        $user = [
            'user_id' => $user->id
        ];

        $dados = array_merge($user, $request->except('_token'));

        $property = Property::create($dados);
        return redirect()->route('property.edit', [$property->id]);

    }

    public function update(Request $request, $id) {

        $property = Property::where('id', $id)->update($request->except('_token', '_method'));
        return redirect()->route('property.edit', [$id]);

    }

    public function destroy(Request $request) {
        $user = Auth::user();
        Property::where('id', '=', $request->property_id)->where('owner_id', '=', $user->id)->delete();
        return redirect()->route('properties');
    }
}
