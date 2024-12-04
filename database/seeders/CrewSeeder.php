<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CrewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $crewMappings = [
            ['movie_title' => 'Kill Bill: Vol. 1', 'person_name' => 'Quentin Tarantino', 'department' => 'Director'],
            ['movie_title' => 'Kill Bill: Vol. 1', 'person_name' => 'RZA', 'department' => 'Music'],
            ['movie_title' => 'Kill Bill: Vol. 1', 'person_name' => 'Robert Richardson', 'department' => 'Cinematography'],
            ['movie_title' => 'Kill Bill: Vol. 1', 'person_name' => 'Bob Beher', 'department' => 'Sound'],
            ['movie_title' => 'Kill Bill: Vol. 1', 'person_name' => 'Quentin Tarantino', 'department' => 'Plot'],
            ['movie_title' => 'The Matrix', 'person_name' => 'Lana Wachowski', 'department' => 'Director'],
            ['movie_title' => 'The Matrix', 'person_name' => 'Lilly Wachowski', 'department' => 'Director'],
            ['movie_title' => 'The Matrix', 'person_name' => 'Lana Wachowski', 'department' => 'Plot'],
            ['movie_title' => 'The Matrix', 'person_name' => 'Lilly Wachowski', 'department' => 'Plot'],
            ['movie_title' => 'The Matrix', 'person_name' => 'Don Davis', 'department' => 'Music'],
            ['movie_title' => 'The Matrix', 'person_name' => 'Bill Pope', 'department' => 'Cinematography'],
            ['movie_title' => 'The Matrix', 'person_name' => 'Dane A. Davis', 'department' => 'Sound'],
            ['movie_title' => 'The Lord of the Rings: The Fellowship of the Ring', 'person_name' => 'Peter Jackson', 'department' => 'Director'],
            ['movie_title' => 'The Lord of the Rings: The Fellowship of the Ring', 'person_name' => 'J.R.R. Tolkien', 'department' => 'Plot'],
            ['movie_title' => 'The Lord of the Rings: The Fellowship of the Ring', 'person_name' => 'Fran Walsh', 'department' => 'Plot'],
            ['movie_title' => 'The Lord of the Rings: The Fellowship of the Ring', 'person_name' => 'Philippa Boyens', 'department' => 'Plot'],
            ['movie_title' => 'The Lord of the Rings: The Fellowship of the Ring', 'person_name' => 'Howard Shore', 'department' => 'Music'],
            ['movie_title' => 'The Lord of the Rings: The Fellowship of the Ring', 'person_name' => 'Andrew Lesnie', 'department' => 'Cinematography'],
            ['movie_title' => 'The Lord of the Rings: The Fellowship of the Ring', 'person_name' => 'Mike Hopkins', 'department' => 'Sound'],
            ['movie_title' => 'Avatar', 'person_name' => 'James Cameron', 'department' => 'Director'],
            ['movie_title' => 'Avatar', 'person_name' => 'James Cameron', 'department' => 'Plot'],
            ['movie_title' => 'Avatar', 'person_name' => 'James Horner', 'department' => 'Music'],
            ['movie_title' => 'Avatar', 'person_name' => 'Mauro Fiore', 'department' => 'Cinematography'],
            ['movie_title' => 'Avatar', 'person_name' => 'Sincere Connor', 'department' => 'Sound'],
        ];

        foreach ($crewMappings as $mapping){
            //Retrieve Movie ID
            $movie = DB::table('movie')->where('title', $mapping['movie_title'])->first();

            //Retrieve Person ID
            $person = DB::table('person')->where('name', $mapping['person_name'])->first();

            //Retrieve Department ID
            $department = DB::table('department')->where('name', $mapping['department'])->first();
            
            //Add MovieID, PersonID and character name
            if($movie && $person){
                DB::table('crew')->updateOrInsert([
                    'movie_id' => $movie->id,
                    'person_id'=> $person->id,
                    'department_id' => $department->id,
                ]);
            }

        }
    }
}
