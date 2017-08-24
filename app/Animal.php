<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
  protected $fillable = [
      'id','name', 'image', 'domestic','jump','bark','extinction',
      'flying','mount','rodent','stripes'
  ];

  protected $hidden = [
      
  ];
}
