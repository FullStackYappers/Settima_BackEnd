<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rating;

class RatingController extends Controller
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
        $ratings = Rating::where('movie_id', $movieId)
            ->get(['user_id', 'acting', 'plot', 'music', 'costume_design', 'cinematography', 'editing', 'review', 'updated_at']);

        return response()->json(['data' => $ratings]);
    }

    public function getUserRatings()
    {
        $ratings = Rating::with('movie')
            ->where('user_id', auth()->id())
            ->get(['movie_id', 'acting', 'plot', 'music', 'costume_design', 'cinematography', 'editing', 'review', 'updated_at']);

        return response()->json(['data' => $ratings]);
    }

}
