<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePositions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('positions', function (Blueprint $table) {
          $table->increments('id');
          $table->string('value');
          $table->unsignedInteger('neuron_id')->unsigned();
          $table->timestamps();
      });
      Schema::table('positions', function($table) {
          $table->foreign('neuron_id')->references('id')->on('neurons')->onDelete('cascade');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::drop('positions');
    }
}
