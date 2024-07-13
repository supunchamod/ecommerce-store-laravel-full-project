<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategeryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CartController;





/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/',[HomeController :: class , 'index'])->name('index');

//Admin Dashboard
Route::get('/dashboard',[AdminController :: class , 'dashboard']);
Route::get('/admin/add-category',[AdminController :: class , 'add_category'])->name('add.category');
Route::get('/admin/view-category',[AdminController :: class , 'view_category'])->name('view.category');
Route::get('/admin/add-product',[ProductController :: class , 'add_product'])->name('add.product');
Route::get('/admin/view-product',[ProductController :: class , 'view_product'])->name('view.product');

//add to cart
Route::get('/cart',[CartController :: class , 'index'])->name('cart.index');
Route::get('/cart/details', [CartController::class, 'getCartDetails'])->name('cart.details');
Route::post('/cart/add', [CartController::class, 'addToCart'])->name('cart.add');
Route::patch('/cart/update/{cartItemId}', [CartController::class, 'updateCart'])->name('cart.update');
Route::get('/shop',[HomeController :: class , 'shop'])->name('shop');
Route::get('/product-detail/{slug}',[HomeController :: class , 'productDetail'])->name('product-detail');




Route::resource('products', ProductController::class);

Route::resource('category', CategeryController::class);
