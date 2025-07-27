<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category;

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
        $categories = category::orderby('id','desc')->get();
        // for fetch ..
        return view('admin.products.category',compact('categories'));
    }
    // save data ..
    public function category_save(Request $request){
        $validated = $request->validate([
            'title' => 'required|min:8'
        ]);
        // for insert ..
        $category = new category;
        $category->title = $request->title;
        $category->save();
        return redirect()->back()->with('success','Category Added Succesfully');
    }
    // delete category ..
    public function delete_category($id){
        $category = category::find($id);
        $category->delete();
        return redirect()->back()->with('warning','Category Deleted Succesfully');
    }
}