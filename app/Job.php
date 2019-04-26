<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
  // CATEGORY CLASS
    public function category()
    {
      return $this->belongsTo(Category::class);
    }
    // USER CLASS
      public function freelance()
      {
        return $this->belongsTo(User::class);
      }

}
