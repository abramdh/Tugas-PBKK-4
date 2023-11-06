@extends('master')
@section('content')
<a href="{{ route('study_programs.index') }}" class="btn btn-outline-primary m-4">Lihat Data Program Studi di Universitas Bengkulu</a>
    <div class="card-header">
        Program Studi
    </div>
    <div class="card-body">
            <form action="{{ route('study_programs.store') }}" method="POST">
                @csrf
                <div>
                    Nama Program Studi:
                    <input class="form-control" type="text" name="name" value="{{ old('name') }}" />
                    <br>

                    @error('name')
                        <p>{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    Fakultas:
                    <select name="faculty_id" class="form-select">
                        @foreach ($faculties as $faculty)
                            <option value="{{ $faculty->id }}">{{ $faculty->name }}</option>
                        @endforeach
                    </select> 
                    <br>
                    @error('faculty')
                        <p>{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    Jenjang:
                    <textarea class="form-control" name="degree_level">{{ old('degree_level') }}</textarea>
                    <br>
                    @error('degree_level')
                        <p>{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    Akreditasi:
                    <textarea class="form-control" name="accreditation_status">{{ old('accreditation_status') }}</textarea>
                    <br>
                    @error('accreditation_status')
                        <p>{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    Deskripsi:
                    <textarea class="form-control" name="description">{{ old('description') }}</textarea>
                    <br>
                    @error('description')
                        <p>{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    Email:
                    <textarea class="form-control" name="email">{{ old('email') }}</textarea>
                    <br>
                    @error('email')
                        <p>{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <input class="btn btn-primary" type="submit" value="Simpan">
                </div>
                <br>
            </form>
    </div>
</div>
@endsection
