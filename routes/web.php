<?php

use Illuminate\Support\Facades\Route;

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
// Social media link
Route::get('/linkedin', function () {
    return Redirect::to('https://linkedin.com/company/boxity-central-indonesia');
});
Route::get('/instagram', function () {
    return Redirect::to('http://www.instagram.com/digitizewithboxity');
});
Route::get('/facebook', function () {
    return Redirect::to('http://www.facebook.com/boxitycentralindonesia');
});

Route::get('/', 'webpageController@index');
Route::get('/about', 'webpageController@about');
Route::get('/contact', 'webpageController@contact');
Route::get('/career', 'webpageController@career');
Route::get('/jobs/{id}', 'webpageController@getJobs');
Route::get('/jobs/a/{id}', 'webpageController@getJobsApply');
Route::post('/jobs/a/{id}', 'webpageController@postJobsApply');
// Route::get('/our-team', 'webpageController@teams');

// Process the data
Route::post('/contact', 'webpageController@postContact');
Route::get('/schedule-demo', 'webpageController@scheduleDemo');

// additional
Route::get('/terms-conditions', 'additionalController@terms');
Route::get('/privacy-policy', 'additionalController@privacy');
// Route::get('/faqs', 'additionalController@faqs');
Route::get('/plans', 'additionalController@plans');
