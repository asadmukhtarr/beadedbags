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


Route::get('/atif',function(){
    return "Hello Atif";
});