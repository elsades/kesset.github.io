@extends('template/admin')
@section('content')
<section class="content">

<!-- Default box -->
<div class="card mt-2">
  <div class="card-header">
    <h3 class="card-title">VERIFIKASI PENGEMBALIAN</h3>
  </div>
  <div class="card-body">
    <form action="" method="POST">
      @csrf
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label for="">ID Peminjam</label>
            <input class="form-control form-control-sm @error('id_peminjam') is-invalid @enderror " value="{{ $barang->id_peminjam}}" name="id_peminjam" id="id_peminjam" {{ old('id_peminjam')}} cols="50" rows="3" readonly></input>
          </div>
          <div class="form-group">
            <label for="">Nama Peminjam</label>
            <input class="form-control form-control-sm @error('nama_peminjam') is-invalid @enderror " value="{{ $barang->nama_peminjam}}" name="nama_peminjam" id="nama_peminjam" {{ old('nama_peminjam')}} cols="50" rows="3" readonly></input>
          </div>
          <div class="form-group">
            <label for="">ID Barang</label>
            <input class="form-control form-control-sm @error('id_barang') is-invalid @enderror " value="{{ $barang->id_barang}}" name="id_barang" id="id_barang" {{ old('id_barang')}} cols="50" rows="3" readonly></input>
          </div>
          <div class="form-group">
              <label for="">Nama Barang</label>
              <input class="form-control form-control-sm @error('nama_barang') is-invalid @enderror " value="{{ $barang->nama_barang}}" name="nama_barang" id="nama_barang" {{ old('nama_barang')}} cols="50" rows="3" readonly></input>
            </div>
            <div class="form-group">
              <label for="">Keterangan</label>
              <input class="form-control form-control-sm @error('nama_barang') is-invalid @enderror " value="{{ $barang->keterangan}}" name="keterangan" id="keterangan" {{ old('keterangan')}} cols="50" rows="3" readonly></input>
            </div>
          <div class="form-group">
              <label for="">Merk Barang</label>
              <input class="form-control form-control-sm @error('merk_barang') is-invalid @enderror " value="{{ $barang->merk_barang}}" name="merk_barang" id="merk_barang" {{ old('merk_barang')}} cols="100" rows="5" readonly></input>          
          </div>
          <div class="form-group">
            <label for="">Jumlah Barang</label>
            <input class="form-control form-control-sm @error('jumlah_barang') is-invalid @enderror " value="{{ $barang->jumlah_barang}}" name="jumlah_barang" id="jumlah_barang" {{ old('jumlah_barang')}} cols="50" rows="3" readonly></input>
          </div>
          <div class="form-group">
            <label for="">Kondisi Awal</label>
            <input class="form-control form-control-sm @error('kondisi_barang') is-invalid @enderror " value="{{ $barang->kondisi_awal}}" name="kondisi_awal" id="kondisi_awal" {{ old('kondisi_awal')}} cols="50" rows="3" readonly></input>
          </div>
          <div class="form-group">
            <label for="">Kondisi Akhir</label>
            <input class="form-control form-control-sm @error('kondisi_akhir') is-invalid @enderror " name="kondisi_akhir" id="kondisi_akhir" {{ old('kondisi_akhir')}} cols="50" rows="3" ></input>
          </div>
          <div class="form-group">
            <label for="">Tanggal Peminjaman</label>
            <input class="form-control form-control-sm @error('tanggal_peminjaman') is-invalid @enderror " type="date" value="{{$barang->tanggal_peminjaman}}" name="tanggal_peminjaman" id="tanggal_peminjaman" {{ old('tanggal_peminjaman')}} cols="50" rows="3" readonly></input>
          </div>
          <div class="form-group">
            <label for="">Tanggal Pengembalian</label>
            <input class="form-control form-control-sm @error('tanggal_pengembalian') is-invalid @enderror " type="date" value="<?php echo date("Y-m-d") ?>" name="tanggal_pengembalian" id="tanggal_pengembalian" {{ old('tanggal_pengembalian')}} cols="50" rows="3" readonly></input>
          </div>
          <div class="form-group">
            <label for="">Alamat</label>
            <input class="form-control form-control-sm @error('alamat') is-invalid @enderror " value="{{ $barang->alamat}}" name="alamat" id="alamat" {{ old('alamat')}} cols="50" rows="3" readonly></input>
          </div>
          <div class="form-group">
            <label for="">Nomor Telepon</label>
            <input class="form-control form-control-sm @error('nomor_telepon') is-invalid @enderror " value="{{ $barang->nomor_telepon}}" name="nomor_telepon" id="nomor_telepon" {{ old('nomor_telepon')}} cols="50" rows="3" readonly></input>
          </div>
          <div class="form-group">
            <button class="btn btn-sm btn-primary" type="submit"><i class="fa fa-save"></i> SUBMIT </button>
            <a class="btn btn-sm btn-secondary" href="{{ url('barang/pengembalian') }}"><i class="fa fa-chevron-left"></i> KEMBALI </a>
          </div>
      </div>
    </form>
  </div>
  <!-- /.card-body -->
  <div class="card-footer">
  </div>
  <!-- /.card-footer-->
</div>
<!-- /.card -->
</section>

@endsection