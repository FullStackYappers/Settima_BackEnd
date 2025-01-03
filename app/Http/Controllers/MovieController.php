<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;
use App\Models\Genre;
use Illuminate\Support\Facades\Log;

class MovieController extends Controller
{
    public function index()
    {
        $movies = Movie::all();
        return response()->json($movies);
    }

    public function indexRandom()
    {
        $movies = Movie::inRandomOrder()->get();
        return response()->json($movies);
    }

    public function show($id)
    {
        $movie = Movie::find($id);

        if ($movie) {
            return response()->json($movie);
        }

        return response()->json(['message' => 'Movie not found'], 404);
    }

    /*Function for fetching movies**/
    public function fetchMoviesByGenre($genreName)
    {
        $genre = Genre::whereRaw('LOWER(name) = ?', [strtolower($genreName)])->first();

        if ($genre) {
            $movies = $genre->movies()
                ->inRandomOrder()
                ->get();

            return response()->json(['genre' => $genre->name, 'movies' => $movies]);
        }

        return response()->json(['message' => 'Genre not found'], 404);
    }

    public function fetchGenresFromMovie($movie_id)
    {
        $movie = Movie::find($movie_id);

        if ($movie) {
            $genres = $movie->genres;

            return $genres->pluck('name');
        }

        return null;
    }

    public function fetchTrailers($movie_id)
    {
        $movie = Movie::find($movie_id);
        $trailer = $movie->trailer;

        if ($trailer) {
            return response()->json(['trailer_url' => $trailer->trailer_url]);
        }

        return response()->json(['message' => 'Trailer not found'], 404);
    }

    public function search(Request $request)
    {
        $query = $request->input('search');
        if (!$query) {
            return $this->index($request);
        }

        //using sql to fetch the title
        $movies = Movie::whereRaw('LOWER(title) LIKE ?', ['%' . strtolower($query) . '%'])->get();
        return response()->json($movies);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string',
            'release_year' => 'required|integer',
            'runtime' => 'required|integer',
            'description' => 'nullable|string',
            'rate_avg' => 'nullable|numeric|min:0|max:5',
            'poster_path' => 'nullable|string',
        ]);

        $movie = Movie::create($validated);

        return response()->json(['message' => 'Movie created', 'data' => $movie], 201);
    }

    public function update(Request $request, $id)
    {
        $movie = Movie::find($id);

        if ($movie) {
            $validated = $request->validate([
                'title' => 'sometimes|string',
                'release_year' => 'sometimes|integer',
                'runtime' => 'sometimes|integer',
                'description' => 'nullable|string',
                'rate_avg' => 'nullable|numeric|min:0|max:10',
                'poster_path' => 'nullable|string',
            ]);

            $movie->update($validated);

            return response()->json(['message' => 'Movie updated', 'data' => $movie]);
        }

        return response()->json(['message' => 'Movie not found'], 404);
    }

    public function destroy($id)
    {
        $movie = Movie::find($id);

        if ($movie) {
            $movie->delete();
            return response()->json(['message' => 'Movie deleted']);
        }

        return response()->json(['message' => 'Movie not found'], 404);
    }
}
