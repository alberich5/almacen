<?php

namespace Omar\Http\Controllers;

use Illuminate\Http\Request;

use Omar\Http\Requests;

use Omar\Articulo;
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
 
        Excel::create('Lista de Articulos', function($excel) {

            $excel->sheet('Productos', function($sheet) {
 
                $products = Articulo::all();

                $sheet->fromArray($products);
 
            });
        })->export('xls');
 
 }
}
