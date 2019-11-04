<?php

Route::get('/', 'HomeController@index');
Route::get('/post/{id}', 'HomeController@show');

Route::group(['prefix' => 'admin'], function () {
    Route::resource('posts', 'PostController');
    Route::resource('comments', 'CommentController');
    Route::resource('tags', 'TagController');
    Route::resource('categories', 'CategoryController');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('lang/{local}', 'HomeController@lang');
