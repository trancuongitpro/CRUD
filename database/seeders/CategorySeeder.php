<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('categories')->truncate();

        DB::table('categories')->insert([
            [
                'id' => 1,
                'name' => 'Quần thời trang nam',
                'created_at' => Carbon::now()->addDays(-10),
                'updated_at' => Carbon::now()->addDays(-9),
            ],
            [
                'id' => 2,
                'name' => 'Quần thời trang nữ',
                'created_at' => Carbon::now()->addDays(-8),
                'updated_at' => Carbon::now()->addDays(-8),
            ],
            [
                'id' => 3,
                'name' => 'Quần thời trang trẻ em',
                'created_at' => Carbon::now()->addDays(-7),
                'updated_at' => Carbon::now()->addDays(-6),
            ],
        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
