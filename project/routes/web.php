<?php

// ! controllers
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;

// ! must be here
use Illuminate\Support\Facades\Route;

//simple formulaire handling
Route::get('login', [LoginController::class, 'create']);
Route::post('profile', [LoginController::class, 'store']);

//Catalog, list of products, sorting functions
Route::get('/', [HomeController::class, 'show']);
Route::get('products', [ProductController::class, 'sort']);
Route::get('products/categories', [CategoryController::class, 'list']);
Route::get('products/{page}', [ProductController::class, 'sort']);

//Show exact product based on GET method
Route::get('product/{id}', [ProductController::class, 'showProduct']);
Route::get('cart', [CartController::class, 'showCart']);

//backoffice main page
Route::get('/backoffice', [AdminController::class, 'show'])->name('backofficeMain');

//delete doesn't require specific view, this route is called by clicking on a button
Route::delete('/backoffice/{id}', [ProductController::class, 'destroy'])->name('product.destroy');
/*  * This route handles a DELETE request. DELETE requests are used to remove or delete a resource.
 * The {id} part is a placeholder for a specific product’s unique identifier.
 * Handler: Managed by the destroy method in ProductController. */


//first we have to see the view with formulaire and submittion triggers the route store which sends the data to DB
Route::get('/backoffice/create', ProductController::class . '@create')->name('product.create');
Route::post('/backoffice', ProductController::class .'@store')->name('product.store');

//first we need edit page, to change the data of the product, after we call update function which changes the data in DB
Route::get('/backoffice/{id}/edit', ProductController::class .'@edit')->name('product.edit');
Route::put('/backoffice/{id}', ProductController::class .'@update')->name('product.update');
/* * Defines a route that handles HTTP PUT request, used to update an existing resource on the server. */
