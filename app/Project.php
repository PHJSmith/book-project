<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
  protected $guarded = [];

  public function character () {
    return $this->hasMany(Character::class);
  }

  public function plot () {
    return $this->hasMany(Plot::class);
  }
}
