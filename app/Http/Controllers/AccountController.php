<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Account;

class AccountController extends Controller
{
    public function store(Request $request) {
        
        $id = $request->property_id;
        $user = $request->user();

        $user = [
            'owner_id' => $user->id
        ];

        $dados = array_merge($user, $request->except('_token'));

        Account::create($dados);
        return redirect()->route('property.edit', [$id]);
    }

    public function delete(Request $request) {
        Account::where('id', '=', $request->id)->delete();
        return redirect()->route('property.edit', [$request->property_id]);
    }
}
