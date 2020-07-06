<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorias extends Model
{
protected $table="categorias";
protected $primaryKey = 'idc';
protected $fillable=['nombre'];

public function subcategorias(){
    return $this->hasMany('App\Subcategorias');
 }
 public function producto(){
    return $this->hasMany('App\Producto');
 }
}
