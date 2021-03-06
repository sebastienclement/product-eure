<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemProducerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('item_producer', function (Blueprint $table){
      $table->increments('id');

      $table->integer('item_id')->unsigned();
      $table->foreign('item_id')->references('id')->on('items')
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
        Schema::dropIfExists('item_producer');
    }
}
