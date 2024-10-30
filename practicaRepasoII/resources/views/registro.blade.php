@extends('layouts.navbar')

@section('title', 'Registro de Libro')

@section('content')
    <h1>Registro de Nuevo Libro</h1>
    <form action="#" method="POST" class="mt-4">
        @csrf
        <div class="form-group">
            <label for="isbn">ISBN</label>
            <input type="text" class="form-control" id="isbn" name="isbn" required>
        </div>
        <div class="form-group">
            <label for="titulo">Título</label>
            <input type="text" class="form-control" id="titulo" name="titulo" required>
        </div>
        <div class="form-group">
            <label for="autor">Autor</label>
            <input type="text" class="form-control" id="autor" name="autor" required>
        </div>
        <div class="form-group">
            <label for="paginas">Páginas</label>
            <input type="number" class="form-control" id="paginas" name="paginas" required>
        </div>
        <div class="form-group">
            <label for="anio">Año</label>
            <input type="number" class="form-control" id="anio" name="anio" required>
        </div>
        <div class="form-group">
            <label for="editorial">Editorial</label>
            <input type="text" class="form-control" id="editorial" name="editorial" required>
        </div>
        <div class="form-group">
            <label for="email">Email de Editorial</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <button type="submit" class="btn btn-primary">Registrar Libro</button>
    </form>
@endsection
