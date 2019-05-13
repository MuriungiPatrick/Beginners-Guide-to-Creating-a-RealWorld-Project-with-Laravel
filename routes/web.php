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
Route::get('/', 'JobController@index');

// DEFINE THE JOBS DETAILS
Route::get('/jobs/{job}', 'JobController@show')->name('jobs.show');

// DEFINE THE CATEGORY PAGE
Route::get('/category/{category}', 'JobController@category')->name('category');

Auth::routes();

Route::get('/dashboard/home', 'HomeController@index')->name('dashboard.home');

// DEFINE PROFILE PAGE
Route::get('/dashboard/profile', 'ProfileController@profile')->name('dashboard.profile');


// DEFINE THE RESOURCE VIEWS
Route::resource('dashboard', 'DashboardController');

// // DISABLE REGISTRATION VIEW AND FORM
// Route::get('/register', function() {
//   return redirect('/login');
// });
