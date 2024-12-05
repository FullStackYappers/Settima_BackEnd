<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountrySeeder extends Seeder
{
    public function run(): void
    {
        $countries = [
            'United States',
            'United Kingdom',
            'France',
            'Germany',
            'Poland',
            'Argentina',
            'Spain',
            'Canada',
            'Italy',
            'New Zealand',
            'Australia',
            'Japan',
            'Ireland',
            'Greece',
            'Soviet Union',
            'Sweden',
            'Switzerland',
        ];

        foreach ($countries as $country) {
            DB::table('country')->insertOrIgnore(['name' => $country]);
        }

    }
}
