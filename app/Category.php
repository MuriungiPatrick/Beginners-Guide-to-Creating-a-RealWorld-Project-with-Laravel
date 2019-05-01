<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
  // JOB CLASS
    public function jobs()
    {
      return $this->hasMany(Job::class);
    }
    public function getRouteKeyName()
    {
      return 'slug';
    }
}
