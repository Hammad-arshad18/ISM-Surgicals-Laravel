<?php

use App\Http\Controllers\Api\ContactAPIController;
use App\Http\Controllers\Api\ProductsAPIController;
use App\Models\ContactModel;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/products',[ProductsAPIController::class,'index']);
Route::get('/product/{id}',[ProductsAPIController::class,'show']);
Route::post('products/store',[ProductsAPIController::class,'store']);