<?php

namespace Omar;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    //Nombre de nuestra tabla
    protected $table='cliente';
    //nuestra primary key
    protected $primaryKey='id_cliente';

    public $timestamps=false;

    //Agregar los campos que van asignar al modelo
    protected $fillable =[
    	'nombre_c',
    	'tipo'
    ];
    //campos que no quieres que se asignen al modelo
    protected $guarded =[

    ];
}
