<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProducersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('producers', function (Blueprint $table) {
        $table->increments('id');
        $table->integer('user_id')->unsigned();
        $table->foreign('user_id')->references('id')->on('users')
              ->onDelete('restrict')->onUpdate('restrict');
        $table->string('name');
        $table->string('slug')->unique();
        $table->string('adresse');
        $table->integer('zipcode');
        $table->string('ville');
        $table->string('zone');
        $table->string('producer_email');
        $table->string('phone')->nullable();
        $table->string('website')->nullable();
        $table->text('description');
        $table->string('path_img')->nullable();
        $table->enum('status', ['new', 'confirmed', 'refused'])->default('new');
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
        Schema::dropIfExists('producers');
    }
}
