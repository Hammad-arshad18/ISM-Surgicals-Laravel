<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactusController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('products', [ProductController::class, 'index'])->name('products');
Route::get('products/item/{slug}', [ProductController::class, 'product'])->name('products.item');
Route::get('products/cart',[ProductController::class,'cart'])->name('cart');

Route::get('contact-us', [ContactusController::class, 'index'])->name('contact');
Route::post('contact-us', [ContactusController::class, 'store'])->name('contact');


Route::group(['prefix' => 'admin'], function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin');

    Route::get('login', [AdminController::class, 'loginview'])->name('admin.login');
    Route::post('login', [AdminController::class, 'login']);
    Route::get('logout', [AdminController::class, 'logout'])->name('admin.logout');

    Route::get('products', [AdminController::class, 'listProducts'])->name('admin.list.products');
    Route::get('add/product', [AdminController::class, 'addProductView'])->name('admin.add.proudct');
    Route::post('add/product', [AdminController::class, 'addProduct']);
    Route::get('delete/product/{id}', [AdminController::class, 'deleteProduct'])->name('admin.product.delete');

    Route::get('category', [AdminController::class, 'listCategories'])->name('admin.list.categories');
    Route::get('add/category', [AdminController::class, 'addCategoryView'])->name('admin.add.categories');
    Route::post('add/category', [AdminController::class, 'addCategory']);
    Route::get('delete/category/{id}', [AdminController::class, 'deleteCategory'])->name('admin.category.delete');

    Route::get('update/info', [AdminController::class, 'info'])->name('admin.update.info');
    Route::post('update/info', [AdminController::class, 'updateInfo']);
});
