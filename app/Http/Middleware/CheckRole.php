<?php

namespace App\Http\Middleware;

use Closure;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next) //registrar middleware en kernel para que funcione
    {
        $roles = array_slice(func_get_args(),2);//func_get_args recibe todos los parametros que se entregan
        
        if (auth()->user()->hasRoles ($roles))
        {
            return $next($request);
        }


        return redirect('/');


        
    }
}
