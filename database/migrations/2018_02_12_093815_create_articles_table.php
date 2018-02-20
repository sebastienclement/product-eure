<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('articles', function (Blueprint $table){
          $table->increments('id');
          $table->string('title');
          $table->text('content');
          $table->enum('status', ['publié','brouillon'])->default('brouillon');
          $table->string('path_img_article')->nullable();
          $table->integer('user_id')->unsigned();
          $table->foreign('user_id')->references('id')->on('users')
                ->onDelete('restrict')->onUpdate('restrict');
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
        Schema::dropIfExists('articles');
    }
}
