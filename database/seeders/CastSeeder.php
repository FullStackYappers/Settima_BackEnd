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
            
            //Default Movies
            ['movie_title' => 'Oldboy', 'person_name' => 'The Actor', 'character_name' => 'Oh Dae-su'],
            ['movie_title' => 'Oldboy', 'person_name' => 'The Actress', 'character_name' => 'Mi-do'],
            ['movie_title' => 'Oldboy', 'person_name' => 'The Person', 'character_name' => 'Lee Woo-jin'],

            ['movie_title' => 'John Wick', 'person_name' => 'The Actor', 'character_name' => 'John Wick'],
            ['movie_title' => 'John Wick', 'person_name' => 'The Actress', 'character_name' => 'Helena'],
            ['movie_title' => 'John Wick', 'person_name' => 'The Person', 'character_name' => 'Viggo Tarasov'],

            ['movie_title' => 'Barbie', 'person_name' => 'The Actor', 'character_name' => 'Ken'],
            ['movie_title' => 'Barbie', 'person_name' => 'The Actress', 'character_name' => 'Barbie'],
            ['movie_title' => 'Barbie', 'person_name' => 'The Person', 'character_name' => 'Ruth Handler'],

            ['movie_title' => 'Everything Everywhere All at Once', 'person_name' => 'The Actor', 'character_name' => 'Evelyn Wang'],
            ['movie_title' => 'Everything Everywhere All at Once', 'person_name' => 'The Actress', 'character_name' => 'Joy Wang'],
            ['movie_title' => 'Everything Everywhere All at Once', 'person_name' => 'The Person', 'character_name' => 'Jobu Tupaki'],

            ['movie_title' => 'Spirited Away', 'person_name' => 'The Actor', 'character_name' => 'Chihiro'],
            ['movie_title' => 'Spirited Away', 'person_name' => 'The Actress', 'character_name' => 'Lin'],
            ['movie_title' => 'Spirited Away', 'person_name' => 'The Person', 'character_name' => 'Yubaba'],

            ['movie_title' => 'Fantastic Mr. Fox', 'person_name' => 'The Actor', 'character_name' => 'Mr. Fox'],
            ['movie_title' => 'Fantastic Mr. Fox', 'person_name' => 'The Actress', 'character_name' => 'Mrs. Fox'],
            ['movie_title' => 'Fantastic Mr. Fox', 'person_name' => 'The Person', 'character_name' => 'Rat'],

            ['movie_title' => 'Inside Out', 'person_name' => 'The Actor', 'character_name' => 'Joy'],
            ['movie_title' => 'Inside Out', 'person_name' => 'The Actress', 'character_name' => 'Sadness'],
            ['movie_title' => 'Inside Out', 'person_name' => 'The Person', 'character_name' => 'Disgust'],

            ['movie_title' => 'The Wolf of Wall Street', 'person_name' => 'The Actor', 'character_name' => 'Jordan Belfort'],
            ['movie_title' => 'The Wolf of Wall Street', 'person_name' => 'The Actress', 'character_name' => 'Naomi Lapaglia'],
            ['movie_title' => 'The Wolf of Wall Street', 'person_name' => 'The Person', 'character_name' => 'Donnie Azoff'],

            ['movie_title' => 'Forrest Gump', 'person_name' => 'The Actor', 'character_name' => 'Forrest Gump'],
            ['movie_title' => 'Forrest Gump', 'person_name' => 'The Actress', 'character_name' => 'Jenny Curran'],
            ['movie_title' => 'Forrest Gump', 'person_name' => 'The Person', 'character_name' => 'Lieutenant Dan'],

            ['movie_title' => 'American Psycho', 'person_name' => 'The Actor', 'character_name' => 'Patrick Bateman'],
            ['movie_title' => 'American Psycho', 'person_name' => 'The Actress', 'character_name' => 'Rachael'],
            ['movie_title' => 'American Psycho', 'person_name' => 'The Person', 'character_name' => 'Paul Allen'],

            ['movie_title' => 'Se7en', 'person_name' => 'The Actor', 'character_name' => 'Detective Mills'],
            ['movie_title' => 'Se7en', 'person_name' => 'The Actress', 'character_name' => 'Tracy Mills'],
            ['movie_title' => 'Se7en', 'person_name' => 'The Person', 'character_name' => 'John Doe'],

            ['movie_title' => 'Jackass Forever', 'person_name' => 'The Actor', 'character_name' => 'Johnny Knoxville'],
            ['movie_title' => 'Jackass Forever', 'person_name' => 'The Actress', 'character_name' => 'Rachel'],
            ['movie_title' => 'Jackass Forever', 'person_name' => 'The Person', 'character_name' => 'Steve-O'],

            ['movie_title' => 'Miss Americana', 'person_name' => 'The Actor', 'character_name' => 'Taylor Swift'],
            ['movie_title' => 'Miss Americana', 'person_name' => 'The Actress', 'character_name' => 'Taylor Swift'],
            ['movie_title' => 'Miss Americana', 'person_name' => 'The Person', 'character_name' => 'Themselves'],

            ['movie_title' => 'Fire of Love', 'person_name' => 'The Actor', 'character_name' => 'Katia Krafft'],
            ['movie_title' => 'Fire of Love', 'person_name' => 'The Actress', 'character_name' => 'Maurice Krafft'],
            ['movie_title' => 'Fire of Love', 'person_name' => 'The Person', 'character_name' => 'Their colleagues'],

            ['movie_title' => 'The Social Dilemma', 'person_name' => 'The Actor', 'character_name' => 'Tristan Harris'],
            ['movie_title' => 'The Social Dilemma', 'person_name' => 'The Actress', 'character_name' => 'Shoshana Zuboff'],
            ['movie_title' => 'The Social Dilemma', 'person_name' => 'The Person', 'character_name' => 'Their perspectives'],

            ['movie_title' => 'Koyaanisqatsi', 'person_name' => 'The Actor', 'character_name' => 'Narrator'],
            ['movie_title' => 'Koyaanisqatsi', 'person_name' => 'The Actress', 'character_name' => 'City Life'],
            ['movie_title' => 'Koyaanisqatsi', 'person_name' => 'The Person', 'character_name' => 'The Natural World'],

            ['movie_title' => 'Whiplash', 'person_name' => 'The Actor', 'character_name' => 'Andrew Neiman'],
            ['movie_title' => 'Whiplash', 'person_name' => 'The Actress', 'character_name' => 'Nicole'],
            ['movie_title' => 'Whiplash', 'person_name' => 'The Person', 'character_name' => 'Terence Fletcher'],

            ['movie_title' => 'Cruella', 'person_name' => 'The Actor', 'character_name' => 'Cruella De Vil'],
            ['movie_title' => 'Cruella', 'person_name' => 'The Actress', 'character_name' => 'Estella'],
            ['movie_title' => 'Cruella', 'person_name' => 'The Person', 'character_name' => 'Baroness'],

            ['movie_title' => 'Charlie and the Chocolate Factory', 'person_name' => 'The Actor', 'character_name' => 'Willy Wonka'],
            ['movie_title' => 'Charlie and the Chocolate Factory', 'person_name' => 'The Actress', 'character_name' => 'Veruca Salt'],
            ['movie_title' => 'Charlie and the Chocolate Factory', 'person_name' => 'The Person', 'character_name' => 'Charlie Bucket'],

            ['movie_title' => 'The Northman', 'person_name' => 'The Actor', 'character_name' => 'Amleth'],
            ['movie_title' => 'The Northman', 'person_name' => 'The Actress', 'character_name' => 'Gudrun'],
            ['movie_title' => 'The Northman', 'person_name' => 'The Person', 'character_name' => 'Fjölnir'],

            ['movie_title' => 'Oppenheimer', 'person_name' => 'The Actor', 'character_name' => 'J. Robert Oppenheimer'],
            ['movie_title' => 'Oppenheimer', 'person_name' => 'The Actress', 'character_name' => 'Kitty Oppenheimer'],
            ['movie_title' => 'Oppenheimer', 'person_name' => 'The Person', 'character_name' => 'Leslie Groves'],

            ['movie_title' => '1917', 'person_name' => 'The Actor', 'character_name' => 'Lance Corporal Schofield'],
            ['movie_title' => '1917', 'person_name' => 'The Actress', 'character_name' => 'Sophie'],
            ['movie_title' => '1917', 'person_name' => 'The Person', 'character_name' => 'Lieutenant Blake'],

            ['movie_title' => 'Portrait of a Lady on Fire', 'person_name' => 'The Actor', 'character_name' => 'Marianne'],
            ['movie_title' => 'Portrait of a Lady on Fire', 'person_name' => 'The Actress', 'character_name' => 'Héloïse'],
            ['movie_title' => 'Portrait of a Lady on Fire', 'person_name' => 'The Person', 'character_name' => 'Sophie'],

            ['movie_title' => 'The Zone of Interest', 'person_name' => 'The Actor', 'character_name' => 'The Officer'],
            ['movie_title' => 'The Zone of Interest', 'person_name' => 'The Actress', 'character_name' => 'The Mother'],
            ['movie_title' => 'The Zone of Interest', 'person_name' => 'The Person', 'character_name' => 'The Child'],

            ['movie_title' => 'Society of the Snow', 'person_name' => 'The Actor', 'character_name' => 'Nando Parrado'],
            ['movie_title' => 'Society of the Snow', 'person_name' => 'The Actress', 'character_name' => 'Liliana'],
            ['movie_title' => 'Society of the Snow', 'person_name' => 'The Person', 'character_name' => 'Antonio'],

            ['movie_title' => 'Longlegs', 'person_name' => 'The Actor', 'character_name' => 'Victor'],
            ['movie_title' => 'Longlegs', 'person_name' => 'The Actress', 'character_name' => 'Lena'],
            ['movie_title' => 'Longlegs', 'person_name' => 'The Person', 'character_name' => 'Carlos'],

            ['movie_title' => 'Pearl', 'person_name' => 'The Actor', 'character_name' => 'Pearl'],
            ['movie_title' => 'Pearl', 'person_name' => 'The Actress', 'character_name' => 'Maxine'],
            ['movie_title' => 'Pearl', 'person_name' => 'The Person', 'character_name' => 'Howard'],

            ['movie_title' => 'Sound of Metal', 'person_name' => 'The Actor', 'character_name' => 'Ruben'],
            ['movie_title' => 'Sound of Metal', 'person_name' => 'The Actress', 'character_name' => 'Lou'],
            ['movie_title' => 'Sound of Metal', 'person_name' => 'The Person', 'character_name' => 'Joe'],

            ['movie_title' => 'TÁR', 'person_name' => 'The Actor', 'character_name' => 'Lydia Tár'],
            ['movie_title' => 'TÁR', 'person_name' => 'The Actress', 'character_name' => 'Sharon'],
            ['movie_title' => 'TÁR', 'person_name' => 'The Person', 'character_name' => 'Frances'],

            ['movie_title' => 'Maestro', 'person_name' => 'The Actor', 'character_name' => 'Leonard Bernstein'],
            ['movie_title' => 'Maestro', 'person_name' => 'The Actress', 'character_name' => 'Felicia'],
            ['movie_title' => 'Maestro', 'person_name' => 'The Person', 'character_name' => 'The Orchestra Conductor'],

            ['movie_title' => 'Cold War', 'person_name' => 'The Actor', 'character_name' => 'Wiktor'],
            ['movie_title' => 'Cold War', 'person_name' => 'The Actress', 'character_name' => 'Zula'],
            ['movie_title' => 'Cold War', 'person_name' => 'The Person', 'character_name' => 'Irena'],

            ['movie_title' => 'Barbarian', 'person_name' => 'The Actor', 'character_name' => 'Tess'],
            ['movie_title' => 'Barbarian', 'person_name' => 'The Actress', 'character_name' => 'Keith'],
            ['movie_title' => 'Barbarian', 'person_name' => 'The Person', 'character_name' => 'Frank'],

            ['movie_title' => 'The Lobster', 'person_name' => 'The Actor', 'character_name' => 'David'],
            ['movie_title' => 'The Lobster', 'person_name' => 'The Actress', 'character_name' => 'Short Sighted Woman'],
            ['movie_title' => 'The Lobster', 'person_name' => 'The Person', 'character_name' => 'The Hotel Manager'],

            ['movie_title' => 'Arrival', 'person_name' => 'The Actor', 'character_name' => 'Dr. Louise Banks'],
            ['movie_title' => 'Arrival', 'person_name' => 'The Actress', 'character_name' => 'Ian Donnelly'],
            ['movie_title' => 'Arrival', 'person_name' => 'The Person', 'character_name' => 'Colonel Weber'],

            ['movie_title' => 'Saltburn', 'person_name' => 'The Actor', 'character_name' => 'Felix'],
            ['movie_title' => 'Saltburn', 'person_name' => 'The Actress', 'character_name' => 'Rosalind'],
            ['movie_title' => 'Saltburn', 'person_name' => 'The Person', 'character_name' => 'Oliver'],

            ['movie_title' => 'Jojo Rabbit', 'person_name' => 'The Actor', 'character_name' => 'Jojo'],
            ['movie_title' => 'Jojo Rabbit', 'person_name' => 'The Actress', 'character_name' => 'Elsa'],
            ['movie_title' => 'Jojo Rabbit', 'person_name' => 'The Person', 'character_name' => 'Adolf Hitler'],

            ['movie_title' => 'Inglourious Basterds', 'person_name' => 'The Actor', 'character_name' => 'Lt. Aldo Raine'],
            ['movie_title' => 'Inglourious Basterds', 'person_name' => 'The Actress', 'character_name' => 'Shosanna Dreyfus'],
            ['movie_title' => 'Inglourious Basterds', 'person_name' => 'The Person', 'character_name' => 'Hans Landa'],

            ['movie_title' => 'Come and See', 'person_name' => 'The Actor', 'character_name' => 'Florya'],
            ['movie_title' => 'Come and See', 'person_name' => 'The Actress', 'character_name' => 'Glasha'],
            ['movie_title' => 'Come and See', 'person_name' => 'The Person', 'character_name' => 'Fenia'],

            ['movie_title' => 'Poor Things', 'person_name' => 'The Actor', 'character_name' => 'Bella Baxter'],
            ['movie_title' => 'Poor Things', 'person_name' => 'The Actress', 'character_name' => 'Dr. Godwin Baxter'],
            ['movie_title' => 'Poor Things', 'person_name' => 'The Person', 'character_name' => 'Duncan Wedderburn'],

            ['movie_title' => 'The Pianist', 'person_name' => 'The Actor', 'character_name' => 'Władysław Szpilman'],
            ['movie_title' => 'The Pianist', 'person_name' => 'The Actress', 'character_name' => 'Dorota'],
            ['movie_title' => 'The Pianist', 'person_name' => 'The Person', 'character_name' => 'Hosenfeld'],

            ['movie_title' => 'Django Unchained', 'person_name' => 'The Actor', 'character_name' => 'Django'],
            ['movie_title' => 'Django Unchained', 'person_name' => 'The Actress', 'character_name' => 'Broomhilda'],
            ['movie_title' => 'Django Unchained', 'person_name' => 'The Person', 'character_name' => 'Dr. King Schultz'],

            ['movie_title' => 'The Revenant', 'person_name' => 'The Actor', 'character_name' => 'Hugh Glass'],
            ['movie_title' => 'The Revenant', 'person_name' => 'The Actress', 'character_name' => 'Maggie'],
            ['movie_title' => 'The Revenant', 'person_name' => 'The Person', 'character_name' => 'John Fitzgerald'],

            ['movie_title' => 'The Hateful Eight', 'person_name' => 'The Actor', 'character_name' => 'Major Marquis Warren'],
            ['movie_title' => 'The Hateful Eight', 'person_name' => 'The Actress', 'character_name' => 'Daisy Domergue'],
            ['movie_title' => 'The Hateful Eight', 'person_name' => 'The Person', 'character_name' => 'John Ruth'],

            ['movie_title' => 'The Good, the Bad and the Ugly', 'person_name' => 'The Actor', 'character_name' => 'Blondie'],
            ['movie_title' => 'The Good, the Bad and the Ugly', 'person_name' => 'The Actress', 'character_name' => 'Tuco'],
            ['movie_title' => 'The Good, the Bad and the Ugly', 'person_name' => 'The Person', 'character_name' => 'Angel Eyes'],

            ['movie_title' => 'The Power of the Dog', 'person_name' => 'The Actor', 'character_name' => 'Phil Burbank'],
            ['movie_title' => 'The Power of the Dog', 'person_name' => 'The Actress', 'character_name' => 'Rose Gordon'],
            ['movie_title' => 'The Power of the Dog', 'person_name' => 'The Person', 'character_name' => 'George Burbank'],

            ['movie_title' => 'Rango', 'person_name' => 'The Actor', 'character_name' => 'Rango'],
            ['movie_title' => 'Rango', 'person_name' => 'The Actress', 'character_name' => 'Beans'],
            ['movie_title' => 'Rango', 'person_name' => 'The Person', 'character_name' => 'Rattlesnake Jake'],
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
