@extends('layouts.app')
@section('title','About')
@section('content')
<!-- Hero Section -->
<section class="hero">
    <div class="container">
        <h1 class="display-4"><i class="fa fa-info-circle"></i> About Us</h1>
        <p class="lead">We are passionate about providing quality products with exceptional customer service.</p>
    </div>
</section>

<!-- About Content -->
<div class="container my-5">
    <div class="row align-items-center">
        <div class="col-md-6">
            <img src="https://picsum.photos/id/1005/600/400" alt="About Us" class="img-fluid rounded shadow">
        </div>
        <div class="col-md-6">
            <h3 class="section-title text-danger">Who We Are</h3>
            <p>We are a dedicated team of developers, designers, and product experts aiming to deliver top-notch
                products and experiences to our customers. Our mission is to innovate and inspire through quality and
                creativity.</p>
            <p>With years of experience and a loyal customer base, we continue to grow and adapt to the latest trends in
                technology and design.</p>
        </div>
    </div>
</div>

<!-- Team Section -->
<div class="container my-5">
    <h3 class="section-title text-danger mb-4">Meet the Team</h3>
    <div class="row g-4">
        <div class="col-md-4">
            <div class="card text-center shadow-sm">
                <img src="https://randomuser.me/api/portraits/men/45.jpg" class="team-img rounded-top"
                    alt="Team Member">
                <div class="card-body">
                    <h5 class="card-title">John Doe</h5>
                    <p class="card-text text-muted">Founder & CEO</p>
                    <a href="#" class="btn btn-outline-danger btn-sm"><i class="fa fa-linkedin"></i> LinkedIn</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card text-center shadow-sm">
                <img src="https://randomuser.me/api/portraits/women/50.jpg" class="team-img rounded-top"
                    alt="Team Member">
                <div class="card-body">
                    <h5 class="card-title">Jane Smith</h5>
                    <p class="card-text text-muted">Product Manager</p>
                    <a href="#" class="btn btn-outline-danger btn-sm"><i class="fa fa-linkedin"></i> LinkedIn</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card text-center shadow-sm">
                <img src="https://randomuser.me/api/portraits/men/32.jpg" class="team-img rounded-top"
                    alt="Team Member">
                <div class="card-body">
                    <h5 class="card-title">Mike Johnson</h5>
                    <p class="card-text text-muted">Lead Developer</p>
                    <a href="#" class="btn btn-outline-danger btn-sm"><i class="fa fa-linkedin"></i> LinkedIn</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection