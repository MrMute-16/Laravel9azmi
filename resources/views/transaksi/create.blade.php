@extends('layout.conten')

@section('content')

<style>
    .btn{
        float:right;
    }
</style>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<div class="container">

    <h2>Input Data</h2>
    <br>
    <a href="/transaksi" class="btn btn-warning btn-sm">Back</a>
    <form action="/transaksi/store" method="post">
        @csrf
             <label>Id Transaksi</label>
             <input class="form-control" type="number" name="id_transaksi" required="required" >
         
            <label for=""> Id Barang</label>
                <select name="id_barang" class="form-control">
                    <option selected disabled>-Pilih-</option>
                    @foreach($barang as $bar)
                    <option value="{{ $bar->barang_id }}">{{ $bar->nama_barang }}</option>
                    @endforeach
                </select>
            <label>Tanggal Tranaskai</label>
            <input class="form-control" type="date" name="tgl_trx" required="required" >
        
        
            <label>Id Data</label>
           <input class="form-control" type="number" name="id_dt" required="required" >
       
        
            <label>Id User</label>
            
                <select name="id_user" class="form-control" required="required">
                    <option selected disabled>-Pilih-</option>
                    @foreach($username as $barr)
                    <option value="{{ $barr->id_user }}">{{ $barr->username }}</option>
                    @endforeach
                </select>
            
        
       
           <label>Harga</label>
           <input class="form-control" type="number" name="harga" required="required" >
       
       
           <label>Jumlah</label>
           <input class="form-control" type="number" name="jml" required="required" >
       
       
           <label>Total</label>
            <input class="form-control" type="number" name="total" required="required" >
       
        
            <label>Total Bayar</label>
            <input class="form-control" type="number" name="total_bayar" required="required" >
        
        
            <label>Bayar</label>
             <input class="form-control" type="number" name="bayar" required="required" >
        
         
            
            <input type="submit" value="simpan" class="btn btn-success btn-sm">
         
</table>
</form>
</div>
@endsection