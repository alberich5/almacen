<?php

namespace sisVentas;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    //Nombre de nuestra tabla
    protected $table='categoria';
    //nuestra primary key
    protected $primaryKey='idcategoria';

    public $timestamps=false;

    //Agregar los campos que van asignar al modelo
    protected $fillable =[
    	'nombre',
    	'descripcion',
    	'condicion'
    ];
    //campos que no quieres que se asignen al modelo
    protected $guarded =[

    ];

}
