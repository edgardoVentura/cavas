<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Logo extends Model
{
    protected $fillable = array('id','pixeles','marca_id');
    protected $hidden = array('logo','created_at','updated_at','deleted_at');

    public  function marca(){
        return $this->belongsTo('App\Marca');
    }
}
