<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class convertirController extends Controller
{
    public function convertir(Request $request)
    {
        $valor = $request->input('valorentrada');
        $unidad = $request->input('unidadconversion');
        $result = '';

        switch ($unidad) {
            case 'MBaGB':
                $result = $valor . ' MB se traduce como ' . ($valor / 1024) .'GB';
                break;
            case 'GBaMB':
                $result = $valor . ' GB se traduce como ' . ($valor * 1024) .'MB';
                break;
            case 'GBaTB':
                $result = $valor . ' GB se traduce como ' . ($valor / 1024) .'TB';
                break;
            case 'TBaGB':
                $result = $valor . ' TB se traduce como ' . ($valor * 1024) .'GB';
                break;
        }
        //return view('Repaso1', ['result' => $result]);
        return response()->json(['result' => $result]);
    }
}
