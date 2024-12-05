<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MovieCountrySeeder extends Seeder
{
    public function run(): void
    {
        $movieCountryMappings = [
        ['movie_title' => 'Kill Bill: Vol. 1', 'country_names' => ['United States']],
        ['movie_title' => 'The Matrix', 'country_names' => ['United States', 'Australia']],
        ['movie_title' => 'The Lord of the Rings: The Fellowship of the Ring', 'country_names' => ['New Zealand', 'United States']],
        ['movie_title' => 'Avatar', 'country_names' => ['United States']],
        ['movie_title' => 'The Incredibles', 'country_names' => ['United States']],
        ['movie_title' => 'Oldboy', 'country_names' => ['South Korea']],
        ['movie_title' => 'John Wick', 'country_names' => ['United States']],
        ['movie_title' => 'Barbie', 'country_names' => ['United States', 'United Kingdom']],
        ['movie_title' => 'Everything Everywhere All at Once', 'country_names' => ['United States']],
        ['movie_title' => 'Interstellar', 'country_names' => ['United States']],
        ['movie_title' => 'Dune', 'country_names' => ['United States', 'Canada']],
        ['movie_title' => 'Inception', 'country_names' => ['United States', 'United Kingdom']],
        ['movie_title' => 'Spirited Away', 'country_names' => ['Japan']],
        ['movie_title' => 'Ratatouille', 'country_names' => ['United States']],
        ['movie_title' => 'Fantastic Mr. Fox', 'country_names' => ['United States', 'United Kingdom']],
        ['movie_title' => 'Inside Out', 'country_names' => ['United States']],
        ['movie_title' => 'Coco', 'country_names' => ['United States', 'Mexico']],
        ['movie_title' => 'The Wolf of Wall Street', 'country_names' => ['United States']],
        ['movie_title' => 'The Truman Show', 'country_names' => ['United States']],
        ['movie_title' => 'Forrest Gump', 'country_names' => ['United States']],
        ['movie_title' => 'Joker', 'country_names' => ['United States']],
        ['movie_title' => 'Pulp Fiction', 'country_names' => ['United States']],
        ['movie_title' => 'American Psycho', 'country_names' => ['United States']],
        ['movie_title' => 'Se7en', 'country_names' => ['United States']],
        ['movie_title' => 'Jackass Forever', 'country_names' => ['United States']],
        ['movie_title' => 'Miss Americana', 'country_names' => ['United States']],
        ['movie_title' => 'Fire of Love', 'country_names' => ['France', 'United States']],
        ['movie_title' => 'The Social Dilemma', 'country_names' => ['United States']],
        ['movie_title' => 'Koyaanisqatsi', 'country_names' => ['United States']],
        ['movie_title' => 'Midsommar', 'country_names' => ['United States', 'Sweden']],
        ['movie_title' => 'Whiplash', 'country_names' => ['United States']],
        ['movie_title' => 'Cruella', 'country_names' => ['United States', 'United Kingdom']],
        ['movie_title' => 'Charlie and the Chocolate Factory', 'country_names' => ['United States', 'United Kingdom']],
        ['movie_title' => 'Home Alone', 'country_names' => ['United States']],
        ['movie_title' => 'The Lighthouse', 'country_names' => ['United States', 'Canada']],
        ['movie_title' => 'The Northman', 'country_names' => ['United States', 'United Kingdom']],
        ['movie_title' => 'Oppenheimer', 'country_names' => ['United States', 'United Kingdom']],
        ['movie_title' => '1917', 'country_names' => ['United Kingdom', 'United States']],
        ['movie_title' => 'Portrait of a Lady on Fire', 'country_names' => ['France']],
        ['movie_title' => 'The Zone of Interest', 'country_names' => ['United Kingdom', 'Germany', 'Poland']],
        ['movie_title' => 'Society of the Snow', 'country_names' => ['Argentina', 'Spain']],
        ['movie_title' => 'Longlegs', 'country_names' => ['United States']],
        ['movie_title' => 'Pearl', 'country_names' => ['United States']],
        ['movie_title' => 'Us', 'country_names' => ['United States']],
        ['movie_title' => 'Sound of Metal', 'country_names' => ['United States']],
        ['movie_title' => 'TÁR', 'country_names' => ['United States']],
        ['movie_title' => 'Maestro', 'country_names' => ['United States']],
        ['movie_title' => 'Cold War', 'country_names' => ['Poland', 'France']],
        ['movie_title' => 'Barbarian', 'country_names' => ['United States']],
        ['movie_title' => 'The Lobster', 'country_names' => ['Ireland', 'United Kingdom', 'Greece']],
        ['movie_title' => 'Arrival', 'country_names' => ['United States', 'Canada']],
        ['movie_title' => 'Saltburn', 'country_names' => ['United Kingdom']],
        ['movie_title' => 'Jojo Rabbit', 'country_names' => ['New Zealand', 'United States']],
        ['movie_title' => 'Inglourious Basterds', 'country_names' => ['United States', 'Germany']],
        ['movie_title' => 'Come and See', 'country_names' => ['Soviet Union']],
        ['movie_title' => 'Poor Things', 'country_names' => ['United Kingdom']],
        ['movie_title' => 'The Pianist', 'country_names' => ['France', 'Poland', 'Germany']],
        ['movie_title' => 'Django Unchained', 'country_names' => ['United States']],
        ['movie_title' => 'The Revenant', 'country_names' => ['United States', 'Canada']],
        ['movie_title' => 'The Hateful Eight', 'country_names' => ['United States']],
        ['movie_title' => 'The Good, the Bad and the Ugly', 'country_names' => ['Italy']],
        ['movie_title' => 'The Power of the Dog', 'country_names' => ['New Zealand', 'United Kingdom', 'Australia']],
        ['movie_title' => 'Rango', 'country_names' => ['United States']],
        ];

        foreach ($movieCountryMappings as $mapping) {
            $movieId = DB::table('movie')->where('title', $mapping['movie_title'])->value('id');
            foreach ($mapping['country_names'] as $countryName) {
                $countryId = DB::table('country')->where('name', $countryName)->value('id');
                if ($movieId && $countryId) {
                    DB::table('movie_country')->insertOrIgnore([
                        'movie_id' => $movieId,
                        'country_id' => $countryId,
                    ]);
                }
            }
        }
    }

}
