<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\facades\DB;//conexión
use App\Models\Driver;

class DriversSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("drivers")->insert([
        'user_id'=>2,
        'license_number'=>'DL-456-789-000',
        'license_img'=>'license1.png',
        'created_at'=>date('Y-m-d h:m:s')

        ]); 
        $dato=new Driver;
        $dato -> user_id=1;
        $dato-> license_number='DL-123-548-111';
        $dato-> license_img='license2.png';
        $dato-> save();
    }
}
