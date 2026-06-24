<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\CategoryController;

Route::prefix('v1')
    ->middleware('throttle:60,1')
    ->group(function () {

        Route::post('/register', [AuthController::class, 'register']);
        Route::post('/login', [AuthController::class, 'login']);

        Route::middleware('auth:sanctum')->group(function () {

            Route::apiResource('items', ItemController::class)
                ->except(['destroy']);

            Route::apiResource('categories', CategoryController::class)
                ->except(['destroy']);

            Route::delete(
                'categories/{category}',
                [CategoryController::class, 'destroy']
            )->middleware('role:admin');

            Route::delete(
                'items/{item}',
                [ItemController::class, 'destroy']
            )->middleware('role:admin');
        });
    });