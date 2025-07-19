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
                            <th>Image</th>
                            <th>Title</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Category</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><img src="https://via.placeholder.com/60" class="rounded-circle" width="60" height="60"
                                    alt="Product"></td>
                            <td>Football</td>
                            <td>PKR 1,500</td>
                            <td>25</td>
                            <td>Sports</td>
                            <td>
                                <a href="#" class="btn btn-sm btn-primary">
                                    <i class="bi bi-eye-fill me-1"></i> View
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td><img src="https://via.placeholder.com/60" class="rounded-circle" width="60" height="60"
                                    alt="Product"></td>
                            <td>Basketball</td>
                            <td>PKR 2,000</td>
                            <td>10</td>
                            <td>Sports</td>
                            <td>
                                <a href="#" class="btn btn-sm btn-primary">
                                    <i class="bi bi-eye-fill me-1"></i> View
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td><img src="https://via.placeholder.com/60" class="rounded-circle" width="60" height="60"
                                    alt="Product"></td>
                            <td>Cricket Bat</td>
                            <td>PKR 3,200</td>
                            <td>8</td>
                            <td>Cricket</td>
                            <td>
                                <a href="#" class="btn btn-sm btn-primary">
                                    <i class="bi bi-eye-fill me-1"></i> View
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td><img src="https://via.placeholder.com/60" class="rounded-circle" width="60" height="60"
                                    alt="Product"></td>
                            <td>Tennis Racket</td>
                            <td>PKR 4,000</td>
                            <td>15</td>
                            <td>Tennis</td>
                            <td>
                                <a href="#" class="btn btn-sm btn-primary">
                                    <i class="bi bi-eye-fill me-1"></i> View
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection