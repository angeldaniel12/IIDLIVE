<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; //Autenticacion del usuario

class Solonormal
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
                return redirect('home');//Si es normal redirige al home
            break;
			case('2'):
                //return redirect('normal');
                return $next($request);// Si es un usuario continua a la ruta User
			break;	
            case ('3'):
                return redirect('creadores');//Si es normal redirige al moderador
                //return redirect('normal');//Si es normal redirige al moderador 
            break;
        }
        
    }
}