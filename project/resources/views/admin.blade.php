@extends('components.adminHeader')
@section('title', 'Admin:Sign in')

<body class="d-flex flex-column align-items-center bg-custom m-5" style="font-family: Poppins-Regular, sans-serif">
<h1 style="color: #f1e4c3;"> Backoffice </h1>
<img src="{{asset('images/illustration.jpg')}}" alt="illustration de monstera" id="illustration">

<div class="col text-start">
    <a href="/" class="btn btn-warning mb-4">Log out</a>
</div>

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<table class="table table-hover">
    <thead>
    <tr>
        <th scope="col">Product ID</th>
        <th scope="col">Name</th>
        <th scope="col">Description</th>
        <th scope="col">Price in €</th>
        <th scope="col">Image</th>
        <th scope="col">Discount in %</th>
        <th scope="col">Category</th>
        <th scope="col">In stock</th>
        <th scope="col">Weight</th>
        <th scope="col">Height</th>
        <th scope="col">Rarity</th>
        <th scope="col" colspan="2">Actions</th>
    </tr>
    </thead>
    <tbody>
    @foreach($plants as $plant)
        <tr>
        <th scope="row">{{ $plant->id }}</th>
        <td>{{ $plant->name }}</td>
        <td>{{ $plant->description }}</td>
        <td>{{ $plant->price }}€</td>
        @if(($plant->imageUrl)!=null)
            <td>✅</td>
            @else
                <td>❌</td>
            @endif
        <td>{{ $plant->discount }}</td>
            <td>{{ $plant->category->name }}</td>
            <td>{{ $plant->stock }}</td>
        <td>{{ $plant->weight }}g</td>
        <td>{{ $plant->height }} cm</td>
            @if(($plant->rarity)==1)
                <td>✅</td>
            @else
                <td>❌</td>
            @endif
            <td>
                <a href="{{ route('product.edit', $plant->id) }}"><button class="btn btn-success w-20 py-2 mb-2" type="submit">Edit</button></a>
            <td>
                <form method="post" action="{{ route('product.destroy', $plant->id) }}">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger w-20 py-2 mb-2" type="submit">Delete</button>
                </form>
            </td>
    </tr>
    @endforeach
    </tbody>
</table>
<a href="/backoffice/create" class="btn btn-light w-20 py-2 mb-2" type="submit">Add new product</a>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
