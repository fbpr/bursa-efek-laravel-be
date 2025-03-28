<?php

use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\ProductCategoryController;
use App\Http\Controllers\API\ProductController;
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

Route::prefix('v1')->group(
    function () {
        Route::prefix('auth')->group(function () {
            Route::post('login', [AuthController::class, 'login']);
            Route::post('register', [AuthController::class, 'register']);
        });

        Route::middleware('auth:api')->group(function () {
            Route::apiResource('category-products', ProductCategoryController::class);
            Route::apiResource('products', ProductController::class);
        });
    }
);