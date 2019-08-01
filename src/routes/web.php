<?php

Route::get('contact', function() {
    return 'Hello World!';
});

Route::group(['namespace' => 'bluehexagon\aurora\Http\Controllers', 'middleware' => ['web']], function() {
    
    Route::prefix('users')->middleware('auth')->group(function() {
        Route::get('/','AuroraController@index')->name('auroraUsersIndex');

        Route::get('edit/{user}','AuroraController@edit')->name('auroraUserEdit');
        
        Route::get('delete/{user}','AuroraController@delete')->name('auroraUserDelete');
        
        Route::get('create','AuroraController@create')->name('auroraUserCreate');
    });
    

});