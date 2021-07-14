<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tableName = 'order_details';
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table($tableName)->truncate();

        DB::table($tableName)->insert([
            [
                'orderId' => 1,
                'productId' => 2,
                'quantity' => 2,
                'unitPrice' => 10000
            ],
            [
                'orderId' => 1,
                'productId' => 1,
                'quantity' => 1,
                'unitPrice' => 10000
            ],
            [
                'orderId' => 2,
                'productId' => 3,
                'quantity' => 2,
                'unitPrice' => 20000
            ],
            [
                'orderId' => 2,
                'productId' => 4,
                'quantity' => 1,
                'unitPrice' => 20000
            ],
            [
                'orderId' => 3,
                'productId' => 5,
                'quantity' => 4,
                'unitPrice' => 30000
            ],
        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
