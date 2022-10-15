@extends('layout.conten')

@section('content')
<style>
    .btn{
        float:right;
    }
</style>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<div class="container">

    <h2>Detail</h2>
    <a href="/transaksi" class="btn btn-warning btn-sm">Back</a>
    @foreach($data as $bar)
    <form  method="post">

                <label>Id Barang</label>
                <br>
                 <input class="form-control" type="text"  required="required" value="{{ $bar->barang_id }}" readonly>
            
            
                <label>Tanggal Transaksi</label>
                <input class="form-control" type="text" required="required" value="{{ $bar->tgl_trx }}" readonly>
            
            
                <label>id User</label>
                <input class="form-control" type="text" required="required" value="{{ $bar->id_user }}" readonly>
            
            
                <label>Username</label>
                <input class="form-control" type="text" required="required" value="{{ $bar->username }}" readonly>
            
            
                <label>Nama Barang</label>
                <input class="form-control" type="text" required="required" value="{{ $bar->nama_barang }}" readonly>
            
            
                <label>Harga</label>
                <input class="form-control" type="number" required="required" value="{{ $bar->harga }}" readonly>
            
            
                <label>Bayar</label>
                <input class="form-control" type="number" required="required" value="{{ $bar->stok  }}" readonly>
            
    </form>
    @endforeach
</div>
@endsection