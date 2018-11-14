<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
 protected $table = 'persons';

  protected $fillable = [
      'name', 'lastName', 'dni', 'email', 'phone', 'province', 'city', 'date', 'sex', 'zone', 'ruta', 'username', 'password', 'type', 'confirmcode', 'activate'
  ];
}
