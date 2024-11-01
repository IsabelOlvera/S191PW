<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @vite(['resources/js/app.js'])
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
        
        body {
            background-color: #f4ecd8;
            color: #5a4534;
            font-family: 'Times New Roman', serif;
        }
        
        
        .navbar {
            background-color: #e8d3b5;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 1rem 1.5rem;
        }
        .navbar-brand, .nav-link {
            color: #5a4534 !important;
            font-weight: bold;
            font-size: 1.2rem;
        }
        .navbar-brand:hover, .nav-link:hover {
            color: #7d5e2a !important;
        }
        .navbar-toggler {
            border-color: #7d5e2a;
        }
        
        /* Contenedor principal */
        .container {
            max-width: 900px;
            margin: 0 auto;
            padding-top: 20px;
            padding-bottom: 80px;
        }
        
        /* Footer estilo vintage */
        footer {
            background-color: #e8d3b5; 
            color: #5a4534;
            text-align: center;
            padding: 1rem;
            font-size: 0.9rem;
            border-top: 2px solid #d9c7a3;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
        footer p {
            margin: 0;
            font-style: italic;
        }
    </style>
</head>
<body>
    <!-- Barra de navegación -->
    <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="#">La Biblioteca de la Media Noche</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('rutaprincipal')}}">Principal</a>
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
    <footer>
        <p>La Biblioteca de la Media Noche &copy; {{ date('Y') }}</p>
    </footer>
</body>
</html>

