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

# PUBLIC
    // Login/Registration
    Auth::routes(['verify' => true]);
    
    // Show job offer
    Route::get('/jobs/{alias}/{job_alias}', 'JobController@show')->name('job.show');

    // Apply for job
    Route::post('/jobs/{job}/apply', 'JobController@apply_for_job')->name('job.apply');

    // Show company
    Route::get('/companies/{alias}', 'CompanyController@show')->name('company.show');

#USER
    // Create job offer
    Route::get('/add-offer', 'JobController@create')->name('job.create');
    Route::post('/add-offer', 'JobController@store')->name('job.store');

    // Disable job offer 
    Route::post('/{job}/disable', 'JobController@disable_job')->name('job.disable');

#ADMIN

Route::get('/test', 'HomeController@test')->name('test');

Route::get('/', function () {
    return view('welcome');
});


Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
