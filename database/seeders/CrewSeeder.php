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
            ['movie_title' => 'Kill Bill: Vol. 1', 'person_name' => 'RZA', 'department' => 'Composer'],
            ['movie_title' => 'Kill Bill: Vol. 1', 'person_name' => 'Robert Richardson', 'department' => 'Cinematographer'],
            ['movie_title' => 'Kill Bill: Vol. 1', 'person_name' => 'Quentin Tarantino', 'department' => 'Writer'],
            ['movie_title' => 'Kill Bill: Vol. 1', 'person_name' => 'Sally Menke', 'department' => 'Editor'],
            ['movie_title' => 'Kill Bill: Vol. 1', 'person_name' => 'Kumiko Ogawa', 'department' => 'Costume Designer'],
            ['movie_title' => 'The Matrix', 'person_name' => 'Lana Wachowski', 'department' => 'Director'],
            ['movie_title' => 'The Matrix', 'person_name' => 'Lilly Wachowski', 'department' => 'Director'],
            ['movie_title' => 'The Matrix', 'person_name' => 'Lana Wachowski', 'department' => 'Writer'],
            ['movie_title' => 'The Matrix', 'person_name' => 'Lilly Wachowski', 'department' => 'Writer'],
            ['movie_title' => 'The Matrix', 'person_name' => 'Don Davis', 'department' => 'Composer'],
            ['movie_title' => 'The Matrix', 'person_name' => 'Bill Pope', 'department' => 'Cinematographer'],
            ['movie_title' => 'The Matrix', 'person_name' => 'Zach Staenberg', 'department' => 'Editor'],
            ['movie_title' => 'The Matrix', 'person_name' => 'Kym Barrett', 'department' => 'Costume Designer'],
            ['movie_title' => 'The Lord of the Rings: The Fellowship of the Ring', 'person_name' => 'Peter Jackson', 'department' => 'Director'],
            ['movie_title' => 'The Lord of the Rings: The Fellowship of the Ring', 'person_name' => 'J.R.R. Tolkien', 'department' => 'Writer'],
            ['movie_title' => 'The Lord of the Rings: The Fellowship of the Ring', 'person_name' => 'Fran Walsh', 'department' => 'Writer'],
            ['movie_title' => 'The Lord of the Rings: The Fellowship of the Ring', 'person_name' => 'Philippa Boyens', 'department' => 'Writer'],
            ['movie_title' => 'The Lord of the Rings: The Fellowship of the Ring', 'person_name' => 'Howard Shore', 'department' => 'Composer'],
            ['movie_title' => 'The Lord of the Rings: The Fellowship of the Ring', 'person_name' => 'Andrew Lesnie', 'department' => 'Cinematographer'],
            ['movie_title' => 'The Lord of the Rings: The Fellowship of the Ring', 'person_name' => 'John Gilbert', 'department' => 'Editor'],
            ['movie_title' => 'The Lord of the Rings: The Fellowship of the Ring', 'person_name' => 'Ngila Dickson', 'department' => 'Costume Designer'],
            ['movie_title' => 'Avatar', 'person_name' => 'James Cameron', 'department' => 'Director'],
            ['movie_title' => 'Avatar', 'person_name' => 'James Cameron', 'department' => 'Writer'],
            ['movie_title' => 'Avatar', 'person_name' => 'James Horner', 'department' => 'Composer'],
            ['movie_title' => 'Avatar', 'person_name' => 'Mauro Fiore', 'department' => 'Cinematographer'],
            ['movie_title' => 'Avatar', 'person_name' => 'John Refoua', 'department' => 'Editor'],
            ['movie_title' => 'Avatar', 'person_name' => 'Mayes C. Rubeo', 'department' => 'Costume Designer'],
            ['movie_title' => 'Joker', 'person_name' => 'Todd Phillips', 'department' => 'Director'],
            ['movie_title' => 'Joker', 'person_name' => 'Todd Phillips', 'department' => 'Writer'],
            ['movie_title' => 'Joker', 'person_name' => 'Scott Silver', 'department' => 'Writer'],
            ['movie_title' => 'Joker', 'person_name' => 'Hildur Guðnadóttir', 'department' => 'Composer'],
            ['movie_title' => 'Joker', 'person_name' => 'Lawrence Sher', 'department' => 'Cinematographer'],
            ['movie_title' => 'Joker', 'person_name' => 'Jeff Groth', 'department' => 'Editor'],
            ['movie_title' => 'Joker', 'person_name' => 'Mark Bridges', 'department' => 'Costume Designer'],
            ['movie_title' => 'Pulp Fiction', 'person_name' => 'Quentin Tarantino', 'department' => 'Director'],
            ['movie_title' => 'Pulp Fiction', 'person_name' => 'Quentin Tarantino', 'department' => 'Writer'],
            ['movie_title' => 'Pulp Fiction', 'person_name' => 'Roger Avary', 'department' => 'Writer'],
            ['movie_title' => 'Pulp Fiction', 'person_name' => 'Quentin Tarantino', 'department' => 'Composer'],
            ['movie_title' => 'Pulp Fiction', 'person_name' => 'Andrzej Sekula', 'department' => 'Cinematographer'],
            ['movie_title' => 'Pulp Fiction', 'person_name' => 'Sally Menke', 'department' => 'Editor'],
            ['movie_title' => 'Pulp Fiction', 'person_name' => 'Betsy Heimann', 'department' => 'Costume Design'],
            ['movie_title' => 'Interstellar', 'person_name' => 'Christopher Nolan', 'department' => 'Director'],
            ['movie_title' => 'Interstellar', 'person_name' => 'Jonathan Nolan', 'department' => 'Writer'],
            ['movie_title' => 'Interstellar', 'person_name' => 'Christopher Nolan', 'department' => 'Writer'],
            ['movie_title' => 'Interstellar', 'person_name' => 'Hans Zimmer', 'department' => 'Composer'],
            ['movie_title' => 'Interstellar', 'person_name' => 'Hoyte Van Hoytema', 'department' => 'Cinematographer'],
            ['movie_title' => 'Interstellar', 'person_name' => 'Lee Smith', 'department' => 'Editor'],
            ['movie_title' => 'Interstellar', 'person_name' => 'Mary Zophres', 'department' => 'Costume Designer'],
            ['movie_title' => 'Inception', 'person_name' => 'Christopher Nolan', 'department' => 'Director'],
            ['movie_title' => 'Inception', 'person_name' => 'Christopher Nolan', 'department' => 'Writer'],
            ['movie_title' => 'Inception', 'person_name' => 'Hans Zimmer', 'department' => 'Composer'],
            ['movie_title' => 'Inception', 'person_name' => 'Wally Pfister', 'department' => 'Cinematographer'],
            ['movie_title' => 'Inception', 'person_name' => 'Lee Smith', 'department' => 'Editor'],
            ['movie_title' => 'Inception', 'person_name' => 'Jeffrey Kurland', 'department' => 'Costume Designer'],
            ['movie_title' => 'Dune', 'person_name' => 'Denis Villeneuve', 'department' => 'Director'],
            ['movie_title' => 'Dune', 'person_name' => 'Jon Spaihts', 'department' => 'Writer'],
            ['movie_title' => 'Dune', 'person_name' => 'Denis Villeneuve', 'department' => 'Writer'],
            ['movie_title' => 'Dune', 'person_name' => 'Hans Zimmer', 'department' => 'Composer'],
            ['movie_title' => 'Dune', 'person_name' => 'Greig Fraser', 'department' => 'Cinematographer'],
            ['movie_title' => 'Dune', 'person_name' => 'Joe Walker', 'department' => 'Editor'],
            ['movie_title' => 'Dune', 'person_name' => 'Bob Morgan', 'department' => 'Costume Designer'],
            ['movie_title' => 'The Incredibles', 'person_name' => 'Brad Bird', 'department' => 'Director'],
            ['movie_title' => 'The Incredibles', 'person_name' => 'Brad Bird', 'department' => 'Writer'],
            ['movie_title' => 'The Incredibles', 'person_name' => 'Michael Giacchino', 'department' => 'Composer'],
            ['movie_title' => 'The Incredibles', 'person_name' => 'Andrew Jimenez', 'department' => 'Cinematographer'],
            ['movie_title' => 'The Incredibles', 'person_name' => 'Stephen Schaffer', 'department' => 'Editor'],
            ['movie_title' => 'The Incredibles', 'person_name' => 'Animated', 'department' => 'Costume Designer'],
            ['movie_title' => 'Ratatouille', 'person_name' => 'Brad Bird', 'department' => 'Director'],
            ['movie_title' => 'Ratatouille', 'person_name' => 'Jan Pinkava', 'department' => 'Director'],
            ['movie_title' => 'Ratatouille', 'person_name' => 'Brad Bird', 'department' => 'Writer'],
            ['movie_title' => 'Ratatouille', 'person_name' => 'Jan Pinkava', 'department' => 'Writer'],
            ['movie_title' => 'Ratatouille', 'person_name' => 'Michael Giacchino', 'department' => 'Composer'],
            ['movie_title' => 'Ratatouille', 'person_name' => 'Harley Jessup', 'department' => 'Cinematographer'],
            ['movie_title' => 'Ratatouille', 'person_name' => 'Darren T. Holmes', 'department' => 'Editor'],
            ['movie_title' => 'Ratatouille', 'person_name' => 'Animated', 'department' => 'Costume Designer'],
            ['movie_title' => 'Coco', 'person_name' => 'Lee Unkrich', 'department' => 'Director'],
            ['movie_title' => 'Coco', 'person_name' => 'Adrian Molina', 'department' => 'Director'],
            ['movie_title' => 'Coco', 'person_name' => 'Lee Unkrich', 'department' => 'Writer'],
            ['movie_title' => 'Coco', 'person_name' => 'Matthew Aldrich', 'department' => 'Writer'],
            ['movie_title' => 'Coco', 'person_name' => 'Michael Giacchino', 'department' => 'Composer'],
            ['movie_title' => 'Coco', 'person_name' => 'Steve Bloom', 'department' => 'Editor'],
            ['movie_title' => 'Coco', 'person_name' => 'Harley Jessup', 'department' => 'Cinematographer'],
            ['movie_title' => 'Coco', 'person_name' => 'Animated', 'department' => 'Costume Designer'],
            ['movie_title' => 'Home Alone', 'person_name' => 'Chris Columbus', 'department' => 'Director'],
            ['movie_title' => 'Home Alone', 'person_name' => 'John Hughes', 'department' => 'Writer'],
            ['movie_title' => 'Home Alone', 'person_name' => 'John Williams', 'department' => 'Composer'],
            ['movie_title' => 'Home Alone', 'person_name' => 'Julio Macat', 'department' => 'Cinematographer'],
            ['movie_title' => 'Home Alone', 'person_name' => 'Raja Gosnell', 'department' => 'Editor'],
            ['movie_title' => 'Home Alone', 'person_name' => 'Jay Hurley', 'department' => 'Costume Designer'],
            ['movie_title' => 'The Truman Show', 'person_name' => 'Peter Weir', 'department' => 'Director'],
            ['movie_title' => 'The Truman Show', 'person_name' => 'Andrew Niccol', 'department' => 'Writer'],
            ['movie_title' => 'The Truman Show', 'person_name' => 'Burkhard von Dallwitz', 'department' => 'Composer'],
            ['movie_title' => 'The Truman Show', 'person_name' => 'Peter Biziou', 'department' => 'Cinematographer'],
            ['movie_title' => 'The Truman Show', 'person_name' => 'William M. Anderson', 'department' => 'Editor'],
            ['movie_title' => 'The Truman Show', 'person_name' => 'Marilyn Matthews', 'department' => 'Costume Designer'],
            //['movie_title' => '', 'person_name' => '', 'department' => ''],
        ];

        foreach ($crewMappings as $mapping){
            //Retrieve Movie ID
            $movie = DB::table('movie')->where('title', $mapping['movie_title'])->first();

            //Retrieve Person ID
            $person = DB::table('person')->where('name', $mapping['person_name'])->first();

            //Retrieve Department ID
            $department = DB::table('department')->where('name', $mapping['department'])->first();
            
            //Add MovieID, PersonID and character name
            if($movie && $person && $department){
                DB::table('crew')->updateOrInsert([
                    'movie_id' => $movie->id,
                    'person_id'=> $person->id,
                    'department_id' => $department->id,
                ]);
            }

        }
    }
}
