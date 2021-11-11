<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\laporan;
use Illuminate\Support\Facades\DB;
use PHPUnit\Framework\MockObject\Rule\Parameters;

class laporancontroller extends Controller
{
    public function laporan()
    {
        $barang = laporan::all();
        return view('barang/laporan', compact('barang'));
    }
    public function export()
    {
        $barang= laporan::all();
        return view('barang/laporanadmin_excel', compact('barang'));
    }
}