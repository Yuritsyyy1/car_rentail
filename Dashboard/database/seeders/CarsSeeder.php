<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\facades\DB;//conexión
use App\Models\Car;

class CarsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('cars')->insert([
            'brand_id'=> 1,
            'model'=> 'Focus',
            'year'=> 2020,
            'color' => 'Negro como yo',
            'license_plate'=> 'WFC-109',
            'mileage'=> 10000,
            'lat'=> 10.6353,
            'ing'=> -150.0889,
            'is_premium'=> 0,
            'rental_count'=> 0,
            'daily_rate'=> 240,
            'status'=> 'available',
            'created_at'=>date('Y-m-d h:m:s')
        ]);
        $dato= new Car;
        $dato->brand_id=1;
        $dato->model="Explorer";
        $dato->year=1991;
        $dato->color="Negro como yo";
        $dato->license_plate="ABD-001";
        $dato->mileage=50000;
        $dato->lat=18.5000;
        $dato->ing=-100.0009;
        $dato->is_premium= 0;
        $dato->rental_count= 0;
        $dato->daily_rate=350.00;
        $dato->status= 'available';
        $dato->save();
    }
}
