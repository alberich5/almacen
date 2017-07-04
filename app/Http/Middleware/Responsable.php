<?php

namespace Omar\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use Omar\User;
use Closure;

class Responsable
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function __construct(Guard $auth)
    {
        $this->auth=$auth;
    }

    public function handle($request, Closure $next)
    {
        switch ($this->auth->user()->idrol) {
           case '1':
               # Administrador
                return  redirect()->to('admin');
               break;
            case '2':
               # Responsable de agregar productos
                #return  redirect()->to('responsable');
               break;
           
           
       }

        return $next($request);
    }
}
