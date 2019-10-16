<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Characteristic;
use App\Property;
use App\Habit;

class PropertyController extends Controller
{
    public function index($id = null) {

        $characteristics = Characteristic::get();
        $habits = Habit::get();
        $btn_characteristics = [];
        $btn_habits = [];
        $property = [
            'type' => null, 
            'characteristics_id' => null, 
            'number_of_bedrooms' => null, 
            'number_of_bathrooms' => null, 
            'number_of_residents' => null, 
            'property_size' => null, 
            'address' => null, 
            'cep' => null, 
            'district' => null, 
            'city' => null, 
            'number' => null, 
            'gallery_id' => null, 
            'accounts_id' => null, 
            'university_id' => null, 
            'course_id' => null, 
            'habits_id' => null, 
            'owner_id' => null
        ];

        if($id) {
            $property = Property::where('id', $id)->first();
        }
        
        foreach($characteristics as $characteristic){
            $btn_characteristics[$characteristic->id] = $characteristic->name;
        }

        foreach($habits as $habit){
            $btn_habits[$habit->id] = $habit->name;
        }

        return view('dashboard.property', [
            'id' => $id,
            'property' => (object) $property,
            'characteristics' => $btn_characteristics,
            'habits' => $btn_habits
        ]);

    }

    public function store(Request $request) {

        $user = $request->user();

        $user = [
            'owner_id' => $user->id
        ];

        $dados = array_merge($user, $request->except('_token'));

        $property = Property::create($dados);
        return redirect()->route('property', [$property->id]);

    }

    public function update(Request $request, $id) {

        $property = Property::where('id', $id)->update($request->except('_token', '_method'));
        return redirect()->route('property', [$id]);

    }
}
