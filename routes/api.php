<?php

use Illuminate\Http\Request;

Route::post('uploadImage', 'UploadController@uploadImage')->name('uploadImage');

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

// Auth with JWT
Route::post('user/login', 'APILoginController@login');
Route::post('logout', 'APILoginController@logout');
Route::post('refresh', 'APILoginController@refresh');


// Angular Dashboard
Route::group(['middleware' => 'cors'], function() {
    Route::post('dashboard/getUserLists', 'DashboardController@getUserLists');
    Route::post('dashboard/getUserProfile', 'DashboardController@getUserProfile');
    Route::get('dashboard/getPosition', 'DashboardController@getPosition');
    Route::post('dashboard/getUserMedia', 'DashboardController@getUserMedia');

    // Get User for angular?
    Route::post('getUser', 'APILoginController@getUser');
});
