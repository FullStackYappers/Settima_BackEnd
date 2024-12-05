<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $department = [
            ['name' => 'Director'],
            ['name' => 'Composer'],
            ['name' => 'Costume Designer'],
            ['name' => 'Cinematographer'],
            ['name' => 'Writer'],
            ['name' => 'Editor'], 
        ];

        DB::table('department')->insert($department);
    }
}