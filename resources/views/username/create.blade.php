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
    <a href="/username" class="btn btn-warning btn-sm">Back</a>
    <br>
    <form action="/username/store" method="post">
     @csrf
     <table>
        
            <label>Id User</label>
            <input class="form-control" type="number" name="id_user" required="required" placeholder="id User">
        
        
            <label>Nama</label>
            <input class="form-control" type="text" name="nama" required="required" placeholder="Nama">
        
        
            <label>Username</label>
            <input class="form-control" type="text" name="username" required="required" placeholder="Username">
        
        
            <label>Password</label>
            <input class="form-control" type="text" name="password" required="required" placeholder="Password">
        
        
            <label>Akses</label>
             <input class="form-control" type="text" name="akses" required="required" placeholder="Akses">
        
         
            
            <input type="submit" value="simpan" class="btn btn-success btn-sm">
         
</table>
</form>
</div>
@endsection