<?php

namespace App\Http\Controllers;

use App\Models\WatchHistory;
use Illuminate\Http\Request;

class WatchHistoryController extends Controller
{
    
    public function markWatched($movieId)
    {
        WatchHistory::firstOrCreate([
            'user_id' => auth()->id(),
            'movie_id' => $movieId,
        ]);

        return response()->json(['message' => 'Movie marked as watched.']);
    }

    public function getWatchHistory()
    {
        $watchedMovies = WatchHistory::with('movie')
            ->where('user_id', auth()->id())
            ->get();

        return response()->json(['data' => $watchedMovies]);
    }
}