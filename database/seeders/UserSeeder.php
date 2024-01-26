<?php
namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * 
     */
    public function run()
    {
        User::create(['name' => 'Sema Baysan', 'role' => '0','email' => 'sema@gmail.com','password' => Hash::make('Sema'), 'TC' => '12345678910','phone' => '9876543210']);
        User::create(['name' => 'Enes Taştan', 'role' => '0','email' => 'enes@gmail.com','password' => Hash::make('Enes'), 'TC' => '12345678910','phone' => '9876543210']);
        User::create(['name' => 'Yusuf Toprak', 'role' => '0','email' => 'yusuf@gmail.com','password' => Hash::make('Yusuf'), 'TC' => '12345678910','phone' => '9876543210']);
        User::create(['name' => 'Selin Çakır', 'role' => '0','email' => 'selin@gmail.com','password' => Hash::make('Selin'), 'TC' => '12345678910','phone' => '9876543210']);
        User::create(['name' => 'Ahsen Şahin', 'role' => '0','email' => 'ahsen@gmail.com','password' => Hash::make('Ahsen'), 'TC' => '12345678910','phone' => '9876543210']);
        User::create(['name' => 'Burak Kılınç', 'role' => '0','email' => 'burak@gmail.com','password' => Hash::make('Burak'), 'TC' => '12345678910','phone' => '9876543210']);
        
        User::create(['name' => 'Talha Tabak', 'role' => '1','email' => 'atalhatabak@gmail.com','password' => Hash::make('testester3'), 'TC' => '12345678910','phone' => '9876543210']);
        User::create(['name' => 'Metehan Kırıntı', 'role' => '1','email' => 'metehan@gmail.com','password' => Hash::make('Metehan'), 'TC' => '12345678910','phone' => '9876543210']);
        User::create(['name' => 'Umut Erdoğan', 'role' => '1','email' => 'umut@gmail.com','password' => Hash::make('Umut'), 'TC' => '12345678910','phone' => '9876543210']);
        User::create(['name' => 'Metin Genç', 'role' => '1','email' => 'metin@gmail.com','password' => Hash::make('Metin'), 'TC' => '12345678910','phone' => '9876543210']);
        User::create(['name' => 'Emre Ekiz', 'role' => '1','email' => 'emre@gmail.com','password' => Hash::make('Emre'), 'TC' => '12345678910','phone' => '9876543210']);
        User::create(['name' => 'Ahmet Bereketoğlu', 'role' => '1','email' => 'ahmet@gmail.com','password' => Hash::make('Ahmet'), 'TC' => '12345678910','phone' => '9876543210']);

    }
}