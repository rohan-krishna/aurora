<?php

Route::get('contact', function() {
    return 'Hello World!';
});

Route::group(['namespace' => 'bluehexagon\aurora\Http\Controllers', 'middleware' => ['web']], function() {
    Route::get('users','AuroraController@index');
});