<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\VMatch;
use App\Vacancy;
use App\User;
use App\Message;

use App\Mail\VMatchMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;

class VMacthesController extends Controller
{
    public function store(Request $request) {

        $auth = Auth::user();
        
        $user = [
            'user_id' => $auth->id
        ];

        $dados = array_merge($user, $request->except('_token'));

        $get = VMatch::where('user_id', '=', $auth->id)->where('vacancy_id', '=', $request->vacancy_id)->first();
        $owner_id = Vacancy::where('property_id', '=',  $request->property_id)->pluck('user_id')->first();

        if(empty($get)) {
            VMatch::create($dados);
            Message::create([
                'property_id' => (int) $request->property_id,
                'from' => (int) $auth->id,
                'to' => (int) $owner_id
            ]);
        }

        $vacancy = Vacancy::where('id', '=', $request->vacancy_id)->first();
        $owner = User::where('id', '=', $vacancy->user_id)->first();

        $dados = (object) array(
            'vacancy' => (object) $vacancy,
            'owner' => (object) $owner
        );

        if($auth->function === 'M') {
            Mail::to($owner->email)
            ->bcc('jaumcj@gmail.com')
            ->send(new VMatchMail($dados));
            return redirect()->back();
        }
    }
}
