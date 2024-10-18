<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/js/app.js'])
    <title>Inicio</title>
    <style>
        body, html {
            text-align: center;
            padding: 30px;
        }
        .container {
            font-family: Cambria;
            border: 1px solid #c75dc9;
            padding: 20px;
            border-radius: 10px;
            background-color: #f0f0f0dc;
        }
        img {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class='container'>
        <img src="{{asset('img/logoupq.png')}}" alt="Logo de la Universidad" width="200">
        <h1><strong>Universidad Polítecnica de Quéretaro</strong></h1>
        <h3>Ingeniería en Sistemas Computacionales</h3>
        <br>
        <br>
        <h4><strong>PRÁCTICA DE REPASO 1</strong></h4>
        <a href="/repaso1" class="btn btn-primary">REPASO 1</a>
        <br>
        <h5>Programación Web</h5>
        <br>
        <p>
            <strong>Alumna: </strong> Villagran Olvera Catalina Isabel
            <br>
            <strong>Mtro. </strong> Iván Isay Guerra López
            <br>
            <br>
            <strong>Grupo: </strong> S-191 
            <br>
            <strong>Fecha: </strong> {{ date('d F Y') }}
        </p>
    </div>
</body>
</html>