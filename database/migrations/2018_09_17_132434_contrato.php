<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Contrato extends Migration
{
    protected $table = 'Contratos';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('Contratos', function (Blueprint $table) {
          $table->increments('id');
          $table->string('idSpecialist');
          $table->string('idUser');
          $table->float('state');
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
        Schema::dropIfExists('Contratos');
    }
}
