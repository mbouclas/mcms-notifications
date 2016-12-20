<?php

Route::group(['prefix' => 'admin/api'], function () {
    Route::group(['middleware' =>['level:2']], function($router)
    {
        $router->get('notifications/config', 'IdeaSeven\Notifications\Http\Controllers\NotificationsController@config');
        $router->resource('notifications', 'IdeaSeven\Notifications\Http\Controllers\NotificationsController');
    });

});