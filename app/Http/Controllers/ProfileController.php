<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    // PROFILE PAGE START HERE
    public function profile()
    {
      return view('dashboard.profile');
    }
}
