<?php

namespace Omar;

use Illuminate\Database\Eloquent\Model;

class DetalleIngreso extends Model
{
    //Nombre de nuestra tabla
    protected $table='detalle_ingreso';
    //nuestra primary key
    protected $primaryKey='iddetalle_ingreso';

    public $timestamps=false;

    //Agregar los campos que van asignar al modelo
    protected $fillable =[
    	'idingreso',
    	'idarticulo',
    	'cantidad',
    	'precio_compra',
    	'precio_venta'
    ];
    //campos que no quieres que se asignen al modelo
    protected $guarded =[

    ];
}
