<?php

Route::get('/tasks', 'TasksController@index');

Route::get('/tasks/{task}', 'TasksController@show');

Route::get('/', 'PostController@index');

Route::get('/posts/{post}', 'PostController@show');

Route::get('/posts/create', 'PostController@create');

Route::post('/posts', 'PostController@store');

Route::post('/posts/{post}/comments', 'CommentController@store');