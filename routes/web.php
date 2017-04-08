<?php

Route::get('/tasks', 'TasksController@index');

Route::get('/tasks/{task}', 'TasksController@show');

Route::get('/', 'PostController@index');

Route::get('/posts/{post}', 'PostController@show');