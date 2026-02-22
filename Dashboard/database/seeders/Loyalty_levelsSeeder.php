<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\facades\DB;//conexión
use App\Models\Loyalty_level;

class Loyalty_levelsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('loyalty_levels')->insert([
            'name' => 'Bronze',
            'min_points' => 0,
            'discount_percentage' => 10,
            'free_extra_hours' => 1,
            'created_at' => date('Y-m-d h:m:s')
        ]);
        $dato = new Loyalty_Level;
        $dato->name = 'Gold';
        $dato->min_points = 500;
        $dato->discount_percentage = 11;
        $dato->free_extra_hours = 1;
        $dato->save();
    }
}
