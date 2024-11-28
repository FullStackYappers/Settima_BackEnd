<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MovieGenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $movieGenreMappings = [
        ['movie_title' => 'Kill Bill: Vol. 1', 'genre_names' => ['Action', 'Crime']],
        ['movie_title' => 'The Matrix', 'genre_names' => ['Action', 'Science Fiction']],
        ['movie_title' => 'The Lord of the Rings: The Fellowship of the Ring', 'genre_names' => ['Action', 'Fantasy', 'Adventure']],
        ['movie_title' => 'Avatar', 'genre_names' => ['Action', 'Science Fiction', 'Fantasy', 'Adventure']],
        ['movie_title' => 'The Incredibles', 'genre_names' => ['Animation', 'Family', 'Adventure', 'Action']],
        ['movie_title' => 'Oldboy', 'genre_names' => ['Thriller', 'Mystery', 'Drama', 'Action']],
        ['movie_title' => 'John Wick', 'genre_names' => ['Action', 'Thriller']],
        ['movie_title' => 'Barbie', 'genre_names' => ['Adventure', 'Comedy']],
        ['movie_title' => 'Everything Everywhere All at Once', 'genre_names' => ['Science Fiction', 'Adventure', 'Comedy', 'Action']],
        ['movie_title' => 'Interstellar', 'genre_names' => ['Science Fiction', 'Drama', 'Adventure']],
        ['movie_title' => 'Dune', 'genre_names' => ['Science Fiction', 'Adventure']],
        ['movie_title' => 'Inception', 'genre_names' => ['Action', 'Adventure', 'Science Fiction']],
        ['movie_title' => 'Spirited Away', 'genre_names' => ['Animation', 'Fantasy']],
        ['movie_title' => 'Ratatouille', 'genre_names' => ['Animation', 'Comedy', 'Family']],
        ['movie_title' => 'Fantastic Mr. Fox', 'genre_names' => ['Animation', 'Comedy', 'Adventure']],
        ['movie_title' => 'Inside Out', 'genre_names' => ['Animation', 'Family', 'Adventure']],
        ['movie_title' => 'Coco', 'genre_names' => ['Animation', 'Family', 'Music', 'Adventure']],
        ['movie_title' => 'The Wolf of Wall Street', 'genre_names' => ['Drama', 'Comedy']],
        ['movie_title' => 'The Truman Show', 'genre_names' => ['Drama', 'Comedy', 'Science Fiction']],
        ['movie_title' => 'Forrest Gump', 'genre_names' => ['Drama', 'Romance']],
        ['movie_title' => 'Joker', 'genre_names' => ['Crime', 'Drama', 'Thriller']],
        ['movie_title' => 'Pulp Fiction', 'genre_names' => ['Crime', 'Drama']],
        ['movie_title' => 'American Psycho', 'genre_names' => ['Drama', 'Crime', 'Horror']],
        ['movie_title' => 'Se7en', 'genre_names' => ['Crime', 'Thriller', 'Drama']],
        ['movie_title' => 'Jackass Forever', 'genre_names' => ['Documentary', 'Comedy']],
        ['movie_title' => 'Miss Americana', 'genre_names' => ['Documentary']],
        ['movie_title' => 'Fire of Love', 'genre_names' => ['Documentary', 'Romance']],
        ['movie_title' => 'The Social Dilemma', 'genre_names' => ['Documentary']],
        ['movie_title' => 'Koyaanisqatsi', 'genre_names' => ['Documentary']],
        ['movie_title' => 'Midsommar', 'genre_names' => ['Horror', 'Drama']],
        ['movie_title' => 'Whiplash', 'genre_names' => ['Drama', 'Music']],
        ['movie_title' => 'Cruella', 'genre_names' => ['Crime', 'Comedy', 'Drama']],
        ['movie_title' => 'Charlie and the Chocolate Factory', 'genre_names' => ['Family', 'Adventure', 'Comedy']],
        ['movie_title' => 'Home Alone', 'genre_names' => ['Family', 'Comedy']],
        ['movie_title' => 'The Lighthouse', 'genre_names' => ['Drama', 'Horror']],
        ['movie_title' => 'The Northman', 'genre_names' => ['Action', 'Drama']],
        ['movie_title' => 'Oppenheimer', 'genre_names' => ['Drama', 'History']],
        ['movie_title' => '1917', 'genre_names' => ['Drama', 'War']],
        ['movie_title' => 'Portrait of a Lady on Fire', 'genre_names' => ['Drama', 'Romance']],
        ['movie_title' => 'The Zone of Interest', 'genre_names' => ['Drama']],
        ['movie_title' => 'Society of the Snow', 'genre_names' => ['Drama', 'History']],
        ['movie_title' => 'Longlegs', 'genre_names' => ['Horror', 'Thriller']],
        ['movie_title' => 'Pearl', 'genre_names' => ['Horror', 'Drama']],
        ['movie_title' => 'Us', 'genre_names' => ['Horror', 'Thriller']],
        ['movie_title' => 'Sound of Metal', 'genre_names' => ['Drama', 'Music']],
        ['movie_title' => 'TÁR', 'genre_names' => ['Drama', 'Music']],
        ['movie_title' => 'Maestro', 'genre_names' => ['Drama', 'Music']],
        ['movie_title' => 'Cold War', 'genre_names' => ['Drama', 'Romance']],
        ['movie_title' => 'Barbarian', 'genre_names' => ['Horror', 'Thriller']],
        ['movie_title' => 'The Lobster', 'genre_names' => ['Comedy', 'Drama', 'Romance']],
        ['movie_title' => 'Arrival', 'genre_names' => ['Science Fiction', 'Drama']],
        ['movie_title' => 'Saltburn', 'genre_names' => ['Drama']],
        ['movie_title' => 'Jojo Rabbit', 'genre_names' => ['Drama', 'Comedy']],
        ['movie_title' => 'Inglourious Basterds', 'genre_names' => ['Action', 'Drama', 'War']],
        ['movie_title' => 'Come and See', 'genre_names' => ['Drama', 'War']],
        ['movie_title' => 'Poor Things', 'genre_names' => ['Comedy', 'Drama']],
        ['movie_title' => 'The Pianist', 'genre_names' => ['Drama', 'History']],
        ['movie_title' => 'Django Unchained', 'genre_names' => ['Action', 'Drama', 'Western']],
        ['movie_title' => 'The Revenant', 'genre_names' => ['Adventure', 'Drama', 'History']],
        ['movie_title' => 'The Hateful Eight', 'genre_names' => ['Drama', 'Western']],
        ['movie_title' => 'The Good, the Bad and the Ugly', 'genre_names' => ['Western']],
        ['movie_title' => 'The Power of the Dog', 'genre_names' => ['Drama', 'Western']],
        ['movie_title' => 'Rango', 'genre_names' => ['Animation', 'Western']],
        ];

        foreach ($movieGenreMappings as $mapping) {
            $movie = DB::table('movies')->where('title', $mapping['movie_title'])->first();
            foreach ($mapping['genre_names'] as $genreName) {
                $genre = DB::table('genres')->where('name', $genreName)->first();
                DB::table('movie_genre')->insert([
                    'movie_id' => $movie->id,
                    'genre_id' => $genre->id,
                ]);
            }
        }
    }
}
