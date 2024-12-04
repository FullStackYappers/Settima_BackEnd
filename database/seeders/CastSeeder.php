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
        ];

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

        }
    }
}
