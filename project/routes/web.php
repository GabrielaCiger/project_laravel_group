<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('homepage');
});

Route::get('product', function () {
    return '<h1>Liste des produits</h1>';
});


Route::get('product/{id}', function ($id) {
    return '<h1>Fiche du produit ' . $id . '</h1>';
});

Route::get('cart', function () {
    return '<h1>Panier</h1>';
});

