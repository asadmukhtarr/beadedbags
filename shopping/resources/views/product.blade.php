@extends('layouts.app')
@section('title', 'Product Details')
@section('content')

<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <!-- Product Image -->
            <div class="col-md-6">
                <img src="https://picsum.photos/600/400?product" class="img-fluid rounded shadow-sm"
                    alt="Product Image">
            </div>

            <!-- Product Info -->
            <div class="col-md-6">
                <h2 class="mb-3">Product Name</h2>
                <p class="text-muted">Category: <strong>Electronics</strong></p>

                <p class="lead">This is a detailed description of the product. It highlights all the important features
                    and benefits to help the customer make an informed decision.</p>

                <h4 class="text-danger">$49.99</h4>

                <div class="mb-3">
                    <label for="quantity" class="form-label"><i class="fa fa-sort-numeric-asc"></i> Quantity</label>
                    <input type="number" class="form-control w-25" id="quantity" name="quantity" value="1" min="1">
                </div>

                <div class="d-grid gap-2 d-md-block">
                    <button class="btn btn-danger"><i class="fa fa-cart-plus"></i> Add to Cart</button>
                    <button class="btn btn-outline-secondary"><i class="fa fa-heart"></i> Add to Wishlist</button>
                </div>
            </div>
        </div>

        <!-- Additional Info -->
        <div class="row mt-5">
            <div class="col-12">
                <h4><i class="fa fa-info-circle"></i> Product Details</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. This section can include specs, warranty,
                    return policy, and other helpful information.</p>
            </div>
        </div>
    </div>
</section>

@endsection