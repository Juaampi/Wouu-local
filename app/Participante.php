<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Participante extends Model
{
   protected $table = 'participante';
   protected $fillable = [
       'idConversacion', 'idParticipante', 'msj', 'created_at', 'updated_at', 'idParticipante2'
   ];
}
