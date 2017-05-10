<?php

namespace Omar;

use Illuminate\Database\Eloquent\Model;

class Movimiento extends Model
{
    //Nombre de nuestra tabla
    protected $table='movimiento';
    //nuestra primary key
    protected $primaryKey='id_movimiento';

    public $timestamps=false;

     protected $fillable =[
        'id_articulo',
    	'cantidad',
    	'tipo'
    ];

    protected $guarded =[

    ];
}
