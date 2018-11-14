<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Specialist extends Model
{
  protected $table = 'specialists';
  protected $fillable = [
      'name', 'lastName', 'dni', 'email', 'phone', 'province', 'city', 'date', 'sex', 'zone', 'ruta', 'specialty','category','subCategory','specialtyCategory','initSchedule','finalSchedule','points', 'username', 'password', 'type', 'confirmcode', 'activate', 'description'
  ];
}
