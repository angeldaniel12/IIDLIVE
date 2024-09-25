<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Solocreador
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        switch(auth::user()->tipo){
            case ('1'):
                return $next($request);//Si es creador continua al Home
            break;
			case('2'):
                //return $next($request);
                return redirect('creadores');// Si es un usuario normal redirige a la ruta User return redirect('normal');
			break;	
            case ('3'):
                //return $next($request);
                return redirect('home');//Si es creador redirige  return redirect('creador');
            break;
            
            
        }
    }
}
