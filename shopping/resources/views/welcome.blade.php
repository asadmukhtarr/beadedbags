@extends('layouts.app')
@section('title','Shopping.com')
@section('content')

<!-- Hero Banner -->
<section class="banner-section text-center text-white d-flex align-items-center justify-content-center"
    style="background: url('https://picsum.photos/1200/400?ecommerce') no-repeat center center/cover; height: 400px;">
    <h1 class="bg-dark bg-opacity-50 p-3 rounded">Welcome to eShop - Best Deals Await!</h1>
</section>

<!-- Categories -->
<section class="py-5 bg-light">
    <div class="container">
        <h2 class="text-center mb-4">Shop by Category</h2>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card shop-category text-center">
                    <img src="https://picsum.photos/300/200?electronics" class="card-img-top" alt="Electronics">
                    <div class="card-body">
                        <h5 class="card-title"><i class="fa fa-laptop"></i> Electronics</h5>
                        <a href="#" class="btn btn-danger btn-sm"><i class="fa fa-search"></i> Explore</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shop-category text-center">
                    <img src="https://picsum.photos/300/200?fashion" class="card-img-top" alt="Fashion">
                    <div class="card-body">
                        <h5 class="card-title"><i class="fa fa-shopping-bag"></i> Fashion</h5>
                        <a href="#" class="btn btn-danger btn-sm"><i class="fa fa-search"></i> Explore</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shop-category text-center">
                    <img src="https://picsum.photos/300/200?home" class="card-img-top" alt="Home Decor">
                    <div class="card-body">
                        <h5 class="card-title"><i class="fa fa-home"></i> Home Decor</h5>
                        <a href="#" class="btn btn-danger btn-sm"><i class="fa fa-search"></i> Explore</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Featured Products -->
<section class="py-5">
    <div class="container">
        <h2 class="text-center mb-4">Featured Products</h2>
        <div class="row g-4">
            <div class="col-md-3">
                <div class="card shop-product">
                    <img src="https://picsum.photos/200?random=1" class="card-img-top" alt="Product 1">
                    <div class="card-body text-center">
                        <h5 class="card-title">Smartphone</h5>
                        <p class="card-text text-danger">$299.99</p>
                        <a href="#" class="btn btn-outline-danger btn-sm">
                            <i class="fa fa-cart-plus"></i> Add to Cart
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card shop-product">
                    <img src="https://picsum.photos/200?random=2" class="card-img-top" alt="Product 2">
                    <div class="card-body text-center">
                        <h5 class="card-title">Headphones</h5>
                        <p class="card-text text-danger">$49.99</p>
                        <a href="#" class="btn btn-outline-danger btn-sm">
                            <i class="fa fa-cart-plus"></i> Add to Cart
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card shop-product">
                    <img src="https://picsum.photos/200?random=3" class="card-img-top" alt="Product 3">
                    <div class="card-body text-center">
                        <h5 class="card-title">Wrist Watch</h5>
                        <p class="card-text text-danger">$79.99</p>
                        <a href="#" class="btn btn-outline-danger btn-sm">
                            <i class="fa fa-cart-plus"></i> Add to Cart
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card shop-product">
                    <img src="https://picsum.photos/200?random=4" class="card-img-top" alt="Product 4">
                    <div class="card-body text-center">
                        <h5 class="card-title">Sunglasses</h5>
                        <p class="card-text text-danger">$19.99</p>
                        <a href="#" class="btn btn-outline-danger btn-sm">
                            <i class="fa fa-cart-plus"></i> Add to Cart
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection