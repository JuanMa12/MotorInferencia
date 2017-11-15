<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableNeurons extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('neurons', function (Blueprint $table) {
          $table->increments('id');
          $table->string('name');
          $table->string('values');
          $table->string('weight_one');
          $table->string('weight_two');
          $table->string('threshold');
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
        Schema::drop('neurons');
    }
}
