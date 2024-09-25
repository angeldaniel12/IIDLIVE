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
        Schema::create('likes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('likeable_id');
            $table->string('likeable_type');
            $table->integer('count')->default(1);
            $table->timestamps();

            // Índice único para evitar que un usuario dé múltiples likes al mismo objeto
            $table->unique(['user_id', 'likeable_id', 'likeable_type']);

            // Clave foránea para el usuario que da el like
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            // $table->id();
            // $table->unsignedBigInteger('video_id');
            // $table->unsignedBigInteger('user_id');
            // $table->integer('count')->default(1);
            // $table->timestamps();

            // $table->foreign('video_id')->references('id')->on('videos')->onDelete('cascade');
            // $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('likes');
    }
};
