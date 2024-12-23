<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $movies = [
            ['title' => 'Kill Bill: Vol. 1', 'release_year' => 2003, 'runtime' => 111, 'description' => 'An assassin is shot by her ruthless employer, Bill, and other members of their assassination circle – but she lives to plot her vengeance.', 'rate_avg' => 0.0],
            ['title' => 'The Matrix', 'release_year' => 1999, 'runtime' => 136, 'description' => 'Set in the 22nd century, The Matrix tells the story of a computer hacker who joins a group of underground insurgents fighting the vast and powerful computers who now rule the earth.', 'rate_avg' => 0.0],
            ['title' => 'The Lord of the Rings: The Fellowship of the Ring', 'release_year' => 2001, 'runtime' => 179, 'description' => 'Young hobbit Frodo Baggins, after inheriting a mysterious ring from his uncle Bilbo, must leave his home in order to keep it from falling into the hands of its evil creator.', 'rate_avg' => 0.0],
            ['title' => 'Avatar', 'release_year' => 2009, 'runtime' => 162, 'description' => 'In the 22nd century, a paraplegic Marine is dispatched to the moon Pandora on a unique mission, but becomes torn between following orders and protecting an alien civilization.', 'rate_avg' => 0.0],
            ['title' => 'The Incredibles', 'release_year' => 2004, 'runtime' => 115, 'description' => 'Bob Parr has given up his superhero days to log in time as an insurance adjuster and raise his three children with his formerly heroic wife in suburbia. But when he receives a mysterious assignment, it’s time to get back into costume.', 'rate_avg' => 0.0],
            ['title' => 'Oldboy', 'release_year' => 2003, 'runtime' => 120, 'description' => 'With no clue how he came to be imprisoned, drugged and tortured for 15 years, a desperate man seeks revenge on his captors.', 'rate_avg' => 0.0],
            ['title' => 'John Wick', 'release_year' => 2014, 'runtime' => 101, 'description' => 'Ex-hitman John Wick comes out of retirement to track down the gangsters that took everything from him.', 'rate_avg' => 0.0],
            ['title' => 'Barbie', 'release_year' => 2023, 'runtime' => 114, 'description' => 'Barbie and Ken are having the time of their lives in the colorful and seemingly perfect world of Barbie Land.', 'rate_avg' => 0.0],
            ['title' => 'Everything Everywhere All at Once', 'release_year' => 2022, 'runtime' => 140, 'description' => 'An aging Chinese immigrant is swept up in an insane adventure, where she alone can save what’s important to her by connecting with the lives she could have led in other universes.', 'rate_avg' => 0.0],
            ['title' => 'Interstellar', 'release_year' => 2014, 'runtime' => 169, 'description' => 'The adventures of a group of explorers who make use of a newly discovered wormhole to surpass the limitations on human space travel.', 'rate_avg' => 0.0],
            ['title' => 'Dune', 'release_year' => 2021, 'runtime' => 155, 'description' => 'Paul Atreides, a brilliant and gifted young man born into a great destiny beyond his understanding, must travel to the most dangerous planet in the universe to ensure the future of his family and his people.', 'rate_avg' => 0.0],
            ['title' => 'Inception', 'release_year' => 2010, 'runtime' => 148, 'description' => 'Cobb, a skilled thief who commits corporate espionage by infiltrating the subconscious of his targets is offered a chance to regain his old life.', 'rate_avg' => 0.0],
            ['title' => 'Spirited Away', 'release_year' => 2001, 'runtime' => 125, 'description' => 'A young girl, Chihiro, becomes trapped in a strange new world of spirits.', 'rate_avg' => 0.0],
            ['title' => 'Ratatouille', 'release_year' => 2007, 'runtime' => 111, 'description' => 'Remy, a resident of Paris, appreciates good food and has quite a sophisticated palate. He would love to become a chef.', 'rate_avg' => 0.0],
            ['title' => 'Fantastic Mr. Fox', 'release_year' => 2009, 'runtime' => 87, 'description' => 'The Fantastic Mr. Fox, bored with his current life, plans a heist against the three local farmers.', 'rate_avg' => 0.0],
            ['title' => 'Inside Out', 'release_year' => 2015, 'runtime' => 95, 'description' => 'When 11-year-old Riley moves to a new city, her Emotions team up to help her through the transition.', 'rate_avg' => 0.0],
            ['title' => 'Coco', 'release_year' => 2017, 'runtime' => 105, 'description' => 'Despite his family’s baffling generations-old ban on music, Miguel dreams of becoming an accomplished musician.', 'rate_avg' => 0.0],
            ['title' => 'The Wolf of Wall Street', 'release_year' => 2013, 'runtime' => 180, 'description' => 'A New York stockbroker refuses to cooperate in a large securities fraud case.', 'rate_avg' => 0.0],
            ['title' => 'The Truman Show', 'release_year' => 1998, 'runtime' => 103, 'description' => 'Truman Burbank has been the unwitting star of the longest-running, most popular documentary-soap opera in history.', 'rate_avg' => 0.0],
            ['title' => 'Forrest Gump', 'release_year' => 1994, 'runtime' => 142, 'description' => 'A man with a low IQ has accomplished great things in his life and been present during significant historic events.', 'rate_avg' => 0.0],
            ['title' => 'Joker', 'release_year' => 2019, 'runtime' => 122, 'description' => 'During the 1980s, a failed stand-up comedian is driven insane and turns to a life of crime.', 'rate_avg' => 0.0],
            ['title' => 'Pulp Fiction', 'release_year' => 1994, 'runtime' => 154, 'description' => 'A burger-loving hit man, his philosophical partner, a drug-addled gangster’s moll, and a washed-up boxer converge in this sprawling crime caper.', 'rate_avg' => 0.0],
            ['title' => 'American Psycho', 'release_year' => 2000, 'runtime' => 102, 'description' => 'A wealthy New York investment banking executive hides his alternate psychopathic ego.', 'rate_avg' => 0.0],
            ['title' => 'Se7en', 'release_year' => 1995, 'runtime' => 127, 'description' => 'Two homicide detectives are on a desperate hunt for a serial killer whose crimes are based on the seven deadly sins.', 'rate_avg' => 0.0],
            ['title' => 'Jackass Forever', 'release_year' => 2022, 'runtime' => 96, 'description' => 'The Jackass crew, along with some newcomers, returns for one final round of hilarious, absurd, and dangerous stunts.', 'rate_avg' => 0.0],
            ['title' => 'Miss Americana', 'release_year' => 2020, 'runtime' => 85, 'description' => 'A raw and emotionally revealing look at one of the most iconic artists of our time during a transformational period in her life.', 'rate_avg' => 0.0],
            ['title' => 'Fire of Love', 'release_year' => 2022, 'runtime' => 93, 'description' => 'A doomed love triangle between intrepid French scientists Katia and Maurice Krafft, and their beloved volcanoes.', 'rate_avg' => 0.0],
            ['title' => 'The Social Dilemma', 'release_year' => 2020, 'runtime' => 94, 'description' => 'This documentary-drama hybrid explores the dangerous human impact of social networking.', 'rate_avg' => 0.0],
            ['title' => 'Koyaanisqatsi', 'release_year' => 1982, 'runtime' => 86, 'description' => 'Takes us to locations all around the US and shows us the heavy toll that modern technology is having on humans and the earth.', 'rate_avg' => 0.0],
            ['title' => 'Midsommar', 'release_year' => 2019, 'runtime' => 147, 'description' => 'Several friends travel to Sweden to study a summer festival that is held every ninety years in the remote hometown of one of them.', 'rate_avg' => 0.0],
            ['title' => 'Whiplash', 'release_year' => 2014, 'runtime' => 107, 'description' => 'Under the direction of a ruthless instructor, a talented young drummer begins to pursue perfection at any cost.', 'rate_avg' => 0.0],
            ['title' => 'Cruella', 'release_year' => 2021, 'runtime' => 134, 'description' => 'In 1970s London amidst the punk rock revolution, a young grifter named Estella is determined to make a name for herself with her designs.', 'rate_avg' => 0.0],
            ['title' => 'Charlie and the Chocolate Factory', 'release_year' => 2005, 'runtime' => 115, 'description' => 'A young boy wins a tour through the most magnificent chocolate factory in the world.', 'rate_avg' => 0.0],
            ['title' => 'Home Alone', 'release_year' => 1990, 'runtime' => 103, 'description' => 'Eight-year-old Kevin McCallister makes the most of the situation after his family unwittingly leaves him behind when they go on Christmas vacation.', 'rate_avg' => 0.0],
            ['title' => 'The Lighthouse', 'release_year' => 2019, 'runtime' => 109, 'description' => 'Two lighthouse keepers try to maintain their sanity while living on a remote and mysterious New England island in the 1890s.', 'rate_avg' => 0.0],
            ['title' => 'The Northman', 'release_year' => 2022, 'runtime' => 137, 'description' => 'Prince Amleth is on the verge of becoming a man when his father is brutally murdered by his uncle.', 'rate_avg' => 0.0],
            ['title' => 'Oppenheimer', 'release_year' => 2023, 'runtime' => 181, 'description' => 'The story of J. Robert Oppenheimer’s role in the development of the atomic bomb during World War II.', 'rate_avg' => 0.0],
            ['title' => '1917', 'release_year' => 2019, 'runtime' => 119, 'description' => 'At the height of the First World War, two young British soldiers must cross enemy territory and deliver a message that will stop a deadly attack on hundreds of soldiers.', 'rate_avg' => 0.0],
            ['title' => 'Portrait of a Lady on Fire', 'release_year' => 2019, 'runtime' => 121, 'description' => 'On an isolated island in Brittany at the end of the eighteenth century, a female painter is obliged to paint a wedding portrait of a young woman.', 'rate_avg' => 0.0],
            ['title' => 'The Zone of Interest', 'release_year' => 2023, 'runtime' => 105, 'description' => 'The commandant of Auschwitz, Rudolf Höss, and his wife Hedwig, strive to build a dream life for their family in a house next to the camp.', 'rate_avg' => 0.0],
            ['title' => 'Society of the Snow', 'release_year' => 2023, 'runtime' => 144, 'description' => 'On October 13, 1972, Uruguayan Air Force Flight 571 crashes into a glacier in the heart of the Andes.', 'rate_avg' => 0.0],
            ['title' => 'Longlegs', 'release_year' => 2024, 'runtime' => 101, 'description' => 'In pursuit of a serial killer, an FBI agent uncovers a series of occult clues that she must solve to end his terrifying killing spree.', 'rate_avg' => 0.0],
            ['title' => 'Pearl', 'release_year' => 2022, 'runtime' => 102, 'description' => 'Trapped on her family’s isolated farm, Pearl must tend to her ailing father under the bitter and overbearing watch of her devout mother.', 'rate_avg' => 0.0],
            ['title' => 'Us', 'release_year' => 2019, 'runtime' => 116, 'description' => 'Husband and wife Gabe and Adelaide Wilson take their kids to their beach house expecting to unplug and unwind.', 'rate_avg' => 0.0],
            ['title' => 'Sound of Metal', 'release_year' => 2019, 'runtime' => 120, 'description' => 'Metal drummer Ruben begins to lose his hearing and checks into a rehab for the deaf.', 'rate_avg' => 0.0],
            ['title' => 'TÁR', 'release_year' => 2022, 'runtime' => 158, 'description' => 'As celebrated conductor Lydia Tár starts rehearsals for a career-defining symphony, the consequences of her past choices begin to echo in the present.', 'rate_avg' => 0.0],
            ['title' => 'Maestro', 'release_year' => 2023, 'runtime' => 129, 'description' => 'A towering and fearless love story chronicling the lifelong relationship between Leonard Bernstein and Felicia Montealegre Cohn Bernstein.', 'rate_avg' => 0.0],
            ['title' => 'Cold War', 'release_year' => 2018, 'runtime' => 88, 'description' => 'A man and a woman meet in the ruins of post-war Poland and embark on a tumultuous love story.', 'rate_avg' => 0.0],
            ['title' => 'Barbarian', 'release_year' => 2022, 'runtime' => 103, 'description' => 'In town for a job interview, a young woman arrives at her Airbnb late at night only to find that it has been mistakenly double-booked and a strange man is already staying there.', 'rate_avg' => 0.0],
            ['title' => 'The Lobster', 'release_year' => 2015, 'runtime' => 119, 'description' => 'In a dystopian near future, single people, according to the laws of The City, are taken to The Hotel, where they are obliged to find a romantic partner in forty-five days or are transformed into animals and sent off into The Woods.', 'rate_avg' => 0.0],
            ['title' => 'Arrival', 'release_year' => 2016, 'runtime' => 116, 'description' => 'Taking place after alien crafts land around the world, an expert linguist is recruited by the military to determine whether they come in peace or are a threat.', 'rate_avg' => 0.0],
            ['title' => 'Saltburn', 'release_year' => 2023, 'runtime' => 131, 'description' => 'Struggling to find his place at Oxford University, student Oliver Quick finds himself drawn into the world of the charming and aristocratic Felix Catton.', 'rate_avg' => 0.0],
            ['title' => 'Jojo Rabbit', 'release_year' => 2019, 'runtime' => 108, 'description' => 'A World War II satire that follows a lonely German boy whose world view is turned upside down when he discovers his single mother is hiding a young Jewish girl in their attic.', 'rate_avg' => 0.0],
            ['title' => 'Inglourious Basterds', 'release_year' => 2009, 'runtime' => 153, 'description' => 'In Nazi-occupied France during World War II, a group of Jewish-American soldiers known as “The Basterds” are chosen specifically to spread fear throughout the Third Reich.', 'rate_avg' => 0.0],
            ['title' => 'Come and See', 'release_year' => 1985, 'runtime' => 142, 'description' => 'The invasion of a village in Byelorussia by German forces sends young Florya into the forest to join the weary Resistance fighters.', 'rate_avg' => 0.0],
            ['title' => 'Poor Things', 'release_year' => 2023, 'runtime' => 142, 'description' => 'Brought back to life by an unorthodox scientist, a young woman runs off with a lawyer on a whirlwind adventure across the continents.', 'rate_avg' => 0.0],
            ['title' => 'The Pianist', 'release_year' => 2002, 'runtime' => 150, 'description' => 'The true story of pianist Władysław Szpilman’s experiences in Warsaw during the Nazi occupation.', 'rate_avg' => 0.0],
            ['title' => 'Django Unchained', 'release_year' => 2012, 'runtime' => 165, 'description' => 'With the help of a German bounty hunter, a freed slave sets out to rescue his wife from a brutal Mississippi plantation owner.', 'rate_avg' => 0.0],
            ['title' => 'The Revenant', 'release_year' => 2015, 'runtime' => 157, 'description' => 'In the 1820s, a frontiersman, Hugh Glass, sets out on a path of vengeance against those who left him for dead after a bear mauling.', 'rate_avg' => 0.0],
            ['title' => 'The Hateful Eight', 'release_year' => 2015, 'runtime' => 188, 'description' => 'Bounty hunters seek shelter from a raging blizzard and get caught up in a plot of betrayal and deception.', 'rate_avg' => 0.0],
            ['title' => 'The Good, the Bad and the Ugly', 'release_year' => 1966, 'runtime' => 161, 'description' => 'While the Civil War rages on, three men comb the American Southwest in search of $200,000 in stolen gold.', 'rate_avg' => 0.0],
            ['title' => 'The Power of the Dog', 'release_year' => 2021, 'runtime' => 126, 'description' => 'A domineering but charismatic rancher wages a war of intimidation on his brother’s new wife and her teen son, until long-hidden secrets come to light.', 'rate_avg' => 0.0],
            ['title' => 'Rango', 'release_year' => 2011, 'runtime' => 112, 'description' => 'When Rango, a lost family pet, accidentally winds up in the gritty town of Dirt, the less-than-courageous lizard suddenly finds himself in a new role.', 'rate_avg' => 0.0],

        ];

        foreach($movies as $movie){
            DB::table('movie')->updateOrInsert(
                ['title' => $movie['title']],
                $movie
            );
        }
    }
}
