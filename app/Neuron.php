<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Neuron extends Model
{
  protected $fillable = [
      'name','values', 'weight_one', 'weight_two','threshold'
  ];
}
