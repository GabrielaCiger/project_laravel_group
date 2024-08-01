@extends('components.html')
@section('title', 'Products')
@include('components.header')

<body>
<h1 class="title">Our products</h1>
<div class="containerCatalog">
        @foreach($plants as $plant)
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
                        <div class="info-item">
                            <b>Price:</b>
                            <p>{{$plant->price}}€</p>
                        </div>
                    </div>
                    <button class='btn' type="submit"><span>Buy!</span></button>
                </div>
            </ul>
        @endforeach
    </div>

@include('components.footer')
