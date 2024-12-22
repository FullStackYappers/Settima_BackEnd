<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $genres = [
            ['name' => 'Action'],
            ['name' => 'Crime'],
            ['name' => 'Science Fiction'],
            ['name' => 'Fantasy'],
            ['name' => 'Adventure'],
            ['name' => 'Animation'],
            ['name' => 'Family'],
            ['name' => 'Thriller'],
            ['name' => 'Mystery'],
            ['name' => 'Drama'],
            ['name' => 'Comedy'],
            ['name' => 'Music'],
            ['name' => 'Romance'],
            ['name' => 'Horror'],
            ['name' => 'Documentary'],
            ['name' => 'History'],
            ['name' => 'War'],
            ['name' => 'Western'],
        ];

        foreach ($genres as $genre) {
            DB::table('genre')->updateOrInsert(
                ['name' => $genre['name']],
                $genre
            );
        }
    }
}
