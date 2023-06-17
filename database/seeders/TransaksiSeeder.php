<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TransaksiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('transaksi')->insert([
            'nomor'=>1,
            'nama_barang'=>'ADIDAS HTM 2 ROLL 51,65KG',
            'harga'=>92000,
            'qty'=>'5',
            'tunai'=>'',
            'kredit'=>'',
            'aksi'=>''
        ]);
        DB::table('barang')->insert([
            'nomor'=>2,
            'nama_barang'=>'RIB POLY HTM 6,15KG',
            'harga'=>93000,
            'qty'=>'5',
            'tunai'=>'',
            'kredit'=>'',
            'aksi'=>''
        ]);
        DB::table('barang')->insert([
            'nomor'=>3,
            'nama_barang'=>'MESH AB MERAH ATI 2,14KG',
            'harga'=>94000,
            'qty'=>'3',
            'tunai'=>'',
            'kredit'=>'',
            'aksi'=>''
        ]);
        DB::table('barang')->insert([
            'nomor'=>4,
            'nama_barang'=>'KARET SRM 1 PAK 1 1/2 Lusin',
            'harga'=>25000,
            'qty'=>'2',
            'tunai'=>'',
            'kredit'=>'',
            'aksi'=>''
        ]);
        DB::table('barang')->insert([
            'nomor'=>5,
            'nama_barang'=>'SLETING YKK PUTIH 2 Lusin',
            'harga'=>135000,
            'qty'=>'2',
            'tunai'=>'',
            'kredit'=>'',
            'aksi'=>''
        ]);
        DB::table('barang')->insert([
            'nomor'=>6,
            'nama_barang'=>'RIB MESH PUTIH 1 ROLL 24,65 KG',
            'harga'=>105000,
            'qty'=>'4',
            'tunai'=>'',
            'kredit'=>'',
            'aksi'=>''
        ]);
        DB::table('barang')->insert([
            'nomor'=>7,
            'nama_barang'=>'MILANO PUTIH 1 ROLL 24,90 KG',
            'harga'=>52000,
            'qty'=>'6',
            'tunai'=>'',
            'kredit'=>'',
            'aksi'=>''
        ]);
        DB::table('barang')->insert([
            'nomor'=>8,
            'nama_barang'=>'MILANO PUTIH 1 ROLL 24,65 KG',
            'harga'=>52000,
            'qty'=>'6',
            'tunai'=>'',
            'kredit'=>'',
            'aksi'=>''
        ]);
        DB::table('barang')->insert([
            'nomor'=>9,
            'nama_barang'=>'KARET SR MERAH 4 CM 1 BALL',
            'harga'=>12000,
            'qty'=>'3',
            'tunai'=>'',
            'kredit'=>'',
            'aksi'=>''
        ]);
        DB::table('barang')->insert([
            'nomor'=>10,
            'nama_barang'=>'PVC SILVER 10M',
            'harga'=>45000,
            'qty'=>'4',
            'tunai'=>'',
            'kredit'=>'',
            'aksi'=>''
        ]);
        DB::table('barang')->insert([
            'nomor'=>11,
            'nama_barang'=>'PLASTIK HITAM 50 4 PACK',
            'harga'=>35000,
            'qty'=>'4',
            'tunai'=>'',
            'kredit'=>'',
            'aksi'=>''
        ]);
        DB::table('barang')->insert([
            'nomor'=>12,
            'nama_barang'=>'LOTO HALUS MCABE 2,94 KG',
            'harga'=>59000,
            'stok'=>'5',
            'tunai'=>'',
            'kredit'=>'',
            'aksi'=>''
        ]);

    }
}
