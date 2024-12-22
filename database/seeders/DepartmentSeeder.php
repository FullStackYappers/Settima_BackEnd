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
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        $department = [
            ['name' => 'Director'],
            ['name' => 'Composer'],
            ['name' => 'Costume Designer'],
            ['name' => 'Cinematographer'],
            ['name' => 'Writer'],
            ['name' => 'Editor'], 
        ];
        
        DB::table('department')->truncate();

        DB::table('department')->insert($department);

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}