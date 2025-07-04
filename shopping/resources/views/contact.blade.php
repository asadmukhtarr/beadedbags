@extends('layouts.app')
@section('title','Contact')
@section('content')
<section class="hero">
    <div class="container">
        <h1 class="display-4"><i class="fa fa-handshake-o"></i> Contact</h1>
        <p class="lead">We are passionate about providing quality products with exceptional customer service.</p>
    </div>
</section>
<div class="container">
    <div class="row justify-content-center mt-2 mb-2">
        <div class="col-md-10">
            <div class="contact-box">
                <h2 class="text-center text-danger mb-4"><i class="fa fa-envelope"></i> Contact Us</h2>
                <div class="row">

                    <!-- Contact Details -->
                    <div class="col-md-5 contact-info">
                        <h4 class="text-danger"> <i class="fa fa-handshake-o"></i> Get in Touch</h4>
                        <p><i class="fa fa-map-marker"></i> 123 Main Street, Karachi, Pakistan</p>
                        <p><i class="fa fa-phone"></i> +92 300 1234567</p>
                        <p><i class="fa fa-envelope"></i> info@example.com</p>
                        <p><i class="fa fa-globe"></i> www.example.com</p>
                    </div>

                    <!-- Contact Form -->
                    <div class="col-md-7">
                        <form>
                            <div class="mb-3">
                                <label for="name" class="form-label">Your Name</label>
                                <input type="text" class="form-control" id="name" placeholder="Enter your full name">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Your Email</label>
                                <input type="email" class="form-control" id="email"
                                    placeholder="Enter your email address">
                            </div>
                            <div class="mb-3">
                                <label for="subject" class="form-label">Subject</label>
                                <input type="text" class="form-control" id="subject"
                                    placeholder="Subject of your message">
                            </div>
                            <div class="mb-3">
                                <label for="message" class="form-label">Your Message</label>
                                <textarea class="form-control" id="message" rows="4"
                                    placeholder="Write your message here..."></textarea>
                            </div>
                            <button type="submit" class="btn btn-danger"><i class="fa fa-paper-plane"></i> Send
                                Message</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection