<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table ='cliente';
    protected $primaryKey = 'idcl';
    protected $fillable=['idm', 'colonia', 'calle', 'numint', 'numext', 'cp', 'img', 'idu'];

    public function municipio(){
        return $this->belongsTo('App\Municipio', 'idm');
    }

    public function usuario(){
        return $this->belongsTo('App\Usuario', 'idu');
    }
}
