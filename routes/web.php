<?php

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
Route::get('Products', [ProductController::class, 'index'])->name('products');
Route::get('Products/item/{slug?}', [ProductController::class, 'product'])->name('products.item');
Route::get('Contact-us', [ContactusController::class, 'index'])->name('contact');
Route::post('Contact-us', [ContactusController::class, 'store'])->name('contact');
