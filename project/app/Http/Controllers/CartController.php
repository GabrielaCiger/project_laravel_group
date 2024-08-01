<?php

namespace App\Http\Controllers;
use Illuminate\View\View;

class CartController extends Controller
{
    public function showCart(): View
    {
        return view('cart');
    }

    public function login(): View
    {
        return view('login');
    }
}
