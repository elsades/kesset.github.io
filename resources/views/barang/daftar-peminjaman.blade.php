@extends('template/admin')
@section('content')
<section class="content">

<!-- Default box -->
<div class="card mt-2">
  <div class="card-header">
    <h3 class="card-title">DAFTAR PEMINJAMAN</h3>
  </div>
  <div class="card-body">
    {{-- <form action="{{url('barang/pengembalian')}}" method="POST" autocomplete="off"> --}}
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
                <th>Kondisi Barang</th>
                <th>Tanggal Peminjaman</th>
                <th>Tanggal Pengembalian</th>
                <th>Alamat</th>
                <th>Nomor Telepon</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
          @foreach($barang as $daftar_peminjaman)
          <tr>
                <td>{{ $daftar_peminjaman->id_peminjam }}</td>
                <td>{{ $daftar_peminjaman->nama_peminjam }}</td>
                <td>{{ $daftar_peminjaman->id_barang }}</td>
                <td>{{ $daftar_peminjaman->nama_barang }}</td>
                <td>{{ $daftar_peminjaman->keterangan }}</td>
                <td>{{ $daftar_peminjaman->merk_barang }}</td>
                <td>{{ $daftar_peminjaman->jumlah_barang }}</td>
                <td>{{ $daftar_peminjaman->kondisi_barang }}</td>
                <td>{{ $daftar_peminjaman->tanggal_peminjaman }}</td>
                <td>{{ $daftar_peminjaman->tanggal_pengembalian }}</td>
                <td>{{ $daftar_peminjaman->alamat }}</td>
                <td>{{ $daftar_peminjaman->nomor_telepon }}</td>
                <td align="center">
                  <button id="barang-h-{{ $daftar_peminjaman->id_peminjam }}" data-href="{{ url('barang/pengembalian', $daftar_peminjaman->id_peminjam)}}" onclick="konfirmasi({{ $daftar_peminjaman->id_peminjam}})" class="btn btn-sm btn-primary"  type="button"><i class="fa fa-check-circle"></i></button>
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
  function konfirmasi(id){
        Swal.fire({
      title: 'Apakah Anda Yakin?',
      text: "Data Akan TerVerifikasi",
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Ya',
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