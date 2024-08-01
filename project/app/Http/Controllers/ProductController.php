<?php

namespace App\Http\Controllers;
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
        $plants = DB::select('select * from products');
        return view('product-list', ['plants' => $plants]);
    }

    public function showProduct(int $id): View
    {
        $product = DB::select('select * from products WHERE id = :id', ['id' => $id]);
        return view('product-details',['id' => $id], ['product' => $product]);
    }
}
