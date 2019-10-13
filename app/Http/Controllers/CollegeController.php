<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\College;

class CollegeController extends Controller
{
    public function search(Request $request) {
        $search = $request->get('term');
        $result = College::where('name', 'LIKE', '%'. $search. '%')->get();
        return response()->json($result);
    }
}
