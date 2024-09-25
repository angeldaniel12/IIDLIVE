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
        Schema::table('users', function (Blueprint $table){ 
            //Modificacion de los campos de la tabla Users
        
            $table->string('password')->nullable()->change(); //La variable change() modifica un campo de la Tabla en la BD
            $table->string('nombre')->nullable()->change();
            $table->string('nombreusuario')->nullable()->change();
            $table->date('fechanac')->nullable()->change();
            $table->string('avatar')->nullable();
            $table->string('external_id')->nullable();
            $table->string('external_auth')->nullable();
        });
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
};
