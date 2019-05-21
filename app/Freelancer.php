<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Freelancer extends Model
{
    //
    protected $fillable = [
        'first_name', 'last_name', 'preferred_salary', 'posted_by', 'updated_by'
    ];
}
