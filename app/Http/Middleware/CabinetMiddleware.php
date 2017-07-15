<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CabinetMiddleware
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
        if($user->blocked == 1){
            Auth::logout();
            return redirect('/blocked');
            //return response('Insufficient permissions', 401);
        }        
        return $next($request);
    }
}
