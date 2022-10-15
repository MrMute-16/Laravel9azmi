@extends('layout.conten')

@section('content')
<style>
    .btn{
        float:right;
    }
</style>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<div class="container">
<div class="container-fluid">

    
    
    <h2>Input Data</h2>
    <a href="/barang" class="btn btn-warning btn-sm">Back</a>
    <br>    
    <form action="/barang/store" method="post">
        @csrf
        <label for="">Id Jenis</label> 
        <input class="form-control" type="number" name="id_jenis" required="required" >

        
        <label for=""> Id Barang</label>
        <input class="form-control" type="number" name="id_barang" required="required" >
        
        
        <label for=""> Nama Jenis</label>
         <input class="form-control" type="text" name="nama_jenis" required="required" >
        
         
         <label for="">Nama</label> 
         <input class="form-control" type="text" name="nama" required="required" >
        
         
         <label for=""> Harga</label>
         <input class="form-control" type="number" name="harga" required="required" >
    
         
         <label for=""> Stok</label>
         <input class="form-control" type="number" name="stok" required="required" >
         <br>
         <input type="submit" value="simpan" class="btn btn-success btn-sm">
         <br>
         
        </form>
        
        
    </div>
    </div>
    @endsection