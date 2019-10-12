<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;

class CourseController extends Controller
{
    public function search(Request $request) {
        $search = $request->get('term');
        $result = Course::where('name', 'LIKE', '%'. $search. '%')->get();
        return response()->json($result);
    }
}
