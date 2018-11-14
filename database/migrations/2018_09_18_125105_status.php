<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Status extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('status', function (Blueprint $table) {
          $table->increments('id');
          $table->string('idProblem');
          $table->string('idUser');
          $table->string('idSpecialist');
          $table->string('status');
          $table->string('coment');
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
           Schema::dropIfExists('status');
    }
}
