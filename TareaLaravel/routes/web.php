<?php

use Illuminate\Support\Facades\Route;

/*Route::get('/', function () {
    return view('clientes');
});
*/

Route::view('/', 'inicio')->name('rutainicio');

Route::view('/formulario', 'formulario')->name('rutaformulario');

Route::view('/clientes', 'clientes')->name('consultaclientes');

Route::view('/component', 'componentes')->name('rutacomponent');
