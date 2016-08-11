<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

use Illuminate\Http\Request;

Route::group(['middleware' => ['web']], function () {

    Route::get('/', ['as' => 'homepage', function () {
        return view('home');
    }]);

    Route::get('/contact', ['as' => 'contact', function () {
        return view('contact');
    }]);

    Route::get('/projects', ['as' => 'allprojects', 'uses' => 'ProjectController@index']);

    Route::get('/projects/view/{prj?}', ['as' => 'viewproject', 'uses' => 'ProjectController@view']);

});
