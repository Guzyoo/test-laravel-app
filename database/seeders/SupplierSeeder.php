<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('supplier')->insert([
            'nomor'=>1,
            'nama_supplier'=>'Bada Dim',
            'tgl_pembelian'=>'01/12/2022',
            'no_tlp'=>'85713835245',
            'aksi'=>''
        ]);
        DB::table('supplier')->insert([
            'nomor'=>2,
            'nama_supplier'=>'Pt alamiah',
            'tgl_pembelian'=>'01/12/2022',
            'no_tlp'=>'82567845167',
            'aksi'=>''
        ]);
        DB::table('supplier')->insert([
            'nomor'=>3,
            'nama_supplier'=>'Esence',
            'tgl_pembelian'=>'01/12/2022',
            'no_tlp'=>'8976418342',
            'aksi'=>''
        ]);
        DB::table('supplier')->insert([
            'nomor'=>4,
            'nama_supplier'=>'Pt Interbait',
            'tgl_pembelian'=>'01/12/2022',
            'no_tlp'=>'85627813291',
            'aksi'=>''
        ]);
        DB::table('supplier')->insert([
            'nomor'=>5,
            'nama_supplier'=>'Sunpa',
            'tgl_pembelian'=>'01/12/2022',
            'no_tlp'=>'81788932675',
            'aksi'=>''
        ]);
        DB::table('supplier')->insert([
            'nomor'=>6,
            'nama_supplier'=>'Pt karefouria',
            'tgl_pembelian'=>'01/12/2022',
            'no_tlp'=>'82765142834',
            'aksi'=>''
        ]);
        DB::table('supplier')->insert([
            'nomor'=>7,
            'nama_supplier'=>'Adam',
            'tgl_pembelian'=>'01/12/2022',
            'no_tlp'=>'81263527183',
            'aksi'=>''
        ]);
        DB::table('supplier')->insert([
            'nomor'=>8,
            'nama_supplier'=>'Dakuau',
            'tgl_pembelian'=>'01/12/2022',
            'no_tlp'=>'82675883214',
            'aksi'=>''
        ]);
        DB::table('supplier')->insert([
            'nomor'=>9,
            'nama_supplier'=>'Radian',
            'tgl_pembelian'=>'01/12/2022',
            'no_tlp'=>'82997134522',
            'aksi'=>''
        ]);
        DB::table('supplier')->insert([
            'nomor'=>10,
            'nama_supplier'=>'Pt Nugraha',
            'tgl_pembelian'=>'01/12/2022',
            'no_tlp'=>'82456334901',
            'aksi'=>''
        ]);
        DB::table('supplier')->insert([
            'nomor'=>11,
            'nama_supplier'=>'Racian',
            'tgl_pembelian'=>'01/12/2022',
            'no_tlp'=>'81870123550',
            'aksi'=>''
        ]);
        DB::table('supplier')->insert([
            'nomor'=>12,
            'nama_supplier'=>'Caoxin',
            'tgl_pembelian'=>'01/12/2022',
            'no_tlp'=>'82890112678',
            'aksi'=>''
        ]);
    }
}
