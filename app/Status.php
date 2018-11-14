<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $table = 'status';
    protected $fillable = [
        'idProblem', 'idUser', 'idSpecialist', 'status', 'coment', 'points'
    ];
}
