<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
  // Allows filling of fields.
  protected $guarded = [];

  // Tells this model it can access the project model
  public function project () {
    return $this->belongsTo(Project::class);
}
}
