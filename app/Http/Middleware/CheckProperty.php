<?php

namespace App\Http\Middleware;

use Closure;
use App\Property;
use Illuminate\Support\Facades\Auth;

class CheckProperty
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
        $id = $request->id;

        if($request->_method === 'DELETE'){
            $id = $request->property_id;
        }

        if($id) {

            $properties = Property::where('user_id', '=', $user->id)->where('id', '=', $id)->first();

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
