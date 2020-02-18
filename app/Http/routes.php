<?php

use CodeDay\Models;

\Request::setTrustedProxies([
    '199.27.128.0/21',
    '173.245.48.0/20',
    '103.21.244.0/22',
    '103.22.200.0/22',
    '103.31.4.0/22',
    '141.101.64.0/18',
    '108.162.192.0/18',
    '190.93.240.0/20',
    '188.114.96.0/20',
    '197.234.240.0/22',
    '198.41.128.0/17',
    '162.158.0.0/15',
    '104.16.0.0/12',
]);

\View::share('api_base', \Config::get('clear.api_base'));
\View::share('api_base_public', \Config::get('clear.api_base_public'));
\View::share('api_access_token', \Config::get('clear.access_token'));

\View::share('facebook_app_id', \Config::get('facebook.app_id'));
\View::share('facebook_page_id', \Config::get('facebook.page_id'));
\View::share('site_base_url', \Config::get('app.url'));

\View::share('client_ip', \Request::getClientIp());

$routes = function () {
    // Domain Routes
    \Route::group(['domain' => isset($_SERVER['HTTP_HOST']) && $_SERVER['HTTP_HOST'] == 'vip.x' ? 'vip.x' : 'codeday.vip', 'middleware' => ['sess']], function () {
        \Route::get('/cognito.js', '\CodeDay\Http\Controllers\Vip\IndexController@getCognitojs');
        \Route::get('/feedback', '\CodeDay\Http\Controllers\StaticController@getFeedback');
        \Route::Controller('/{ticket}/ticket', '\CodeDay\Http\Controllers\Vip\TicketController');
        \Route::Controller('/{ticket}/certificate', '\CodeDay\Http\Controllers\Vip\CertificateController');
        \Route::Controller('/{ticket}', '\CodeDay\Http\Controllers\Vip\IndexController');
        \Route::get('/', '\CodeDay\Http\Controllers\Vip\IndexController@getFind');
        \Route::post('/', '\CodeDay\Http\Controllers\Vip\IndexController@postFind');
    });

    \Route::Controller('/faq', '\CodeDay\Http\Controllers\FaqController');

    // Static Routes
    \Route::get('/', '\CodeDay\Http\Controllers\StaticController@getGlobal');
    \Route::get('/index.json', '\CodeDay\Http\Controllers\StaticController@getGlobalJson');
    \Route::get('/video', '\CodeDay\Http\Controllers\StaticController@getVideo');
    \Route::post('/swag', '\CodeDay\Http\Controllers\StaticController@postSwag');
    \Route::get('/summer', '\CodeDay\Http\Controllers\StaticController@getSummer');
    \Route::get('/flag', '\CodeDay\Http\Controllers\FlagController@getIndex');

    \Route::get('/promo', '\CodeDay\Http\Controllers\StaticController@getPromo');
    \Route::get('/press', '\CodeDay\Http\Controllers\StaticController@getPress');
    \Route::get('/sponsor', '\CodeDay\Http\Controllers\StaticController@getSponsor');
    \Route::get('/rules', '\CodeDay\Http\Controllers\StaticController@getRules');
    \Route::get('/esignatures', '\CodeDay\Http\Controllers\StaticController@getEsignatures');
    \Route::get('/evangelist', '\CodeDay\Http\Controllers\StaticController@getEvangelist');
    \Route::get('/laptop', '\CodeDay\Http\Controllers\StaticController@getLaptop');
    \Route::get('/uber', '\CodeDay\Http\Controllers\StaticController@getUber');
    \Route::get('/feedback', '\CodeDay\Http\Controllers\StaticController@getFeedback');

    \Route::get('/new', '\CodeDay\Http\Controllers\StaticController@getNew');
    \Route::get('/organize', '\CodeDay\Http\Controllers\StaticController@getNew');
    \Route::get('/share', '\CodeDay\Http\Controllers\StaticController@getShare');
    \Route::get('/volunteer', '\CodeDay\Http\Controllers\VolunteerController@getIndex');
    \Route::get('/volunteer/apply', '\CodeDay\Http\Controllers\VolunteerController@getApply');
    \Route::get('/volunteer/apply/mentor', '\CodeDay\Http\Controllers\VolunteerController@getApplyMentor');
    \Route::get('/volunteer/apply/judge', '\CodeDay\Http\Controllers\VolunteerController@getApplyJudge');
    \Route::get('/volunteer/apply/staff', '\CodeDay\Http\Controllers\VolunteerController@getApplyStaff');

    \Route::group(['middleware' => ['sess', 'web']], function() {
        \Route::get('/splunk', '\CodeDay\Http\Controllers\SplunkController@getIndex');
        \Route::post('/splunk', '\CodeDay\Http\Controllers\SplunkController@postIndex');
        \Route::controller('/hpcc', '\CodeDay\Http\Controllers\HpccController');
        \Route::controller('/bigdata', '\CodeDay\Http\Controllers\HpccController');
    });

    \Route::controller('/phone', '\CodeDay\Http\Controllers\PhoneController');

    \Route::get('/challenge', '\CodeDay\Http\Controllers\ChallengeController@getChallenge');

    // Event-based Routes
    \Route::bind('event', function ($webname) {
        $event = Models\Region::find(strtolower($webname))->current_event;
        if (!$event->batch['is_loaded']) {
            return;
        }
        if ($event->webname != $webname) {
            \App::abort(302, '', ['Location' => '/'.$event->webname]);
        } else {
            return $event;
        }
    });

    \Route::get('/schools', '\CodeDay\Http\Controllers\StaticController@getSchools');
    \Route::get('/disambiguation/{event}', '\CodeDay\Http\Controllers\EventController@getDisambiguation');
    \Route::get('/{event}/register', '\CodeDay\Http\Controllers\EventController@getRegister');
    \Route::post('/{event}/register', '\CodeDay\Http\Controllers\EventController@postRegister');
    \Route::get('/{event}/schedule.json', '\CodeDay\Http\Controllers\EventController@getSchedule');
    \Route::get('/{event}/schedule.ics', '\CodeDay\Http\Controllers\EventController@getIcs');
    \Route::get('/{event}/past', '\CodeDay\Http\Controllers\EventController@getPast');
    \Route::get('/{event}/schools', '\CodeDay\Http\Controllers\StaticController@getSchools');
    \Route::get('/{event}/schools/register', '\CodeDay\Http\Controllers\EventController@getSchoolsRegister');
    \Route::get('/{event}/register/schools', function(){ return redirect()->to('/'.\Route::input('event')->webname.'/schools'); });
    \Route::get('/{event}', '\CodeDay\Http\Controllers\EventController@getIndex');
};

\View::share('nonLangUri', '/'.request()->path());
\Route::bind('locale', function ($locale) {
    \App::setLocale($locale);
    \View::share('lang', $locale);
    \View::share('langPrefix', '/'.$locale);
    \View::share('nonLangUri', substr(request()->path(), strlen($locale)));
});
\Route::any('/en_US', function () {
    return \redirect('/');
});
\Route::any('/en_US/{rest}', function ($rest) {
    return \redirect($rest);
})->where('rest', '(.*)?');
\Route::group(['prefix' => '/{locale}'], $routes);
\Route::group(['prefix' => '/'], $routes);
