@extends('master')
@section('content')
    <h1 class="mt-2">DAFTAR FAKULTAS UNIVERSITAS BENGKULU</h1>
    <h2><a href="{{ route('faculty.create') }}" class="btn btn-outline-success">Tambah</a></h2>

    @if (session()->has('pesan'))
        <div style="color: rgb(0, 0, 0)">
            {{ session()->get('pesan') }}
        </div>
    @endif

    <table class="table table-striped table-hover">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Nama Fakultas</th>
                <th>Email</th>
                <th>Dekan</th>
                <th>Deskripsi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($faculties as $Faculty)
                <tr>
                    <td>{{ $Faculty->id }}</td>
                    <td>{{ $Faculty->name }}</td>
                    <td>{{ $Faculty->email }}</td>
                    <td>{{ $Faculty->dean }}</td>
                    <td>{{ $Faculty->description }}</td>
                    <td>
                        <a href="{{ route('faculty.show', $Faculty->id) }}" class="btn btn-primary">Lihat</a>
                        <a href="{{ route('faculty.edit', $Faculty->id) }}" class="btn btn-secondary">Edit</a>
                        <a href="{{ route('faculty.edit', $Faculty->id) }}" class="btn btn-danger" method="post" class="delete-form">Hapus</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    @endsection
