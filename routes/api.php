<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\FavoritesController;

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

   // Ratings
   Route::post('/movies/{id}/rate', [RatingController::class, 'rateMovie']);
   Route::get('/movies/{id}/ratings', [RatingController::class, 'getMovieRatings']);
   Route::get('/user/ratings', [RatingController::class, 'getUserRatings']);

   // Reviews
   Route::post('/movies/{id}/review', [ReviewController::class, 'addReview']);
   Route::get('/movies/{id}/reviews', [ReviewController::class, 'getMovieReviews']);
   Route::get('/user/reviews', [ReviewController::class, 'getUserReviews']);

   // Watch History
   Route::post('/movies/{id}/watched', [WatchHistoryController::class, 'markWatched']);
   Route::get('/user/watch-history', [WatchHistoryController::class, 'getWatchHistory']);

   // Favorites
   Route::post('/movies/{id}/favorite', [FavoritesController::class, 'addFavorite']);
   Route::delete('/movies/{id}/favorite', [FavoritesController::class, 'removeFavorite']);
   Route::get('/user/favorites', [FavoritesController::class, 'getFavorites']);


// Admin-Only Routes
    Route::middleware(['is_admin'])->group(function () {
        Route::post('/movies', [MovieController::class, 'store']);    // Add a movie
        Route::put('/movies/{id}', [MovieController::class, 'update']); // Update a movie
        Route::delete('/movies/{id}', [MovieController::class, 'destroy']); // Delete a movie
    });

        
    
});