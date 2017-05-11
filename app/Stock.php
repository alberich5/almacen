<?php

namespace Omar;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    //hacemos referencia al tabla que vamos a manejar
    protected $table='stock';

    


    public $timestamps=false;

    protected $fillable =[
    	'id_articulo',
    	'cantidad',
    	'fecha'
    ];

    protected $guarded =[

    ];
}
