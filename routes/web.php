<?php

use App\Http\Controllers\PostController;
use App\Livewire\DetailPost;
use Illuminate\Support\Facades\Route;

Route::resource('posts', PostController::class);
// Route::get('/', [PostController::class, 'index']);
// Route::get('/posts/{id}', DetailPost::class);

Route::get('/', function () {
    return view('welcome');
});
