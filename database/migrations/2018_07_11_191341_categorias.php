<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Categorias extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      try{
      \DB::beginTransaction();
      Schema::create('categorias', function (Blueprint $table) {
          $table->increments('id');
          $table->string('nombre','45');
          $table->string('descripcion', '500');
          $table->timestamps();
      });

      \DB::table('categorias')->insert([
        [ 'nombre'=>'camas','descripcion' => 'camas'],
        [ 'nombre'=>'lamparas','descripcion' => 'lamparas'],
        [ 'nombre'=>'mesa','descripcion' => 'mesa'],
        [ 'nombre'=>'silla','descripcion' => 'silla'],
        [ 'nombre'=>'futon','descripcion' => 'futon'],
        [ 'nombre'=>'sillon','descripcion' => 'sillon'],
        [ 'nombre'=>'banquito','descripcion' => 'banquito'],
        [ 'nombre'=>'sofa','descripcion' => 'sofa'],
        [ 'nombre'=>'sofacama','descripcion' => 'sofacama'],
        [ 'nombre'=>'mesa ratona','descripcion' => 'mesa ratona'],
        [ 'nombre'=>'mesa de luz','descripcion' => 'mesa de luz'],
      ]);

      \DB::commit();
    }catch(\PDOException $e){
      \DB::rollback();
      echo "error durante la migración:" . $e->getMessage();
    }
  }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::drop('categorias');
    }
}
