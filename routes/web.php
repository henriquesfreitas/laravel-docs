<?php

Route::get('/tasks', 'TasksController@index');

Route::get('/tasks/{task}', 'TasksController@show');

Route::get('/', 'PostController@index')->name('home');

Route::get('/posts/create', 'PostController@create');

Route::get('/posts/{post}', 'PostController@show');

Route::post('/posts', 'PostController@store');

Route::post('/posts/{post}/comments', 'CommentController@store');

Route::get('/register', 'RegistrationController@create');

Route::post('/register', 'RegistrationController@store');

Route::get('/login', 'SessionsController@create')->name('login');

Route::get('/logout', 'SessionsController@destroy');

Route::post('/login', 'SessionsController@store');