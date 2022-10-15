@extends('layout.conten')

@section('content')

</style>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>user</title>
</head>
<body>
    <div class="container">
        <center>
            <h1>Data User</h1>
            <br>
        </center>
            <br>
            <a href="/username/create" class="btn btn-primary">+ Tambah data</a>
            <br>
            <center>
            <table class="table table-bordered" border="1">
                <tr>
                    <th>ID USER</th>
                    <th>NAMA</th>
                    <th>USERNAME</th>
                    <th>PASSWORD</th>
                    <th>AKSES</th>
                    <th colspan="2">ACTION</th>
                </tr>
                @foreach($data as $bar)
                <tr>
                    <td>{{ $bar->id_user }}</td>
                    <td>{{ $bar->nama }}</td>
                    <td>{{ $bar->username }}</td>
                    <td>{{ $bar->password }}</td>
                    <td>{{ $bar->akses }}</td>
                    <td><a href="/username/edit{{ $bar->id }}" class="btn btn-success btn-sm">Edit</a></td>
                    <td><a href="/username/destroy{{ $bar->id }}" class="btn btn-danger btn-sm">Delete</a></td>
                </tr>
                @endforeach
            </table>
        </center>
    </div>
    
</body>
</html>
@endsection