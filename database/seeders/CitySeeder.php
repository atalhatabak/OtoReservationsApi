<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\City;

class CitySeeder extends Seeder
{
    public function run()
    {
        City::create(['city' => 'Adana', 'region_id' => 1]);
        City::create(['city' => 'Antalya', 'region_id' => 1]);
        City::create(['city' => 'Hatay', 'region_id' => 1]);
        City::create(['city' => 'Mersin', 'region_id' => 1]);
        City::create(['city' => 'Osmaniye', 'region_id' => 1]);
        City::create(['city' => 'Kahramanmaraş', 'region_id' => 1]);
        City::create(['city' => 'Gaziantep', 'region_id' => 1]);
        City::create(['city' => 'Kayseri', 'region_id' => 1]);
        City::create(['city' => 'Muğla', 'region_id' => 1]);
        City::create(['city' => 'Denizli', 'region_id' => 1]);
    }
}
