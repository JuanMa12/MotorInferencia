<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Credito extends Model
{
  protected $fillable = [
      'name','years', 'cedula', 'valor','ingresos'
  ];
}
