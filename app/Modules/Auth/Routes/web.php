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

Route::group(['prefix' => 'auth'], function () {

    Route::post('/signincheck', 'AuthController@checkSignin')->name('auth::signin.store');
    Route::post('/signup', 'AuthController@storeSignup')->name('auth::signup.store');
    //Route::get('auth/logout', 'AuthController@getLogout')->name('auth::logout');

    //Route::post('login', ['as' => 'login-admin', 'uses' => 'AuthController@authenticateAdmin']);
});

