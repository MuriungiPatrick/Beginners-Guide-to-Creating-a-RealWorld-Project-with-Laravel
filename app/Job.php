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

// PUBLISHED JOBS ONLY
public function scopePublished($query)
{
  return $query->where('published_at', "<=", now());
}
// LATEST FIRST
public function scopeLatestFirst()
{
  return $this->orderby('created_at', 'desc');
}
 // DEFINE SLUG
 public function getRouteKeyName()
 {
   return 'slug';
 }
}
