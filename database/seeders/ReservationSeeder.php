<?php
namespace Database\Seeders;

use App\Models\Reservation;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class ReservationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * 
     */
    public function run()
    {
        Reservation::create(['session' => '08.00', 'date' => '19.1.2024','user_id' => '1','branch_id' => '4','car_id' => '1','report' => 'null','status' => 'active' ]);
        Reservation::create(['session' => '12.00', 'date' => '19.1.2024','user_id' => '2','branch_id' => '4','car_id' => '2','report' => 'null','status' => 'active' ]);
        Reservation::create(['session' => '18.00', 'date' => '19.1.2024','user_id' => '3','branch_id' => '4','car_id' => '3','report' => 'null','status' => 'active' ]);
        Reservation::create(['session' => '10.00', 'date' => '20.1.2024','user_id' => '4','branch_id' => '4','car_id' => '4','report' => 'null','status' => 'active' ]);
        Reservation::create(['session' => '12.00', 'date' => '19.1.2024','user_id' => '5','branch_id' => '4','car_id' => '5','report' => 'null','status' => 'active' ]);
        Reservation::create(['session' => '16.00', 'date' => '19.1.2024','user_id' => '6','branch_id' => '4','car_id' => '6','report' => 'null','status' => 'active' ]);

    }
} 
