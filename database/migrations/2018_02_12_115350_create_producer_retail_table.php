<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProducerRetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('producer_retail', function (Blueprint $table){
          $table->increments('id');

          $table->integer('producer_id')->unsigned();
          $table->foreign('producer_id')->references('id')->on('producers')
                ->onDelete('restrict')->onUpdate('restrict');

          $table->integer('retail_id')->unsigned();
          $table->foreign('retail_id')->references('id')->on('retails')
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
        Schema::dropIfExists('producer_retail');
    }
}
