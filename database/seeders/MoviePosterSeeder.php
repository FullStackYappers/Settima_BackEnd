<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class MoviePosterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $movie_posters = [
            ['movie_title' => 'Kill Bill: Vol. 1', 'poster_path' => 'images/movie_posters/KillBillVol1.webp'],
            ['movie_title' => 'The Matrix', 'poster_path' => 'images/movie_posters/TheMatrix.webp'],
            ['movie_title' => 'The Lord of the Rings: The Fellowship of the Ring', 'poster_path' => 'images/movie_posters/TheLordOfTheRingsTheFellowshipOfTheRing.webp'],
            ['movie_title' => 'Avatar', 'poster_path' => 'images/movie_posters/Avatar.webp'],
            ['movie_title' => 'The Incredibles', 'poster_path' => 'images/movie_posters/TheIncredibles.webp'],
            ['movie_title' => 'Oldboy', 'poster_path' => 'images/movie_posters/ThePoster.webp'],
            ['movie_title' => 'John Wick', 'poster_path' => 'images/movie_posters/JohnWick.webp'],
            ['movie_title' => 'Barbie', 'poster_path' => 'images/movie_posters/Barbie.webp'],
            ['movie_title' => 'Everything Everywhere All at Once', 'poster_path' => 'images/movie_posters/EverythingEverywhereAllAtOnce.webp'],
            ['movie_title' => 'Interstellar', 'poster_path' => 'images/movie_posters/Interstellar.webp'],
            ['movie_title' => 'Dune', 'poster_path' => 'images/movie_posters/Dune.webp'],
            ['movie_title' => 'Inception', 'poster_path' => 'images/movie_posters/Inception.webp'],
            ['movie_title' => 'Spirited Away', 'poster_path' => 'images/movie_posters/SpiritedAway.webp'],
            ['movie_title' => 'Ratatouille', 'poster_path' => 'images/movie_posters/Ratatouille.webp'],
            ['movie_title' => 'Fantastic Mr. Fox', 'poster_path' => 'images/movie_posters/FantasticMrFox.webp'],
            ['movie_title' => 'Inside Out', 'poster_path' => 'images/movie_posters/InsideOut.webp'],
            ['movie_title' => 'Coco', 'poster_path' => 'images/movie_posters/Coco.webp'],
            ['movie_title' => 'The Wolf of Wall Street', 'poster_path' => 'images/movie_posters/TheWolfOfWallStreet.webp'],
            ['movie_title' => 'The Truman Show', 'poster_path' => 'images/movie_posters/TheTrumanShow.webp'],
            ['movie_title' => 'Forrest Gump', 'poster_path' => 'images/movie_posters/ThePoster.webp'],
            ['movie_title' => 'Joker', 'poster_path' => 'images/movie_posters/Joker.webp'],
            ['movie_title' => 'Pulp Fiction', 'poster_path' => 'images/movie_posters/PulpFiction.webp'],
            ['movie_title' => 'American Psycho', 'poster_path' => 'images/movie_posters/ThePoster.webp'],
            ['movie_title' => 'Se7en', 'poster_path' => 'images/movie_posters/ThePoster.webp'],
            ['movie_title' => 'Jackass Forever', 'poster_path' => 'images/movie_posters/ThePoster.webp'],
            ['movie_title' => 'Miss Americana', 'poster_path' => 'images/movie_posters/ThePoster.webp'],
            ['movie_title' => 'Fire of Love', 'poster_path' => 'images/movie_posters/ThePoster.webp'],
            ['movie_title' => 'The Social Dilemma', 'poster_path' => 'images/movie_posters/ThePoster.webp'],
            ['movie_title' => 'Koyaanisqatsi', 'poster_path' => 'images/movie_posters/ThePoster.webp'],
            ['movie_title' => 'Midsommar', 'poster_path' => 'images/movie_posters/Midsommar.webp'],
            ['movie_title' => 'Whiplash', 'poster_path' => 'images/movie_posters/ThePoster.webp'],
            ['movie_title' => 'Cruella', 'poster_path' => 'images/movie_posters/ThePoster.webp'],
            ['movie_title' => 'Charlie and the Chocolate Factory', 'poster_path' => 'images/movie_posters/ThePoster.webp'],
            ['movie_title' => 'Home Alone', 'poster_path' => 'images/movie_posters/HomeAlone.webp'],
            ['movie_title' => 'The Lighthouse', 'poster_path' => 'images/movie_posters/TheLighthouse.webp'],
            ['movie_title' => 'The Northman', 'poster_path' => 'images/movie_posters/ThePoster.webp'],
            ['movie_title' => 'Oppenheimer', 'poster_path' => 'images/movie_posters/ThePoster.webp'],
            ['movie_title' => '1917', 'poster_path' => 'images/movie_posters/ThePoster.webp'],
            ['movie_title' => 'Portrait of a Lady on Fire', 'poster_path' => 'images/movie_posters/ThePoster.webp'],
            ['movie_title' => 'The Zone of Interest', 'poster_path' => 'images/movie_posters/ThePoster.webp'],
            ['movie_title' => 'Society of the Snow', 'poster_path' => 'images/movie_posters/ThePoster.webp'],
            ['movie_title' => 'Longlegs', 'poster_path' => 'images/movie_posters/ThePoster.webp'],
            ['movie_title' => 'Pearl', 'poster_path' => 'images/movie_posters/ThePoster.webp'],
            ['movie_title' => 'Us', 'poster_path' => 'images/movie_posters/Us.webp'],
            ['movie_title' => 'Sound of Metal', 'poster_path' => 'images/movie_posters/ThePoster.webp'],
            ['movie_title' => 'TÁR', 'poster_path' => 'images/movie_posters/ThePoster.webp'],
            ['movie_title' => 'Maestro', 'poster_path' => 'images/movie_posters/ThePoster.webp'],
            ['movie_title' => 'Cold War', 'poster_path' => 'images/movie_posters/ThePoster.webp'],
            ['movie_title' => 'Barbarian', 'poster_path' => 'images/movie_posters/ThePoster.webp'],
            ['movie_title' => 'The Lobster', 'poster_path' => 'images/movie_posters/ThePoster.webp'],
            ['movie_title' => 'Arrival', 'poster_path' => 'images/movie_posters/ThePoster.webp'],
            ['movie_title' => 'Saltburn', 'poster_path' => 'images/movie_posters/ThePoster.webp'],
            ['movie_title' => 'Jojo Rabbit', 'poster_path' => 'images/movie_posters/ThePoster.webp'],
            ['movie_title' => 'Inglourious Basterds', 'poster_path' => 'images/movie_posters/ThePoster.webp'],
            ['movie_title' => 'Come and See', 'poster_path' => 'images/movie_posters/ThePoster.webp'],
            ['movie_title' => 'Poor Things', 'poster_path' => 'images/movie_posters/ThePoster.webp'],
            ['movie_title' => 'The Pianist', 'poster_path' => 'images/movie_posters/ThePoster.webp'],
            ['movie_title' => 'Django Unchained', 'poster_path' => 'images/movie_posters/ThePoster.webp'],
            ['movie_title' => 'The Revenant', 'poster_path' => 'images/movie_posters/ThePoster.webp'],
            ['movie_title' => 'The Hateful Eight', 'poster_path' => 'images/movie_posters/ThePoster.webp'],
            ['movie_title' => 'The Good, the Bad and the Ugly', 'poster_path' => 'images/movie_posters/ThePoster.webp'],
            ['movie_title' => 'The Power of the Dog', 'poster_path' => 'images/movie_posters/ThePoster.webp'],
            ['movie_title' => 'Rango', 'poster_path' => 'images/movie_posters/ThePoster.webp'],      
        ];

        foreach ($movie_posters as $movie_poster){
            $movie_id = DB::table('movies')->where('title', $movie_poster['movie_title'])->first();

            DB::table('movie_poster')->updateOrInsert(
                ['movie_id' => $movie_id->id, 'poster_path' => $movie_poster['poster_path']],
                ['poster_path' => $movie_poster['poster_path']]
            );

        }
    }
}
