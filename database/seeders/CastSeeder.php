<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CastSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $castMappings = [
            ['movie_title' => 'Kill Bill: Vol. 1', 'person_name' => 'Uma Thurman', 'character_name' => 'The Bride'],
            ['movie_title' => 'Kill Bill: Vol. 1', 'person_name' => 'David Carradine', 'character_name' => 'Bill'],
            ['movie_title' => 'Kill Bill: Vol. 1', 'person_name' => 'Daryl Hannah', 'character_name' => 'Elle Driver'],
            ['movie_title' => 'The Matrix', 'person_name' => 'Keanu Reeves', 'character_name' => 'Neo'],
            ['movie_title' => 'The Matrix', 'person_name' => 'Laurence Fishburne', 'character_name' => 'Morpheus'],
            ['movie_title' => 'The Matrix', 'person_name' => 'Carrie-Anne Moss', 'character_name' => 'Trinity'],
            ['movie_title' => 'The Lord of the Rings: The Fellowship of the Ring', 'person_name' => 'Elijah Wood', 'character_name' => 'Frodo'],
            ['movie_title' => 'The Lord of the Rings: The Fellowship of the Ring', 'person_name' => 'Ian McKellen', 'character_name' => 'Gandalf'],
            ['movie_title' => 'The Lord of the Rings: The Fellowship of the Ring', 'person_name' => 'Orlando Bloom', 'character_name' => 'Legolas'],
            ['movie_title' => 'Avatar', 'person_name' => 'Sam Worthington', 'character_name' => 'Jake Sully'],
            ['movie_title' => 'Avatar', 'person_name' => 'Zoe Saldana', 'character_name' => 'Neytiri'],
            ['movie_title' => 'Avatar', 'person_name' => 'Sigourney Weaver', 'character_name' => 'Dr. Grace Augustine'],
            ['movie_title' => 'Joker', 'person_name' => 'Joaquin Phoenix', 'character_name' => 'Arthur Fleck'],
            ['movie_title' => 'Joker', 'person_name' => 'Robert De Niro', 'character_name' => 'Murray Franklin'],
            ['movie_title' => 'Joker', 'person_name' => 'Zazie Beetz', 'character_name' => 'Sophie Dumond'],
            ['movie_title' => 'Pulp Fiction', 'person_name' => 'John Travolta', 'character_name' => 'Vincent Vega'],
            ['movie_title' => 'Pulp Fiction', 'person_name' => 'Uma Thurman', 'character_name' => 'Jules Winnfield'],
            ['movie_title' => 'Pulp Fiction', 'person_name' => 'Samuel L. Jackson', 'character_name' => 'Mia Wallace'],
            ['movie_title' => 'Interstellar', 'person_name' => 'Matthew McConaughey', 'character_name' => 'Cooper'],
            ['movie_title' => 'Interstellar', 'person_name' => 'Anne Hathaway', 'character_name' => 'Brand'],
            ['movie_title' => 'Interstellar', 'person_name' => 'Jessica Chastain', 'character_name' => 'Murph'],
            ['movie_title' => 'Inception', 'person_name' => 'Leonardo DiCaprio', 'character_name' => 'Cobb'],
            ['movie_title' => 'Inception', 'person_name' => 'Joseph Gordon-Levitt', 'character_name' => 'Arthur'],
            ['movie_title' => 'Inception', 'person_name' => 'Elliot Page', 'character_name' => 'Ariadne'],
            ['movie_title' => 'Dune', 'person_name' => 'Timothée Chalamet', 'character_name' => 'Paul Atreides'],
            ['movie_title' => 'Dune', 'person_name' => 'Rebecca Ferguson', 'character_name' => 'Lady Jessica Atreides'],
            ['movie_title' => 'Dune', 'person_name' => 'Zendaya', 'character_name' => 'Chani'],
            //['movie_title' => '', 'person_name' => '', 'character_name' => ''],
        ];

        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('cast')->truncate();

        foreach ($castMappings as $mapping){
            //Retrieve Movie ID
            $movie = DB::table('movie')->where('title', $mapping['movie_title'])->first();

            //Retrieve Person ID
            $person = DB::table('person')->where('name', $mapping['person_name'])->first();
            
            
            //Add MovieID, PersonID and character name
            if($movie && $person){
                DB::table('cast')->updateOrInsert([
                    'movie_id' => $movie->id,
                    'person_id'=> $person->id,
                    'character_name' => $mapping['character_name']
                ]);
            }

            DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        }
    }
}
