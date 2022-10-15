@extends('layout.conten')

@section('content')

<style>
    .btn{
        float:right;
    }
</style>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<div class="container">


    <h2>Edit Data</h2>
    <a href="/barang" class="btn btn-warning btn-sm">Back</a>
    @foreach($data as $bar)
    <form action="/barang/update" method="post">
        @csrf
        <input class="form-control" type="hidden" name="id" value="{{ $bar->id }}" required="required" >
 
            
                <label>Id Jenis</label>
                <input class="form-control" type="number" name="id_jenis" required="required" value="{{ $bar->id_jenis }}" readonly>
            
            
                <label>Id Barang</label>
                 <input class="form-control" type="number" name="id_barang" required="required" value="{{ $bar->barang_id }}">
            
            
                <label>Nama Jenis</label>
                <input class="form-control" type="text" name="nama_jenis" required="required" value="{{ $bar->nama_jenis }}">
            
            
                <label>Nama</label>
                <input class="form-control" type="text" name="nama" required="required" value="{{ $bar->nama_barang }}">
            
            
                <label>Harga</label>
                <input class="form-control" type="number" name="harga" required="required" value="{{ $bar->harga_barang }}">
            
            
                <label>Stok</label>
                <input class="form-control" type="number" name="stok" required="required" value="{{ $bar->stok  }}">
        <br>
                 <input type="submit" value="simpan" class="btn btn-success btn-sm">
            
        </table>

    @endforeach
</div>
@endsection