@extends('layouts.admin')
@section('title','Create')
@section('content')
<div class="my-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white">
                    <h5 class="mb-0">Create New Product</h5>
                </div>
                <div class="card-body">
                    <form action="#" method="POST" enctype="multipart/form-data">
                        <!-- CSRF for Laravel -->
                        {{-- @csrf --}}

                        <!-- Product Image -->
                        <div class="mb-3">
                            <label for="image" class="form-label">Product Image</label>
                            <input type="file" class="form-control" id="image" name="image" required>
                        </div>

                        <!-- Product Title -->
                        <div class="mb-3">
                            <label for="title" class="form-label">Product Title</label>
                            <input type="text" class="form-control" id="title" name="title"
                                placeholder="Enter product title" required>
                        </div>

                        <!-- Price -->
                        <div class="mb-3">
                            <label for="price" class="form-label">Price (PKR)</label>
                            <input type="number" class="form-control" id="price" name="price" placeholder="Enter price"
                                required>
                        </div>

                        <!-- Quantity -->
                        <div class="mb-3">
                            <label for="quantity" class="form-label">Quantity</label>
                            <input type="number" class="form-control" id="quantity" name="quantity"
                                placeholder="Enter quantity" required>
                        </div>

                        <!-- Category -->
                        <div class="mb-3">
                            <label for="category" class="form-label">Category</label>
                            <select class="form-select" id="category" name="category" required>
                                <option selected disabled>Select a category</option>
                                <option value="sports">Sports</option>
                                <option value="cricket">Cricket</option>
                                <option value="tennis">Tennis</option>
                                <option value="football">Football</option>
                            </select>
                        </div>

                        <!-- Description -->
                        <div class="mb-3">
                            <label for="description" class="form-label">Product Description</label>
                            <textarea class="form-control" id="description" name="description" rows="4"
                                placeholder="Write a short description..." required></textarea>
                        </div>

                        <!-- Submit Button -->
                        <div>
                            <button type="submit" class="btn btn-success float-end">
                                <i class="bi bi-plus-circle me-1"></i> Create Product
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection