<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class ProductController extends Controller
{
    public function show(string $id): View
    {
        return view('product-details', ['id' => $id]);
    }

    public function list(): View
    {
//        $plants = Product::orderBy('name', 'asc')->get();
        $plants = Product::orderBy('price', 'asc')->get();
        return view('product-list', ['plants' => $plants]);
    }

    public function showProduct(int $id): View
    {
        $product = Product::findOrFail($id);
        return view('product-details', ['product' => $product]);
    }
}
