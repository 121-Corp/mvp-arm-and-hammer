<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RegionBusinessContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('region_business_contacts')->insert([
            'region' => 1,
            'contact' => 41
        ]);

        DB::table('region_business_contacts')->insert([
            'region' => 2,
            'contact' => 42
        ]);
    }
}
