<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;

Route::get('/', [HomeController::class, 'index'])->name('index');

Route::get('list-produk', [ProductController::class, 'index'])->name('products.index');

Route::get('produk/{slug}', [ProductController::class, 'show'])->name('products.show');
