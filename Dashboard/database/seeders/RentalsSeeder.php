<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\facades\DB;//conexión
use App\Models\Rental;

class RentalsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('rentals')->insert([
            'user_id' => 1,
            'car_id' => 1,
            'driver_id' => 1,
            'pickup_date' => '2016-02-15 07:30:00',
            'return_date' => '2016-02-20 08:00:00',
            'total_amount' => 1750,
            'status' => 'active',
            'created_at' => date('Y-m-d h:m:s')
        ]); 
        $dato = new Rental;
        $dato->user_id = 2;
        $dato->car_id = 2;
        $dato->driver_id = 2;
        $dato->pickup_date = '2024-02-15 08:10:00';
        $dato->return_date = '2024-02-17 08:20:00';
        $dato->total_amount = 2000;
        $dato->status = 'pending';
        $dato->save();
    }
}
