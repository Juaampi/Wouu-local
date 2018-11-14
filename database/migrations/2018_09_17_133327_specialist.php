<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Specialist extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('specialists', function (Blueprint $table) {
      $table->increments('id');
      $table->string('name');
      $table->string('lastName');
      $table->float('dni');
      $table->string('email');
      $table->string('phone');
      $table->string('province');
      $table->string('city');
      $table->date('date');
      $table->string('sex');
      $table->string('zone');
      $table->string('ruta');
      $table->string('specialty');
      $table->string('category');
      $table->string('subCategory');
      $table->string('initSchedule');
      $table->string('finalSchedule');
      $table->string('points');
      $table->string('username');
      $table->string('password');
      $table->string('confirmcode');
      $table->int('activate');
      $table->string('type');
      $table->string('description');
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
        Schema::dropIfExists('Specialist');
    }
}
