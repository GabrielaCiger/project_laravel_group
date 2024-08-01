@extends('components.html')
@include('components.header')

@foreach($product as $item)
@section('title', $item->name)
<body>
<div class="detail">
<div class="containerCatalog">
    <div class="containerDetail">
    <div class="card">
        <img src="{{$item->imageUrl}}" alt="Image">
        <div class="details">
            <h2>{{$item->name}}</h2>
            <p>{{$item->description}}</p>

        <div class="customer-info">
            <div class="info-item">
                <b>Price:</b>
                <p>{{$item->price}}€</p>
            </div>
            <div class="info-item">
                <b>Rarity:</b>
                @if ($item->rarity == 1)
                    <p>Yes</p>
                @else
                    <p>No</p>
                @endif
            </div>
            <div class="info-item">
                <b>Category:</b>
                <p>{{$item->category}}</p>
            </div>
        </div>
    </div>
</div>
    </div>
</div>
</div>
@endforeach
</body>
@include('components.footer')
