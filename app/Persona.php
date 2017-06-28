<?php

namespace Omar;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
	//Hacemos ferencia ala tabla persona
    protected $table='persona';
    //hacemos refencia al id de persona
    protected $primaryKey='idpersona';

    public $timestamps=false;
    //le decimos que campos podemos acceder
    protected $fillable =[
     'tipo_persona',
     'nombre',
     'tipo_documento',
     'num_documento',
     'direccion',
     'telefono',
     'email'
    ];

    protected $guarded =[

    ];
}
