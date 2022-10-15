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
    <a href="/username" class="btn btn-warning btn-sm">Back</a>
    @foreach($data as $bar)
    <form action="/username/update" method="post">
        @csrf
        <input class="form-control" type="hidden" name="id" value="{{ $bar->id }}" required="required" >
        <table>
            
                <label>Id User</label>
                 <input class="form-control" type="number" name="id_user" required="required" value="{{ $bar->id_user }}">
            
            
                <label>Nama</label>
                <input class="form-control" type="text" name="nama" required="required" value="{{ $bar->nama }}">
            
            
                <label>Username</label>
                <input class="form-control" type="text" name="username" required="required" value="{{ $bar->username }}">
            
            
                <label>Password</label>
                <input class="form-control" type="text" name="password" required="required" value="{{ $bar->password }}">
            
            
                <label>Akses</label>
                <input class="form-control" type="text" name="akses" required="required" value="{{ $bar->akses  }}">
            
            
                
                 <input type="submit" value="simpan" class="btn btn-success btn-sm">
            
        </table>
    </form>
    @endforeach

</div>
@endsection