<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\View\View;
use function Laravel\Prompts\error;

class ProductController extends Controller
{
    public function show(string $id): View
    {
        return view('product-details', ['id' => $id]);
    }
    public function sort(string $page = 'name'): View
    {
            if ($page!='name' && $page!='price') {
                $page = 'name';
            }
            $plantsByPrice = Product::orderBy($page, 'asc')->get();
            return view('product-list', ['plants' => $plantsByPrice]);
    }
    public function showProduct(int $id): View
    {
        $product = Product::findOrFail($id);
        return view('product-details', ['product' => $product]);
    }
}
