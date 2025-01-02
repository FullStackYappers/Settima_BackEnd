<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cast;

class CastController extends Controller
{
    public function index($movieId)
    {
        $cast = Cast::where('movie_id', $movieId)->with('person')->get();

        return response()->json($cast);
    }
}
