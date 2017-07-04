<?php

namespace Omar\Http\Middleware;
use Illuminate\Contracts\Auth\Guard;
use Omar\User;
use Omar\UsuarioRol;
use Closure;
use Session;


class Administrador
{
    /**
     * Handle an incoming request.
     *Administrador
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
      $id=Auth::user()->idrol;
        dd($id);
    }
}
