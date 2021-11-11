@extends('template/admin')
@section('content')
<section class="content">

<!-- Default box -->
<div class="card mt-2">
  <div class="card-header">
    <h3 class="card-title">DAFTAR BARANG</h3>
  </div>
  <div class="card-body">
    <form action="{{url('barang/edit_barang')}} " method="POST">
  <table id="example1" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Id Barang</th>
                <th>Nama Barang</th>
                <th>Merk Barang</th>
                <th>Jumlah Barang</th>
                <th>Satuan</th>
                <th>Kondisi Barang</th>
                <th>Tanggal Masuk</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
          @foreach($barang as $data)
          <tr>
                <td>{{ $data->id_barang }}</td>
                <td>{{ $data->nama_barang }}</td>
                <td>{{ $data->merk_barang }}</td>
                <td>{{ $data->jumlah_barang }}</td>
                <td>{{ $data->unit}}</td>
                <td>{{ $data->kondisi_barang }}</td>
                <td>{{ $data->tanggal_masuk }}</td>
                <td align="center">
                  <a class="btn btn-sm btn-primary" href="{{ url('barang/edit_barang', $data->id) }}" ><i class="fa fa-edit"></i></a>
                  <button id="barang-h-{{ $data->id_barang }}" data-href="{{ url('barang/hapus_barang', $data->id_barang) }}" onclick="hapus({{ $data->id_barang }})" class="btn btn-sm btn-danger"  type="button"><i class="fa fa-trash"></i></button>
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