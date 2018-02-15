<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoryProducer extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('category_producer', function (Blueprint $table){
      $table->increments('id');

      $table->integer('category_id')->unsigned();
      $table->foreign('category_id')->references('id')->on('categories')
            ->onDelete('restrict')->onUpdate('restrict');

      $table->integer('producer_id')->unsigned();
      $table->foreign('producer_id')->references('id')->on('producers')
            ->onDelete('restrict')->onUpdate('restrict');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('category_producer');
    }
}
