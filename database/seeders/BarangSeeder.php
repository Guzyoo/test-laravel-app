<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('barang')->insert([
            'nomor'=>1,
            'nama_barang'=>'ADIDAS HTM 2 ROLL 51,65KG',
            'satuan'=>'Pcs',
            'harga'=>92000,
            'stok'=>'5',
            'aksi'=>''
        ]);
        DB::table('barang')->insert([
            'nomor'=>2,
            'nama_barang'=>'RIB POLY HTM 6,15KG',
            'satuan'=>'Pcs',
            'harga'=>93000,
            'stok'=>'5',
            'aksi'=>''
        ]);
        DB::table('barang')->insert([
            'nomor'=>3,
            'nama_barang'=>'MESH AB MERAH ATI 2,14KG',
            'satuan'=>'Pcs',
            'harga'=>94000,
            'stok'=>'3',
            'aksi'=>''
        ]);
        DB::table('barang')->insert([
            'nomor'=>4,
            'nama_barang'=>'KARET SRM 1 PAK 1 1/2 Lusin',
            'satuan'=>'Pcs',
            'harga'=>25000,
            'stok'=>'2',
            'aksi'=>''
        ]);
        DB::table('barang')->insert([
            'nomor'=>5,
            'nama_barang'=>'SLETING YKK PUTIH 2 Lusin',
            'satuan'=>'Pcs',
            'harga'=>135000,
            'stok'=>'2',
            'aksi'=>''
        ]);
        DB::table('barang')->insert([
            'nomor'=>6,
            'nama_barang'=>'RIB MESH PUTIH 1 ROLL 24,65 KG',
            'satuan'=>'Pcs',
            'harga'=>105000,
            'stok'=>'4',
            'aksi'=>''
        ]);
        DB::table('barang')->insert([
            'nomor'=>7,
            'nama_barang'=>'MILANO PUTIH 1 ROLL 24,90 KG',
            'satuan'=>'Pcs',
            'harga'=>52000,
            'stok'=>'6',
            'aksi'=>''
        ]);
        DB::table('barang')->insert([
            'nomor'=>8,
            'nama_barang'=>'MILANO PUTIH 1 ROLL 24,65 KG',
            'satuan'=>'Pcs',
            'harga'=>52000,
            'stok'=>'6',
            'aksi'=>''
        ]);
        DB::table('barang')->insert([
            'nomor'=>9,
            'nama_barang'=>'KARET SR MERAH 4 CM 1 BALL',
            'satuan'=>'Pcs',
            'harga'=>12000,
            'stok'=>'3',
            'aksi'=>''
        ]);
        DB::table('barang')->insert([
            'nomor'=>10,
            'nama_barang'=>'PVC SILVER 10M',
            'satuan'=>'Pcs',
            'harga'=>45000,
            'stok'=>'4',
            'aksi'=>''
        ]);
        DB::table('barang')->insert([
            'nomor'=>11,
            'nama_barang'=>'PLASTIK HITAM 50 4 PACK',
            'satuan'=>'Pcs',
            'harga'=>35000,
            'stok'=>'4',
            'aksi'=>''
        ]);
        DB::table('barang')->insert([
            'nomor'=>12,
            'nama_barang'=>'LOTO HALUS MCABE 2,94 KG',
            'satuan'=>'Pcs',
            'harga'=>59000,
            'stok'=>'5',
            'aksi'=>''
        ]);
    }
}
