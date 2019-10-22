<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Property;

class SuggestedPropertiesController extends Controller
{
    public function index(){

        $user = Auth::user();

        $properties = Property::whereIn('id', [1])->get();

        return $properties;
    }
}
