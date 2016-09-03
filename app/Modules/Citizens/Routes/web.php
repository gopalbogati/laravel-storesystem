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

Route::group(['prefix' => 'citizens'], function () {
    Route::get('/index', 'CitizensController@createForm')->name('citizens::addCitizensDetails');
    Route::post('/registercheck', 'CitizensController@formInsert')->name('citizens::insertInformation');
    Route::get('/listinformation', 'CitizensController@listDetails')->name('citizens::listinformation');
    Route::get('edit/{citizen}', 'CitizensController@editDetails')->name('citizens::editcitizens');
    Route::post('update/{citizen}', 'CitizensController@updateDetails')->name('citizens::updatecitizen');
    Route::get('delete/{citizen}', 'CitizensController@deleteDetails')->name('citizens::deletecitizen');



});
