@extends('template/admin')
@section('content')
<section class="content">

<!-- Default box -->
<div class="card mt-2">
  <div class="card-header">
    <h3 class="card-title">INPUT BARANG</h3>
  </div>
  <div class="card-body">
    <form action="{{url('barang/input_barang')}} " method="POST">
      @csrf
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label for="">ID Barang</label>
            <input class="form-control form-control-sm " name="id_barang" id="id_barang" cols="50" rows="3" value="{{ $barang->id + 1 }}" readonly></input>
          </div>
          <div class="form-group">
            <label for="">Nama Barang</label>
            <input class="form-control form-control-sm @error('nama_barang') is-invalid @enderror " name="nama_barang" id="nama_barang" value="{{ old('nama_barang')}}" cols="50" rows="3" autofocus></input>
          </div>
          <div class="form-group">
            <label for="">Merk Barang</label>
            <input class="form-control form-control-sm @error('merk_barang') is-invalid @enderror " name="merk_barang" id="merk_barang" value="{{ old('merk_barang')}}" cols="50" rows="3"></input>
          </div>
          <div class="form-group">
            <label for="">Jumlah Barang</label>
            <input class="form-control form-control-sm @error('jumlah_barang') is-invalid @enderror " name="jumlah_barang" id="jumlah_barang" value="{{ old('jumlah_barang')}}" cols="50" rows="3"></input>
          </div>
          <div class="form-group">
            <label>Satuan</label>
              <select class="form-control custom-select @error('unit') is-invalid @enderror" name="unit" id="unit" >
                <option value="">-- Pilih --</option>
                <option value="pc">Pc</option>
                <option value="pcs">Pcs</option>
              </select>
          </div>
          <div class="form-group">
            <label for="">Deskripsi Barang</label>
            <textarea class="form-control form-control-sm @error('deskripsi_barang') is-invalid @enderror " name="deskripsi_barang" id="deskripsi_barang" cols="100" rows="5">{{ old('deskripsi_barang')}}</textarea>          
          </div>
          <div class="form-group">
            <label for me="kondisi_barang">Kondisi Barang</label>
              <select class="form-control custom-select @error('kondisi_barang') is-invalid @enderror" name="kondisi_barang" id="kondisi_barang">
                <option value="">-- Pilih --</option>
                <option value="Baik">Baik</option>
                <option value="Rusak">Rusak</option>
              </select>
          </div>
          <div class="form-group">
            <label for="">Tanggal Masuk Barang</label>
            <input class="form-control form-control-sm @error('tanggal_masuk') is-invalid @enderror " type="date" name="tanggal_masuk" id="tanggal_masuk" value="{{old('tanggal_masuk')}}" cols="50" rows="3"></input>
          </div>
          <div class="form-group">
            <button class="btn btn-sm btn-primary" type="submit"><i class="fa fa-save"></i> SUBMIT </button>
            <a class="btn btn-sm btn-secondary" href="{{ url('dashboard') }}"><i class="fa fa-chevron-left"></i> KEMBALI </a>
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