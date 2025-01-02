<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\FavoritesController;
use App\Http\Controllers\RatingController;
use App\Http\Controllers\WatchHistoryController;
use App\Http\Controllers\MoviePosterController;


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
Route::get('/movies/random', [MovieController::class, 'indexRandom']);
Route::get('/movies/{id}', [MovieController::class, 'show']);
Route::get('/genres/{genreName}/movies', [MovieController::class, 'fetchMoviesByGenre']);

Route::get('/movies/{movieId}/trailer', [MovieController::class, 'fetchTrailers']);

//Movie Posters
Route::get('/movie-posters/{movie_id}', [MoviePosterController::class, 'show']);


Route::middleware(['auth:sanctum'])->group(function () {

    // Ratings and Reviews
    Route::post('/movies/{id}/rate', [RatingController::class, 'rateMovie']);       // Add/Update Rating & Review
    Route::get('/movies/{id}/ratings', [RatingController::class, 'getMovieRatings']); // Get Ratings for a Movie
    Route::get('/user/ratings', [RatingController::class, 'getUserRatings']);        // Get User's Ratings

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
