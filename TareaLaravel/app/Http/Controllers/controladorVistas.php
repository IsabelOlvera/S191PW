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
        //respuesta a la petición POST
        //return 'La info del cliente llego al controlador';

        //regresamos todo lo que se envia a la petición
        return $peticion->all();
        
        //muestra el ip de la petición
        //return $peticion->ip();

        //muestra la ruta de la petición
        //return $peticion->path();

        //muestra la url de la petición
        //return $peticion->url();
        

    }
}
