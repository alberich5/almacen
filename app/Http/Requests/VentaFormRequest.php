<?php

namespace sisVentas\Http\Requests;

use sisVentas\Http\Requests\Request;

class VentaFormRequest extends Request
{
   
    public function authorize()
    {
        return true;
    }

    
    public function rules()
    {
        return [
            'idcliente'=>'required',
            'tipo_comprobante'=>'required|max:20',
            'serie_comprobante'=>'max:7',
            'num_comprobante'=>'required|max:10',
            'idarticulo'=>'required',
            'cantidad'=>'required',
            'precio_venta'=>'required',
            'descuento'=>'required',
            'total_venta'=>'required'
        ];
    }
}
