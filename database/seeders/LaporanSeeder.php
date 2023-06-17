<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LaporanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('laporan')->insert([
            'nomor'=>1,
            'laporan'=>'Laporan Data Barang',
            'aksi'=>'print'
        ]);
        DB::table('laporan')->insert([
            'nomor'=>2,
            'laporan'=>'Laporan Pembelian Perbulan',
            'aksi'=>'print'
        ]);
    }
}
