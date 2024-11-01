@extends('layouts.navbar')

@section('title', 'Registro de Libro')

@section('content')
<style>
    /* Estilos vintage para el formulario */
    .form-container {
        border-radius: 10px;
        background-color: #fff8e1;
        box-shadow: 8px 8px 15px rgba(109, 85, 54, 0.2), -8px -8px 15px rgba(214, 193, 155, 0.2);
        padding: 30px;
        max-width: 900px;
        margin: 0 auto;
        font-family: 'Times New Roman', serif;
        color: #5a4534;
        margin-bottom: 100px;
    }
    .form-container h2 {
        font-size: 2.5rem;
        color: #5a4534;
        border-bottom: 2px solid #d9c7a3;
        padding-bottom: 10px;
    }
    .form-label {
        font-weight: bold;
        color: #7d5e2a;
    }
    .form-control {
        border: 1px solid #c0a98e;
        border-radius: 0;
        background-color: #fdf4e3;
    }
    .form-control:focus {
        border-color: #a5856e;
        box-shadow: none;
    }
    .btn-vintage {
        background-color: #a5856e;
        color: #fff;
        font-weight: bold;
        border: none;
        border-radius: 0;
        padding: 10px 20px;
        box-shadow: 2px 2px 6px rgba(0, 0, 0, 0.1);
    }
    .btn-vintage:hover {
        background-color: #7d5e2a;
        color: #fff;
    }
    .image-container img {
        border-radius: 10px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.2);
    }
</style>

<div class="form-container">
    <h2>{{__('Registro de Libro')}}</h2>
    @if(session('exito'))
        <script>
            Swal.fire({
                title: "GUARDADO",
                text: '{{ session('exito') }}',
                icon: "success"
            });
        </script>
    @endif

    <div class="row">
        <div class="col-md-6">
            <form method="POST" action="{{ route('registronew') }}">
                @csrf
                <div class="mb-3">
                    <label for="isbn" class="form-label">{{__('ISBN:')}}</label>
                    <input type="text" class="form-control" name="isbn" value="{{ old('isbn') }}">
                    <small class="text-danger">{{ $errors->first('isbn') }}</small>
                </div>
                <div class="mb-3">
                    <label for="titulo" class="form-label">{{__('Título:')}}</label>
                    <input type="text" class="form-control" name="titulo" value="{{ old('titulo') }}">
                    <small class="text-danger">{{ $errors->first('titulo') }}</small>
                </div>
                <div class="mb-3">
                    <label for="autor" class="form-label">{{__('Autor:')}}</label>
                    <input type="text" class="form-control" name="autor" value="{{ old('autor') }}">
                    <small class="text-danger">{{ $errors->first('autor') }}</small>
                </div>
                <div class="mb-3">
                    <label for="paginas" class="form-label">{{__('Páginas:')}}</label>
                    <input type="number" class="form-control" name="paginas" value="{{ old('paginas') }}">
                    <small class="text-danger">{{ $errors->first('paginas') }}</small>
                </div>
                <div class="mb-3">
                    <label for="anio" class="form-label">{{__('Año:')}}</label>
                    <input type="number" class="form-control" name="anio" value="{{ old('anio') }}">
                    <small class="text-danger">{{ $errors->first('anio') }}</small>
                </div>
                <div class="mb-3">
                    <label for="editorial" class="form-label">{{__('Editorial:')}}</label>
                    <input type="text" class="form-control" name="editorial" value="{{ old('editorial') }}">
                    <small class="text-danger">{{ $errors->first('editorial') }}</small>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">{{__('Email de Editorial:')}}</label>
                    <input type="email" class="form-control" name="email" value="{{ old('email') }}">
                    <small class="text-danger">{{ $errors->first('email') }}</small>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-vintage">{{__('Registrar Libro')}}</button>
                </div>
            </form>
        </div>
        
        <div class="col-md-6 image-container">
            <img src="{{ asset('images/bb.jpg') }}" alt="Imagen de Biblioteca" style="width: 100%;">
        </div>
    </div>
</div>
@endsection
