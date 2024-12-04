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
            ['name' => 'Music'],
            ['name' => 'Sound'],
            ['name' => 'Cinematography'],
            ['name' => 'Plot'],
        ];

        DB::table('department')->insert($department);
    }
}