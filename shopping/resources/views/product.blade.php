@extends('layouts.app')
@section('title', $product->title)

@section('content')
<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <!-- Product Image -->
            <div class="col-md-6">
                <img src="{{ asset('storage/products/'.$product->image) }}" 
                     class="img-fluid rounded shadow-sm" 
                     alt="{{ $product->title }}">
            </div>

            <!-- Product Info -->
            <div class="col-md-6">
                <h2 class="mb-3">{{ $product->title }}</h2>
                <p class="text-muted">Category: <strong>{{ $product->category_id }}</strong></p>

                <p class="lead">{{ $product->description }}</p>

                <h4 class="text-danger">Rs {{ number_format($product->price, 0) }}</h4>

                <div class="mb-3">
                    <label for="quantity" class="form-label">
                        <i class="fa fa-sort-numeric-asc"></i> Quantity
                    </label>
                    <input type="number" 
                           class="form-control w-25" 
                           id="quantity" 
                           name="quantity" 
                           value="1" 
                           min="1" 
                           max="{{ $product->quantity }}">
                </div>

                <div class="d-grid gap-2 d-md-block">
                    <button class="btn btn-danger">
                        <i class="fa fa-cart-plus"></i> Add to Cart
                    </button>
                    <button class="btn btn-outline-secondary">
                        <i class="fa fa-heart"></i> Add to Wishlist
                    </button>
                </div>
            </div>
        </div>

        <!-- Additional Info -->
        <div class="row mt-5">
            <div class="col-12">
                <h4><i class="fa fa-info-circle"></i> Product Details</h4>
                <p>{{ $product->description }}</p>
            </div>
        </div>
    </div>
</section>
@endsection
