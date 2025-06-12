<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', [ProductController::class, 'getAllCategories']);
Route::get('/category/{slug}', [ProductController::class, 'showByCategory'])->name('category.show');
Route::get('/product/{id}', [ProductController::class, 'detailProduct'])->name('detail.Product');
Route::get('/search', [ProductController::class, 'search'])->name('search');
