<?php

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('/gaston', function()
{
    return View::make('hello josue!');
});

Route::group(['prefix' => Config::get('chenka.app.access_url')], function() {

    Route::get('/', [ 'as' => 'dashboard', 'uses' => 'DashboardController@index']);

    Route::get('login', [ 'as' => 'login', 'uses' => 'SessionsController@create']);
    Route::post('login', 'SessionsController@store');
    Route::get('logout', [ 'as' => 'logout', 'uses' => 'SessionsController@destroy']);
    Route::resource('sessions', 'SessionsController', ['only' => ['create', 'store', 'destroy']]);

    Route::resource('posts', 'Josreload\ChenkaCrud\Controllers\PostsController');
    Route::resource('users', 'Josreload\ChenkaCrud\Controllers\UsersController');
    Route::group(['prefix' => 'settings'], function(){
        Route::get('', function(){
            return Redirect::to(Config::get('chenka.app.access_url') . '/settings/profile');
        });
        Route::get('profile', function(){
            return 'profile';
        });
    });
});

