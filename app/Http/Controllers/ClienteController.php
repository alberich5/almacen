<?php

namespace Omar\Http\Controllers;

use Illuminate\Http\Request;

use Omar\Http\Requests;
use Omar\Cliente;
use Illuminate\Support\Facades\Redirect;
use Omar\Http\Requests\PersonaFormRequest;
use DB;

class ClienteController extends Controller
{
	//funcion del contruxtor
     public function __construct()
    {
        $this->middleware('auth');
    }

     public function index(Request $request)
    {
        if ($request)
        {
            //filtro de busquedas
            $query=trim($request->get('searchText'));
            //condicion
            $clientes=DB::table('cliente')->where('nombre_c','LIKE','%'.$query.'%')
            ->orderBy('id_cliente','desc')
            ->paginate(7);
            return view('almacen.cliente.index',["clientes"=>$clientes,"searchText"=>$query]);
        }
    }

    //Funcion para crear una  nueva categoria
    public function create()
    {
        //mostrar vista de crear
        return view("almacen.cliente.create");
    }
    public function store (Request $request)
    {
        //creo objeto de validacion tipo categoria
        $Cliente=new Cliente;
        $Cliente->nombre_c=$request->get('nombre');
        $Cliente->save();
        return Redirect::to('almacen/cliente');

    }
    //funcion para editar las categorias
    public function edit($id)
    {
        return view("almacen.cliente.edit",["cliente"=>Cliente::findOrFail($id)]);
    }

    //funcion para actualizar las categorias
    public function update(Request $request,$id)
    {
        $Cliente=Cliente::findOrFail($id);
        $Cliente->nombre_c=$request->get('nombre');
        $Cliente->update();
        return Redirect::to('almacen/cliente');
    }

}
