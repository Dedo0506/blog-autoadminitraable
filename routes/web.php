<?php

use App\Models\Post;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;




Route::get('/', [PostController::class, 'index'])->name('posts.index');

Route::get('post/{post}', [PostController::class, 'show'])->name('posts.show');

Route::get('categoria/{categoria}',[PostController::class, 'categoria'])->name('posts.categoria');

Route::get('tag/{tag}',[PostController::class, 'tag'])->name('posts.tag');

Route::get('/chart', function () {
    return view('welcome');
});

/* Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
}); */
