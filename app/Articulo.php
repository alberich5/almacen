<?php

namespace Omar;

use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{
	//hacemos referencia al tabla que vamos a manejar
    protected $table='articulo';

    
    //se defin ela llave primaria de la tabla articulo
    protected $primaryKey='idarticulo';

    public $timestamps=false;

    protected $fillable =[
    	'idcategoria',
    	'codigo',
    	'nombre',
    	'stock',
    	'descripcion',
        'marca',
        'unidad',
    	'imagen',
    	'estado'
    ];

    protected $guarded =[

    ];
}
