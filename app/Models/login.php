<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class login extends Model
{
    use HasFactory;
    protected $table = "login";
    protected $fillable = [
        'id_login','nama_user','alamat','nomor_telepon','jenis_kelamin','keterangan','username','password','level'
    ];
}
