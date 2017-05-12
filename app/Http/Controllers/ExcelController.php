<?php

namespace Omar\Http\Controllers;

use Illuminate\Http\Request;

use Omar\Http\Requests;

use Omar\Articulo;
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
 
        Excel::create('Lista de Articulos', function($excel) {

            $excel->sheet('Sheetname', function ($sheet) {

        // first row styling and writing content
        $sheet->mergeCells('A1:W1');
        $sheet->row(1, function ($row) {
            $row->setFontFamily('Comic Sans MS');
            $row->setFontSize(30);
        });

        $sheet->row(1, array('Listado de Articulos'));

        // second row styling and writing content
        $sheet->row(2, function ($row) {

            // call cell manipulation methods
            $row->setFontFamily('Comic Sans MS');
            $row->setFontSize(15);
            $row->setFontWeight('bold');

        });

        $sheet->row(2, array('Total de articulos'));

        // getting data to display - in my case only one record
        $articulo = User::get()->toArray();

        // setting column names for data - you can of course set it manually
        $sheet->appendRow(array_keys($articulo[0])); // column names

        // getting last row number (the one we already filled and setting it to bold
        $sheet->row($sheet->getHighestRow(), function ($row) {
            $row->setFontWeight('bold');
        });

        // putting users data as next rows
        foreach ($articulo as $art) {
            $sheet->appendRow($art);
        }
    });
        })->export('xls');
 
 }
}
