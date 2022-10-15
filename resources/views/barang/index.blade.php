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
            <h1>Data Barang</h1>
        </center>
            <br>
            <a href="/barang/create" class="btn btn-primary">+ Tambah data</a>
            <br>
            <center>
            <table class="table table-bordered" border="1">
                <tr>
                    <th>ID JENIS</th>
                    <th>ID BARANG</th>
                    <th>NAMA</th>
                    <th>HARGA</th>
                    <th>STOK</th>
                    <th colspan="3">ACTION</th>
                </tr>
                @foreach($data as $bar)
                <tr>
                    <td>{{ $bar->id_jenis }}</td>
                    <td>{{ $bar->barang_id }}</td>
                    <td>{{ $bar->nama_barang }}</td>
                    <td>{{ $bar->harga_barang }}</td>
                    <td>{{ $bar->stok }}</td>
                    <td><a href="/barang/edit{{ $bar->id_jenis }}" class="btn btn-success btn-sm">Edit</a></td>
                    <td><a href="/barang/destroy{{ $bar->id_jenis }}" class="btn btn-danger btn-sm">Delete</a></td>
                    <td><a href="/barang/detail{{ $bar->id_jenis }}" class="btn btn-light btn-sm">Detail</a></td>
                </tr>
                @endforeach
            </table>
        </center>
    </div>
    
</body>
</html>

@endsection