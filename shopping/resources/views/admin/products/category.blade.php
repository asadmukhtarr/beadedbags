@extends('layouts.admin')
@section('title','Categories')
@section('content')
<div class="my-5">
    @if($message = session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ $message }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

    @endif
    @if($message = session('warning'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ $message }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

    @endif
    <div class="row">
        <!-- Category Form -->
        <div class="col-md-4">
            <div class="card shadow-sm">
                <div class="card-header bg-success text-white">
                    <label class="mb-0"> <i class="bi bi-plus-circle me-1"></i> Add New Category</label>
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
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-header bg-success text-white">
                    <label class="mb-0"> <i class="bi bi-list me-1"></i> Category List</label>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover table-stripped mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th>#</th>
                                    <th>Title</th>
                                    <th>Products</th>
                                    <th>Create At</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($categories as $category)
                                <tr>
                                    <td>{{ $category->id }}</td>
                                    <td>{{ $category->title }}</td>
                                    <td>{{ $category->products->count() }}</td>
                                    <td>{{ $category->created_at->diffForHumans() }}</td>
                                    <td>
                                        <a href="{{ route('admin.products.category.delete',$category->id) }}"
                                            onClick="return confirm('Are you sure? you want to delete category.')">
                                            <button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                                        </a>
                                        <a href="{{ route('admin.product.edit.category',$category->id) }}">
                                            <button class="btn btn-sm btn-success"><i class="fa fa-edit"></i></button>
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
    </div>
</div>

@endsection