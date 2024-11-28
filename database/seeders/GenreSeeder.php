<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('genres')->insert([
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
        ]);
    }
}
