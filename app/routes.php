<?php

Route::get('/', function()
{
	return View::make('hello');
});

# Route Group with Prefix
Route::group(['prefix' => Config::get('chenka.app.access_url')], function() {

    # Authentication by SessionsController
    Route::get('login', [ 'as' => 'admin.login', 'uses' => 'SessionController@create']);
    Route::post('session', [ 'as' => 'admin.session.store', 'uses' => 'SessionController@store']);
    Route::get('logout', [ 'as' => 'admin.logout', 'uses' => 'SessionController@destroy']);

    # Route Group with Admin Filter
    Route::group(['before' => 'admin'], function() {

        Route::get('/', [ 'as' => 'dashboard', 'uses' => 'DashboardController@index']);

        Route::resource('posts', 'PostsController');

        Route::group(['prefix' => 'settings'], function(){

            Route::get('/', function(){
                return Redirect::to( URL::route('docs') );
            });

            Route::get('profile',  function(){
                return 'profile';
            });

        });
    });
});

