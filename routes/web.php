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
Route::get('/tiktok', function () {
    return Redirect::to('https://www.tiktok.com/@godigitalwithboxity');
});
Route::get('/career', function () {
    return Redirect::to('/job-vacancies');
});

Route::prefix('e-certificate/v')->group(function () {
    Route::get('/{uuid}', function ($uuid) {
        return Redirect::to('/e-certificate/v/' . $uuid . '.jpg');
    });
});
Route::get('/log-viewer', [
    'as'   => 'log-viewer::dashboard',
    'uses' => '\Arcanedev\LogViewer\Http\Controllers\LogViewerController@index',
]);
Route::prefix('sc/business')->group(function () {
    Route::get('/pitch/2022/en', function () {
        return Redirect::to('/business/pitch/Eng_pitch_deck_2022.pdf');
    });
    Route::get('/pitch/2022/id', function () {
        return Redirect::to('/business/pitch/Ind_pitch_deck_2022.pdf');
    });
    Route::get('/plan/2022/id', function () {
        return Redirect::to('/business/plan/Ind_Business_Plan_2022.pdf');
    });
    Route::get('/plan/2022/en', function () {
        return Redirect::to('/business/plan/Eng_Business_Plan_2022.pdf');
    });
    Route::get('/profile/2022/id', function () {
        return Redirect::to('/business/profile/Company Profile - 2022.pdf');
    });
});
Route::prefix('sc/dev')->group(function () {
    Route::get('/uat', function () {
        return Redirect::to('https://docs.google.com/spreadsheets/d/e/2PACX-1vSycOCdD0t9L7Hoo9PKTC21qMjzBY763d9q8Uf_ycSeeWzYErkjh4AJwDF7vS2ZpffhlVuuGLF0mhzJ/pubhtml?gid=0&single=true');
    });
});
Route::prefix('sc/marketing')->group(function () {
    Route::get('/daily', function () {
        return Redirect::to('https://docs.google.com/spreadsheets/d/e/2PACX-1vRRiPEQnStGTBBa1MnNfbniBfZW7VzgOOObmS4iu-yQ7N1n1zNXdg6vfv6qD-MfZjZ7ElBhxfvSNzja/pubhtml');
    });
});
Route::prefix('sc/matching-fund')->group(function () {
    Route::get('/gantt/2022', function () {
        return Redirect::to('https://docs.google.com/spreadsheets/d/e/2PACX-1vRRiPEQnStGTBBa1MnNfbniBfZW7VzgOOObmS4iu-yQ7N1n1zNXdg6vfv6qD-MfZjZ7ElBhxfvSNzja/pubhtml?gid=1226912116&single=true');
    });
});

Route::get('/study/case/webstatic', function () {
    return Redirect::to('/study/case/static-web-2022.png');
});
Route::get('lang/{lang}', ['as' => 'lang.switch', 'uses' => 'LanguageController@switchLang']);

Route::get('/', 'webpageController@index')->name('home');
Route::get('/about', 'webpageController@about')->name('about');
Route::get('/blog', 'webpageController@blog')->name('blog');
Route::get('/blog/read/{slug}', 'webpageController@readBlog')->name('blog');
Route::get('/contact', 'webpageController@contact')->name('contact');
Route::get('/job-vacancies', 'webpageController@career')->name('career');
Route::get('/job-openings/{id}', 'webpageController@getJobs')->name('career');
Route::get('/job-openings/apply/{id}', 'webpageController@getJobsApply')->name('career');
Route::post('/job-openings/apply/{id}', 'webpageController@postJobsApply')->name('career');
Route::post('/subscription/new', 'webpageController@addSubscription');
// Route::get('/our-team', 'webpageController@teams');

// Process the data
Route::post('/contact', 'webpageController@postContact');
Route::get('/schedule-demo', 'webpageController@scheduleDemo')->name('contact');

// Product Explanation
Route::prefix('products')->group(function () {
    // Route::get('/boxity-erp', 'webpageController@erp');
    Route::get('/fornax', 'webpageController@fornax')->name('products');
    Route::get('/lyra', 'webpageController@lyra')->name('products');
    Route::get('/orion', 'webpageController@orion')->name('products');
    Route::get('/stockpile', 'webpageController@stockpile')->name('products');
    Route::get('/lunar', 'webpageController@lunar')->name('products');
    // Route::get('/octans', 'webpageController@octans')->name('products');
    // Route::get('/pyxis', 'webpageController@pyxis')->name('products');
    // Route::get('/aquila', 'webpageController@aquila')->name('products');
    Route::get('/chatifine', 'webpageController@chatifine')->name('products');
});
Route::prefix('services')->group(function () {
    Route::get('/landingpage', 'webpageController@landingpage')->name('products');
    Route::get('/semplice', 'webpageController@semplice')->name('products');
});
Route::post('/comments/{slug}', 'webpageController@postComments');

// additional
Route::get('/terms-conditions', 'additionalController@terms');
Route::get('/privacy-policy', 'additionalController@privacy');
// Route::get('/faqs', 'additionalController@faqs');
// Route::get('/plans', 'additionalController@plans');

Route::get('/get-ip', function (Request $request) {
    dd(Request::ip());
});
