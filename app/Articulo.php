<?php

namespace Omar;

use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{
	//hacemos referencia al tabla que vamos a manejar
    protected $table='articulo';

    
    //se defin ela llave primaria de la tabla articulo
    protected $primaryKey='id_articulo';

    public $timestamps=false;

    protected $fillable =[
        'id_categoria',
    	'nombre',
    	'descripcion',
    	'unidad',
    	'precio'
    ];

    protected $guarded =[

    ];
}
