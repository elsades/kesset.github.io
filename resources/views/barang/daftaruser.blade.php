@extends('template/admin')
@section('content')
<section class="content">

<!-- Default box -->
<div class="card mt-2">
  <div class="card-header">
    <h3 class="card-title">DAFTAR USER</h3>
  </div>
  <div class="card-body">
  <form action="{{url('barang/edituser')}} " method="POST">
  <table id="example1" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>ID User</th>
                <th>Nama User</th>
                <th>Alamat</th>
                <th>Nomor Telepon</th>
                <th>Jenis Kelamin</th>
                <th>Keterangan</th>
                <th>Username</th>
                <th>Password</th>
                <th>Hak Akses</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
          @foreach($barang as $login)
          <tr>
                <td>{{ $login->id_login }}</td>
                <td>{{ $login->nama_user }}</td>
                <td>{{ $login->alamat }}</td>
                <td>{{ $login->nomor_telepon }}</td>
                <td>{{ $login->jenis_kelamin }}</td>
                <td>{{ $login->keterangan }}</td>
                <td>{{ $login->username }}</td>
                <td>{{ $login->password }}</td>
                <td>{{ $login->level }}</td>
                <td align="center">
                  <a class="btn btn-sm btn-primary" href="{{ url('barang/edituser', $login->id_login) }}"><i class="fa fa-edit"></i></a>
                  <button id="barang-h-{{ $login->id_login }}" data-href="{{ url('barang/hapus_user', $login->id_login) }}" onclick="hapus({{ $login->id_login }})" class="btn btn-sm btn-danger"  type="button"><i class="fa fa-trash"></i></button>
                </td>
            </tr>  
          @endforeach
        </tbody>
    </table>
    <div>
      <a class="btn btn-sm btn-secondary" href="{{ url('dashboard') }}"><i class="fa fa-chevron-left"></i> KEMBALI </a>
    </div>
  </div>
  <!-- /.card-body -->
  <div class="card-footer">
  </div>
  <!-- /.card-footer-->
</div>
<!-- /.card -->
</section>
<script>
  function hapus(id){
        Swal.fire({
      title: 'Apakah Anda Yakin?',
      text: "Data Akan Terhapus",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Hapus',
      cancelButtonText: 'Batal',
    }).then((result) => {
      if (result.isConfirmed) {
        let url = $("#barang-h-"+id).data('href');
        window.location.href = url;
      }
    })
  }
</script>
@endsection