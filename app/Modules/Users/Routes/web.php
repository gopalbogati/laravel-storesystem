<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your module. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::group(['prefix' => 'users'], function () {

    Route::get('/signin', 'UsersGroupController@signin');
    Route::post('/signin', ['as' => 'signin.store', 'uses' => 'UsersGroupController@checkSignin']);
    Route::get('/signup', 'UsersGroupController@signup')->name('users::signup');
    Route::get('/dashboard', 'UsersGroupController@dashboard')->name('dashboard');

});

