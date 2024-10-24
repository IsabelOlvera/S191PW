<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controladorVistas extends Controller
{
    public function home(){
        return view('inicio');
    }

    public function insert(){
        return view('formulario');
    }

    public function select(){
        return view('clientes');
    }

    public function procesaCliente(Request $peticion){
    
        //regresamos todo lo que se envia a la petición
        //return $peticion->all();

        //redireccion usando la ruta
        //return redirect('/');

        //redireccion usando la ruta
        //return redirect()->route('consultaclientes');

        //redireccion al origen de la peticion
        //return back();

        //redireccion con valores adjunto (variables, arreglos)
        //$id=[['usuario'=>'1'],['usuario'=>'2']];
        //return view ('formulario', compact('id'));

        //redireccion enviando msj en session
        $usuario=$peticion->input('txtnombre');
        session()->flash('exito','Se guardo el usuario: '.$usuario);
        return to_route('rutaformulario');

    }
}

