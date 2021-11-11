<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class laporan extends Model
{
    use HasFactory;
    protected $table = 'laporan';
    protected $fillable = [
        'id_peminjam','nama_peminjam','id_barang','nama_barang','keterangan','merk_barang','jumlah_barang','kondisi_awal','kondisi_akhir','tanggal_peminjaman','tanggal_pengembalian','alamat','nomor_telepon'
    ];
}
