<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subcategorias extends Model
{
    protected $table ='subcategorias';
    protected $primaryKey = 'idsc';
    protected $fillable=['nombre','idc'];

    public function categoria(){
        return $this->belongsTo('App\Categorias', 'idc');
    }

    public function producto(){
        return $this->hasMany('App\Producto');
     }

}
