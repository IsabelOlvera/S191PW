@extends('layouts.navbar')

@section('title', 'Inicio')

@section('content')
<style>
    /* Estilos Vintage */
    body {
        background-color: #f4ecd8;
        font-family: 'Times New Roman', serif;
        min-height: 100vh;
        display: flex;
        flex-direction: column;
    }
    .content-container {
        max-width: 800px;
        margin: 0 auto;
        padding: 20px;
        border: 1px solid #d9c7a3;
        background-color: #fff8e1;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        margin-bottom: 100px; /* Espacio para el footer */
    }
    h1 {
        font-size: 3rem;
        font-weight: bold;
        color: #5a4534;
        text-align: center;
        border-bottom: 2px solid #d9c7a3;
        padding-bottom: 10px;
    }
    .news-card {
        border: none;
        margin-top: 20px;
        background-color: #fdf4e3;
    }
    .news-card .card-header {
        background-color: #e8d3b5;
        color: #5a4534;
        font-weight: bold;
        font-size: 1.5rem;
        text-align: center;
        border-bottom: 1px solid #d9c7a3;
    }
    .news-card .card-title {
        font-size: 1.3rem;
        font-weight: bold;
        color: #5a4534;
    }
    .news-card .card-body {
        color: #6b5544;
        font-size: 1.1rem;
        line-height: 1.6;
    }
    .btn-vintage {
        background-color: #c0a98e;
        color: #fff;
        font-weight: bold;
        border: none;
        border-radius: 0;
        box-shadow: 2px 2px 6px rgba(0, 0, 0, 0.1);
    }
    .btn-vintage:hover {
        background-color: #a5856e;
        color: #fff;
    }
    .news-image {
        width: 400px;
        height: 300px;
        border-bottom: 1px solid #d9c7a3;
        margin-bottom: 15px;
    }
</style>

<div class="content-container">
    <h1>{{__('Seller de la Biblioteca')}}</h1>
    <div class="card news-card">
        <div class="card-header">{{__('Noticia Literaria')}}</div>
        <div class="card-body">
            <img src="{{ asset('images/medianoche.jpg') }}" alt="Imagen de la noticia" class="news-image">
            <h5 class="card-title">{{__('La Biblioteca de la Medianoche')}}</h5>
            <p>
                {{__('¿Por qué “La Biblioteca de la Medianoche”? Este título del libro de Matt Haig tal vez fue escogido por el autor a partir de su consideración de que entre la vida y la muerte hay una biblioteca. La protagonista de la novela, Nora Seed, aparece a unas horas de su muerte en una biblioteca: La biblioteca de la medianoche. Un lugar que contiene infinitos libros, que se convierten en infinitas opciones de transitar por otras nuevas vidas que quizá en su vida real no vivió porque se sentía frustrada o creía que nadie la necesitaba. Cada libro de esa biblioteca, le brinda una nueva oportunidad que le permite hacer las cosas bien. Frente a la depresión de Nora, el autor nos va llevando hacia una reflexión personal sobre nuestra propia vida. Y deja muy claro que cada decisión que tomemos a lo largo de ella, por insignificante que sea, influirá por siempre, aunque en el transitar no hagamos altos en el camino para reflexionar sobre nuestros arrojos, y no seamos conscientes de las consecuencias.')}}
            </p>
            <a href="https://vanguardia.com.mx/opinion/sobre-la-biblioteca-de-la-medianoche-GB1399877" target="_blank" class="btn btn-vintage">Ver más</a>
        </div>
    </div>
</div>
@endsection
