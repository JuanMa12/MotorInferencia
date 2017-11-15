<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
  protected $fillable = [
      'value','neuron_id'
  ];
}
