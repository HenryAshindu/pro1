<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/products', [ProductController::class, 'home'])->name('home.index');
Route::get('/products/create', [ProductController::class, 'create'])->name('home.create');
Route::post('/products', [ProductController::class, 'store'])->name('home.store');
Route::get('/products/{product}/edit', [ProductController::class, 'edit'])->name('home.edit');
Route::put('/products/{product}/update', [ProductController::class, 'update'])->name('home.update');
Route::delete('/products/{product}/delete', [ProductController::class, 'delete'])->name('home.delete');



Route::get('/posts', [PostController::class, 'home'])->name('post.index');
Route::get('/posts/create', [PostController::class, 'create'])->name('post.create');
Route::post('/posts', [PostController::class, 'store'])->name('post.store');
Route::get('/edit_posts/{id}', [PostController::class, 'edit'])->name('post.edit');
Route::put('/posts/{id}', [PostController::class, 'update'])->name('post.update');
Route::get('/posts/{id}', [PostController::class, 'delete'])->name('post.delete');