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
Route::get('/our-team', 'webpageController@teams');

// additional
Route::get('/terms-conditions', 'additionalController@terms');
Route::get('/privacy-policy', 'additionalController@privacy');
Route::get('/faqs', 'additionalController@faqs');
Route::get('/plans-pricing', 'additionalController@plans');
Route::get('/cookie-policy', 'additionalController@cookie');
