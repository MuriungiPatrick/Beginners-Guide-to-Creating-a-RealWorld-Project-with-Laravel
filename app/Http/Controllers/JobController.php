<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JobController extends Controller
{
  // DEFINE HOMEPAGE
  public function index()
  {
    $jobs = [
      'Web designer required for a long term project',
      'Graphic designer required for a long term project',
      'Web developer required for a long term project',
    ];
      return view('jobs.index', [
        'jobs' => $jobs,
      ]);
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
