@extends('components.html')
@include('components.header')
@section('title', $product->name)
<body>
<div class="detail">
<div class="containerCatalog">
    <div class="containerDetail">
    <div class="card">
        <img src="{{$product->imageUrl}}" alt="Image">
        <div class="details">
            <h2>{{$product->name}}</h2>
            <p>{{$product->description}}</p>

        <div class="customer-info">
            <div class="info-item">
                <b>Price:</b>
                <p>{{$product->price}}€</p>
            </div>
            <div class="info-item">
                <b>Rarity:</b>
                @if ($product->rarity == 1)
                    <p>Yes</p>
                @else
                    <p>No</p>
                @endif
            </div>
            <div class="info-item">
                <b>Category:</b>
                <p>{{$product->category}}</p>
            </div>
        </div>
    </div>
</div>
    </div>
</div>
</div>
</body>
@include('components.footer')
