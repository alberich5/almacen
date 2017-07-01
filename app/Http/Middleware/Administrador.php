<?php

namespace Omar\Http\Middleware;
use Omar\User;
use Omar\UsuarioRol;
use Closure;


class Administrador
{
    /**
     * Handle an incoming request.
     *Administrador
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $idUsuario=$this->auth->user();
        $rol=UsuarioRol::where('usuario_id', $idUsuario->id)
               ->first();

               //aqui checamos que tipo de usuario devuelve la consulta para ser redirigido a su propia ruta
        switch ($rol->rol_id) {
            case '1':
                return redirect()->to('recursos-humanos')->with('redirectPath', '/recursos-humanos');
                break;
            case '2':
                return redirect()->to('cobranzas')->with('redirectPath', '/cobranzas'); 
            break;
        }

        return $next($request);
    }
}
