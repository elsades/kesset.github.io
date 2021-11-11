<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeminjaman extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peminjaman', function (Blueprint $table) {
            {
                    $table->integer('id_peminjam')->autoIncrement();
                    $table->varchar('nama_peminjam');
                    $table->varchar('id_barang');
                    $table->varchar('nama_barang');
                    $table->varchar('merk_barang');
                    $table->varchar('kondisi_barang');
                    $table->varchar('jumlah_barang');
                    $table->date('tanggal_peminjaman');
                    $table->date('tanggal_pengembalian');
                    $table->timestamps();
            }
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('peminjaman');
    }
}
