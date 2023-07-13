<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('items')->insert([
            [
            'kodeBarang' => 'BRG-011',
            'namaBarang' => 'Buah Apel',
            'hargaBarang' => '20000',
            'deskripsiBarang' => 'Harga buah apel/kg',
            'satuan_id' => '1',
            ],
            [
            'kodeBarang' => 'BRG-021',
            'namaBarang' => 'Saus Tomat',
            'hargaBarang' => '7000',
            'deskripsiBarang' => 'Harga saus tomat/pcs',
            'satuan_id' => '2',
            ],
            [
            'kodeBarang' => 'BRG-031',
            'namaBarang' => 'Minyak Goreng',
            'hargaBarang' => '15000',
            'deskripsiBarang' => 'Harga minyak goreng/ltr',
            'satuan_id' => '3',
            ],
            ]);
    }
}
