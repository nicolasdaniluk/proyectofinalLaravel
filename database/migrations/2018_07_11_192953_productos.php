<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Productos extends Migration
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
      Schema::create('productos', function (Blueprint $table) {
          $table->increments('id');
          $table->string('nombre', '200');
          $table->string('descripcion', '500');
          $table->string('imagen','200');
          $table->integer('precio');
          $table->integer('categoria')->unsigned();
          $table->timestamps();
          $table->foreign('categoria')->references('id')->on('categorias');
      });

      \DB::table('categorias')->insert([
        [ 'nombre'=>'cama de pino','descripcion' => 'campa re linda de madera de pinon','imagen'=>'productos/sinFoto.jpg','precio' => '3000','categoria'=>1],
        [ 'nombre'=>'cama piola','descripcion' => 'cama lindaaaahhh','imagen'=>'productos/sinFoto.jpg','precio' => '3600','categoria'=>1],
        [ 'nombre'=>' otra cama','descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed porttitor faucibus vulputate. Quisque gravida scelerisque sapien, a condimentum lectus viverra nec. Quisque tortor est, dictum in orci tempor, imperdiet semper metus.','imagen'=>'productos/sinFoto.jpg','precio' => '2000','categoria'=>1],
        [ 'nombre'=>'cama de realeza','descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed porttitor faucibus vulputate. Quisque gravida scelerisque sapien, a condimentum lectus viverra nec. Quisque tortor est, dictum in orci tempor, imperdiet semper metus.','imagen'=>'productos/sinFoto.jpg','precio' => '7977','categoria'=>1],
        [ 'nombre'=>'cama satanica','descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed porttitor faucibus vulputate. Quisque gravida scelerisque sapien, a condimentum lectus viverra nec. Quisque tortor est, dictum in orci tempor, imperdiet semper metus.','imagen'=>'productos/sinFoto.jpg','precio' => '666','categoria'=>1],
        [ 'nombre'=>'cama sacra','descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed porttitor faucibus vulputate. Quisque gravida scelerisque sapien, a condimentum lectus viverra nec. Quisque tortor est, dictum in orci tempor, imperdiet semper metus.','imagen'=>'productos/sinFoto.jpg','precio' => '777','categoria'=>1],
        [ 'nombre'=>'cama de agua','descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed porttitor faucibus vulputate. Quisque gravida scelerisque sapien, a condimentum lectus viverra nec. Quisque tortor est, dictum in orci tempor, imperdiet semper metus.','imagen'=>'productos/sinFoto.jpg','precio' => '1234','categoria'=>1],
        [ 'nombre'=>'cama japonesa','descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed porttitor faucibus vulputate. Quisque gravida scelerisque sapien, a condimentum lectus viverra nec. Quisque tortor est, dictum in orci tempor, imperdiet semper metus.','imagen'=>'productos/sinFoto.jpg','precio' => '3333','categoria'=>1],
        [ 'nombre'=>'cama para niños','descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed porttitor faucibus vulputate. Quisque gravida scelerisque sapien, a condimentum lectus viverra nec. Quisque tortor est, dictum in orci tempor, imperdiet semper metus.','imagen'=>'productos/sinFoto.jpg','precio' => '644','categoria'=>1],
        [ 'nombre'=>'cama de algarrobo','descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed porttitor faucibus vulputate. Quisque gravida scelerisque sapien, a condimentum lectus viverra nec. Quisque tortor est, dictum in orci tempor, imperdiet semper metus.','imagen'=>'productos/sinFoto.jpg','precio' => '3476','categoria'=>1],

        [ 'nombre'=>'lampara loca','descripcion' => 'lampara re hippie','imagen'=>'productos/sinFoto.jpg','precio' => '2000','categoria'=>2],
        [ 'nombre'=>'lampara ochentosa','descripcion' => 'lampara  lindaaaahhh','imagen'=>'productos/sinFoto.jpg','precio' => '800','categoria'=>2],
        [ 'nombre'=>'lampara de noche','descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed porttitor faucibus vulputate. Quisque gravida scelerisque sapien, a condimentum lectus viverra nec. Quisque tortor est, dictum in orci tempor, imperdiet semper metus.','imagen'=>'productos/sinFoto.jpg','precio' => '1200','categoria'=>2],
        [ 'nombre'=>'lampara de colores','descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed porttitor faucibus vulputate. Quisque gravida scelerisque sapien, a condimentum lectus viverra nec. Quisque tortor est, dictum in orci tempor, imperdiet semper metus.','imagen'=>'productos/sinFoto.jpg','precio' => '1234','categoria'=>2],
        [ 'nombre'=>'lampara primavera','descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed porttitor faucibus vulputate. Quisque gravida scelerisque sapien, a condimentum lectus viverra nec. Quisque tortor est, dictum in orci tempor, imperdiet semper metus.','imagen'=>'productos/sinFoto.jpg','precio' => '1765','categoria'=>2],
        [ 'nombre'=>'lampara satanica','descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed porttitor faucibus vulputate. Quisque gravida scelerisque sapien, a condimentum lectus viverra nec. Quisque tortor est, dictum in orci tempor, imperdiet semper metus.','imagen'=>'productos/sinFoto.jpg','precio' => '666','categoria'=>2],
        [ 'nombre'=>'lampara epileptica','descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed porttitor faucibus vulputate. Quisque gravida scelerisque sapien, a condimentum lectus viverra nec. Quisque tortor est, dictum in orci tempor, imperdiet semper metus.','imagen'=>'productos/sinFoto.jpg','precio' => '1010','categoria'=>2],
        [ 'nombre'=>'lampara de lava','descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed porttitor faucibus vulputate. Quisque gravida scelerisque sapien, a condimentum lectus viverra nec. Quisque tortor est, dictum in orci tempor, imperdiet semper metus.','imagen'=>'productos/sinFoto.jpg','precio' => '420','categoria'=>2],

        [ 'nombre'=>'meza de algarrobo','descripcion' => 'meza de algarrobo re copada','imagen'=>'productos/sinFoto.jpg','precio' => '1500','categoria'=>3],
        [ 'nombre'=>'meza de aglomerado','descripcion' => 'meza  lindaaaahhh','imagen'=>'productos/sinFoto.jpg','precio' => '413','categoria'=>3],
        [ 'nombre'=>'meza de pingpong','descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed porttitor faucibus vulputate. Quisque gravida scelerisque sapien, a condimentum lectus viverra nec. Quisque tortor est, dictum in orci tempor, imperdiet semper metus.','imagen'=>'productos/sinFoto.jpg','precio' => '1001','categoria'=>3],
        [ 'nombre'=>'meza satanica','descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed porttitor faucibus vulputate. Quisque gravida scelerisque sapien, a condimentum lectus viverra nec. Quisque tortor est, dictum in orci tempor, imperdiet semper metus.','imagen'=>'productos/sinFoto.jpg','precio' => '666','categoria'=>3],
        [ 'nombre'=>'meza angelical','descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed porttitor faucibus vulputate. Quisque gravida scelerisque sapien, a condimentum lectus viverra nec. Quisque tortor est, dictum in orci tempor, imperdiet semper metus.','imagen'=>'productos/sinFoto.jpg','precio' => '777','categoria'=>3],
        [ 'nombre'=>'meza de poker','descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed porttitor faucibus vulputate. Quisque gravida scelerisque sapien, a condimentum lectus viverra nec. Quisque tortor est, dictum in orci tempor, imperdiet semper metus.','imagen'=>'productos/sinFoto.jpg','precio' => '1234','categoria'=>3],
        [ 'nombre'=>'meza de manzano','descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed porttitor faucibus vulputate. Quisque gravida scelerisque sapien, a condimentum lectus viverra nec. Quisque tortor est, dictum in orci tempor, imperdiet semper metus.','imagen'=>'productos/sinFoto.jpg','precio' => '6854','categoria'=>3],
        [ 'nombre'=>'meza para rol','descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed porttitor faucibus vulputate. Quisque gravida scelerisque sapien, a condimentum lectus viverra nec. Quisque tortor est, dictum in orci tempor, imperdiet semper metus.','imagen'=>'productos/sinFoto.jpg','precio' => '2400','categoria'=>3],
        [ 'nombre'=>'meza prueba','descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed porttitor faucibus vulputate. Quisque gravida scelerisque sapien, a condimentum lectus viverra nec. Quisque tortor est, dictum in orci tempor, imperdiet semper metus.','imagen'=>'productos/FAtXgqMKZCfukfAN6WZDaG7EkucRgPFdCQqHzcqH.jpeg','precio' => '2343','categoria'=>3],




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
      Schema::drop('productos');
    }
}
