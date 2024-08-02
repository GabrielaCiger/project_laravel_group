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
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'phone' => $request->phone,
                'newsletter' => $request->newsletter,
            ],
        ];

        // $email = $request->input('newsletter');

        return view('profile', $data);
    }
}

