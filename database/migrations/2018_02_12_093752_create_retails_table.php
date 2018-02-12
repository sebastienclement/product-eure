<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('retails', function (Blueprint $table){
      $table->increments('id');
      $table->string('name');
      $table->string('lieu');
      $table->string('zone')->nullable();
      $table->timestamps();
});  }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('retails');
    }
}
