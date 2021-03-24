<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'api'], function ($router) { 

    Route::prefix('auth')->group(function() {
        Route::post('register', 'RegisterController@register');    
        Route::post('login', 'AuthController@login');
        Route::post('logout', 'AuthController@logout');
        Route::post('refresh', 'AuthController@refresh');
        Route::post('me', 'AuthController@me');
    });


    Route::get('user/@{username}', 'UserController@show');
    Route::get('user/@{username}/activity', 'UserController@getActivity');
    
    Route::get('forums/tag/{tag}', 'ForumController@filterTag');

    Route::apiResource('forums', 'ForumController');
    Route::apiResource('forums.comments', 'ForumCommentController');

});
