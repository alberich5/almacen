<?php

namespace Omar\Http\Controllers;

use Illuminate\Http\Request;

use Omar\Http\Requests;

use Omar\Articulo;
use Omar\Movimiento;
use Omar\User;
use DB;

use Maatwebsite\Excel\Facades\Excel;


class ExcelController extends Controller
{
    /**
 * Display a listing of the resource.
 *
 * @return Response
 */
 public function index()
 {
 
       Excel::create('Articulos', function($excel) {
 
            $excel->sheet('Articulos', function($sheet) {
 
                $products = Articulo::all();
 
                $sheet->fromArray($products);
 
            });
        })->download('xls');
 
 }
 public function mes()
 {
 
       Excel::create('Movimientos', function($excel) {
 
            $excel->sheet('Movimientos', function($sheet) {
 
                $movimientos=DB::table('Movimiento as m')
            ->join('articulo as a','m.id_articulo','=','a.id_articulo')
            ->join('cliente as c','m.id_cliente','=','c.id_cliente')
            ->select('m.id_movimiento','m.cantidad','m.tipo','a.nombre','a.unidad','c.nombre_c','m.fecha')
            ->orderBy('m.id_movimiento','desc')->get();
 

                $sheet->fromArray($movimientos);
 
            });
        })->export('xls');
 
 }
}
