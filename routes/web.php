<?php

// Import Models
use App\Task;

// Routes
Route::get('/', function () {
    return view('welcome');
});

Route::get('/tasks', function () {
    // $tasks = DB::table('tasks')->get();
    $tasks = Task::all();

    return view('tasks.index', compact('tasks'));
});

Route::get('/tasks/{id}', function ($id) {
    // $task = DB::table('tasks')->find($id);
    $task = Task::find($id);

    return view('tasks.show', compact('task'));
});
