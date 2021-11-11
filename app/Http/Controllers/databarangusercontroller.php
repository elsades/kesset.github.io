<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\barang;
use App\Models\daftar_peminjaman;
use App\Models\login;
use App\Models\peminjamanuser;
use Illuminate\Support\Facades\DB;
use PHPUnit\Framework\MockObject\Rule\Parameters;

class databarangusercontroller extends Controller
{
    public function peminjaman_user()
    {
        $peminjaman = peminjamanuser::all();
        return view('user/peminjamanuser', compact('peminjaman'));
    }

    public function databaranguser()
    {
        $databaranguser = barang::all();
        return view('user/databaranguser', compact('databaranguser'));
    }

    public function peminjamanuser($id)
    {
        $databaranguser = barang::where('id_barang',$id)->first();
        $login = login::where('id_login', session('id'))->first();
        return view('user/peminjamanuser',compact('databaranguser','login'));
    }
    public function update_peminjamanuser(Request $request)
    { 
	DB::table('barang')->where('id_barang',$request->id)->update([
		
        'id_barang' => $request->id_barang,
		'nama_barang' => $request->nama_barang,
		'merk_barang' => $request->merk_barang,
        'jumlah_barang' => $request->jumlah_barang,
		'kondisi_barang' => $request->kondisi_barang,
	]);
	return redirect('user/databaranguser');
    }
    public function simpan(Request $request)
    {

        $request->validate([
            'jumlah_barang' => 'required',
            'tanggal_pengembalian' => 'required',
        ]);   
        $barang = barang::where('id_barang',$request->id_barang)->first();
        if($barang->jumlah_barang < $request->jumlah_barang) {
            return redirect('user/peminjamanuser/' . $request->id_barang)->with('gagal','Jumlah Barang Tidak Cukup');
        }
        daftar_peminjaman::insert([
            'id_peminjam' => $request->id_peminjam,
            'nama_peminjam' => $request->nama_peminjam,
            'keterangan' => $request->keterangan,
            'id_barang' => $request->id_barang,
            'nama_barang' => $request->nama_barang,
            'merk_barang' => $request->merk_barang,
            'kondisi_barang' => $request->kondisi_barang,
            'jumlah_barang' => $request->jumlah_barang,
            'tanggal_peminjaman' => $request->tanggal_peminjaman,
            'tanggal_pengembalian' => $request->tanggal_pengembalian,
            'alamat' => $request->alamat,
            'nomor_telepon' => $request->nomor_telepon,
        ]);
        {
            DB::table('barang')-> where('id_barang', $request-> id_barang)->decrement('jumlah_barang', $request->jumlah_barang);
        }
        return redirect('user/peminjamanuser/' . $request->id_barang)->with('sukses','Berhasil Meminjam Barang');
        }
        //user1
        public function databarangusers()
        {
            $databaranguser = barang::all();
            return view('users/databarangusers', compact('databaranguser'));
        }

        public function simpans(Request $request)
        {
            $request->validate([
                'jumlah_barang' => 'required',
                'tanggal_pengembalian' => 'required',
            ]);
        $barang = barang::where('id_barang',$request->id_barang)->first();
        if($barang->jumlah_barang < $request->jumlah_barang) {
            return redirect('users/peminjamanusers/' . $request->id_barang)->with('gagal','Jumlah Barang Tidak Cukup');
        }
        daftar_peminjaman::insert([
            'id_peminjam' => $request->id_peminjam,
            'nama_peminjam' => $request->nama_peminjam,
            'keterangan' => $request->keterangan,
            'id_barang' => $request->id_barang,
            'nama_barang' => $request->nama_barang,
            'merk_barang' => $request->merk_barang,
            'kondisi_barang' => $request->kondisi_barang,
            'jumlah_barang' => $request->jumlah_barang,
            'tanggal_peminjaman' => $request->tanggal_peminjaman,
            'tanggal_pengembalian' => $request->tanggal_pengembalian,
            'alamat' => $request->alamat,
            'nomor_telepon' => $request->nomor_telepon,
        ]);
        {
            DB::table('barang')-> where('id_barang', $request-> id_barang)->decrement('jumlah_barang', $request->jumlah_barang);
        }
        return redirect('users/peminjamanusers/' . $request->id_barang)->with('sukses','Berhasil Meminjam Barang');
    }
        public function peminjamanusers($id)
        {
            $databaranguser = barang::where('id_barang',$id)->first();
            $login = login::where('id_login', session('id'))->first();
            //dd($databarangusers);
            return view('users/peminjamanusers',compact('databaranguser','login'));
        }
    
        public function update_peminjamanusers(Request $request)
        {    
        DB::table('barang')->where('id_barang',$request->id)->update([
            
            'id_barang' => $request->id_barang,
            'nama_barang' => $request->nama_barang,
            'merk_barang' => $request->merk_barang,
            'jumlah_barang' => $request->jumlah_barang,
            'kondisi_barang' => $request->kondisi_barang,
        ]);
        return redirect('users/databarangusers');
        }
}