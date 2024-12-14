<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\RegisterController;

// Authentication Routes
Route::post('/login', [AuthController::class, 'login']); 
Route::middleware('auth:sanctum')->post('/logout', [AuthController::class, 'logout']);

// Registration
Route::post('/register', [RegisterController::class, 'register']);

// Email verification
Route::get('/email/verify/{id}/{hash}', [RegisterController::class, 'verify'])
    ->middleware(['auth:sanctum'])
    ->name('verification.verify');

Route::get('/movies', [MovieController::class, 'index']);   
Route::get('/movies/{id}', [MovieController::class, 'show']); 
Route::middleware(['auth:sanctum'])->group(function () {
// Admin-Only Routes
    Route::middleware(['is_admin'])->group(function () {
        Route::post('/movies', [MovieController::class, 'store']);    // Add a movie
        Route::put('/movies/{id}', [MovieController::class, 'update']); // Update a movie
        Route::delete('/movies/{id}', [MovieController::class, 'destroy']); // Delete a movie
    });
});