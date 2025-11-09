<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\WriterController;

// 1. Home Page
Route::get('/', [PostController::class, 'index']);

// 2. Halaman Detail Artikel
Route::get('/posts/{post:slug}', [PostController::class, 'show']);

// 3. Halaman Detail Kategori
Route::get('/categories/{category:slug}', [CategoryController::class, 'show']);

// 4. Halaman Writers
Route::get('/writers', [WriterController::class, 'index']);

// 5. Halaman Detail Writers
Route::get('/writers/{writer:slug}', [WriterController::class, 'show']);

// 6. Halaman About Us
Route::get('/about', function () {
    return view('about', [
        'title' => 'About Us'
    ]);
});

// 7. Halaman Populer
Route::get('/popular', [PostController::class, 'popular']);

