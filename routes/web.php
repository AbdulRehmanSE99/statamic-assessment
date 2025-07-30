<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;

// Redirect /blogs to /blogs-list
Route::redirect('/blogs', '/blogs-list', 301);

// API Routes
Route::prefix('api')->group(function () {
    Route::get('/test', function () {
        return response()->json(['message' => 'API is working']);
    });
    Route::get('/blogs', [ApiController::class, 'getBlogs']);
    Route::get('/blogs/{slug}', [ApiController::class, 'getBlog']);
    Route::get('/categories', [ApiController::class, 'getCategories']);
    Route::get('/collections', [ApiController::class, 'getCollections']);
});

