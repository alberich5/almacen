<?php

namespace Omar\Http\Controllers;

use Illuminate\Http\Request;

use Omar\Http\Requests;
use Omar\Stock;
use DB;

class InventarioController extends Controller
{
     public function create()
    {
    
        return view("almacen.inventario.create");
    }
    //funcion para insertar un nuevo articulo
    public function store (ArticuloFormRequest $request)
    {
        

    }
}
