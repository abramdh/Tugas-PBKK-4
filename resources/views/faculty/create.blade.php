@extends('master')
@section('content')
<div class="card">
    <div class="card-header mt-3">
      Data Fakultas
    </div>
    <div class="card-body">
        <form action="{{ route('faculty.store') }}" method="POST">
            <button href="{{ route('faculty.index') }}" class="btn btn-success mb-2 mt-2">Lihat Data Fakultas</button>
            @csrf
            <div>
                <label for="name">Nama Fakultas:</label>
                <input type="text" name="name" value="{{ old('name') }}" />
                <br>
                @error('name')
                    <p>{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="email">Email:</label>
                <input type="text" name="email" value="{{ old('email') }}" />
                <br>
                @error('email')
                    <p>{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="dean">Dekan:</label>
                <textarea name="dean">{{ old('dean') }}</textarea>
                <br>
                @error('dean')
                    <p>{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="description">Deskripsi:</label>
                <textarea name="description">{{ old('description') }}</textarea>
                <br>
                @error('description')
                    <p>{{ $message }}</p>
                @enderror
            </div>
            <div>
                <input type="submit" value="Simpan">
            </div>
            <br>
        </form>
    </div>
  </div>

@endsection