<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Characteristic;

class CharacteristicsController extends Controller
{
    public function index() {
        $habits = Characteristic::get();
        var_dump($habits);
    }

}
