<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableAnimals extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('animals', function (Blueprint $table) {
          $table->increments('id');
          $table->string('name');
          $table->string('image');
          $table->string('domestic')->default('false');
          $table->string('jump')->default('false');
          $table->string('bark')->default('false');
          $table->string('extinction')->default('false');
          $table->string('flying')->default('false');
          $table->string('mount')->default('false');
          $table->string('rodent')->default('false');
          $table->string('stripes')->default('false');
          $table->string('glasses')->default('false');
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
      Schema::drop('animals');
    }
}
