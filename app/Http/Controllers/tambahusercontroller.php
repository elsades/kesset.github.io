<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\login;
use Illuminate\Support\Facades\DB;
use PHPUnit\Framework\MockObject\Rule\Parameters;

class tambahusercontroller extends Controller
{
    public function tambah_user()
    {
        $barang = login::where('id_login','id')->first();
        return view('barang/tambah-user', compact('barang'));
    }

    public function daftaruser()
    {
        $barang = login::all();
        return view('barang/daftaruser', compact('barang'));
    }
    
    //input user
    public function input_user(request $request)
    {
    $request->validate([
        'id_login' => 'required|unique:App\Models\login,id_login',
		'nama_user' =>'required',
		'alamat' => 'required',
        'nomor_telepon' => 'required',
        'jenis_kelamin' => 'required',
        'keterangan' => 'required',
        'username' => 'required',
		'password' => 'required',
        'level' => 'required',
    ]);

	DB::table('login')->insert([
		'id_login' => $request->id_login,
		'nama_user' => $request->nama_user,
		'alamat' => $request->alamat,
        'nomor_telepon' => $request->nomor_telepon,
        'jenis_kelamin' => $request->jenis_kelamin,
        'keterangan' => $request->keterangan,
        'username' => $request->username,
		'password' => $request->password,
        'level' => $request->level,

	]);
	return redirect('barang/tambah-user');
    }

    //hapus user
     public function hapus_user($id)
     {
         DB::table('login')->where('id_login',$id)->delete();
         return back();
     }

     //edit user
     public function edit_user($id)
    {
        $barang=login::where('id_login',$id)->first();
        //dd($login->nama_user);
        return view('barang/edituser',compact('barang') );
    }
    public function update_user(Request $request)
    {

	DB::table('login')->where('id_login',$request->id)->update([
		'id_login' => $request->id_login,
		'nama_user' => $request->nama_user,
		'alamat' => $request->alamat,
        'nomor_telepon' => $request->nomor_telepon,
        'jenis_kelamin' => $request->jenis_kelamin,
        'keterangan' => $request->keterangan,
        'username' => $request->username,
		'password' => $request->password,
        'level' => $request->level,
	]);
	return redirect('/barang/daftaruser');
    }
    public function profil()
    {
        $barang = login::where('id_login', session('id'))->first();
        return view('barang/profiladmin',compact('barang'));
    }
    
    public function profiluser()
    {
        $barang = login::where('id_login', session('id'))->first();
        return view('user/profiluser',compact('barang'));
    }
     
    public function profilusers()
    {
        $barang = login::where('id_login', session('id'))->first();
        return view('users/profilusers',compact('barang'));
    }
    
    
}