<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function create()
    {
        return view('login');
    }

    public function store(Request $request)
    {

        $data = [
            'customer' => [
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'newsletter' => $request->newsletter,
            ],
        ];
        return view('profile', $data);
    }
}

