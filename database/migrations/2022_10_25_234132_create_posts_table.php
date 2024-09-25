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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->text('content');
            $table->string('image')->nullable();
            $table->unsignedBigInteger('category_id')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->timestamp('published_at')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
            // $table->id(); 
            // $table->string('title'); /*variable para titulo*/
            // $table->unsignedBigInteger('user_id'); /*identificacion de usuario para cada post */
            
            // $table->mediumText('excerpt')->nullable();/* variable para la descripcion*/
            // $table->text('body')->nullable();; /*varible para el cuerpo del post de tipo text */
            // $table->timestamp('published_at')->nullable(); /*variable para la fecha del post*/
            //  
            
            // $table->timestamps();
        });
        Schema::create('comments', function (Blueprint $table) { //para comentarios de post
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('post_id')->unsigned();
            $table->integer('parent_id')->unsigned()->nullable();
            $table->text('body');
            $table->timestamps();
            $table->softDeletes();
        });
     
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
        Schema::dropIfExists('comments');//comentarios 
    }
};
