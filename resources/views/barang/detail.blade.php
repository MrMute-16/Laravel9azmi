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
    <a href="/barang" class="btn btn-warning btn-sm">Back</a>
    <br>
    @foreach($data as $bar)
    <form  method="post">
            <label for=""> Id Jenis</label>   
                <input class="form-control" type="number" required="required" value="{{ $bar->id_jenis }}" readonly>
            
            
            <label for="">Id Barang</label>    
                 <input class="form-control" type="text"  required="required" value="{{ $bar->barang_id }}" readonly>
            
            
            <label for="">Nama Jenis</label>    
                <input class="form-control" type="text" required="required" value="{{ $bar->nama_jenis }}" readonly>
            
            
            <label for=""> nama</label>   
                <input class="form-control" type="text" required="required" value="{{ $bar->nama_barang }}" readonly>
            
            
            <label for=""> Harga</label>   
                <input class="form-control" type="number" required="required" value="{{ $bar->harga_barang }}" readonly>
            
            
             <label for="">Stok</label>   
                <input class="form-control" type="number" required="required" value="{{ $bar->stok  }}" readonly>
            
        
    </form>
    @endforeach
</center>
</div>
@endsection