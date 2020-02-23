<?php

Route::group([
    'namespace'  => 'Gouguoyin\LogViewer\controllers',
    'prefix'     => config('log-viewer.web_route'),
    'middleware' => config('log-viewer.web_middleware', 'web'),
], function () {
    Route::get('', 'HomeController@index')->name('home');
    Route::get('download', 'HomeController@download')->name('download');
    Route::get('delete', 'HomeController@delete')->name('delete');
});
