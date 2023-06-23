<?php

use App\Http\Controllers\Admin\CategoriaController;
use App\Http\Controllers\Admin\HomeController;
use Illuminate\Support\Facades\Route;
Route::get('',[HomeController::class, 'index'])->name('admin.home');
Route::resource('categorias', CategoriaController::class)->names('admin.categorias');