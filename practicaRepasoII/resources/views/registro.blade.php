@extends('layouts.navbar')

@section('title', 'Registro de Libro')

@section('content')
    <div class="container mt-5 col-md-6">
        @session ('exito')
        <script>
            Swal.fire({
                title: "GUARDADO",
                text: '{{$value}}',
                icon: "success"});
        </script>
        @endsession
        <div class="card font-monospace">
            <div class="card-header fs-5 text-center text-primary">
                Registro de Libro
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('registronew') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="isbn" class="form-label">ISBN:</label>
                        <input type="text" class="form-control" name="isbn" value="{{ old('isbn') }}" required>
                        <small class="text-danger">{{ $errors->first('isbn') }}</small>
                    </div>
                    <div class="mb-3">
                        <label for="titulo" class="form-label">Título:</label>
                        <input type="text" class="form-control" name="titulo" value="{{ old('titulo') }}" required>
                        <small class="text-danger">{{ $errors->first('titulo') }}</small>
                    </div>
                    <div class="mb-3">
                        <label for="autor" class="form-label">Autor:</label>
                        <input type="text" class="form-control" name="autor" value="{{ old('autor') }}" required>
                        <small class="text-danger">{{ $errors->first('autor') }}</small>
                    </div>
                    <div class="mb-3">
                        <label for="paginas" class="form-label">Páginas:</label>
                        <input type="number" class="form-control" name="paginas" value="{{ old('paginas') }}" required>
                        <small class="text-danger">{{ $errors->first('paginas') }}</small>
                    </div>
                    <div class="mb-3">
                        <label for="anio" class="form-label">Año:</label>
                        <input type="number" class="form-control" name="anio" value="{{ old('anio') }}" required>
                        <small class="text-danger">{{ $errors->first('anio') }}</small>
                    </div>
                    <div class="mb-3">
                        <label for="editorial" class="form-label">Editorial:</label>
                        <input type="text" class="form-control" name="editorial" value="{{ old('editorial') }}" required>
                        <small class="text-danger">{{ $errors->first('editorial') }}</small>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email de Editorial:</label>
                        <input type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                        <small class="text-danger">{{ $errors->first('email') }}</small>
                    </div>
                    <div class="card-footer text-center">
                        <button type="submit" class="btn btn-primary">Registrar Libro</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
