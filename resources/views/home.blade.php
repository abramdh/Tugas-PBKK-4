@extends('master')
@section('content')
<!DOCTYPE html>
<html>
<head>
    <title>Home Page</title>
</head>
<body>
    <div class="card mt-5">
        <div class="card-header">
          <h1>Halo Mahasiswa!!!</h1>
        </div>
        <div class="card-body">
            <h3>Selamat Datang di Portal Universitas Bengkulu</h3>
          <p class="card-text">klik link berikut untuk menambah daftar Fakultas dan Program Studi</p>
          <a href="{{ route('faculty.create') }}" class="btn btn-primary">Tambah Daftar Fakultas</a><br>
          <a href="{{ route('study_programs.create') }}" class="btn btn-primary mt-3">Tambah Daftar Program Studi</a>
        </div>
    </div>
</body>
</html>
@endsection