<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\IHabit;
use App\MHabit;
use App\User;
use App\Alert;
use App\Property;

use App\Mail\AlertMail;
use Illuminate\Support\Facades\Mail;

class AlertPropertyController extends Controller
{


    public function index($id) {

        $habit_id = IHabit::where('property_id', '=', $id)->pluck('habit_id')->toArray();
        $user_id = MHabit::whereIn('habit_id', $habit_id)->pluck('user_id')->toArray();
        $user_id = array_unique($user_id);

        $Users = User::whereIn('id', $user_id)->get();

        $Alerts = Alert::where('property_id', '=', $id)->pluck('user_id')->toArray();

        return view('dashboard.owner.alerts.index', [
            'users' => $Users,
            'property' => $id,
            'alerts' => $Alerts
        ]);
    }

    public function store(Request $request) {

        $get = Alert::where('user_id', '=', $request->user_id)->where('property_id', '=', $request->property_id)->first();
        
        if(empty($get)) {
            Alert::create($request->all());
        }

        $property = Property::where('id', '=', $request->property_id)->first();
        $dweller = User::where('id', '=', $request->user_id)->first();
        
        $dados = array(
            'usuario' => $dweller,
            'property' => $property,
        );

        Mail::to($dweller->email)
        ->bcc('jaumcj@gmail.com')
        ->send(new AlertMail($dados));
        return redirect()->back();
    }
}
