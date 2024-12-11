<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('/movies', [MovieController::class, 'index']);        
Route::get('/movies/{id}', [MovieController::class, 'show']);    

Route::middleware(['auth:sanctum', 'is_admin'])->group(function () {
    Route::post('/movies', [MovieController::class, 'store']);
    Route::put('/movies/{id}', [MovieController::class, 'update']); 
    Route::delete('/movies/{id}', [MovieController::class, 'destroy']); 
});