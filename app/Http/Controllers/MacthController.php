<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use App\Match;
use App\Property;
use App\User;

use App\Mail\MatchMail;
use Illuminate\Support\Facades\Mail;

class MacthController extends Controller
{
    public function index() {

    }

    public function store(Request $request) {

        $auth = Auth::user();
        
        $user = [
            'user_id' => $auth->id
        ];

        $dados = array_merge($user, $request->except('_token'));

        $get = Match::where('user_id', '=', $auth->id)->where('property_id', '=', $request->property_id)->first();
        
        if(empty($get)) {
            Match::create($dados);
        }

        $property = Property::where('id', '=', $request->property_id)->first();
        $owner = User::where('id', '=', $property->user_id)->first();

        $dados = array(
            'usuario' => $auth,
            'property' => $property,
            'owner' => $owner
        );

        if($auth->function === 'M') {
            Mail::to($owner->email)
            ->bcc('jaumcj@gmail.com')
            ->send(new MatchMail($dados));
            return redirect()->back();
        }
    }
}
