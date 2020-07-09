<?php

Route::group(['prefix' => 'admin-panel/commonmodule', 'middleware' => ['auth:admin']], function() {
    Route::get('/set/{lang}', 'CommonModuleController@setLocal');
    Route::get('/set_lang/{lang}', 'CommonModuleController@set_lang');

    Route::group(['middleware' => ['role:owner']], function () {
        Route::get('/activate-lang', 'CommonModuleController@activate');
        Route::post('/activate-lang', 'CommonModuleController@activateLang');

        Route::post('/active-app', 'CommonModuleController@activateApp');
        Route::get('settings/apps', 'CommonModuleController@apps');
    });
});
