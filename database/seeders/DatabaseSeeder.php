<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $this->call([
            GenreSeeder::class,
            MovieSeeder::class,
            MovieGenreSeeder::class,
            DepartmentSeeder::class,
            PersonSeeder::class,
            CastSeeder::class,
            CrewSeeder::class,
            CountrySeeder::class,
            MovieCountrySeeder::class,
            MoviePosterSeeder::class,
            TrailerSeeder::class,
        ]);
    }
}
