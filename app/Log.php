<?php

namespace Omar;

use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    //hacemos referencia al tabla que vamos a manejar
    protected $table='log';

    
    //se defin ela llave primaria de la tabla articulo
    protected $primaryKey='id_log';

    public $timestamps=false;

    protected $fillable =[
    	'id_log',
    	'id_user',
    	'id_articulo',
    	'tipo',
    	'fecha'
    ];

    protected $guarded =[

    ];
}
