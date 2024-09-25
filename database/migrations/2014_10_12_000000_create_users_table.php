<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('nombreusuario');
            $table->string('password');
            $table->string('email')->unique();
            $table->date('fechanac');
            $table->string('fotos')->default('avatar.jpg');
            $table->string('tipo')->nullable();
            $table->string('direccion')->nullable();
            $table->string('pais')->nullable();
            $table->string('ciudad')->nullable();
            $table->text('codigopostal')->nullable();
            $table->text('descripcion')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->smallInteger('role')->default(2);
            $table->unsignedInteger('login_attempts')->default(0); //si no queda borrar 
            $table->rememberToken();
            $table->timestamps();
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
};
