<?php

namespace Omar\Http\Controllers;

use Illuminate\Http\Request;

use Omar\Http\Requests;

class PdfController extends Controller
{
    public function invoice() 
    {
        $data = $this->getData();
        $date = date('Y-m-d');
        $invoice = "2222";
        $view =  \View::make('vista', compact('data', 'date', 'invoice'))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        	
		return $pdf->download('invoice.pdf');
    }

    public function getData() 
    {
        $data =  [
            'quantity'      => '1' ,
            'description'   => 'some ramdom text',
            'price'   => '500',
            'total'     => '500'
        ];
        return $data;
    }
}
