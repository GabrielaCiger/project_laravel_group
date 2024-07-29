<?php

namespace App\Http\Controllers;
use Illuminate\View\View;

class ProductController extends Controller
{
    public function show(int $id): View
    {
        return view('product-details', ['id' => $id]);
    }

    public function list(): View
    {
        return view('product-list');
    }
}
