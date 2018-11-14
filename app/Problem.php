<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Problem extends Model
{
  protected $table = 'problems';

  protected $fillable = [
       'idUser', 'Specialty', 'description', 'img', 'zone', 'img1', 'img2', 'category', 'subCategory'
  ];
}
