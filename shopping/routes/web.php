<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pagesController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\Admin\productController;
//use Auth;

// Route::get('/route-ka-link(ju upr path ma show huta hai)',[ControllerName::class,'function ka name'])->name('routekaname');
// home ..
Route::get('/', [pagesController::class,'index'])->name('home');
// about ...
Route::get('/about',[pagesController::class,'about'])->name('about');
// contact ...
Route::get('/contact',[pagesController::class,'contact'])->name('contact');
// products ..
Route::get('/products',[pagesController::class,'products'])->name('products');
// single product ..
Route::get('/product/{id}',[pagesController::class,'product'])->name('product');
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


Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/orders', [AdminController::class, 'orders'])->name('admin.orders');
    Route::get('/settings', [AdminController::class, 'settings'])->name('admin.settings');

    // Product Routes
    Route::prefix('products')->group(function(){
        Route::get('/', [productController::class, 'products'])->name('admin.products');
        Route::get('/create', [productController::class, 'createProduct'])->name('admin.products.create');
        Route::post('/save', [productController::class, 'save'])->name('admin.products.save');
    });
    Route::prefix('category')->group(function(){
        Route::get('/',[AdminController::class,'category'])->name('admin.products.category');
        Route::post('/save',[AdminController::class,'category_save'])->name('admin.products.category.save');
        Route::get('/{id}',[AdminController::class,'delete_category'])->name('admin.products.category.delete');
        Route::get('/edit/{id}',[AdminController::class,'edit_category'])->name('admin.product.edit.category');
        Route::post('/update/{id}',[AdminController::class,'update_category'])->name('admin.product.update.category');
    });
});