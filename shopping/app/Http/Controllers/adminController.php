<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    // Dashboard Page
    public function dashboard() {
        return view('admin.dashboard');
    }

    // Orders Page
    public function orders() {
        return view('admin.orders');
    }

    // Settings Page
    public function settings() {
        return view('admin.settings');
    }

    // All Products Page
    public function products() {
        return view('admin.products.products');
    }

    // Create Product Page
    public function createProduct() {
        return view('admin.products.create');
    }
    // category ..
    public function category(){
        return view('admin.products.category');
    }
    // save data ..
    public function category_save(Request $request){
        $validated = $request->validate([
            'title' => 'required|min:8'
        ]);
        return ucfirst($request->title);
    }
}