<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorLibro;

class registroController extends Controller
{
    public function registro()
    {
        return view('registro');
    }

    public function new(validadorLibro $request)
    {
        // Redirecciona con mensaje de éxito en la sesión
        $titulo = $request->input('titulo');
        session()->flash('exito', "Todo correcto: Libro ". $titulo. " guardado.");
        return to_route('rutaregistro');
    }
}
