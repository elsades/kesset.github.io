<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDaftarPeminjamanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daftar_peminjaman', function (Blueprint $table) {
            $table->integer('id_peminjam')->autoIncrement();
            $table->integer('nama_peminjam');
            $table->string('id_barang');
            $table->string('nama_barang');
            $table->string('merk_barang');
            $table->string('jumlah_barang');
            $table->string('kondisi_barang');
            $table->date('tanggal_peminjaman');
            $table->date('tanggal_pengembalian');
            $table->text('alamat')->nullable();
            $table->string('nomor_telepon');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('daftar_peminjaman');
    }
}
