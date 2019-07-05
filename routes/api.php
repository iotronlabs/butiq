<?php



Route::resource('category','Categories\CategoryController');


Route::resource('products','Products\ProductController');


Route::group(['prefix' => 'auth'], function () {
    Route::post('register', 'Auth\RegisterAuthController@register');
    Route::post('login', 'Auth\LoginAuthController@action');
    Route::get('me', 'Auth\MeController@action');
});