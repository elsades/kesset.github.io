@extends('template/admin')
@section('content')
<section class="content">

<!-- Default box -->
<div class="card mt-2">
  <div class="card-header">
    <h3 class="card-title">PENGEMBALIAN</h3>
  </div>
  <div class="card-body">
    <form action="{{url('barang/upkembali')}} " method="POST">
  <table id="example1" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>ID Peminjam</th>
                <th>Nama Peminjam</th>
                <th>ID Barang</th>
                <th>Nama Barang</th>
                <th>Keterangan</th>
                <th>Merk Barang</th>
                <th>Jumlah Barang</th>
                <th>Kondisi Awal</th>
                <th>Kondisi Akhir</th>
                <th>Tanggal Peminjaman</th>
                <th>Tanggal Pengembalian</th>
                <th>Alamat</th>
                <th>Nomor Telepon</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
          @foreach($barang as $barang)
            <tr>
                <td>{{ $barang->id_peminjam }}</td>
                <td>{{ $barang->nama_peminjam }}</td>
                <td>{{ $barang->id_barang }}</td>
                <td>{{ $barang->nama_barang }}</td>
                <td>{{ $barang->keterangan }}</td>
                <td>{{ $barang->merk_barang }}</td>
                <td>{{ $barang->jumlah_barang }}</td>
                <td>{{ $barang->kondisi_awal }}</td>
                <td>{{ $barang->kondisi_akhir }}</td>
                <td>{{ $barang->tanggal_peminjaman }}</td>
                <td>{{ $barang->tanggal_pengembalian }}</td>
                <td>{{ $barang->alamat }}</td>
                <td>{{ $barang->nomor_telepon }}</td>
                <td align="center">
                  <a class="btn btn-sm btn-primary" href="{{ url('barang/upkembali', $barang->id_peminjam) }}"><i class="fas fa-check-circle"></i>
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
@endsection