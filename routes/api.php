<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\LoginController;
use App\Http\Controllers\Api\V1\MovieImageController;
use App\Http\Controllers\Api\V1\MovieController;
use App\Http\Controllers\Api\V1\UserController;


Route::post('login', [LoginController::class, 'login']);

Route::middleware('auth:sanctum')->prefix('v1/movies')->group(function () {
    Route::get('{id}', [MovieController::class, 'show']);
    Route::get('', [MovieController::class, 'search']);
    Route::post('', [MovieController::class, 'store']);
    Route::delete('{id}', [MovieController::class, 'destroy']);
    Route::patch('{id}', [MovieController::class, 'update']);
    Route::put('{id}', [MovieController::class, 'replace']);

    Route::post('{id}/images', [MovieImageController::class, 'store']);
    Route::get('{id}/images', [MovieImageController::class, 'index']);
    Route::patch('{id}/images/{imageId}', [MovieImageController::class, 'update']);
});

Route::prefix('v1')->group(function () {
    Route::prefix('users')->group(function () {
        Route::get('', [UserController::class, 'index']);
        Route::get('{id}', [UserController::class, 'show']);
        Route::post('', [UserController::class, 'store']);
        Route::patch('{id}', [UserController::class, 'update']);
        Route::delete('{id}', [UserController::class, 'destroy']);
    });
});
