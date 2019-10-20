<?php

namespace App\Http\Middleware;

use Closure;
use App\Property;
use Illuminate\Support\Facades\Auth;

class CheckUser
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

        if($request->id) {
            $properties = Property::where('owner_id', '=', $user->id)->where('id', '=', $request->id)->first();

            if(!$properties) {
                return redirect()->route('properties');
            }
        }
        
        if($user->function !== 'P') {
            return redirect()->route('dashboard');
        }

        return $next($request);
    }
}
