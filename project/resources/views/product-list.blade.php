@extends('components.html')
@section('title', 'Products')
@include('components.header')

<body>
<h1 class="title">Our products</h1>
<div class="buttons">
<form action="/products/name" method="get">
    <button type="submit"><span>Sort by name</span></button>
</form>
<form action="/products/price" method="get">
    <button type="submit"><span>Sort by price</span></button>
</form>
</div>
<div class="containerCatalog">
        @foreach($plants as $plant)
        <form action="/product/{{ $plant->id }}" method="get">
            <ul>
                <div class="cardPlant">
                    <img src="{{$plant->imageUrl}}" alt="Image">
                    <div class="details">
                        <h2> {{ $plant->name }} </h2>
                        <p>{{$plant->description}}</p>
                    </div>
                    <div class="customer-info">
                        <div class="info-item">
                            <b>Category:</b>
                            <p>{{$plant->category}}</p>
                        </div>
                    </div>
                    <button class='btn' type="submit"><span>See details</span></button>
                </div>
            </ul>
        </form>
        @endforeach
</div>
</body>

@include('components.footer')
