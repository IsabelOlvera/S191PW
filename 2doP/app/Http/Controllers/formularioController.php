<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\formularioRequest;

class RegistroController extends Controller
{
    public function create()
    {
        return view('formUsuarios');
    }

    public function store(formularioRequest $request)
    {
        return redirect()->route('/');
    }
}

