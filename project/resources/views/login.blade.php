@extends('components.html')
@section('title', 'Sign in')
@include('components.header')

<body class="login">
<div class="container">
    <div class="wrapper">
    <h1>Sign in</h1>
        <form action="/profile" method="post">
            {{ csrf_field() }}
    <div class="input-box">
        <input type="text" name="name" placeholder="Name" required>
    </div>
    <div class="input-box">
        <input type="email" name="email" placeholder="E-mail" required>
    </div>
            <div class="input-box">
                <input type="tel" name="phone" placeholder="Phone number">
            </div>
    <div class="remember-forgot">
        <label for=""><input type="checkbox" name="newsletter">
        Newsletter</label>
    </div>
    <button type="submit" class="btn">Let's go!</button>
        </form>
</div>
</div>

@include('components.footer')

