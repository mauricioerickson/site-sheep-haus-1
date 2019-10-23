<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\User;

class MailController extends Controller
{
    public static function sendMaill() {
        
        $user = new User;
        
        $user->name = 'João Marcos Soré de Morais';
        $user->email = 'jaumcj@gmail.com';

        Mail::to($user)->send(new WelcomeMail($user));
    }
}
