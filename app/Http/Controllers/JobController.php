<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Job;
use App\Category;

class JobController extends Controller
{
  // DEFINE HOMEPAGE
  public function index()
  {
    $categories = Category::with('jobs')->orderby('title', 'asc')->get();
    $jobs = Job::with('freelance')->LatestFirst()->Published()->Simplepaginate(5);
      return view('jobs.index', compact('jobs', 'categories'));
  }
  // DEFINE JOB DETAILS PAGE
  public function show(Job $job)
  {

    return view('jobs.show', compact('job'));
  }
  // DEFINE CATEGORY PAGE
  public function category(category $category)
  {
    $categories = Category::with('jobs')->orderby('title', 'asc')->get();
    $jobs = Job::with('category')->LatestFirst()->Published()->where('category_id', $category->id)->Simplepaginate(5);
      return view('category.index', compact('jobs', 'categories'));
  }
}
