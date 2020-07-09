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

});
