<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SatuanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('satuans')->insert([
            [
                'kodeSatuan' => 'kg',
                'namaSatuan' => 'kilogram',
            ],
            [
                'kodeSatuan' => 'pcs',
                'namaSatuan' => 'buah',
            ],
            [
                'kodeSatuan' => 'ltr',
                'namaSatuan' => 'liter',
            ],
            ]);

    }
}
