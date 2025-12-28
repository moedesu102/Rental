<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// Thêm các API routes của bạn ở đây
// Ví dụ:
// Route::prefix('v1')->group(function () {
//     Route::apiResource('users', UserController::class);
// });



