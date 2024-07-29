<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'show']);
Route::get('product', [ProductController::class, 'list']);
Route::get('product/{id}', [ProductController::class, 'show']);
Route::get('cart', [CartController::class, 'show']);

