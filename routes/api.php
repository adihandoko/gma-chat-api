<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\VehicleController;
use App\Http\Controllers\Api\FaqController;

Route::prefix('chat')->group(function () {
    Route::get('/products',[ProductController::class,'search']);
    Route::get('/products/{id}',[ProductController::class,'show']);
    Route::get('/vehicles',[VehicleController::class,'index']);
    Route::get('/faq',[FaqController::class,'search']);
});
