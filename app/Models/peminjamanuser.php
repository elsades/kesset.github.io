<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class peminjamanuser extends Model
{
    use HasFactory;
    protected $table = 'peminjaman';
    protected $fillable = [
        'id_peminjam','nama_peminjam','id_barang','nama_barang','merk_barang','jumlah_barang','kondisi_barang','tanggal_peminjaman','tanggal_pengembalian'
    ];
}