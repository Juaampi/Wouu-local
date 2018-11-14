<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Problem extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
       Schema::create('problems', function (Blueprint $table) {
           $table->increments('id');
           $table->string('idUser');
           $table->string('specialty');
           $table->string('description');
           $table->string('city');
           $table->string('img');
           $table->string('img1');
           $table->string('img2');
           $table->string('category');
           $table->string('subCategory');

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
         Schema::dropIfExists('problems');
     }
}
