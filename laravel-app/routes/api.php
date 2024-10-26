<?php

use App\Http\Controllers\Api\ProductController;  // Corrected controller name (PascalCase)
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::apiResource('product', ProductController::class);  // Removed single quotes around the controller

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
