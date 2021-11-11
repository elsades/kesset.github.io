@extends('template/admin')
@section('content')
<section class="content">

<!-- Default box -->
<div class="card mt-2">
  <div class="card-header">
    <h3 class="card-title">TAMBAH USER</h3>
  </div>
  <div class="card-body">
    <form action="{{url('barang/input_user')}} " method="POST">
      @csrf
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label for="">ID User</label>
            <input class="form-control form-control-sm @error('id_login') is-invalid @enderror " name="id_login" id="id_login" cols="50" value="{{ old('id_login')}}" rows="3" maxlength="6" autofocus ></input>
          </div>
          <div class="form-group">
              <label for="">Nama User</label>
              <input class="form-control form-control-sm @error('nama_user') is-invalid @enderror " name="nama_user" id="nama_user" value="{{ old('nama_user')}}" cols="50" rows="3" maxlength="100"></input>
          </div>
          <div class="form-group">
            <label for="">Alamat</label>
            <input class="form-control form-control-sm @error('alamat') is-invalid @enderror " name="alamat" id="alamat" value="{{ old('alamat')}}" cols="50" rows="3" maxlength="100"></input>
          </div>
          <div class="form-group">
            <label for="">Nomor Telepon</label>
            <input class="form-control form-control-sm @error('nomor_telepon') is-invalid @enderror " name="nomor_telepon" id="nomor_telepon" value="{{ old('nomor_telepon')}}" cols="50" rows="3" maxlength="15"></input>
          </div>
          <div class="form-group">
              <label for="">Jenis Kelamin</label><br>
              <input type="radio" name="jenis_kelamin" value="Laki-laki" <?php if($barang=='Laki-laki'){echo "checked";}?> required > Laki-laki 
              <input type="radio"  name="jenis_kelamin" value="Perempuan" <?php if($barang=='Perempuan'){echo "checked";}?> required> Perempuan  
            </div>
          <div class="form-group">
              <label for="">Keterangan</label>
              <input class="form-control form-control-sm @error('keterangan') is-invalid @enderror " name="keterangan" id="keterangan" value="{{ old('keterangan')}}" cols="100" rows="5" maxlength="100"></input>          
          </div>
          <div class="form-group">
              <label for="">Username</label>
              <input class="form-control form-control-sm @error('username') is-invalid @enderror " name="username" id="username" value="{{ old('username')}}" cols="100" rows="5" maxlength="8"></input>          
          </div>
          <div class="form-group">
              <label for="">Password</label>
              <input class="form-control form-control-sm @error('password') is-invalid @enderror " name="password" id="password" value="{{ old('password')}}"  cols="50" rows="3"  maxlength="8"></input>
          </div>
          <div class="form-group">
            <label for="">Hak Akses</label><br>
            <input type="radio" name="level" value="Admin" <?php if($barang=='Admin'){echo "checked";}?> required> Admin
            <input type="radio" name="level" value="Siswa" <?php if($barang=='Siswa'){echo "checked";}?> required> Siswa
            <input type="radio" name="level" value="Guru" <?php if($barang=='Guru'){echo "checked";}?> required> Guru
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

