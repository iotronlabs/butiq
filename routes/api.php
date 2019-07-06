<?php

use Illuminate\Http\Request;

Route::resource('category','Categories\CategoryController');


Route::resource('products','Products\ProductController');


Route::group(['prefix' => 'auth'], function () {
    Route::post('register', 'Auth\RegisterController@action');
    Route::post('login', 'Auth\LoginController@action');
    Route::get('me', 'Auth\MeController@action');
});