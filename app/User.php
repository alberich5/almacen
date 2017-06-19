<?php

namespace Omar;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    //Hacemos ferencia ala tabla persona
    protected $table='users';
    //hacemos refencia al id de persona
    protected $primaryKey='id';

    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
