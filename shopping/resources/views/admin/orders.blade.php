@extends('layouts.admin')
@section('title','Orders')
@section('content')
<div class="my-4">
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">
            <h5 class="mb-0">Orders List</h5>
        </div>
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover mb-0">
                    <thead class="table-light">
                        <tr>
                            <th>#</th>
                            <th>Customer</th>
                            <th>Order ID</th>
                            <th>Date</th>
                            <th>Total</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Ali Raza</td>
                            <td>#ORD12345</td>
                            <td>2025-07-18</td>
                            <td>PKR 2,500</td>
                            <td><span class="badge bg-warning">New</span></td>
                            <td>
                                <a href="#" class="btn btn-sm btn-info">View</a>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Sara Khan</td>
                            <td>#ORD12346</td>
                            <td>2025-07-17</td>
                            <td>PKR 3,700</td>
                            <td><span class="badge bg-success">Completed</span></td>
                            <td>
                                <a href="#" class="btn btn-sm btn-info">View</a>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Ahmed Ali</td>
                            <td>#ORD12347</td>
                            <td>2025-07-16</td>
                            <td>PKR 1,200</td>
                            <td><span class="badge bg-danger">Cancelled</span></td>
                            <td>
                                <a href="#" class="btn btn-sm btn-info">View</a>
                            </td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Fatima Noor</td>
                            <td>#ORD12348</td>
                            <td>2025-07-15</td>
                            <td>PKR 4,800</td>
                            <td><span class="badge bg-secondary">Pending</span></td>
                            <td>
                                <a href="#" class="btn btn-sm btn-info">View</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection