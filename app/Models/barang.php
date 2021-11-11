<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class barang extends Model
{
    use HasFactory;
    protected $table = 'barang';
    protected $fillable = [
        'id_barang','nama_barang','merk_barang','jumlah_barang','unit','deskripsi_barang','kondisi_barang','tanggal_masuk'
    ];
}
