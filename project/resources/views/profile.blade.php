@extends('components.html')
@section('title', 'Profile')
@include('components.header')

<body>

<div class="containerBasic">
    <div class="card">
        <img src="https://i.pinimg.com/736x/55/2c/c0/552cc033eca6ec4b289a96777e078954.jpg" alt="Image">
        <div class="details">
            <h2> {{ $customer['name'] }} </h2>
            <p>Customer</p>
        </div>
        <div class="customer-info">
            <div class="info-item">
                <b>Email:</b>
                <p>{{ $customer['email'] }}</p>
            </div>
            <div class="info-item">
                <b>Phone:</b>
                <p>{{ $customer['phone'] }}</p>
            </div>
            <div class="info-item">
                <b>Newsletter:</b>
                <p>{{ $customer['newsletter'] }}</p>
            </div>
        </div>
    </div>
</div>
</body>
@include('components.footer')

