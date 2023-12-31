@extends("master")
@section('content')
<link rel = "stylesheet" href="{{asset ('css/list.css') }}">

<h2 class="text-center text-light bg-primary mt-2 p-4"> Daftar Program Studi</h2>
<h2><a href="{{ route('study_programs.create') }}" class="btn btn-outline-success">Tambah</a></h2>
<table class="table">
    @foreach ($study_programs as $study_program)
        <thead>
        <tr>
            <th scope="col"></th>
            <th class="col-4"> Aksi </th>
        </tr>
        </thead>
        <tbody>
            <tr>
                <th> Nama Program Studi : {{ $study_program->name }}
                    <br>
                    Fakultas : {{ $study_program->faculty->name}}
                    <br>
                    Jenjang : {{ $study_program->degree_level }}
                    <br>
                    Akreditasi : {{ $study_program->accreditation_status }}
                    <br>
                    Deskripsi : {{ $study_program->description }}
                    <br>
                    Email : {{ $study_program->email }} </th>
                <td>
                    <a href="{{ route('study_programs.show', $study_program->id) }}" class="btn btn-primary">Lihat</a>
                    <a href="{{ route('study_programs.edit', $study_program->id) }}" class="btn btn-secondary">Edit</a>
        
                    <form action="{{ route('study_programs.destroy', $study_program->id) }}" method="post" class="delete-form ">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Hapus" class="btn btn-danger">
                    </form>
                </td>
            </tr>
        </tbody>
    @endforeach
  </table>
{{--   
@foreach ($study_programs as $study_program)
    <div class="study_program-item">
        <div>
            Nama Program Studi : {{ $study_program->name }}
            <br>
            Fakultas : {{ $study_program->faculty->name}}
            <br>
            Jenjang : {{ $study_program->degree_level }}
            <br>
            Akreditasi : {{ $study_program->accreditation_status }}
            <br>
            Deskripsi : {{ $study_program->description }}
            <br>
            Email : {{ $study_program->email }}
        </div>
        <div>
            <a href="{{ route('study_programs.show', $study_program->id) }}" class="btn btn-primary">Lihat</a>
            <a href="{{ route('study_programs.edit', $study_program->id) }}" class="btn btn-secondary">Edit</a>

            <form action="{{ route('study_programs.destroy', $study_program->id) }}" method="post" class="delete-form ">
                @csrf
                @method('DELETE')
                <input type="submit" value="Hapus" class="btn btn-danger">
            </form>
        </div>
    </div>
    <hr> --}}
@endsection