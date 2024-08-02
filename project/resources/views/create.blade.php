@extends('components.adminHeader')
@section('title', 'Admin:Add')

<body class="d-flex flex-column align-items-center bg-custom m-5">
<h1 style="color: #f1e4c3;"> Backoffice </h1>
<img src="{{asset('images/illustration.jpg')}}" alt="illustration de monstera" id="illustration">

<div class="container mt-5" style="font-family: 'Segoe UI', sans-serif; color: #f1e4c3">
    <div class="row justify-content-center">
        <div class="col-12 col-md-8 col-lg-6">
            <h3>Add new product</h3>
            <form action="{{ route('product.store') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" id="description" name="description"></textarea>
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="number" class="form-control" id="price" name="price" required>
                </div>
                <div class="form-group">
                    <label for="imageUrl">Image URL</label>
                    <input type="text" class="form-control" id="imageUrl" name="imageUrl">
                </div>
                <div class="form-group">
                    <label for="discount">Discount (%)</label>
                    <input type="number" class="form-control" id="discount" name="discount">
                </div>
                <div class="form-group">
                    <label for="category">Category</label>
                    <input type="text" class="form-control" id="category" name="category" required>
                </div>
                <div class="form-group">
                    <label for="stock"># in Stock</label>
                    <input type="number" class="form-control" id="stock" name="stock" required>
                </div>
                <div class="form-group">
                    <label for="weight">Weight (in g)</label>
                    <input type="number" class="form-control" id="weight" name="weight">
                </div>
                <div class="form-group">
                    <label for="height">Height (in cm)</label>
                    <input type="number" class="form-control" id="height" name="height">
                </div>
                <div class="form-group">
                    <label for="rarity">Rarity</label>
                    <input type="number" class="form-control" id="rarity" name="rarity" min="0" max="1">
                </div>
                <div class="container mt-5">
                    <div class="row">
                        <div class="col text-start">
                            <a href="/backoffice" class="btn btn-warning">Go back</a>
                        </div>
                        <div class="col text-end">
                            <button type="submit" class="btn btn-success">Create New Product</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
