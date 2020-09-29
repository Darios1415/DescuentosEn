<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    protected $table ='proveedor';
    protected $primaryKey = 'idpr';
    protected $fillable=['marca', 'clebe', 'colonia', 'numint', 'numext', 'cp', 'logo','idm','idu'];

    public function usuario(){
        return $this->belongsTo('App\Usuario', 'idu');
    }

    public function municipio(){
        return $this->belongsTo('App\Municipio', 'idm');
    }

}
