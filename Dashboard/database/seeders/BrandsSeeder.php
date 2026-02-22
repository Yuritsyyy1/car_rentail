<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\facades\DB;//conexión
use App\Models\Brand;


class BrandsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("brands")->insert([
            'name'=>'Ford',
            'img'=>'ford.png',
            'created_at'=>date('Y-m-d h:m:s')

        ]); 
        $dato=new Brand;
        $dato -> name='chevy';
        $dato-> img='chevy.png';
        $dato-> save();

    }
}
