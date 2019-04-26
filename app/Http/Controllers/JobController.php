<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Job;

class JobController extends Controller
{
  // DEFINE HOMEPAGE
  public function index()
  {
    $jobs = Job::all();
      return view('jobs.index', compact('jobs'));
  }
  // DEFINE JOB DETAILS page
  public function show()
  {
    return view('jobs.show');
  }
  // DEFINE CATEGORY PAGE
  public function category()
  {
    return view('jobs.category');
  }
}
