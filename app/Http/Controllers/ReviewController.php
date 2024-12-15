<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rating;


class ReviewController extends Controller
{
    public function addReview(Request $request, $movieId)
    {
        $validated = $request->validate([
            'review' => ['required', 'string', function ($attribute, $value, $fail) {
                if (str_word_count($value) > 500) {
                    $fail('The ' . $attribute . ' must not exceed 500 words.');
                }
            }],
        ]);

        $review = Rating::updateOrCreate(
            ['user_id' => auth()->id(), 'movie_id' => $movieId],
            ['review' => $validated['review']]
        );

        return response()->json(['message' => 'Review added successfully.', 'data' => $review]);
    }

    public function getMovieReviews($movieId)
    {
        $reviews = Rating::where('movie_id', $movieId)
            ->whereNotNull('review')
            ->get(['user_id', 'review', 'updated_at']);

        return response()->json(['data' => $reviews]);
    }

    public function getUserReviews()
    {
        $reviews = Rating::where('user_id', auth()->id())
            ->whereNotNull('review')
            ->get(['movie_id', 'review', 'updated_at']);

        return response()->json(['data' => $reviews]);
    }
}
