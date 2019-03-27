<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// DEFINE THE HOMEPAGE
Route::get('/', function () {
    return view('jobs.index');
});

// DEFINE THE JOBS DETAILS
Route::get('/jobs/show', function () {
    return view('jobs.show');
});

// DEFINE THE CATEGORY PAGE
Route::get('/jobs/category', function () {
    return view('jobs.category');
});
