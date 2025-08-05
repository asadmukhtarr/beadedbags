<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\category;
use App\Models\product;

class productController extends Controller
{
    //
        // All Products Page
    public function products() {
        $products = product::all();
       // return $products;
        return view('admin.products.products',compact('products'));
    }

    // Create Product Page
    public function createProduct() {
        $categories = category::all();
        return view('admin.products.create',compact('categories'));
    }
    // for save product ..
    public function save(Request $request){
           $validated = $request->validate([
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'title' => 'required|string|max:255',
                'price' => 'required|numeric|min:0',
                'quantity' => 'required|integer|min:1',
                'category' => 'required|exists:categories,id',
                'description' => 'required|string|max:1000',
            ]);
            if($request->hasfile('image')){
                $name = time().'Porductimage'.'.'.$request->image->getClientOriginalExtension();
                $request->image->storeAs('products',$name,'public');
            }
             // Create product using $request->field access
            $product = new product();
            $product->image = $name;
            $product->title = $request->title;
            $product->price = $request->price;
            $product->quantity = $request->quantity;
            $product->category_id = $request->category;
            $product->description = $request->description;
            $product->save();

            return redirect()->back()->with('success', 'Product saved successfully!');

    }
}