<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MoviePoster;

class MoviePosterController extends Controller
{
    public function index()
    {
        $movie_poster = MoviePoster::all();
        return response()->json($movie_poster);
    }
    
    
    //Get the Movie Poster using movie_id

    public function show($movie_id){
        $movie_poster = MoviePoster::where('movie_id', $movie_id)->first();

        if($movie_poster) {
            $poster_url = asset($movie_poster->poster_path);

            return response()->json([
                'poster_url' => $poster_url
            ]);
        }

        return response() -> json(['error' => 'Poster not found'], 404);
    }
}
