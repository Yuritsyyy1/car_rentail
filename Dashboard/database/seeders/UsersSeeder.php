<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\facades\DB;//conexión
use Illuminate\Support\facades\Hash;//conexión
use App\Models\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Tomasa Fernandez',
            'email' => 'tomasita@example.com',
            'email_verified_at' =>'2025-09-05 01:10:35',
            'password' => Hash::make('123456'),
            'loyalty_points' => 0,
            'loyalty_level_id' => 1,
            'img'=> 'defaul.png',
            'created_at' => date('Y-m-d h:m:s')
        ]);
        $dato = new User;
        $dato->name = 'Rosa Carvajal';
        $dato->email = 'rosita@example.com';
        $dato->email_verified_at = '2026-01-01 14:50:35';
        $dato->password = Hash::make('123456');
        $dato->loyalty_points = 0;
        $dato->loyalty_level_id = 1;
        $dato->img='defaul.png';
        $dato->save();
    }
}

