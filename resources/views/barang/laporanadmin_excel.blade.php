<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
    <?php
    header("Content-type: application/vnd-ms-excel");
    header("Content-Disposition: attachment; filename=laporan.xls")
    ?>
    <table border="1">
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
            <td>{{ $barang->nomor_telepon }}</td
        </tr>  
            @endforeach
        </tbody>
    </table>
</body>
</html>


