<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Car;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * 
     */
    public function run()
    {
        Car::create(['brand' => 'Ford', 'model' => 'Focus','user_id' => '1' ]);
        Car::create(['brand' => 'Toyota', 'model' => 'Corolla','user_id' => '2' ]);
        Car::create(['brand' => 'Hyundai', 'model' => 'Accent','user_id' => '3' ]);
        Car::create(['brand' => 'Fiat', 'model' => 'Egea','user_id' => '4' ]);
        Car::create(['brand' => 'Fiat', 'model' => 'Linea','user_id' => '5' ]);
        Car::create(['brand' => 'Citren', 'model' => 'Berlingo','user_id' => '6' ]);

    }
} 
