@extends('layouts.admin')
@section('title','Categories')
@section('content')
<div class="my-5">
    <div class="row">
        <!-- Category Form -->
        <div class="col-md-5">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white">
                    <h5 class="mb-0">Add New Category</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.products.category.save') }}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="title" class="form-label">Category Title</label>
                            <input type="text" class="form-control" id="title" name="title"
                                placeholder="Enter category title">
                            @error('title')
                            <font color="red">{{ $message }}</font>
                            @enderror
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-success">
                                <i class="bi bi-plus-circle me-1"></i> Add Category
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Category List -->
        <div class="col-md-7">
            <div class="card shadow-sm">
                <div class="card-header bg-success text-white">
                    <h5 class="mb-0">Category List</h5>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-bordered mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th>#</th>
                                    <th>Title</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Football</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Cricket</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Tennis</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Hockey</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Volleyball</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection