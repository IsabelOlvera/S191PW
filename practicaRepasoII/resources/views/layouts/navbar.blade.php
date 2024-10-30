<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @vite(['resources/js/app.js'])
</head>
<body>
    <!-- Barra de navegación -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Biblioteca</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('rutaprincipal')}}">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('rutaregistro')}}">Registro de Libro</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Contenido principal -->
    <div class="container mt-4">
        @yield('content')
    </div>

    <!-- Pie de página -->
    <footer class="bg-light text-center py-3 mt-4">
        <p>Nombre de la Biblioteca &copy; {{ date('Y') }}</p>
    </footer>
</body>
</html>
