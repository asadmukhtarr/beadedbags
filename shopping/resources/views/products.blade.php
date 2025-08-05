@extends('layouts.app')
@section('title','Products')
@section('content')
<section class="hero">
    <div class="container">
        <h1 class="display-4"><i class="fa fa-list"></i> Products</h1>
        <p class="lead">We are passionate about providing quality products with exceptional customer service.</p>
    </div>
</section>

<div class="container mt-2 mb-2">
    <div class="row g-4">
        @foreach($products as $product)
        <div class="col-md-3 col-sm-4">
            <div class="card shadow-sm h-100">
                <img src="{{ asset('storage/products/'.$product->image) }}" height="330px"  alt="{{ $product->title }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $product->title }}</h5>
                    <p class="card-text">{{ Str::limit($product->description, 100) }}</p>
                    <p class="text-danger fw-bold">PKR {{ number_format($product->price) }}</p>
                    <a href="{{ route('product') }}" class="btn btn-danger btn-sm">
                        <i class="fa fa-shopping-cart"></i> Add to Cart
                    </a>
                    <a href="{{ route('product') }}" class="btn btn-info btn-sm">
                        <i class="fa fa-eye"></i> view 
                    </a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
