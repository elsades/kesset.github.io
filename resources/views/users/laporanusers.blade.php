@extends('template/user1')
@section('content')
<section class="content">

<!-- Default box -->
<div class="card mt-2">
  <div class="card-header">
    <h3 class="card-title">LAPORAN</h3>
  </div>
  <div class="card-body">
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
          </tr>  
          @endforeach
        </tbody>
    </table>
    <div>
      <a class="btn btn-sm btn-secondary" href="{{ url('user1') }}"><i class="fa fa-chevron-left"></i> KEMBALI </a>
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