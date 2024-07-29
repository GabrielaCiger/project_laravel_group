<?php

namespace App\Http\Controllers;

class ProductController extends Controller
{
    public function show(int $id): string
    {
        return '<h1>Fiche du produit ' . $id . '</h1>';
    }

    public function list(): string
    {
        return '<h1>Liste des produits</h1>';
    }
}
