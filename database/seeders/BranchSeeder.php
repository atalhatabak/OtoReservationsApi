<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Branch;

class BranchSeeder extends Seeder
{
    public function run()
    {
        Branch::create(['branch' => 'Seyhan', 'city_id' => 1, 'region_id' => 1,'address' => 'Orası Burası', 'user_id' => 7]);
        Branch::create(['branch' => 'Ceyhan', 'city_id' => 1, 'region_id' => 1,'address' => 'Orası Burası', 'user_id' => 7]);
        Branch::create(['branch' => 'Çukurova', 'city_id' => 1, 'region_id' => 1,'address' => 'Orası Burası', 'user_id' => 7]);
        Branch::create(['branch' => 'Alanya', 'city_id' => 2, 'region_id' => 1,'address' => 'Orası Burası', 'user_id' => 7]);
        Branch::create(['branch' => 'Konyaaltı', 'city_id' => 2, 'region_id' => 1,'address' => 'Orası Burası', 'user_id' => 7]);
        Branch::create(['branch' => 'Manavgat', 'city_id' => 2, 'region_id' => 1,'address' => 'Orası Burası', 'user_id' => 7]);
        Branch::create(['branch' => 'Antakya', 'city_id' => 3, 'region_id' => 1,'address' => 'Orası Burası', 'user_id' => 7]);
        Branch::create(['branch' => 'İskenderun', 'city_id' => 3, 'region_id' => 1,'address' => 'Orası Burası', 'user_id' => 7]);
        Branch::create(['branch' => 'Tarsus', 'city_id' => 4, 'region_id' => 1,'address' => 'Orası Burası', 'user_id' => 7]);
        Branch::create(['branch' => 'Erdemli', 'city_id' => 4, 'region_id' => 1,'address' => 'Orası Burası', 'user_id' => 7]);
        Branch::create(['branch' => 'Toroslar', 'city_id' => 5, 'region_id' => 1,'address' => 'Orası Burası', 'user_id' => 7]);
        Branch::create(['branch' => 'Merkez', 'city_id' => 5, 'region_id' => 1,'address' => 'Orası Burası', 'user_id' => 7]);
        Branch::create(['branch' => 'Bahçe', 'city_id' => 5, 'region_id' => 1,'address' => 'Orası Burası', 'user_id' => 7]);
        Branch::create(['branch' => 'Onikişubat', 'city_id' => 6, 'region_id' => 1,'address' => 'Orası Burası', 'user_id' => 7]);
        Branch::create(['branch' => 'Dulkadiroğlu', 'city_id' => 6, 'region_id' => 1,'address' => 'Orası Burası', 'user_id' => 7]);
        Branch::create(['branch' => 'Elbistan', 'city_id' => 6, 'region_id' => 1,'address' => 'Orası Burası', 'user_id' => 7]);
        Branch::create(['branch' => 'Şahinbey', 'city_id' => 7, 'region_id' => 1,'address' => 'Orası Burası', 'user_id' => 7]);
        Branch::create(['branch' => 'Nurdağı', 'city_id' => 7, 'region_id' => 1,'address' => 'Orası Burası', 'user_id' => 7]);
        Branch::create(['branch' => 'MelikGazi', 'city_id' => 8, 'region_id' => 1,'address' => 'Orası Burası', 'user_id' => 7]);
        Branch::create(['branch' => 'KocaSinan', 'city_id' => 8, 'region_id' => 1,'address' => 'Orası Burası', 'user_id' => 7]);
        Branch::create(['branch' => 'Merkez', 'city_id' => 9, 'region_id' => 1,'address' => 'Orası Burası', 'user_id' => 7]);
        Branch::create(['branch' => 'Dalaman', 'city_id' => 9, 'region_id' => 1,'address' => 'Orası Burası', 'user_id' => 7]);
        Branch::create(['branch' => 'Pamukkale', 'city_id' => 10, 'region_id' => 1,'address' => 'Orası Burası', 'user_id' => 7]);
    }
}
