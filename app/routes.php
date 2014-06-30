<?php

Route::get('/', function()
{
	return View::make('hello');
});

# Route Group with Prefix to Backend
$access_url = Config::get('chenka.app.access_url');
Route::group(['prefix' => $access_url, 'namespace' => 'Backend'], function() use ($access_url) {

    # Authentication by SessionsController
    Route::get('login', [ 'as' => $access_url . '.login', 'uses' => 'SessionController@create']);
    Route::post('session', [ 'as' => $access_url . '.session.store', 'uses' => 'SessionController@store']);
    Route::get('logout', [ 'as' => $access_url . '.logout', 'uses' => 'SessionController@destroy']);

    # Backend Routes
    Route::get('/', [ 'as' => 'backend.dashboard', 'uses' => 'DashboardController@index']);

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

