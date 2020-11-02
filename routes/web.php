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
use App\Direction;
use App\City;
use Illuminate\Support\Facades\Log;

// Временно здесь. Обязательно убрать отсюда;
//$visit = new App\Visit;

// Artisan::call('view:clear');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/', 'PageController@index')->name('index');

Route::post('/forms/quiz', 'FeedbackController@quiz')->name('forms.quiz');

Route::get('/err-handler', function() {
    Log::info([
        'type' => 'js-err', 'data' => request()->all()
    ]);
});

Route::get('/sitemap', 'PageController@sitemap')->name('sitemap');

Route::get('/forms/callback', 'PageController@callback');
Route::post('/forms/add-comment', 'FeedbackController@addComment');
Route::post('/forms/add-review', 'FeedbackController@addReview');
Route::post('/forms/add-lead', 'FeedbackController@addLead')->name('add-lead');
Route::post('/forms/proxy-lead', 'FeedbackController@proxyLead');
Route::post('/forms/search-phone', 'FeedbackController@searchPhoneInMessage');
Route::get('/forms/success', 'FeedbackController@success')->name('forms.success');

Route::prefix('/ajax')->group(function () {
    Route::get('/portfolio/{type_id}/photos', 'AjaxController@getPortfolioPhotos')->name('ajaxPortfolioPhotos');
});

Route::prefix('/{city}')->group(function () {

    Route::get('/', 'PageController@main')->name('windows.main');
    // Route::get('/quiz', 'PageController@quiz')->name('quiz');
    Route::get('/quiz', 'PageController@quiz2')->name('quiz');

    Route::get('/calculator/{type?}', 'PageController@calculator')->name('calculator');

    Route::get('/photos/{type?}', 'PageController@photos')->name('photos');

    Route::get('/services/{type?}', 'PageController@services')->name('services');

    Route::get('/promos', 'PageController@promos')->name('promos');

    Route::get('/about', 'PageController@about')->name('about');

    Route::get('/employees', 'PageController@employers')->name('employees');

    Route::get('/reviews', 'PageController@reviews')->name('reviews');

    Route::get('/reviews/add', 'PageController@addReview')->name('add-review');

    Route::get('/vacancies', 'PageController@vacancies')->name('vacancies');

    Route::get('/questions/{category?}', 'PageController@questions')->name('questions');

    Route::get('/contacts', 'PageController@contacts')->name('contacts');

    Route::get('/dir-message', 'PageController@dirMessage')->name('dirMessage');

    Route::get('/articles', 'PageController@articles')->name('articles');

    Route::get('/articles/{article}', 'PageController@article')->name('article');

    Route::get('/whyus', 'PageController@whyus')->name('whyus');

    Route::get('/agreement', 'PageController@agreement')->name('agreement');

    Route::get('/catalogue/{type}', 'PageController@catalogue')->name('catalogue');

    Route::get('/ceilings', 'PageController@ceilings')->name('ceilings');

    Route::get('/zamenaPolotna', 'PageController@zamenaPolotna')->name('zamenaPolotna');

    Route::get('/ceilingsCalc', 'PageController@ceilingsCalc')->name('ceilingsCalc');

    Route::get('/ustanovka', 'PageController@ustanovka')->name('ustanovka');

    Route::get('/remont', 'PageController@remont')->name('remont');

    Route::get('/sliv', 'PageController@sliv')->name('sliv');

    Route::get('/notFound', 'PageController@notFound')->name('notFound');

    Route::get('/catalogueDetail', 'PageController@catalogueDetail')->name('catalogueDetail');

    Route::get('/photoprint', 'PageController@photoprint')->name('photoprint');

    Route::get('/photobank', 'PageController@photobank')->name('photobank');

    Route::get('/lamps', 'PageController@lamps')->name('lamps');

    Route::get('/surfaces', 'PageController@surfaces')->name('surfaces');

    Route::get('/printprice', 'PageController@printprice')->name('printprice');

    Route::get('/dillers', 'PageController@dillers')->name('dillers');

    Route::get('/catalogueCeilings', 'PageController@catalogueCeilings')->name('catalogueCeilings');

    Route::get('/credit', 'PageController@credit')->name('credit');

    Route::get('/climat', 'PageController@climat')->name('climat');

	Route::post('/forms/success', 'FeedbackController@feedback')->name('forms.feedback');
    Route::get('/forms/success', 'FeedbackController@success')->name('forms.success');

    Route::get('/lead', 'PageController@lead')->name('lead');
});

Route::get('/geo/locate', function () {
    $location = geoip(request()->ip());
    $locationCity = strtolower($location->city);
    $city = [];

    $codes = [
        'sochi'    =>   'sochi',
        'moscow'    => 'moskva',
        'krasnodar' => 'krasnodar',
        'vladivostok'   =>   'vladivostok',
        'dolgoprudnyy'  =>  'dolgoprudnyj',
        'novosibirsk'   =>  'novosibirsk',
        'artem' => 'artem',
        'khabarovsk'    =>  'habarovsk',
        'ussuriysk' =>  'ussuriysk',
        'blagoveshchensk'   =>  'blagoveschensk'
    ];

    if (!empty($codes[$locationCity]))
    {
        $city = City::where('code', $codes[$locationCity])->first()->toArray();
    }

    return response()->json(['location' => $location->toArray(),'city' => $city]);
});

Route::post('/forms/feedback', 'FeedbackController@addLead')->name('lead.add');
