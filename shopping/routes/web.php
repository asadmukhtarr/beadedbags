<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pagesController;
//use Auth;

// home ..
Route::get('/', [pagesController::class,'index'])->name('home');
// about ...
Route::get('/about',[pagesController::class,'about'])->name('about');
// contact ...
Route::get('/contact',[pagesController::class,'contact'])->name('contact');
// products ..
Route::get('/products',[pagesController::class,'products'])->name('products');
// single product ..
Route::get('/product',[pagesController::class,'product'])->name('product');
// cart ..
Route::get('/cart',[pagesController::class,'cart'])->name('cart');
// checkout ..
Route::get('/checkout',[pagesController::class,'checkout'])->name('checkout');

// authentication routes ..
Auth::routes();
Route::get('/logout',function(){
    Auth::logout();
    return redirect(route('home'));
})->name('logout');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');