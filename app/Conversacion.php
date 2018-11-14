<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conversacion extends Model
{
   protected $table = 'conversacion';
   protected $fillable = [
       'idParticipante1', 'idParticipante2'
   ];
}
