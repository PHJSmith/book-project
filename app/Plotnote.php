<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plotnote extends Model
{
  // Allows filling of fields.
  protected $guarded = [];

  protected $fillable = ['project_id','content','note_title','note_type'];

  // Tells this model it can access the project model
  public function project () {
    return $this->belongsTo(Project::class);
}
}
