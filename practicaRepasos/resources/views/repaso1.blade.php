<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/js/app.js'])
    <title>Repaso 1</title>
    <style>
        body, html {
            text-align: center;
            padding: 50px;
        }
        .container {
            font-family: Cambria;
            border: 1px solid #8b077c;
            padding: 20px;
            border-radius: 10px;
            background-color: #f1bffa;
        }
        button {
            background-color: #e69fdd;
            border: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>REPASO 1</h1>
        <form method="POST" action="/convertir">
            @csrf
            <label for="valorentrada">Ingresa el valor de lo que deseas convertir: </label>
            <input type="number" name="valorentrada">
            <br>
            <label for="unidadconversion">Unidades en que dseas hacer la conversión: </label>
            <select name="unidadconversion">
                <option value="MBaGB">MB a GB</option>
                <option value="GBaMB">GB a MB</option>
                <option value="GBaTB">GB a TB</option>
                <option value="TBaGB">TB a GB</option>
            </select>
            <br>
            <br>
            <button type="submit">Convertir</button>
        </form>
        @if (isset($result))
        <br>
        <br>
        <p id="result"><strong>{{ $result }}</strong></p>
        @endif
    </div>
</body>
</html>