<?php

namespace App\Http\Controllers;
use Illuminate\View\View;

class ProductController extends Controller
{
    public function show(string $id): View
    {
        return view('product-details', ['id' => $id]);
    }

    public function list(): View
    {
        $plants = [
          'Monstera',
          'Caladium',
          'Syngonium',
          'Alocasia',
          'Pilea'
        ];
        return view('product-list', ['plants' => $plants]);
    }
}
