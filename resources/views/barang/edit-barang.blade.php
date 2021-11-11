@extends('template/admin')
@section('content')
<section class="content">

<!-- Default box -->
<div class="card mt-2">
  <div class="card-header">
    <h3 class="card-title">EDIT BARANG</h3>
  </div>
  <div class="card-body">
    <form action="" method="POST">
      @csrf
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label for="">ID Barang</label>
            <input class="form-control form-control-sm @error('id_barang') is-invalid @enderror " value="{{ $barang->id_barang}}" name="id_barang" id="id_barang" cols="50" rows="3" readonly>{{ old('id_barang')}}</input>
          </div>
          <div class="form-group">
            <label for="">Nama Barang</label>
            <input class="form-control form-control-sm @error('nama_barang') is-invalid @enderror " value="{{ $barang->nama_barang}}" name="nama_barang" id="nama_barang" cols="50" rows="3" readonly>{{ old('nama_barang')}}</input>
          </div>
          <div class="form-group">
            <label for="">Merk Barang</label>
            <input class="form-control form-control-sm @error('merk_barang') is-invalid @enderror " value="{{ $barang->merk_barang}}" name="merk_barang" id="merk_barang" cols="50" rows="3" readonly>{{ old('merk_barang')}}</input>
          </div>
          <div class="form-group">
              <label for="">Jumlah Barang</label>
              <input class="form-control form-control-sm @error('jumlah_barang') is-invalid @enderror " value="{{ $barang->jumlah_barang}}" name="jumlah_barang" id="jumlah_barang" cols="50" rows="3" maxlength="50">{{ old('jumlah_barang')}}</input>
            </div>
            <div class="form-group">
              <label for me="unit">Satuan</label>
              <select class="form-control" name="unit" id="unit">
              <option value="pc">Pc</option>
              <option value="pcs">Pcs</option>
              </select>
            </div>
          <div class="form-group">
              <label for="">Deskripsi Barang</label>
              <textarea class="form-control form-control-sm @error('deskripsi_barang') is-invalid @enderror " value="" name="deskripsi_barang" id="deskripsi_barang" cols="100" rows="5" maxlength="1000">{{ $barang->deskripsi_barang}}</textarea>          
          </div>
        <div>
          <label for me="kondisi_barang">Kondisi Barang</label>
            <select class="form-control" name="kondisi_barang" id="kondisi_barang">
            <option value="Baik">Baik</option>
            <option value="Rusak">Rusak</option>
            </select>
          </div>
          <div class="form-group">
            <label for="">Tanggal Masuk Barang</label>
            <input class="form-control form-control-sm @error('tanggal_masuk') is-invalid @enderror " type="date" value="{{ $barang->tanggal_masuk}}" name="tanggal_masuk" id="tanggal_masuk" cols="50" rows="3" >{{ old('tanggal_masuk')}}</input>
          </div>
          <div class="form-group">
            <button class="btn btn-sm btn-primary" type="submit"><i class="fa fa-save"></i> SUBMIT </button>
            <a class="btn btn-sm btn-secondary" href="{{ url('barang/data-barang') }}"><i class="fa fa-chevron-left"></i> KEMBALI </a>
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