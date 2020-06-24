<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subcategorias extends Model
{
    protected $table ='subcategorias';
    protected $primaryKey = 'idsc';
    protected $fillable=['nombre','idc'];


}
