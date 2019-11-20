<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use App\Email;


class EmailControllers extends Controller
{
    public function index() {
        
    }

    public function create($to) {

        $auth = Auth::user();
        $from = $auth->id;

        $mensagens = Email::where('from', '=', $auth->id)->orWhere('to', '=', $auth->id)->get();

        return view('dashboard.emails.create', [
            'mensagens' => $mensagens,
            'from' => $from,
            'to' => $to
        ]);

    }

    public function store(Request $request) {
        
        Email::create($request->except('_token', '_method'));
        return redirect()->back();

    }
}
