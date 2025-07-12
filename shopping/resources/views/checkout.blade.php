@extends('layouts.app')
@section('title','Checkout')
@section('content')
<!-- Hero Section -->
<section class="hero">
    <div class="container">
        <h1 class="display-4"><i class="fa fa-info-circle"></i> Checkout</h1>
        <p class="lead">We are passionate about providing quality products with exceptional customer service.</p>
    </div>
</section>
<section class="py-5 bg-light">
    <div class="container">
        <form action="#" method="POST">
            @csrf
            <div class="row">
                <!-- Billing Details -->
                <div class="col-md-8">
                    <div class="card shadow-sm mb-4">
                        <div class="card-header bg-danger text-white">
                            <h5 class="mb-0"><i class="fa fa-user"></i> Billing Details</h5>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="name" class="form-label">
                                    <i class="fa fa-user"></i> Full Name
                                </label>
                                <input type="text" name="name" id="name" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">
                                    <i class="fa fa-envelope"></i> Email Address
                                </label>
                                <input type="email" name="email" id="email" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="phone" class="form-label">
                                    <i class="fa fa-phone"></i> Phone Number
                                </label>
                                <input type="text" name="phone" id="phone" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="address" class="form-label">
                                    <i class="fa fa-map-marker"></i> Shipping Address
                                </label>
                                <textarea name="address" id="address" rows="3" class="form-control" required></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="city" class="form-label">
                                    <i class="fa fa-building"></i> City
                                </label>
                                <input type="text" name="city" id="city" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="zip" class="form-label">
                                    <i class="fa fa-location-arrow"></i> ZIP / Postal Code
                                </label>
                                <input type="text" name="zip" id="zip" class="form-control" required>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Order Summary -->
                <div class="col-md-4">
                    <div class="card shadow-sm mb-4">
                        <div class="card-header bg-danger text-white">
                            <h5 class="mb-0"><i class="fa fa-shopping-cart"></i> Order Summary</h5>
                        </div>
                        <div class="card-body">
                            <!-- Example product summary -->
                            <ul class="list-group mb-3">
                                <li class="list-group-item d-flex justify-content-between">
                                    <div>
                                        <h6 class="my-0">Product Name</h6>
                                        <small class="text-muted">Quantity: 1</small>
                                    </div>
                                    <span class="text-muted">$299.99</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between">
                                    <span><i class="fa fa-tag"></i> Subtotal</span>
                                    <strong>$299.99</strong>
                                </li>
                                <li class="list-group-item d-flex justify-content-between">
                                    <span><i class="fa fa-truck"></i> Shipping</span>
                                    <strong>$10.00</strong>
                                </li>
                                <li class="list-group-item d-flex justify-content-between">
                                    <span><i class="fa fa-calculator"></i> Total</span>
                                    <strong>$309.99</strong>
                                </li>
                            </ul>

                            <button type="submit" class="btn btn-danger w-100">
                                <i class="fa fa-credit-card"></i> Place Order
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>

@endsection