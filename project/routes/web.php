<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'show']);
Route::get('products', [ProductController::class, 'list']);
Route::get('product/{id}', [ProductController::class, 'showProduct']);
Route::get('cart', [CartController::class, 'showCart']);

Route::get('login', [LoginController::class, 'create']);
Route::post('profile', [LoginController::class, 'store']);

