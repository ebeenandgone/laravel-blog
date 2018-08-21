<?php

Auth::routes();

Route::get('/', 'PostsController@index');
Route::get('/posts/create', 'PostsController@create');

// Route::get('/posts/{post}', 'PostsController@show');

// Route::get('/home', 'HomeController@index')->name('home');


