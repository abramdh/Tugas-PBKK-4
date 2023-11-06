@extends('master')
@section('content')

  <div class="container">
    <h4>DATA PRODI</h4>
    <div class="study_program-info">
      <p>Nama Prodi : <span>{{ $study_program->name }}</span></p>
      <p>Fakultas : <span>{{ $study_program->faculty }}</span></p>
      <p>Jenjang : <span>{{ $study_program->degree_level }}</span></p>
      <p>Akreditasi : <span>{{ $study_program->accreditation_status }}</span></p>
      <p>Deskripsi: <span>{{ $study_program->description }}</span></p>
      <p>Email : <span>{{ $study_program->email }}</span></p>
    </div>
  </div>
</body>
</html>
  
@endsection
