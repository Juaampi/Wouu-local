<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Person extends Migration
{
    protected $table = 'Persons';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('persons', function (Blueprint $table) {
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
          $table->string('username');
          $table->string('password');
          $table->string('type');
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
        Schema::dropIfExists('Persons');
    }
}
