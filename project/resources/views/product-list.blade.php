@extends('components.html')
@section('title', 'Products')
@include('components.header')

<body>
<div class="containerBasic">
<h1>Our products</h1>
    <div class="containerText">

        <ul>
        @foreach($plants as $plant)
                <a href="/product/{{$plant}}"><li>{{$plant}}</li></a>
        @endforeach
        </ul>

    </div>
</div>

@include('components.footer')
