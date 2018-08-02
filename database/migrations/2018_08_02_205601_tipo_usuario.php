<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TipoUsuario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      try{
        //
        Schema::create('tipo_usuario', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre','45');
        });

        \DB::table('categorias')->insert([
          [ 'nombre'=>'usuario',],
          [ 'nombre'=>'mod',],
          [ 'nombre'=>'admin',],
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
        //
    }
}
