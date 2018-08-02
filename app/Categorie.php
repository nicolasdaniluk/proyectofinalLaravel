<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    //

    protected $table= 'categorias';

    public function movies(){
        return $this->hasMany(Producto::class);
    }
}
