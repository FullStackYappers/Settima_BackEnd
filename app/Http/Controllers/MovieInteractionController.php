<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MovieInteractionController extends Controller
{
    public function rateMovie(Request $request, $movieId)
    {
        $validated = $request->validate([
            'acting' => 'nullable|numeric|min:0|max:5',
            'plot' => 'nullable|numeric|min:0|max:5',
            'music' => 'nullable|numeric|min:0|max:5',
            'costume_design' => 'nullable|numeric|min:0|max:5',
            'cinematography' => 'nullable|numeric|min:0|max:5',
            'editing' => 'nullable|numeric|min:0|max:5',
            'review' => ['nullable', 'string', function ($attribute, $value, $fail) {
            if (str_word_count($value) > 500) {
                $fail('The ' . $attribute . ' must not exceed 500 words.');
            }
        }],
        ]);

        $rating = Rating::updateOrCreate(
            ['user_id' => auth()->id(), 'movie_id' => $movieId],
            $validated
        );

        return response()->json([
            'message' => 'Rating saved successfully.',
            'data' => $rating,
        ]);
    }

    public function getMovieRatings($movieId)
    {
        $ratings = Rating::where('movie_id', $movieId)->get();

        return response()->json(['data' => $ratings]);
    }

    public function getUserRatings()
    {
        $ratings = Rating::with('movie')
            ->where('user_id', auth()->id())
            ->get();

        return response()->json(['data' => $ratings]);
    }

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
