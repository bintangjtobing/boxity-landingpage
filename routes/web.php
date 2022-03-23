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
    return Redirect::to('http://www.instagram.com/godigitalwithboxity');
});
Route::get('/facebook', function () {
    return Redirect::to('http://www.facebook.com/boxitycentralindonesia');
});

Route::prefix('e-certificate/v')->group(function () {
    Route::get('/5f61e3c6-a6a0-11ec-b909-0242ac120002', function () {
        return Redirect::to('/e-certificate/v/0242ac120002.jpg');
    });
});

Route::get('/sc/business/pitch/2022/en', function () {
    return Redirect::to('/business/pitch/Eng_pitch_deck_2022.pdf');
});
Route::get('/sc/business/pitch/2022/id', function () {
    return Redirect::to('/business/pitch/Ind_pitch_deck_2022.pdf');
});
Route::get('/sc/business/plan/2022/id', function () {
    return Redirect::to('/business/plan/Ind_Business_Plan_2022.pdf');
});
Route::get('/sc/business/plan/2022/en', function () {
    return Redirect::to('/business/plan/Eng_Business_Plan_2022.pdf');
});
Route::get('/sc/business/profile/2022/id', function () {
    return Redirect::to('/business/profile/Company Profile - 2022.pdf');
});
Route::get('/sc/matching-fund/2022', function () {
    return Redirect::to('https://docs.google.com/spreadsheets/d/e/2PACX-1vTMQWQ7kKNSXosaLOk-SXJAyoLIitk8EFlYu2Drp641QQTgFFRM52-qsbMGbTmVuvQCVjz6coVAk3zD/pubhtml?gid=234046683&single=true');
});
Route::get('/study/case/webstatic', function () {
    return Redirect::to('/study/case/static-web-2022.png');
});
Route::get('lang/{lang}', ['as' => 'lang.switch', 'uses' => 'LanguageController@switchLang']);

Route::get('/', 'webpageController@index');
Route::get('/about', 'webpageController@about');
Route::get('/blog', 'webpageController@blog');
Route::get('/blog/read/{id}', 'webpageController@readBlog');
Route::get('/contact', 'webpageController@contact');
Route::get('/career', 'webpageController@career');
Route::get('/jobs/{id}', 'webpageController@getJobs');
Route::get('/jobs/a/{id}', 'webpageController@getJobsApply');
Route::post('/jobs/a/{id}', 'webpageController@postJobsApply');
Route::post('/subscription/new', 'webpageController@addSubscription');
// Route::get('/our-team', 'webpageController@teams');

// Process the data
Route::post('/contact', 'webpageController@postContact');
Route::get('/schedule-demo', 'webpageController@scheduleDemo');

// Product Explanation
// Route::get('/products/boxity-erp', 'webpageController@erp');
Route::get('/products/fornax', 'webpageController@fornax');
Route::get('/products/lyra', 'webpageController@lyra');
Route::get('/products/orion', 'webpageController@orion');
Route::get('/products/stockpile', 'webpageController@stockpile');
Route::get('/products/lunar', 'webpageController@lunar');
// Route::get('/products/octans', 'webpageController@octans');
// Route::get('/products/pyxis', 'webpageController@pyxis');
// Route::get('/products/aquila', 'webpageController@aquila');
Route::get('/products/chatifine', 'webpageController@chatifine');

// additional
Route::get('/terms-conditions', 'additionalController@terms');
Route::get('/privacy-policy', 'additionalController@privacy');
// Route::get('/faqs', 'additionalController@faqs');
// Route::get('/plans', 'additionalController@plans');

Route::get('/get-ip', function (Request $request) {
    dd(Request::ip());
});
