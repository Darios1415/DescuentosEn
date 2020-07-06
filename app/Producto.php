<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table ='productos';
    protected $primaryKey = 'idpr';
    protected $fillable=['nombre','descripcion', 'precio', 'comision', 'existencia', 'descc', 'descp', 'cost_env', 'img', 'idc', 'idsc'];

    public function categoria(){
        return $this->belongsTo('App\Categorias', 'idc');
    }


    public function subcategoria(){
        return $this->belongsTo('App\Subcategorias', 'idsc');
    }


}
