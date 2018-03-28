<?php

// Controllers
Route::get('/', 'PostsController@index');

// Controller => PostsController
// Eloquent model => Post
// Migration => create_posts_table