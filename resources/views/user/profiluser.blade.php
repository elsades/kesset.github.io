@extends('template/user')
@section('content')
<section class="content">

<!-- Default box -->
<div class="card mt-2">
  <div class="card-header">
    <h3 class="card-title">PROFIL</h3>
  </div>
  <div class="card-body">
    <form action="#" method="POST">
      @csrf
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label for="">ID User</label>
            <input class="form-control form-control-sm" value="{{ $barang->id_login}}" name="id_login" id="id_login" cols="50" rows="3"   readonly></input>
          </div>
          <div class="form-group">
            <label for="">Nama User</label>
            <input class="form-control form-control-sm" value="{{ $barang->nama_user}}" name="nama_user" id="nama_user" cols="50" rows="3"  readonly></input>
          </div>
          <div class="form-group">
            <label for="">Kelas</label>
            <input class="form-control form-control-sm" value="{{ $barang->keterangan}}" name="keterangan" id="keterangan" cols="50" rows="3"  readonly></input>
          </div>
          <div class="form-group">
            <label for="">Alamat</label>
            <input class="form-control form-control-sm"  value="{{ $barang->alamat}}" name="alamat" id="alamat" cols="50" rows="3"  readonly></input>
          </div>
          <div class="form-group">
            <label for="">Nomor Telepon</label><br>
            <input class="form-control form-control-sm"  value="{{ $barang->nomor_telepon}}" name="nomor_telepon" id="nomor_telepon" cols="50" rows="3"  readonly></input>     
          </div>
          <div class="form-group">
            <label for="">Jenis Kelamin</label><br>
            <input class="form-control form-control-sm"  value="{{ $barang->jenis_kelamin}}" name="jenis_kelamin" id="jenis_kelamin" cols="50" rows="3"  readonly></input>     
          </div>
          <div class="form-group">
            <a class="btn btn-sm btn-secondary" href="{{ url('user') }}"><i class="fa fa-chevron-left"></i> KEMBALI </a>
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