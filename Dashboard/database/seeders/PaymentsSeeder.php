<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\facades\DB;//conexión
use App\Models\Payment;

class PaymentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('payments')->insert([
            'rental_id' => 1,
            'amount' => 1500,
            'payment_method' => 'credit_card',
            'transaction_id' => "240215-ABC-12345",
            'status' => 'completed',
            'payment_date' =>date('Y-m-d h:m:s'),
            'created_at' => date('Y-m-d h:m:s')
        ]);
        $dato = new Payment;
        $dato->rental_id = 1;
        $dato->amount = 2300;
        $dato->payment_method = 'cash';
        $dato->transaction_id = '123456-DCF-12345';
        $dato->status = 'pending';
        $dato->payment_date =now();
        $dato->save();
    }
}
