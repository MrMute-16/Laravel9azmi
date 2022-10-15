@extends('layout.conten')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Barang</title>
</head>
<body>
    <div class="container">
        <center>
            <h1>Data Transaksi</h1>
        </center>
            <br>
            <a href="/transaksi/create" class="btn btn-primary">+ Tambah data</a>
            <br>
            <center>
            <table class="table table-bordered" border="1">
                <tr>
                    <th>ID BARANG</th>
                    <th>TANGGAL TRANSAKASI</th>
                    <th>USERNAME</th>
                    <th>TOTAL BAYAR</th>
                    <th>BAYAR</th>
                    <th colspan="">ACTION</th>
                </tr>
                @foreach($data as $bar)
                <tr>
                    <td>{{ $bar->barang_id }}</td>
                    <td>{{ $bar->tgl_trx }}</td>
                    <td>{{ $bar->username }}</td>
                    <td>{{ $bar->total_bayar }}</td>
                    <td>{{ $bar->bayar }}</td>
                    <td><a href="/transaksi/edit{{ $bar->id_transaksi }}" class="btn btn-success btn-sm">Edit</a></td>
                    <td><a href="/transaksi/destroy{{ $bar->id_transaksi }}" class="btn btn-danger btn-sm">Delete</a></td>
                    <td><a href="/transaksi/detail{{ $bar->id_transaksi }}" class="btn btn-light btn-sm">Detail</a></td>
                </tr>
                @endforeach
            </table>
        </center>
    </div>
    
</body>
</html>
@endsection