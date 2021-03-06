<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RegistrationMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $user = Auth::user();
        $status = [];

        if (empty($user->cell_phone)) {
            $status[] = 'Celular não cadastrado'; 
        }

        if (empty($user->gender)) {
            $status[] = 'Gênero não cadastrado'; 
        }

        if (empty($user->birthday)) {
            $status[] = 'Data de nascimento não cadastrada'; 
        }

        if(!empty($status)) {
            return redirect()->route('registration');
        } else {
            return $next($request);
        }

    }
}
