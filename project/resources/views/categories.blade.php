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
    <form action="/products/categories" method="get">
        <button type="submit"><span>See all by category</span></button>
    </form>
</div>
@foreach($categories as $category)
    <h2 class="title">Category : {{$category->name}}</h2>
<div class="containerCatalog">
        @foreach($category->products as $product)
        <form action="/product/{{ $product->id }}" method="get">
            <ul>
                <div class="cardPlant">
                    <img src="{{$product->imageUrl}}" alt="Image">
                    <div class="details">
                        <h2> {{ $product->name }} </h2>
                        <p>{{$product->description}}</p>
                    </div>
                    <button class='btn' type="submit"><span>See details</span></button>
                </div>
            </ul>
        </form>
        @endforeach
</div>
    @endforeach

</body>

@include('components.footer')
