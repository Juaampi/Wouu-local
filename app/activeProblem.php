<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class activeProblem extends Model
{
   protected $table = 'activeproblems';
   protected $fillable = [
       'idProblem', 'idUser', 'idSpecialist', 'msj', 'created_at', 'updated_at', 'money', 'time'
   ];
}
