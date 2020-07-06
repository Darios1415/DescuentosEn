<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table ='cliente';
    protected $primaryKey = 'idcl';
    protected $fillable=['nombre','app', 'apm', 'email', 'pass', 'telefono', 'idm', 'colonia', 'calle', 'numint', 'numext', 'cp'];

    public function municipio(){
        return $this->belongsTo('App\Municipio', 'idm');
    }
}
