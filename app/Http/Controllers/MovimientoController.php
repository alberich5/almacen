<?php

namespace Omar\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

use Omar\Http\Requests;
use Omar\Movimiento;
use Omar\stock;
use DB;

use Carbon\Carbon;
use Response;
use Illuminate\Support\Collection;

class MovimientoController extends Controller
{
    //construtor
    public function __construct()
    {
        $this->middleware('auth');
    }

    //funcion index
    public function index(Request $request)
    {
        $query=trim($request->get('searchText'));
    	$movimientos=DB::table('Movimiento as m')
            ->join('articulo as a','m.id_articulo','=','a.id_articulo')
            ->join('cliente as c','m.id_cliente','=','c.id_cliente')
            ->select('m.id_movimiento','m.cantidad','m.tipo','a.nombre','a.unidad','c.nombre_c','m.fecha')
            ->orderBy('m.id_movimiento','desc')
            ->paginate(10);
        return view('almacen.movimiento.index',["movimientos"=>$movimientos,"searchText"=>$query]);
    }

     public function create()
    {
    	$articulos=DB::table('articulo as a')
        ->join('stock as s','a.id_articulo','=','s.id_articulo')
        ->select('a.id_articulo','a.nombre','a.descripcion','a.unidad','a.precio','s.cantidad')
        ->get();
    	$stock=DB::table('stock as s')
    	->join('articulo as a','s.id_articulo','=','a.id_articulo')
    	->select('s.cantidad')
    	->get();
        $cliente=DB::table('cliente')->get();
        $user=DB::table('users')->get();
    	//mostrar vista de crear
        return view("almacen.movimiento.create",["articulos"=>$articulos,"stock"=>$stock,"cliente"=>$cliente,"user"=>$user]);
    }

     //funcion para insertar un nuevo articulo
    public function store (Request $request)
    {
        //creo objeto de validacion tipo categoria
        $movimiento= new Movimiento;
        $movimiento->id_articulo=$request->get('id_articulo');
        $movimiento->cantidad=$request->get('cantidad');
        $movimiento->tipo=$request->get('tipo');
        $movimiento->id_cliente=$request->get('id_cliente');
        $movimiento->save();
        return Redirect::to('almacen/movimiento');

    }
}
