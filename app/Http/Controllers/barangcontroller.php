<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\barang;
use Illuminate\Support\Facades\DB;
use PHPUnit\Framework\MockObject\Rule\Parameters;

class barangcontroller extends Controller
{
    public function data_barang()
    {
        $barang = barang::all();
        return view('barang/data-barang', compact('barang'));
    }

    public function barang_masuk()
    {
        $barang = barang::orderBy('id', 'desc')->first();
        return view('barang/barang-masuk', ['barang'=> $barang]);
    }

    public function barang_keluar()
    {
        return view('barang/barang-keluar');
    }
    //hapus
    public function hapus_barang($id)
    {
        DB::table('barang')->where('id_barang',$id)->delete();
        return back();
    }

    //input
    public function input_barang(request $request)
    {
    $request->validate([
        'id_barang' => 'required|unique:App\Models\barang,id_barang',
		'nama_barang' =>'required',
		'merk_barang' => 'required',
        'jumlah_barang' => 'required',
        'unit' => 'required',
        'deskripsi_barang' => 'required',
		'kondisi_barang' => 'required',
        'tanggal_masuk' => 'required', 
    ]);

	DB::table('barang')->insert([
		'id_barang' => $request->id_barang,
		'nama_barang' => $request->nama_barang,
		'merk_barang' => $request->merk_barang,
        'jumlah_barang' => $request->jumlah_barang,
        'unit' => $request->unit,
        'deskripsi_barang' => $request->deskripsi_barang,
		'kondisi_barang' => $request->kondisi_barang,
        'tanggal_masuk' => $request->tanggal_masuk,
	]);
	return redirect('/barang/barang-masuk');
    }

    //edit
    public function edit_barang($id)
    {
        $barang=barang::where('id_barang',$id)->first();
        //dd($barang->nama_barang);
        return view('barang/edit-barang',compact('barang') );
    }
    public function update_barang(Request $request)
    {

	DB::table('barang')->where('id_barang',$request->id)->update([
		'id_barang' => $request->id_barang,
		'nama_barang' => $request->nama_barang,
		'merk_barang' => $request->merk_barang,
        'jumlah_barang' => $request->jumlah_barang,
        'unit' => $request->unit,
        'deskripsi_barang' => $request->deskripsi_barang,
		'kondisi_barang' => $request->kondisi_barang,
        'tanggal_masuk' => $request->tanggal_masuk,
	]);
	return redirect('/barang/data-barang');
    }

}
