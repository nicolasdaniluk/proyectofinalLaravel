<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre','45');
            $table->string('email','80')->unique();
            $table->string('password', 180);
            $table->string('avatar','250')->nullable($value = true);
            $table->integer('tipo_usuario','11')->default(1);
            $table->rememberToken();
            $table->timestamps();
            $table->foreign('tipo_usuario')->references('id')->on('tipo_usuario');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
