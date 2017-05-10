<?php

namespace Omar\Http\Controllers;

use Illuminate\Http\Request;

use Omar\Http\Requests;

class ReporteController extends Controller
{
  public function index(Request $request)
    {
    	
        return view('almacen.ver.index');
    }
}
