@extends('layouts.admin')
@section('title','Products')
@section('content')
<div class="my-4">
    <div class="card shadow-sm">
        <div class="card-header bg-success text-white">
            <h5 class="mb-0">Product List</h5>
        </div>
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-bordered table-hover align-middle mb-0">
                    <thead class="table-light">
                        <tr>
                            <th>Title</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Category</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($products as $product)
                        <tr>
                            <td>
                                 <img src="{{ asset('storage/products') }}/{{ $product->image }}" 
                                class="rounded-circle border" 
                                width="60" height="60" 
                                alt="Product">
                                {{ $product->title }}
                            </td>
                            <td>PKR {{ $product->price }}</td>
                            <td>{{ $product->quantity }}</td>
                            <td>{{ $product->category_id }}</td>
                            <td>
                                <a href="#" class="btn btn-sm btn-primary">
                                    <i class="bi bi-eye-fill me-1"></i> View
                                </a>
                                <a href="#" class="btn btn-sm btn-success">
                                    <i class="bi bi-edit me-1"></i> Edit
                                </a>
                                 <a href="#" class="btn btn-sm btn-primary">
                                    <i class="bi bi-trash me-1"></i> Delete
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection