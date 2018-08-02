<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    //
    protected $table= 'productos';

    protected $guarded=[];
    public $timestamps = false;

    public function categoria(){
      return $this->belongsTo(Categorie::class);
    }
}
