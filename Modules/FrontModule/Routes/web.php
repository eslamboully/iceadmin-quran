<?php
Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function() {

    Route::get('/', 'FrontModuleController@index')->name('front.index');
    Route::get('/religious-link', 'FrontModuleController@religious_link')->name('front.religious_link');
    Route::get('/about-us', 'FrontModuleController@about_us')->name('front.about_us');
    Route::get('/contact', 'FrontModuleController@contact')->name('front.contact');
    Route::post('/contact', 'FrontModuleController@contact_post')->name('front.contact.post');
    Route::get('/questions', 'FrontModuleController@questions')->name('front.questions');
    Route::get('/question/{id}/{title?}', 'FrontModuleController@question')->name('front.question');
    Route::get('/shares', 'FrontModuleController@shares')->name('front.shares');
    Route::get('/share/{id}/{title?}', 'FrontModuleController@share')->name('front.share');
    Route::get('/service-category/{id}/{title?}', 'FrontModuleController@serviceCategory')->name('front.service.category');
    Route::get('/service/{id}/{title?}', 'FrontModuleController@service')->name('front.service');
    // teams => scientists
    Route::get('/scholars', 'FrontModuleController@scientists')->name('front.scientists');
    Route::get('/scholar/{id}/{title?}', 'FrontModuleController@scholar')->name('front.scholar');

    Route::get('/blog/{id}/{title?}', 'FrontModuleController@blog')->name('front.blog');

});
