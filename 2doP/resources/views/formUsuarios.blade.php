<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/js/app.js'])

</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <h1 class="text-center text-primary mt-5 mb-4">Registro de usuarios</h1>

    <div class="container  col-md-4">
        @session ('exito')
        <script>
            Swal.fire({
                title: "Respuesta del servidor!",
                text: '{{$value}}',
                icon: "success"});
        </script>
        @endsession

        <form method="POST" action="{{ route('inicio') }}">
            @csrf
            <div class="mb-3">
                <label for="correo" class="form-label">Correo: </label>
                <input type="text" class="form-control" name="correo" value="{{old('correo')}}">
                <small class="text-danger">{{$errors->first('correo')}}</small>
            </div>
            <div class="mb-3">
                <label for="contraseña" class="form-label">Contraseña: </label>
                <input type="password" name="contraseña" class="form-control" value="{{old('contraseña')}}">
                <small class="text-danger">{{ $errors->first('contraseña') }}</small>
            </div>
            <div class="mb-3">
                <label for="edad" class="form-label">Edad: </label>
                <input type="text" class="form-control" name="edad" value="{{old('edad')}}">
                <small class="text-danger">{{$errors->first('edad')}}</small>
            </div>
            <div class="card-footer text-muted">
                <div class="d-grid gap-2 mt-2 mb-1">
                    <button type="submit" class="btn btn-danger btn-sm"> Guardar Usuario</button>
                </div>
            </div>
        </form>


</div>


</body>
</html>