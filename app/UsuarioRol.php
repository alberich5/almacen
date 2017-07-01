<?php

namespace Omar;

use Illuminate\Database\Eloquent\Model;

class UsuarioRol extends Model
{
    //hacemos referencia ala tabla de usuario  rol
	protected $table='usuario_rol';

	//hacemos refencia al id de la tabla
	//desabilitamos  la opcion de que se agreguen las timestamp ala tabla
	public $timestamps=false;
	//declaramos los campos que se van a  poder a cceder desde la app
	protected $fillable = [
	'id_rol',
	'id_user'
	];

	protected $guarded = [
	];
}
