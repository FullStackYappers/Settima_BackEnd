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
            ['movie_title' => 'The Incredibles', 'person_name' => 'Craig T. Nelson', 'character_name' => 'Bob Parr / Mr. Incredible (voice)'],
            ['movie_title' => 'The Incredibles', 'person_name' => 'Samuel L. Jackson', 'character_name' => 'Lucius Best / Frozone (voice)'],
            ['movie_title' => 'The Incredibles', 'person_name' => 'Holly Hunter', 'character_name' => 'Helen Parr / Elastigirl (voice)'],
            ['movie_title' => 'Ratatouille', 'person_name' => 'Brad Garrett', 'character_name' => 'Gusteau (voice)'],
            ['movie_title' => 'Ratatouille', 'person_name' => 'Lou Romano', 'character_name' => 'Linguini (voice)'],
            ['movie_title' => 'Ratatouille', 'person_name' => 'Patton Oswalt', 'character_name' => 'Remy (voice)'],
            ['movie_title' => 'Coco', 'person_name' => 'Anthony Gonzalez', 'character_name' => 'Miguel (voice)'],
            ['movie_title' => 'Coco', 'person_name' => 'Gael García Bernal', 'character_name' => 'Héctor (voice)'],
            ['movie_title' => 'Coco', 'person_name' => 'Benjamin Bratt', 'character_name' => 'Ernesto de la Cruz (voice)'],
            ['movie_title' => 'Home Alone', 'person_name' => 'Macaulay Culkin', 'character_name' => 'Kevin McCallister'],
            ['movie_title' => 'Home Alone', 'person_name' => 'Joe Pesci', 'character_name' => 'Harry'],
            ['movie_title' => 'Home Alone', 'person_name' => 'Daniel Stern', 'character_name' => 'Marv'],
            ['movie_title' => 'The Truman Show', 'person_name' => 'Jim Carrey', 'character_name' => 'Truman Burbank'],
            ['movie_title' => 'The Truman Show', 'person_name' => 'Ed Harris', 'character_name' => 'Christof'],
            ['movie_title' => 'The Truman Show', 'person_name' => 'Laura Linney', 'character_name' => 'Meryl Burbank / Hannah Gill'],
            ['movie_title' => 'Midsommar', 'person_name' => 'Florence Pugh', 'character_name' => 'Dani'],
            ['movie_title' => 'Midsommar', 'person_name' => 'Jack Reynor', 'character_name' => 'Christian'],
            ['movie_title' => 'Midsommar', 'person_name' => 'Vilhelm Blomgren', 'character_name' => 'Pelle'],
            ['movie_title' => 'The Lighthouse', 'person_name' => 'Robert Pattinson', 'character_name' => 'Thomas Howard'],
            ['movie_title' => 'The Lighthouse', 'person_name' => 'Willem Dafoe', 'character_name' => 'Thomas Wake'],
            ['movie_title' => 'The Lighthouse', 'person_name' => 'Valeriia Karaman', 'character_name' => 'Mermaid'],
            ['movie_title' => 'Us', 'person_name' => 'Lupita Nyong\'o', 'character_name' => 'Adelaide Wilson / Red'],
            ['movie_title' => 'Us', 'person_name' => 'Winston Duke', 'character_name' => 'Gabe Wilson / Abraham'],
            ['movie_title' => 'Us', 'person_name' => 'Elisabeth Moss', 'character_name' => 'Kitty Tyler / Dahlia'],
            //['movie_title' => '', 'person_name' => '', 'character_name' => ''],
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
