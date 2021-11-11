<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class daftar_peminjaman extends Model
{
    use HasFactory;
    protected $table = 'daftar_peminjaman';
    protected $fillable = [
        'id_peminjam','nama_peminjam','id_barang','nama_barang','merk_barang','jumlah_barang','kondisi_barang','tanggal_peminjaman','tanggal_pengembalian','alamat','nomor_telepon'
    ];
}
