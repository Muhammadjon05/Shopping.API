<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CategoryProductController;
use App\Http\Controllers\FavoritesController;
use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


//Route::middleware('')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::post('login', [AuthController::class,'login']);
Route::post('register',[ AuthController::class,'register']  );
Route::post('logout',[ AuthController::class,'logout']);
Route::get('user',[ AuthController::class,'user'])->middleware('auth:sanctum');

Route::apiResources([
    '/categories' => CategoryController::class,
    '/products' => ProductController::class,
    '/categories.products' => CategoryProductController::class,
    '/favorites' => FavoritesController::class





]);
