<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\formularioRequest;

class formularioController extends Controller
{
    public function create()
    {
        return view('formUsuarios');
    }

    public function store(formularioRequest $request)
    {
        $usuario=$request->input('correo');
        session()->flash('exito','Se guardo el usuario: '.$usuario);
        return to_route('inicio');
    }
}

