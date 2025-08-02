@extends('layouts.admin')
@section('title','Categories')
@section('content')
<div class="my-2">
    <div class="row justify-content-center mt-5">
        <!-- Category Form -->
        <div class="col-md-4">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white">
                    <h5 class="mb-0">Edit Category</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.product.update.category',$category->id) }}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="title" class="form-label">Category Title</label>
                            <input type="text" class="form-control" id="title" value="{{  $category->title }}"
                                name="title" placeholder="Enter category title">
                            @error('title')
                            <font color="red">{{ $message }}</font>
                            @enderror
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-success">
                                <i class="bi bi-save me-1"></i> Update Category
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection