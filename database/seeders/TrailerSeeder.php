<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TrailerSeeder extends Seeder
{
    public function run(): void
    {
        $trailers = [
            ['movie_title' => 'Kill Bill: Vol. 1', 'trailer_url' => 'https://www.youtube.com/watch?v=7kSuas6mRpk&ab_channel=RottenTomatoesClassicTrailers'],
            ['movie_title' => 'The Matrix', 'trailer_url' => 'https://www.youtube.com/watch?v=vKQi3bBA1y8&ab_channel=RottenTomatoesClassicTrailers'],
            ['movie_title' => 'The Lord of the Rings: The Fellowship of the Ring', 'trailer_url' => 'https://www.youtube.com/watch?v=V75dMMIW2B4&ab_channel=Movieclips'],
            ['movie_title' => 'Avatar', 'trailer_url' => 'https://www.youtube.com/watch?v=5PSNL1qE6VY&ab_channel=20thCenturyStudios'],
            ['movie_title' => 'The Incredibles', 'trailer_url' => 'https://www.youtube.com/watch?v=-UaGUdNJdRQ&ab_channel=RottenTomatoesClassicTrailers'],
            ['movie_title' => 'Oldboy', 'trailer_url' => 'https://www.youtube.com/watch?v=tAaBkFChaRg&ab_channel=NEON'],
            ['movie_title' => 'John Wick', 'trailer_url' => 'https://www.youtube.com/watch?v=C0BMx-qxsP4&ab_channel=RottenTomatoesTrailers'],
            ['movie_title' => 'Barbie', 'trailer_url' => 'https://www.youtube.com/watch?v=pBk4NYhWNMM&ab_channel=WarnerBros.Pictures'],
            ['movie_title' => 'Everything Everywhere All at Once', 'trailer_url' => 'https://www.youtube.com/watch?v=wxN1T1uxQ2g&ab_channel=A24'],
            ['movie_title' => 'Interstellar', 'trailer_url' => 'https://www.youtube.com/watch?v=2LqzF5WauAw&ab_channel=InterstellarMovie'],
            ['movie_title' => 'Dune', 'trailer_url' => 'https://www.youtube.com/watch?v=n9xhJrPXop4&ab_channel=WarnerBros.Pictures'],
            ['movie_title' => 'Inception', 'trailer_url' => 'https://www.youtube.com/watch?v=YoHD9XEInc0&ab_channel=RottenTomatoesClassicTrailers'],
            ['movie_title' => 'Spirited Away', 'trailer_url' => 'https://www.youtube.com/watch?v=ByXuk9QqQkk&ab_channel=CrunchyrollStoreAustralia'],
            ['movie_title' => 'Ratatouille', 'trailer_url' => 'https://www.youtube.com/watch?v=NgsQ8mVkN8w&ab_channel=RottenTomatoesClassicTrailers'],
            ['movie_title' => 'Fantastic Mr. Fox', 'trailer_url' => 'https://www.youtube.com/watch?v=n2igjYFojUo&ab_channel=SearchlightPictures'],
            ['movie_title' => 'Inside Out', 'trailer_url' => 'https://www.youtube.com/watch?v=yRUAzGQ3nSY&ab_channel=Pixar'],
            ['movie_title' => 'Coco', 'trailer_url' => 'https://www.youtube.com/watch?v=xlnPHQ3TLX8&ab_channel=Pixar'],
            ['movie_title' => 'The Wolf of Wall Street', 'trailer_url' => 'https://www.youtube.com/watch?v=iszwuX1AK6A&ab_channel=ParamountPictures'],
            ['movie_title' => 'The Truman Show', 'trailer_url' => 'https://www.youtube.com/watch?v=dlnmQbPGuls&ab_channel=RottenTomatoesClassicTrailers'],
            ['movie_title' => 'Forrest Gump', 'trailer_url' => 'https://www.youtube.com/watch?v=bLvqoHBptjg&ab_channel=ParamountMovies'],
            ['movie_title' => 'Joker', 'trailer_url' => 'https://www.youtube.com/watch?v=zAGVQLHvwOY&ab_channel=WarnerBros.Pictures'],
            ['movie_title' => 'Pulp Fiction', 'trailer_url' => 'https://www.youtube.com/watch?v=s7EdQ4FqbhY&ab_channel=Movieclips'],
            ['movie_title' => 'American Psycho', 'trailer_url' => 'https://www.youtube.com/watch?v=5YnGhW4UEhc&ab_channel=LionsgateVOD'],
            ['movie_title' => 'Se7en', 'trailer_url' => 'https://www.youtube.com/watch?v=znmZoVkCjpI&ab_channel=RottenTomatoesClassicTrailers'],
            ['movie_title' => 'Jackass Forever', 'trailer_url' => 'https://www.youtube.com/watch?v=FNq-QT2Jpng&ab_channel=ParamountPictures'],
            ['movie_title' => 'Miss Americana', 'trailer_url' => 'https://www.youtube.com/watch?v=q07_k5VKuaQ&ab_channel=Netflix'],
            ['movie_title' => 'Fire of Love', 'trailer_url' => 'https://www.youtube.com/watch?v=oMArx64RBO4&ab_channel=NationalGeographic'],
            ['movie_title' => 'The Social Dilemma', 'trailer_url' => 'https://www.youtube.com/watch?v=uaaC57tcci0&ab_channel=Netflix'],
            ['movie_title' => 'Koyaanisqatsi', 'trailer_url' => 'https://www.youtube.com/watch?v=tDW-1JIa2gI&ab_channel=RottenTomatoesClassicTrailers'],
            ['movie_title' => 'Midsommar', 'trailer_url' => 'https://www.youtube.com/watch?v=1Vnghdsjmd0&ab_channel=A24'],
            ['movie_title' => 'Whiplash', 'trailer_url' => 'https://www.youtube.com/watch?v=7d_jQycdQGo&ab_channel=RottenTomatoesComingSoon'],
            ['movie_title' => 'Cruella', 'trailer_url' => 'https://www.youtube.com/watch?v=gmRKv7n2If8&ab_channel=Disney'],
            ['movie_title' => 'Charlie and the Chocolate Factory', 'trailer_url' => 'https://www.youtube.com/watch?v=OFVGCUIXJls&ab_channel=RottenTomatoesClassicTrailers'],
            ['movie_title' => 'Home Alone', 'trailer_url' => 'https://www.youtube.com/watch?v=jEDaVHmw7r4&ab_channel=RottenTomatoesClassicTrailers'],
            ['movie_title' => 'The Lighthouse', 'trailer_url' => 'https://www.youtube.com/watch?v=Hyag7lR8CPA&ab_channel=A24'],
            ['movie_title' => 'The Northman', 'trailer_url' => 'https://www.youtube.com/watch?v=oMSdFM12hOw&ab_channel=FocusFeatures'],
            ['movie_title' => 'Oppenheimer', 'trailer_url' => 'https://www.youtube.com/watch?v=uYPbbksJxIg&ab_channel=UniversalPictures'],
            ['movie_title' => '1917', 'trailer_url' => 'https://www.youtube.com/watch?v=YqNYrYUiMfg&ab_channel=UniversalPictures'],
            ['movie_title' => 'Portrait of a Lady on Fire', 'trailer_url' => 'https://www.youtube.com/watch?v=R-fQPTwma9o&ab_channel=NEON'],
            ['movie_title' => 'The Zone of Interest', 'trailer_url' => 'https://www.youtube.com/watch?v=r-vfg3KkV54&ab_channel=A24'],
            ['movie_title' => 'Society of the Snow', 'trailer_url' => 'https://www.youtube.com/watch?v=pDak4qLyF4Q&ab_channel=Netflix'],
            ['movie_title' => 'Longlegs', 'trailer_url' => 'https://www.youtube.com/watch?v=OG7wOTE8NhE&ab_channel=NEON'],
            ['movie_title' => 'Pearl', 'trailer_url' => 'https://www.youtube.com/watch?v=L5PW5r3pEOg&ab_channel=A24'],
            ['movie_title' => 'Us', 'trailer_url' => 'https://www.youtube.com/watch?v=hNCmb-4oXJA&ab_channel=UniversalPictures'],
            ['movie_title' => 'Sound of Metal', 'trailer_url' => 'https://www.youtube.com/watch?v=VFOrGkAvjAE&ab_channel=PrimeVideo'],
            ['movie_title' => 'TÁR', 'trailer_url' => 'https://www.youtube.com/watch?v=Na6gA1RehsU&ab_channel=FocusFeatures'],
            ['movie_title' => 'Maestro', 'trailer_url' => 'https://www.youtube.com/watch?v=gJP2QblqLA0&ab_channel=Netflix'],
            ['movie_title' => 'Cold War', 'trailer_url' => 'https://www.youtube.com/watch?v=8ImvkXgGVWw&ab_channel=PrimeMovies'],
            ['movie_title' => 'Barbarian', 'trailer_url' => 'https://www.youtube.com/watch?v=Dr89pmKrqkI&ab_channel=20thCenturyStudios'],
            ['movie_title' => 'The Lobster', 'trailer_url' => 'https://www.youtube.com/watch?v=vU29VfayDMw&ab_channel=RottenTomatoesTrailers'],
            ['movie_title' => 'Arrival', 'trailer_url' => 'https://www.youtube.com/watch?v=tFMo3UJ4B4g&ab_channel=ParamountPictures'],
            ['movie_title' => 'Saltburn', 'trailer_url' => 'https://www.youtube.com/watch?v=lALMdJf6UUE&ab_channel=AmazonMGMStudios'],
            ['movie_title' => 'Jojo Rabbit', 'trailer_url' => 'https://www.youtube.com/watch?v=tL4McUzXfFI&ab_channel=SearchlightPictures'],
            ['movie_title' => 'Inglourious Basterds', 'trailer_url' => 'https://www.youtube.com/watch?v=KnrRy6kSFF0&ab_channel=RottenTomatoesClassicTrailers'],
            ['movie_title' => 'Come and See', 'trailer_url' => 'https://www.youtube.com/watch?v=UHaSQU-4wss&ab_channel=FilmForum'],
            ['movie_title' => 'Poor Things', 'trailer_url' => 'https://www.youtube.com/watch?v=_klfx5sGzFk&ab_channel=SearchlightPicturesUK'],
            ['movie_title' => 'The Pianist', 'trailer_url' => 'https://www.youtube.com/watch?v=BFwGqLa_oAo&ab_channel=RottenTomatoesClassicTrailers'],
            ['movie_title' => 'Django Unchained', 'trailer_url' => 'https://www.youtube.com/watch?v=0fUCuvNlOCg&ab_channel=RottenTomatoesTrailers'],
            ['movie_title' => 'The Revenant', 'trailer_url' => 'https://www.youtube.com/watch?v=LoebZZ8K5N0&ab_channel=20thCenturyStudios'],
            ['movie_title' => 'The Hateful Eight', 'trailer_url' => 'https://www.youtube.com/watch?v=69UwVX6Riv8&ab_channel=ZeroMedia'],
            ['movie_title' => 'The Good, the Bad and the Ugly', 'trailer_url' => 'https://www.youtube.com/watch?v=IFNUGzCOQoI&ab_channel=AmazonMGMStudios'],
            ['movie_title' => 'The Power of the Dog', 'trailer_url' => 'https://www.youtube.com/watch?v=LRDPo0CHrko&ab_channel=Netflix'],
            ['movie_title' => 'Rango', 'trailer_url' => 'https://www.youtube.com/watch?v=k-OOfW6wWyQ&ab_channel=hollywoodstreams'],
            ['movie_title' => 'Morbius', 'trailer_url' => 'https://www.youtube.com/watch?v=oZ6iiRrz1SY&ab_channel=SonyPicturesEntertainment'],
            ['movie_title' => 'IF', 'trailer_url' => 'https://www.youtube.com/watch?v=ss2KvK-w6w8&ab_channel=ParamountPictures'],
            ['movie_title' => 'Harry Potter and the Sorcerer\'s Stone', 'trailer_url' => 'https://www.youtube.com/watch?v=l91Km49W9qI&ab_channel=HarryPotter'],
            ['movie_title' => 'Harry Potter and the Chamber of Secrets', 'trailer_url' => 'https://www.youtube.com/watch?v=nE11U5iBnH0&ab_channel=HarryPotter'],
            ['movie_title' => 'Harry Potter and the Prisoner of Azkaban', 'trailer_url' => 'https://www.youtube.com/watch?v=cK2WNlj6kR0&ab_channel=HarryPotter'],
            ['movie_title' => 'Harry Potter and the Goblet of Fire', 'trailer_url' => 'https://www.youtube.com/watch?v=80kuiBq95So&ab_channel=HarryPotter'],
            ['movie_title' => 'Harry Potter and the Order of the Phoenix', 'trailer_url' => 'https://www.youtube.com/watch?v=LLAaW1EgyY8&ab_channel=HarryPotter'],
            ['movie_title' => 'Harry Potter and the Half-Blood Prince', 'trailer_url' => 'https://www.youtube.com/watch?v=tAiy66Xrsz4&ab_channel=HarryPotter'],
            ['movie_title' => 'Harry Potter and the Deathly Hallows – Part 1', 'trailer_url' => 'https://www.youtube.com/watch?v=17ywQS6XO-M&ab_channel=HarryPotter'],
            ['movie_title' => 'Harry Potter and the Deathly Hallows – Part 2', 'trailer_url' => 'https://www.youtube.com/watch?v=17ywQS6XO-M&ab_channel=HarryPotter'],
            ['movie_title' => 'The Prestige', 'trailer_url' => 'https://www.youtube.com/watch?v=ELq7V8vkekI'],
            ['movie_title' => 'Fight Club', 'trailer_url' => 'https://www.youtube.com/watch?v=BdJKm16Co6M'],
            ['movie_title' => 'The Half of It', 'trailer_url' => 'https://www.youtube.com/watch?v=B-yhF7IScUE'],
            ['movie_title' => 'Gone Girl', 'trailer_url' => 'https://www.youtube.com/watch?v=2-_-1nJf8Vg'],
        ];

        foreach ($trailers as $trailer) {
            $movie_id = DB::table('movies')->where('title', $trailer['movie_title'])->first();

            DB::table('trailers')->updateOrInsert(
                ['movie_id' => $movie_id->id, 'trailer_url' => $trailer['trailer_url']],
                ['trailer_url' => $trailer['trailer_url']]
            );
        }
    }
}
