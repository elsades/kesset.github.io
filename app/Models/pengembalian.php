<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pengembalian extends Model
{
    use HasFactory;
    protected $table = 'pengembalian';
    protected $fillable = [
        'id_peminjam','nama_peminjam','id_barang','nama_barang','merk_barang','jumlah_barang','kondisi_awal','kondisi_akhir','tanggal_peminjaman'
    ];
}