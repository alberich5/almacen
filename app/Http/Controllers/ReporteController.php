<?php

namespace Omar\Http\Controllers;

use Illuminate\Http\Request;

use Omar\Http\Requests;

class ReporteController extends Controller
{
     //funcion index
    public function index(Request $request)
    {
        return view('administrador.reporte.kardex.index');
    }
}
