<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\tambahusercontroller;
use App\Http\Controllers\barangcontroller;
use App\Http\Controllers\logincontroller;
use App\Http\Controllers\laporancontroller;
use App\Http\Controllers\databarangusercontroller;
use App\Http\Controllers\daftarpeminjamancontroller;
use App\Http\Controllers\laporanusercontroller;





/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/dashboard', function () {
    return view('template/admin');
})->middleware('login');
Route::get('/user', function () {
    return view('template/user');
})->middleware('login');
Route::get('/user1', function () {
    return view('template/user1');
})->middleware('login');

//login
route::get('/', [logincontroller::class, 'index']);
route::post('login/', [logincontroller::class, 'login']);
//admin
route::get('barang/profiladmin', [tambahusercontroller::class, 'profil'])->middleware('login');
route::get('barang/tambah-user', [tambahusercontroller::class, 'tambah_user'])->middleware('login');
route::get('barang/daftaruser', [tambahusercontroller::class, 'daftaruser'])->middleware('login');
route::post('barang/input_user', [tambahusercontroller::class, 'input_user'])->middleware('login');
route::get('barang/hapus_user/{id}', [tambahusercontroller::class, 'hapus_user']);
route::get('barang/edituser/{id}', [tambahusercontroller::class, 'edit_user']);
route::post('barang/edituser/{id}', [tambahusercontroller::class, 'update_user']);

route::get('barang/data-barang', [barangcontroller::class, 'data_barang'])->middleware('login');
route::get('barang/barang-masuk', [barangcontroller::class, 'barang_masuk'])->middleware('login');
route::get('barang/daftar-peminjaman', [daftarpeminjamancontroller::class, 'daftar_peminjaman'])->middleware('login');

route::get('barang/pengembalian', [daftarpeminjamancontroller::class, 'pengembalianbarang'])->middleware('login');
route::get('barang/pengembalian/{id_peminjam}', [daftarpeminjamancontroller::class, 'konfirmasi'])->middleware('login');
route::post('barang/pengembalian/{id_peminjam}', [daftarpeminjamancontroller::class, 'konfirm']);
route::get('barang/upkembali/{id_peminjam}', [daftarpeminjamancontroller::class, 'edkembali']); 
route::post('barang/upkembali/{id_peminjam}', [daftarpeminjamancontroller::class, 'upkembali']); 

route::get('barang/laporan', [laporancontroller::class, 'laporan'])->middleware('login');
route::get('barang/laporanadmin-excel/export', [laporancontroller::class, 'export']);
route::get('barang/hapus_barang/{id}', [barangcontroller::class, 'hapus_barang']);
route::post('barang/input_barang', [barangcontroller::class, 'input_barang'])->middleware('login');
route::get('barang/edit_barang/{id}', [barangcontroller::class, 'edit_barang']);
route::post('barang/edit_barang/{id}', [barangcontroller::class, 'update_barang']);


//user
route::get('user/profiluser', [tambahusercontroller::class, 'profiluser'])->middleware('login');
route::get('user/databaranguser', [databarangusercontroller::class, 'databaranguser'])->middleware('login');
route::get('user/peminjamanuser', [databarangusercontroller::class, 'peminjaman_user'])->middleware('login');

route::post('user/peminjamanuser', [databarangusercontroller::class, 'simpan'])->middleware('login');
route::get('user/peminjamanuser/{id}', [databarangusercontroller::class, 'peminjamanuser'])->middleware('login');
route::post('user/peminjamanuser/{id}', [databarangusercontroller::class, 'update_peminjamanuser']);

route::get('user/pengembalianuser', [daftarpeminjamancontroller::class, 'pengembalian'])->middleware('login');
route::get('user/laporanuser', [laporanusercontroller::class, 'laporanuser'])->middleware('login');
// user1
route::get('users/profilusers', [tambahusercontroller::class, 'profilusers'])->middleware('login');
route::get('users/databarangusers', [databarangusercontroller::class, 'databarangusers'])->middleware('login');
route::get('users/peminjamanusers', [databarangusercontroller::class, 'peminjaman_users'])->middleware('login');
route::post('users/peminjamanusers', [databarangusercontroller::class, 'simpans'])->middleware('login');

route::get('users/peminjamanusers/{id}', [databarangusercontroller::class, 'peminjamanusers'])->middleware('login');
route::post('users/peminjamanusers/{id}', [databarangusercontroller::class, 'update_peminjamanusers']);
route::get('users/pengembalianusers', [daftarpeminjamancontroller::class, 'pengembalianusers'])->middleware('login');
route::get('users/laporanusers', [laporanusercontroller::class, 'laporanusers'])->middleware('login');



//logout
route::get('logout/login', [logincontroller::class, 'logout']);
