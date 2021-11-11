<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\daftar_peminjaman;
use App\Models\pengembalian;
use Illuminate\Support\Facades\DB;
use PHPUnit\Framework\MockObject\Rule\Parameters;

class daftarpeminjamancontroller extends Controller
{
    public function daftar_peminjaman()
    {
        $barang = daftar_peminjaman::all();
        return view('barang/daftar-peminjaman', compact('barang'));
    }
    public function pengembalianbarang()
    {
        $barang = pengembalian::all();
        return view('barang/pengembalian', compact('barang'));
    }
    //insert daftar_peminjaman
    public function konfirmasi($id_peminjam)
    {
        $barang = daftar_peminjaman::where('id_peminjam',$id_peminjam)->first();
       
        DB::table('pengembalian')->insert([
            'nama_peminjam' => $barang->nama_peminjam,
            'id_barang' => $barang->id_barang,
            'nama_barang' => $barang->nama_barang,
            'keterangan' => $barang->keterangan,
            'merk_barang' => $barang->merk_barang,
            'jumlah_barang' => $barang->jumlah_barang,
            'kondisi_awal' => $barang->kondisi_barang,
            'kondisi_akhir' =>'',
            'tanggal_peminjaman' => $barang->tanggal_peminjaman,
            'tanggal_pengembalian' => $barang->tanggal_pengembalian,
            'alamat' => $barang->alamat,
            'nomor_telepon' => $barang->nomor_telepon,
        ]);
        {
            DB::table('daftar_peminjaman')->where('id_peminjam',$id_peminjam)->delete();
        }
        return redirect('barang/pengembalian');
    }
    public function konfirm(Request $request)
    {
        // nambahi barang + update kondisi barang
        // DB::table('barang')-> where('id_barang', $request->id_barang)->increment('jumlah_barang', $request->jumlah_barang)
	DB::table('pengembalian')->update([
		'id_peminjam' => $request->id_peminjam,
		'nama_peminjam' => $request->nama_peminjam,
		'id_barang' => $request->id_barang,
        'nama_barang' => $request->nama_barang,
        'keterangan' => $request->keterangan,
        'merk_barang' => $request->merk_barang,
        'jumlah_barang' => $request->jumlah_barang,
		'kondisi_awal' => $request->kondisi_awal,
        'kondisi_akhir' =>'',
        'tanggal_peminjaman' => $request->tanggal_peminjaman,
        'tanggal_pengembalian' => $request->tanggal_pengembalian,
        'alamat' => $request->alamat,
        'nomor_telepon' => $request->nomor_telepon,
	]);
	return redirect('barang/pengembalian');
    }





    
      //edit
      public function edkembali($id_peminjam)
      {
          $barang = pengembalian::where('id_peminjam',$id_peminjam)->first();
          return view('barang/upkembali',compact('barang') );
      }
      public function upkembali(Request $request, $id_peminjam)
      {
        $request->validate([
            'kondisi_akhir'=> 'required',
        ]);
      DB::table('laporan')->where('id_peminjam',$request->id_peminjam)->insert([
          'nama_peminjam' => $request->nama_peminjam,
          'id_barang' => $request->id_barang,
          'nama_barang' => $request->nama_barang,
          'keterangan' => $request->keterangan,
          'merk_barang' => $request->merk_barang,
          'jumlah_barang' => $request->jumlah_barang,
          'kondisi_awal' => $request->kondisi_awal,
          'kondisi_akhir' => $request->kondisi_akhir,
          'tanggal_peminjaman' => $request->tanggal_peminjaman,
          'tanggal_pengembalian' => $request->tanggal_pengembalian,
          'alamat' => $request->alamat,
          'nomor_telepon' => $request->nomor_telepon,
      ]);
      {
        DB::table('barang')-> where('id_barang', $request->id_barang)->increment('jumlah_barang', $request->jumlah_barang);
        DB::table('pengembalian')->where('id_peminjam',$id_peminjam)->delete();
      }
      return redirect('barang/laporan');
      }
}