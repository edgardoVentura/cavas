<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Symfony\Component\HttpFoundation\Request;
class Marca extends Model
{
    protected $table = 'marcas';
    // Atributos que se pueden asignar de manera masiva.
    protected $fillable = array('nombre','grados_alcohol','descripcion');
    protected $hidden = array('created_at','updated_at','deleted_at');

    // Relación de una Marca con Logos
    public function logos(){
        // 1 Marca tiene muchos Logos
        return $this->hasMany('App\Logo','foreign_key');
    }

    // Relación de Marca con Productos
    public function productos(){
        // 1 Marca tiene muchos Productos
        return $this->hasMany('App\Producto');
    }
}
