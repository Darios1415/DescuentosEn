<?php

namespace App;

use Illuminate\Console\Application;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\App;

class Usuario extends  Authenticatable
{
    protected $table ='usuarios';
    protected $primaryKey = 'idu';
    protected $fillable=['nombre', 'app', 'apm', 'email', 'pass', 'telefono', 'idtu'];


    public function clientes(){
        return $this->hasMany('App\Cliente');
    }

    public function proveedores(){
        return $this->hasMany('App\Proveedor');
    }

    protected $hidden = [
        'pass', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}


