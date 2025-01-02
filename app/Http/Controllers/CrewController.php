<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Crew;

class CrewController extends Controller
{
    public function index($movieId)
    {
        $crew = Crew::where('movie_id', $movieId)->with(['person', 'department'])->get();

        return response()->json($crew);
    }
}
