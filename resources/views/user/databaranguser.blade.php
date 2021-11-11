@extends('template/user')
@section('content')
<section class="content">

<!-- Default box -->
<div class="card mt-2">
  <div class="card-header">
    <h3 class="card-title">DATA BARANG</h3>
  </div>
  <div class="card-body">
    <form action="{{url('user/peminjamanuser')}} " method="POST">
  <table id="example1" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Id Barang</th>
                <th>Nama Barang</th>
                <th>Merk Barang</th>
                <th>Jumlah Barang</th>
                <th>Deskripsi Barang</th>
                <th>Kondisi Barang</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
          @foreach($databaranguser as $data)
          <tr>
                <td>{{ $data->id }} </td>
                <td>{{ $data->nama_barang }}</td>
                <td>{{ $data->merk_barang }}</td>
                <td>{{ $data->jumlah_barang }}</td>
                <td>{{ $data->deskripsi_barang}}</td>
                <td>{{ $data->kondisi_barang }}</td>
                <td align="center">
                  <a class="btn btn-sm btn-primary" href="{{ url('user/peminjamanuser', $data->id_barang) }}"><i class="fa fa-cart-arrow-down"> PINJAM</i></a>
                </td>
            </tr>
          @endforeach
        </tbody>
    </table>
    <div>
      <a class="btn btn-sm btn-secondary" href="{{ url('user') }}"><i class="fa fa-chevron-left"></i> KEMBALI </a>
    </div>
  </div>
  <!-- /.card-body -->
  <div class="card-footer">
  </div>
  <!-- /.card-footer-->
</div>
<!-- /.card -->

</section>
@endsection