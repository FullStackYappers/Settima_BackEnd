<?php

namespace App\Http\Controllers;

use App\Models\Favorite;
use Illuminate\Http\Request;

class FavoritesController extends Controller
{
   
    public function addFavorite($movieId)
    {
        Favorite::firstOrCreate([
            'user_id' => auth()->id(),
            'movie_id' => $movieId,
        ]);

        return response()->json(['message' => 'Movie added to favorites.']);
    }

    
    public function removeFavorite($movieId)
    {
        Favorite::where('user_id', auth()->id())
            ->where('movie_id', $movieId)
            ->delete();

        return response()->json(['message' => 'Movie removed from favorites.']);
    }

   
    public function getFavorites()
    {
        $favorites = Favorite::with('movie')
            ->where('user_id', auth()->id())
            ->get();

        return response()->json(['data' => $favorites]);
    }
}