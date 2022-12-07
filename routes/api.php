<?php

use App\Http\Controllers\Api\ProductsAPIController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::group(['middleware'=>'auth:sanctum'],function(){
    Route::get('products',[ProductsAPIController::class,'index']);
    Route::get('product/{id}', [ProductsAPIController::class, 'show']);
    Route::post('products/store', [ProductsAPIController::class, 'store']);
    Route::put('product/update/{id}', [ProductsAPIController::class, 'update']);
Route::delete('product/delete/{id}', [ProductsAPIController::class, 'destroy']);
});

Route::get('login',[UserController::class,'index']);
Route::post('login',[UserController::class,'login']);