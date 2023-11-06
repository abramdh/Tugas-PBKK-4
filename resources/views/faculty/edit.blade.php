@extends('master')
@section('content')


    <div class="card text-left mt-3">
        <div class="card-header">
          Edit Fakultas
        </div>
        <div class="card-body">
            <div>
                <form action="{{ route('faculty.update', $Faculty->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <label for="name">Nama Fakultas:</label>
                    <input class="form-control" type="text" name="name" value="{{ old('name', $Faculty->name) }}" />
                    <br>
                    @error('name')
                        <p>{{ $message }}</p>
                    @enderror
                    <div>
                        <label for="email">Email:</label>
                        <input type="text" class="form-control" name="email" value="{{ old('email', $Faculty->email) }}"  />
                        <br>
                        @error('email')
                            <p>{{ $message }}</p>
                        @enderror
                    </div>
                
                    <div>
                        <label for="dean">Dekan:</label>
                        <input type="text" class="form-control " name="dean" value="{{ old('dean', $Faculty->dean) }}">
                        <br>
                        @error('dean')
                            <p>{{ $message }}</p>
                        @enderror
                    </div>
                
                    <div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Deskripsi</label>
                            <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="3">{{ old('description', $Faculty->description) }}</textarea>
                        </div>
                        <br>
                        @error('description')
                            <p>{{ $message }}</p>
                        @enderror
                    </div>
                
                    <div>
                        <input type="submit" value="Simpan" class="btn btn-primary">
                    </div>
                
                    <br>
                </form>
            </div>
        </div>
        <div class="card-footer text-muted">
          <?php echo date('D - M - Y') ?>
        </div>
      </div>
   

    
@endsection