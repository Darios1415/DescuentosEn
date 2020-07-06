<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Municipio extends Model
{
    protected $table="municipio";
    protected $primaryKey = 'idm';
    protected $fillable=['nombre'];

    public function clientes(){
        return $this->hasMany('App\Cliente');
    }

}
