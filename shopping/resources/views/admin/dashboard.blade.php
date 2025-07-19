@extends('layouts.admin')
@section('title','Dashbaord')
@section('content')
<div class="my-4">
    <div class="row g-4">

        <!-- Box 1 -->
        <div class="col-md-3 col-sm-6">
            <div class="card text-bg-primary shadow-sm rounded-3">
                <div class="card-body d-flex justify-content-between align-items-center">
                    <div>
                        <h5 class="card-title">Total Users</h5>
                        <h3 class="card-text">1,240</h3>
                    </div>
                    <i class="bi bi-people-fill fs-1"></i>
                </div>
            </div>
        </div>

        <!-- Box 2 -->
        <div class="col-md-3 col-sm-6">
            <div class="card text-bg-success shadow-sm rounded-3">
                <div class="card-body d-flex justify-content-between align-items-center">
                    <div>
                        <h5 class="card-title">Orders</h5>
                        <h3 class="card-text">860</h3>
                    </div>
                    <i class="bi bi-bag-check-fill fs-1"></i>
                </div>
            </div>
        </div>

        <!-- Box 3 -->
        <div class="col-md-3 col-sm-6">
            <div class="card text-bg-warning shadow-sm rounded-3">
                <div class="card-body d-flex justify-content-between align-items-center">
                    <div>
                        <h5 class="card-title">Earnings</h5>
                        <h3 class="card-text">PKR 45K</h3>
                    </div>
                    <i class="bi bi-currency-dollar fs-1"></i>
                </div>
            </div>
        </div>

        <!-- Box 4 -->
        <div class="col-md-3 col-sm-6">
            <div class="card text-bg-danger shadow-sm rounded-3">
                <div class="card-body d-flex justify-content-between align-items-center">
                    <div>
                        <h5 class="card-title">Pending</h5>
                        <h3 class="card-text">12</h3>
                    </div>
                    <i class="bi bi-exclamation-circle-fill fs-1"></i>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection