<?php

namespace Omar\Http\Controllers;

use Illuminate\Http\Request;

use Omar\Http\Requests;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use Omar\Http\Requests\ArticuloFormRequest;
use Omar\Articulo;
use Omar\Stock;
use DB;

class ArticuloController extends Controller
{
    //construtor
    
    //funcion index
    public function index(Request $request)
    {
        if ($request)
        {
            //filtro de busquedas
            $query=trim($request->get('searchText'));
            //condicion
            $articulos=DB::table('articulo as a')
            ->join('categoria as c','a.id_categoria','=','c.id_categoria')
            ->select('a.id_articulo','a.nombre','a.descripcion','a.unidad','c.nombre as categoria','a.precio')
            ->where('a.nombre','LIKE','%'.$query.'%')
            ->orderBy('a.id_articulo','desc')
            ->paginate(7);
            return view('almacen.articulo.index',["articulos"=>$articulos,"searchText"=>$query]);
        }
    }
    //Funcion para la vista de crear un nuevo articulo
    public function create()
    {
    	$categorias=DB::table('categoria')->get();
        //mostrar vista de crear
        return view("almacen.articulo.create",["categorias"=>$categorias]);
    }
    //funcion para insertar un nuevo articulo
    public function store (ArticuloFormRequest $request)
    {
        //creo objeto de validacion tipo categoria
        $articulo=new Articulo;
        $articulo->id_categoria=$request->get('id_categoria');
        $articulo->nombre=$request->get('nombre');
        $articulo->descripcion=$request->get('descripcion');
        $articulo->unidad=$request->get('unidad');
        $articulo->precio=$request->get('precio');
        $articulo->save();
        return Redirect::to('almacen/articulo');

    }

    //funcion para mostrar todos los articulos
    public function show($id)
    {
        return view("almacen.articulo.show",["articulo"=>Articulo::findOrFail($id)]);
    }

    //funciojn para editar cada articulo
    public function edit($id)
    {
        $articulo=Articulo::findOrFail($id);
        $categorias=DB::table('categoria')->get();
        //retornar la vista
        return view("almacen.articulo.edit",["articulo"=>$articulo,"categorias"=>$categorias]);

    }

    //funcion para actualizar la informacion de cada articulo
    public function update(ArticuloFormRequest $request,$id)
    {
         $articulo=Articulo::findOrFail($id);
         $articulo->id_categoria=$request->get('id_categoria');
         $articulo->nombre=$request->get('nombre');
         $articulo->descripcion=$request->get('descripcion');
         $articulo->precio=$request->get('precio');
         $articulo->update();

    

         
         return Redirect::to('almacen/articulo');
    }

    //funcion para eliminar cada articulo
    public function destroy($id)
    {
        $articulo=Articulo::findOrFail($id);
        $articulo->Estado='Inactivo';
        $articulo->update();
         return Redirect::to('almacen/articulo');
    }
}
