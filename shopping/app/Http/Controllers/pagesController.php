<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;

class pagesController extends Controller
{
    // home ..
    public function index(){
        return view('welcome');
    }
    // about ..
    public function about(){
        return view('about');
    }
    // contact ..
    public function contact(){
        return view('contact');
    }
    // products ..
    public function products() {
        $products = product::all();
        return view('products', compact('products'));
    }
    // single product ..
    public function product(){
        return view('product');
    }
    // cart ..
    public function cart(){
        return view('cart');
    }
    // checkout ..
    public function checkout(){
        return view('checkout');
    }
}