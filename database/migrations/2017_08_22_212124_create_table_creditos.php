<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableCreditos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('creditos', function (Blueprint $table) {
          $table->increments('id');
          $table->string('name')->nullable();
          $table->string('years');
          $table->string('cedula')->nullable();
          $table->string('valor')->nullable();
          $table->string('ingresos')->nullable();
          $table->string('name_codeudor')->nullable();
          $table->string('cedula_codeudor')->nullable();
          $table->string('ingresos_codeudor')->nullable();
          $table->string('tipo')->nullable();
          $table->string('num_cuotas')->nullable();
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
        Schema::drop('creditos');
    }
}
