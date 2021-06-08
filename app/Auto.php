<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Auto extends Model
{
  protected $fillable = [
    'model',
    'description',
    'doors'
  ];
}
