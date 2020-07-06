<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    protected $table ='proveedor';
    protected $primaryKey = 'idpr';
    protected $fillable=['marca','nombre','app', 'apm', 'telefono', 'clebe', 'colonia', 'numint', 'numext', 'cp', 'logo', 'email', 'pass'];

}
