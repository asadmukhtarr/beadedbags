<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pagesController;

// home ..
Route::get('/', [pagesController::class,'index'])->name('home');
// about ...
Route::get('/about',[pagesController::class,'about'])->name('about');
// contact ...
Route::get('/contact',[pagesController::class,'contact'])->name('contact');
// products ..
Route::get('/products',[pagesController::class,'products'])->name('products');
// cart ..
Route::get('/cart',[pagesController::class,'cart'])->name('cart');

// authentication routes ..
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');