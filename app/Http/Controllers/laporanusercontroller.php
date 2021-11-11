<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\laporan;
use Illuminate\Support\Facades\DB;
use PHPUnit\Framework\MockObject\Rule\Parameters;

class laporanusercontroller extends Controller
{
    // user
    public function laporanuser()
    {
        $barang = laporan::where('nama_peminjam', nama_user()->nama_user)->get();
        return view('user/laporanuser', compact('barang'));
    }
    
    // user1
    public function laporanusers()
    {
        $barang = laporan::where('nama_peminjam', nama_user()->nama_user)->get();
        return view('users/laporanusers', compact('barang'));
    }
}