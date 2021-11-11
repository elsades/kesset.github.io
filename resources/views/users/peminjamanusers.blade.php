@extends('template/user1')
@section('content')
<section class="content">

  @if (session('sukses'))
    <div class="alert alert-success">
      {{session('sukses')}}
    </div>
  @endif

  @if (session('gagal'))
    <div class="alert alert-danger">
      {{session('gagal')}}
    </div>
  @endif
<!-- Default box -->
<div class="card mt-2">
  <div class="card-header">
    <h3 class="card-title">PEMINJAMAN BARANG</h3>
  </div>
  <div class="card-body">
    <form action="{{url('users/peminjamanusers')}}" method="POST" autocomplete="off">
      @csrf
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label for="">ID Peminjam</label>
            <input class="form-control form-control-sm @error('id_peminjam') is-invalid @enderror" value="{{ $login->id_login}}" name="id_peminjam" id="id_peminjam" {{ old('id_peminjam')}} cols="50" rows="3" readonly></input>
          </div>
          <div class="form-group">
            <label for="">Nama Peminjam</label>
            <input class="form-control form-control-sm @error('nama_peminjam') is-invalid @enderror" value="{{ $login->nama_user}}" name="nama_peminjam" id="nama_peminjam" {{ old('nama_peminjam')}} cols="50" rows="3" readonly></input>
          </div>
          <div class="form-group">
            <label for="">Guru Mapel</label>
            <input class="form-control form-control-sm @error('keterangan') is-invalid @enderror  "  value="{{ $login->keterangan}}" name="keterangan" id="keterangan" {{ old('keterangan')}} cols="50" rows="3" readonly></input>
          </div>
          <div class="form-group">
            <label for="">Alamat</label>
            <input class="form-control form-control-sm @error('alamat') is-invalid @enderror" value="{{ $login->alamat}}" name="alamat" id="alamat" {{ old('alamat')}} cols="50" rows="3" readonly></input>
          </div>
          <div class="form-group">
            <label for="">Nomor Telepon</label>
            <input class="form-control form-control-sm @error('nomor_telepon') is-invalid @enderror" value="{{ $login->nomor_telepon}}" name="nomor_telepon" id="nomor_telepon" {{ old('nomor_telepon')}} cols="50" rows="3" readonly></input>
          </div>
          <div class="form-group">
            <label for="">ID Barang</label>
            <input class="form-control form-control-sm @error('id_barang') is-invalid @enderror" value="{{ $databaranguser->id_barang}}"  name="id_barang" id="id_barang" {{ old('id_barang')}} cols="50" rows="3" readonly></input>
          </div>
          <div class="form-group">
              <label for="">Nama Barang</label>
              <input class="form-control form-control-sm @error('nama_barang') is-invalid @enderror" value="{{ $databaranguser->nama_barang}}" name="nama_barang" id="nama_barang" {{ old('nama_barang')}} cols="50" rows="3" readonly></input>
            </div>
          <div class="form-group">
              <label for="">Merk Barang</label>
              <input class="form-control form-control-sm @error('merk_barang') is-invalid @enderror" value="{{ $databaranguser->merk_barang}}" name="merk_barang" id="merk_barang" {{ old('merk_barang')}} cols="100" rows="5" readonly></input>          
          </div>
          <div class="form-group">
              <label for="">Kondisi Barang</label>
              <input class="form-control form-control-sm @error('kondisi_barang') is-invalid @enderror" value="{{ $databaranguser->kondisi_barang}}" name="kondisi_barang" id="kondisi_barang" {{ old('kondisi_barang')}} cols="50" rows="3" readonly></input>
          </div>
          <div class="form-group">
            <label for="">Jumlah Barang</label>
            <input class="form-control form-control-sm @error('jumlah_barang') is-invalid @enderror"  name="jumlah_barang" id="jumlah_barang" {{ old('jumlah_barang')}} cols="50" rows="3"></input>
        </div>
          <div class="form-group">
            <label for="">Tanggal Peminjaman</label>
            <input class="form-control form-control-sm @error('tanggal_peminjaman') is-invalid @enderror" type="date" value="<?php echo date("Y-m-d") ?>" name="tanggal_peminjaman" id="tanggal_peminjaman" {{ old('tanggal_peminjaman')}} cols="50" rows="3" readonly></input>
          </div>
          <div class="form-group">
            <label for="">Tanggal Pengembalian</label>
            <input class="form-control form-control-sm @error('tanggal_pengembalian') is-invalid @enderror" type="date"  value="<?php echo date('Y-m-d', strtotime('+7days', strtotime(date('Y-m-d'))));?>" name="tanggal_pengembalian" id="tanggal_pengembalian" {{ old('tanggal_pengembalian')}} cols="50" rows="3" readonly></input>
          </div>
          <div class="form-group">
            <button class="btn btn-sm btn-primary" type="submit"><i class="fa fa-save"></i> PINJAM </button>
            <a class="btn btn-sm btn-secondary" href="{{ url('users/databarangusers') }}"><i class="fa fa-chevron-left"></i> KEMBALI </a>
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