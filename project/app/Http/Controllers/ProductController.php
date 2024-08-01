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
}
