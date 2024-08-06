<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Categories;

class CategoryController extends Controller
{
    public function list() {
        $categories = Categories::with('products')->get();
        return view('categories', ['categories'=>$categories]);
    }
}
