<?php

namespace sisVentas;

use Illuminate\Database\Eloquent\Model;

class Ingreso extends Model
{
    //Nombre de nuestra tabla
    protected $table='ingreso';
    //nuestra primary key
    protected $primaryKey='idingreso';

    public $timestamps=false;

    //Agregar los campos que van asignar al modelo
    protected $fillable =[
    	'idproveedor',
    	'tipo_comprobante',
    	'serie_comprobante',
    	'num_comprobante',
    	'fecha_hora',
    	'impuesto',
    	'estado'
    ];
    //campos que no quieres que se asignen al modelo
    protected $guarded =[

    ];
}
