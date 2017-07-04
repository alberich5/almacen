<?php

namespace Omar\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Omar\User;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {

            switch ($this->auth->user()->idrol) {
           case '1':
               # Administrador
                return  redirect()->to('admin');
               break;
            case '2':
               # Responsable de agregar productos
                return  redirect()->to('responsable');
               break;
           
            }
         return redirect('/admin');
        }

        return $next($request);
    }
}
