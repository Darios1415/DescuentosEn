<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table ='cliente';
    protected $primaryKey = 'idcl';
    protected $fillable=['nombre','app', 'apm', 'email', 'pass', 'telefono', 'colonia', 'calle', 'numint', 'numext', 'cp'];
}
