<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <title>Homepage</title>
</head>
<body>

<header>
    <a href="" class="logo"><img src="{{ asset('images/monstera.png') }}" alt=""> <span>Gaby's plant shop</span></a>

    <ul class="navbar">
        <li><a href="/" class="active">Home</a></li>
        <li><a href="/product">Our plants</a></li>
        <li><a href="#about">About Us</a></li>
        <li><a href="#contact">Contact</a></li>
    </ul>
    <div class="main">
        <a href="/cart" class="cart">
            <img src="{{ asset('images/shopping-bag.png') }}" alt="cart" width="35px">
        </a>
    </div>
</header>
