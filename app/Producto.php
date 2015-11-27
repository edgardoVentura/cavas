<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = 'productos';
    protected $fillable = array('id','marca_id','codigo_interno','codigo_de_barras','tipo_de_producto','tipo_de_produccion','capacidad', 'envase','descripcion');
    protected $hidden = array('created_at','updated_at','deleted_at');

    public  function marca(){
       return $this->belongsTo('App\Marca');
    }
}
