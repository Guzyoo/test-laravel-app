<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('transaksi', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('nomor');
            $table->string('nama_barang');
            $table->integer('harga');
            $table->integer('qty');
            $table->string('tunai');
            $table->string('kredit');
            $table->string('aksi');
            $table->unique(array('harga'));
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksi');
    }
};
