
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
    <a href="/transaksi" class="btn btn-warning btn-sm">Back</a>
    <br>
    @foreach($data as $bar)
    <form action="/transaksi/update" method="post">
        @csrf
        <input class="form-control" type="hidden" name="id" value="{{ $bar->id }}" required="required" >

            
                <label>Id Transaksi</label>
                <input class="form-control" type="number" name="id_transaksi" required="required" value="{{ $bar->id_transaksi }}" readonly>
            
            
                <label>Id Barang</label>
                
                    <select name="id_barang" class="form-control" required="required">
                        <option value="">{{ $bar->nama_barang }}</option>
                        @foreach($barang as $barangs)
                        <option value="{{ $barangs->barang_id }}">{{ $barangs->nama_barang }}</option>
                        @endforeach
                    </select>
                
            
            
                <label>Tanggal Transaksi</label>
                <input class="form-control" type="date" name="tgl_trx" required="required" value="{{ $bar->tgl_trx }}">
            
            
                <label>Id Data</label>
                <input class="form-control" type="number" name="id_dt" required="required" value="{{ $bar->id_dt }}">
            
            
                <label>Id User</label>
                
                    <select name="id_user" class="form-control" required="required">
                        <option value="">{{ $bar->username }}</option>
                        @foreach($username as $user)
                        <option value="{{ $user->id_user }}">{{ $user->username }}</option>
                        @endforeach
                    </select>
                
            
            
                <label>Harga</label>
                <input class="form-control" type="number" name="harga" required="required" value="{{ $bar->harga }}">
            
            
                <label>Jumlah</label>
                <input class="form-control" type="number" name="jml" required="required" value="{{ $bar->jml}}">
            
            
                <label>Total</label>
                 <input class="form-control" type="number" name="total" required="required" value="{{ $bar->total }}">
            
            
               <label>Total Bayar</label>
                    <input class="form-control" type="number" name="total_bayar" required="required" value="{{ $bar->total_bayar }}">
                
                
                    <label>Bayar</label>
                    <input class="form-control" type="number" name="bayar" required="required" value="{{ $bar->bayar }}">
            
            
                
                 <input type="submit" value="simpan" class="btn btn-success btn-sm">
                    @endforeach
    </form>
    @endsection