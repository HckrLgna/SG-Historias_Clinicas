<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Role
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, $role = 'administrador')
    {

        //evaluar si el usuario esta identificado
        if (!auth()->check()) abort(403);

        //evaluar si el usuario tiene un determinado rol

        $roles = explode('-',$role);
        if ($request->user()->has_any_role($roles)){
            return $next($request);
        }else{

            abort(403);
        }
    }
}
