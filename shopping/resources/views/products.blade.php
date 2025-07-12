@extends('layouts.app')
@section('title','Products')
@section('content')
<section class="hero">
    <div class="container">
        <h1 class="display-4"><i class="fa fa-list"></i> Products</h1>
        <p class="lead">We are passionate about providing quality products with exceptional customer service.</p>
    </div>
</section>
<div class="container mt-2">
    <div class="row g-4">
        <!-- Product 1 -->
        <div class="col-md-4 col-sm-6">
            <div class="card shadow-sm h-100">
                <img src="https://picsum.photos/id/1011/300/200" class="card-img-top" alt="Product 1">
                <div class="card-body">
                    <h5 class="card-title">Product Name 1</h5>
                    <p class="card-text">This is a short description of product 1. It's great and very useful!</p>
                    <p class="text-danger fw-bold">$49.99</p>
                    <a href="{{ route('product') }}" class="btn btn-danger btn-sm"><i class="fa fa-shopping-cart"></i>
                        Add to Cart</a>
                </div>
            </div>
        </div>

        <!-- Product 2 -->
        <div class="col-md-4 col-sm-6">
            <div class="card shadow-sm h-100">
                <img src="https://picsum.photos/id/1011/300/200" class="card-img-top" alt="Product 2">
                <div class="card-body">
                    <h5 class="card-title">Product Name 2</h5>
                    <p class="card-text">Awesome features and affordable price make this a best-seller.</p>
                    <p class="text-danger fw-bold">$39.99</p>
                    <a href="{{ route('product') }}" class="btn btn-danger btn-sm"><i class="fa fa-shopping-cart"></i>
                        Add to Cart</a>
                </div>
            </div>
        </div>

        <!-- Product 3 -->
        <div class="col-md-4 col-sm-6">
            <div class="card shadow-sm h-100">
                <img src="https://picsum.photos/id/1011/300/200" class="card-img-top" alt="Product 3">
                <div class="card-body">
                    <h5 class="card-title">Product Name 3</h5>
                    <p class="card-text">Stylish and sleek, perfect for everyday use or gifting.</p>
                    <p class="text-danger fw-bold">$59.99</p>
                    <a href="{{ route('product') }}" class="btn btn-danger btn-sm"><i class="fa fa-shopping-cart"></i>
                        Add to Cart</a>
                </div>
            </div>
        </div>

        <!-- Add more products by repeating the block above -->
    </div>
</div>
@endsection