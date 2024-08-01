@extends('components.html')
@section('title', 'Home')
@include('components.header')

<body>
    <div class="container">
        <img src="{{ asset('images/monst.jpg') }}" alt="">
        <div class="containerText">
        <h1>Wide Variety of Plants</h1>
        <p>Discover our extensive collection of indoor and outdoor plants, perfect for any space and skill level. From lush green ferns to vibrant flowering plants, we have something to suit every taste and environment. Our plants are carefully curated to ensure they thrive in your home or garden, bringing a touch of nature's beauty into your life.</p>
            <div class="actionButton">
                <a href="/product"><button><span>Check it now!</span></button></a>
            </div>
        </div>
    </div>

    <div class="container" style="margin-top: 50px">
        <div class="containerText">
            <h1 style="text-align: right">Expert Care Tips</h1>
            <p style="text-align: right">At our online plant shop, we believe that knowledge is key to keeping your plants healthy and happy. That's why we offer expert care tips and guides for all our plants. Whether you're a seasoned gardener or a beginner, our resources will help you understand the unique needs of your plants, from watering schedules to light requirements, ensuring they flourish under your care.</p>
        </div>
        <img src="{{ asset('images/plant.jpg') }}" alt="">
    </div>

    <div class="container" style="margin-top: 50px">
        <img src="{{ asset('images/cacti.jpg') }}" alt="">
        <div class="containerText">
            <h1>Eco-Friendly and Sustainable</h1>
            <p>We are committed to sustainability and environmental responsibility. Our plants are sourced from eco-friendly nurseries that prioritize sustainable growing practices. We also use recyclable packaging to reduce our carbon footprint. By choosing our plants, you're not only beautifying your space but also supporting a greener, more sustainable world.</p>
        </div>
    </div>

@include('components.footer')
